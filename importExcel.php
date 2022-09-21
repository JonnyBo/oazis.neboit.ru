<?php

include_once('config/config.inc.php');
include_once('init.php');
include_once ('autoload.php');

set_time_limit(0);

class ExcelUpdate
{

    public $sheet;

    public $spreadsheet;

    public $worksheet;

    public function getFileExcel($file)
    {
        if (!file_exists($file)) {
            throw  new \Exception('Не найден файл!');
            return false;
        }
        return $file;
    }

    function parseExcel($file)
    {
        try {
            $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file);
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            $reader->setReadDataOnly(false);
            $spreadsheet = $reader->load($file);
            $sheet = $spreadsheet->getActiveSheet();
            $worksheet = $sheet->toArray();
            $highestRow = $sheet->getHighestDataRow();
            for ($i = 1; $i < $highestRow; $i++) {
                $row = $worksheet[$i];
                //print_r($row);
                if (!$category_id = $this->getCategoryId(trim($row[32]))) {
                    $category_id = $this->addCategory(trim($row[32]), 2);
                }
                $product_id = $this->addProduct(intval($row[29]), 'oasis', $row[0], 1, $row[95], [], 100, '', $category_id, [$category_id]);
                if ($product_id) {
                    for ($j = 2; $j < 29; $j++) {
                        if ($row[$j]) {
                            $this->addProductImage($product_id, trim($row[$j]));
                        }
                    }
                }
                if ($i > 10)
                    break;
            }
        } catch (Exception $e) {
            throw new Exception('Error Pars ' . $e->getMessage());
        }
    }

    public function getCategoryId($category) {
        try {
            $categories = Category::searchByName(1, trim($category), false);
            if ($categories && !empty($categories) && isset($categories[0]['id_category']) && intval($categories[0]['id_category']) > 0)
                return $categories[0]['id_category'];
            return false;
        } catch (Exception $e) {
            throw new Exception('Error find category ' . $e->getMessage());
        }
    }

    public function addCategory($category, $parent_id) {
        try {
            $object = new Category();
            $link = Tools::link_rewrite($category);
            $object->name = array();
            $object->link_rewrite = array();
            foreach (Language::getLanguages(false) as $lang) {
                $object->name[$lang['id_lang']] = $category;
                $object->link_rewrite[$lang['id_lang']] = $link;
            }
            $object->id_parent = $parent_id;
            $object->save();
            return $object->id;
        } catch (Exception $e) {
            throw new Exception('Error add category ' . $e->getMessage());
        }
    }

    public function addProduct($ean13, $ref, $name, $qty, $text, $features, $price, $imgUrl, $catDef, $catAll) {
        try {
            $product = new Product();              // Create new product in prestashop
            $product->ean13 = $ean13;
            $product->reference = $ref;
            $product->name = self::createMultiLangField(utf8_encode($name));
            $product->description = htmlspecialchars($text);
            $product->id_category_default = $catDef;
            $product->redirect_type = '301';
            $product->price = number_format($price, 6, '.', '');
            $product->minimal_quantity = 1;
            $product->show_price = 1;
            $product->on_sale = 0;
            $product->online_only = 0;
            $product->meta_description = '';
            $product->link_rewrite = self::createMultiLangField(Tools::str2url($name)); // Contribution credits: mfdenis
            $product->add();                        // Submit new product
            StockAvailable::setQuantity($product->id, null, $qty); // id_product, id_product_attribute, quantity
            if (!empty($catAll))
                $product->addToCategories($catAll);     // After product is submitted insert all categories

            // Insert "feature name" and "feature value"
            /*
            if (is_array($features)) {
                foreach ($features as $feature) {
                    $attributeName = $feature['name'];
                    $attributeValue = $feature['value'];

                    // 1. Check if 'feature name' exist already in database
                    $FeatureNameId = Db::getInstance()->getValue('SELECT id_feature FROM ' . _DB_PREFIX_ . 'feature_lang WHERE name = "' . pSQL($attributeName) . '"');
                    // If 'feature name' does not exist, insert new.
                    if (empty($FeatureNameId)) {
                        Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature` (`id_feature`,`position`) VALUES (0, 0)');
                        $FeatureNameId = Db::getInstance()->Insert_ID(); // Get id of "feature name" for insert in product
                        Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_shop` (`id_feature`,`id_shop`) VALUES (' . $FeatureNameId . ', 1)');
                        Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_lang` (`id_feature`,`id_lang`, `name`) VALUES (' . $FeatureNameId . ', ' . Context::getContext()->language->id . ', "' . pSQL($attributeName) . '")');
                    }

                    // 1. Check if 'feature value name' exist already in database
                    $FeatureValueId = Db::getInstance()->getValue('SELECT id_feature_value FROM ' . _DB_PREFIX_ . 'feature_value WHERE id_feature_value IN (SELECT id_feature_value FROM `' . _DB_PREFIX_ . 'feature_value_lang` WHERE value = "' . pSQL($attributeValue) . '") AND id_feature = ' . $FeatureNameId);
                    // If 'feature value name' does not exist, insert new.
                    if (empty($FeatureValueId)) {
                        Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_value` (`id_feature_value`,`id_feature`,`custom`) VALUES (0, ' . $FeatureNameId . ', 0)');
                        $FeatureValueId = Db::getInstance()->Insert_ID();
                        Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_value_lang` (`id_feature_value`,`id_lang`,`value`) VALUES (' . $FeatureValueId . ', ' . Context::getContext()->language->id . ', "' . pSQL($attributeValue) . '")');
                    }
                    Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_product` (`id_feature`, `id_product`, `id_feature_value`) VALUES (' . $FeatureNameId . ', ' . $product->id . ', ' . $FeatureValueId . ')');
                }
            }
            */
            // add product image.
            return $product->id;
        } catch (Exception $e) {
            throw new Exception('Error add product ' . $e->getMessage());
        }
        //echo 'Product added successfully (ID: ' . $product->id . ')';
    }

    public function addProductImage($product_id, $imgUrl) {
        // add product image.
        $shops = Shop::getShops(true, null, true);
        $image = new Image();
        $image->id_product = $product_id;
        $image->position = Image::getHighestPosition($product_id) + 1;
        $image->cover = true;
        if (($image->validateFields(false, true)) === true && ($image->validateFieldsLang(false, true)) === true && $image->add()) {
            $image->associateTo($shops);
            if (!$this->uploadImage($product_id, $image->id, $imgUrl)) {
                $image->delete();
            }
        }
    }

    public function uploadImage($id_entity, $id_image = null, $imgUrl) {
        $tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'ps_import');
        $watermark_types = explode(',', Configuration::get('WATERMARK_TYPES'));
        $image_obj = new Image((int)$id_image);
        $path = $image_obj->getPathForCreation();
        $imgUrl = str_replace(' ', '%20', trim($imgUrl));
        // Evaluate the memory required to resize the image: if it's too big we can't resize it.
        if (!ImageManager::checkImageMemoryLimit($imgUrl)) {
            return false;
        }
        if (@copy($imgUrl, $tmpfile)) {
            ImageManager::resize($tmpfile, $path . '.jpg');
            $images_types = ImageType::getImagesTypes('products');
            foreach ($images_types as $image_type) {
                ImageManager::resize($tmpfile, $path . '-' . stripslashes($image_type['name']) . '.jpg', $image_type['width'], $image_type['height']);
                if (in_array($image_type['id_image_type'], $watermark_types)) {
                    Hook::exec('actionWatermark', array('id_image' => $id_image, 'id_product' => $id_entity));
                }
            }
        } else {
            unlink($tmpfile);
            return false;
        }
        unlink($tmpfile);
        return true;
    }

    public static function createMultiLangField($field)
    {
        $languages = Language::getLanguages(false);
        $res = array();
        foreach ($languages as $lang)
            $res[$lang['id_lang']] = $field;
        return $res;
    }

}

$excel = new ExcelUpdate();
if ($file = $excel->getFileExcel('ambrella_catalog.xls')) {
    $excel->parseExcel($file);
}
