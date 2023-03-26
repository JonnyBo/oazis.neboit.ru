<?php

include_once('../config/config.inc.php');
//include_once('init.php');
include_once ('../autoload.php');

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

    function parseExcel($file, $supplier_id)
    {
        try {
            $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file);
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            $reader->setReadDataOnly(false);
            $spreadsheet = $reader->load($file);
            $sheet = $spreadsheet->getActiveSheet();
            $worksheet = $sheet->toArray();
            $highestRow = $sheet->getHighestDataRow();
            if ($supplier_id == 4) {
                $titles = $this->getTitles($worksheet);
                $start = 2;
            } else {
                $titles = $worksheet[0];
                $start = 1;
            }
            for ($i = $start; $i < $highestRow; $i++) {
                $row = $worksheet[$i];
                /*if ($i > 10)
                    break;*/
                switch ($supplier_id) {
                    case 3:
                        $this->processOasis($row, $supplier_id, $titles);
                        break;
                    case 4:
                        $this->processStLuce($row, $supplier_id, $titles);
                        break;
                    case 5:
                        $this->processCloyd($row, $supplier_id, $titles);
                        break;
                }

                /*if ($i >= 10)
                    break;*/
            }
            return 'Updated ' . $i . ' products';
        } catch (Exception $e) {
            throw new Exception('Error Pars ' . $e->getMessage());
        }
    }

    public function getTitles($worksheet) {
        $result = [];
        for($i = 0; $i < count($worksheet[0]); $i++) {
            if ($worksheet[1][$i]) {
                $result[$i] = $worksheet[1][$i];
            } else {
                $result[$i] = $worksheet[0][$i];
            }
        }
        return $result;
    }

    public function processCloyd($row, $supplier_id, $titles) {
        /*if (!$category_id = $this->getCategoryId(trim($row[14]))) {
            $category_id = $this->addCategory(trim($row[14]), 2);
        }
        if (!$category_id)
            return false;*/
        $ean13 = intval(0);
        $code = trim($row[21]);
        $price = round(floatval($row[3]), 2);
        $name =  mb_convert_encoding($row[1], 'UTF-8', 'UTF-8');
        $quantity = 1;
        if (!$product_id = $this->getProductId($code)) {
            $product_id = $this->addProduct($ean13, $code, $name, $quantity, $row[5], $name, $price, $category_id, [$category_id], floatval($row[19]), floatval($row[20]), floatval($row[10]), null, $supplier_id);
            if ($product_id) {
                $keysFeatures = array_merge([0, 7, 8, 9, 22, 23, 24], range(11, 18));
                //print_r($keysFeatures);
                $this->setFeature($row, $titles, $product_id, $keysFeatures);
                //add images
                if ($row[2]) {
                    $this->addProductImage($product_id, $row[2], true);
                }
                if ($row[7]) {
                    $arrImages = json_decode($row[7], true);
                    if (!empty($arrImages)) {
                        foreach ($arrImages as $arrImage) {
                            if ($arrImage['image'])
                                $this->addProductImage($product_id, $arrImage['image'], false);
                        }
                    }
                }
            }
        } else {
            $this->updateProduct($product_id, $price, $quantity);
        }
    }

    public function processStLuce($row, $supplier_id, $titles) {
        /*if (!$category_id = $this->getCategoryId(trim($row[16]))) {
            $category_id = $this->addCategory(trim($row[16]), 2);
        }
        if (!$category_id)
            return false;*/
        $ean13 = intval($row[46]);
        $code = trim($row[1]);
        $price = str_replace(' ', '', $row[5]);
        $price = str_replace(',', '', $price);
        $price = round(floatval($price), 2);
        $quantity = (intval($row[10])) ? intval($row[10]) : 1;
        $name =  mb_convert_encoding($row[3], 'UTF-8', 'UTF-8');
        $keysFeatures = array_merge([0, 2, 4, 11, 45], range(14, 34));
        $keysNumbers = [21, 31, 32, 36, 37, 38, 39, 40, 41, 42, 43, 44];
        if (!$product_id = $this->getProductId($code)) {
            /*$product_id = $this->addProduct($ean13, $code, $name, $quantity, '', mb_strimwidth($name, 0, 50, ""), $price, $category_id, [$category_id], floatval($row[36]), floatval($row[35]), floatval($row[37]), floatval($row[44]), $supplier_id);
            if ($product_id) {

                //print_r($keysFeatures);
                $this->setFeature($row, $titles, $product_id, $keysFeatures);
                //add images
                if ($row[13]) {
                    $this->addProductImage($product_id, $row[13], true);
                }
            }*/
        } else {
            $this->updateProduct($product_id, $price, $quantity);
            //$this->setFeature($row, $titles, $product_id, $keysFeatures, $keysNumbers);
        }
    }

    public function processOasis($row, $supplier_id, $titles) {
        /*if (!$category_id = $this->getCategoryId(trim($row[6]))) {
            $category_id = $this->addCategory(trim($row[6]), 2);
        }
        if (!$category_id)
            return false;*/
        $ean13 = intval(0);
        $code = trim($row[4]);
        $price = 100.00;
        $quantity = 1;
        if (!$product_id = $this->getProductId($code)) {
            $product_id = $this->addProduct($ean13, $code, 'Светильник ' . $code, $quantity, '', 'Светильник ' . $code, $price, $category_id, [$category_id], floatval($row[22]), floatval($row[23]), floatval($row[21]), null, $supplier_id);

            if ($product_id) {
                $keysFeatures = array_merge([1, 2, 3, 5, ], range(7, 20));
                //print_r($keysFeatures);
                $this->setFeature($row, $titles, $product_id, $keysFeatures);
                //add images
                $code = str_replace(" ", '_', $code);
                if (file_exists(dirname(__DIR__) . '/images/' . $code)) {
                    $dir = dirname(__DIR__) . '/images/' . $code;
                    $files = array_diff(scandir($dir), array('.', '..'));
                    $cover = true;
                    foreach ($files as $file) {
                        $this->addProductImage($product_id, $dir . '/' . $file, $cover);
                        $cover = false;
                    }
                    /*$handle = opendir($dir);

                    while (false !== ($file = readdir($handle))) {
                        if ($file != "." && $file != "..") {
                            $this->addProductImage($product_id, $dir . '/' . $file, $cover);
                            $cover = false;
                        }
                    }*/
                }

            }

        } else {
            $price = 0;
            $this->updateProduct($product_id, $price, $quantity);
        }
    }

    public function setFeature($row, $titles, $product_id, $keysFeatures, $keyNumbers = []) {

        $values = [];
        $names = [];
        $cover = true;
        for ($j = 0; $j < count($row); $j++) {
            if (in_array($j, $keysFeatures)) {
                $names[] = $titles[$j];
                /*if (in_array($j, $keyNumbers)) {
                    echo $row[$j];
                    $row[$j] = str_replace(' ', '', $row[$j]);
                    $row[$j] = str_replace(',', '.', $row[$j]);
                    $row[$j] = floatval($row[$j]);
                    echo $row[$j];
                }*/
                $values[] = $row[$j];
            }
        }
        if (!empty($names) && !empty($values)) {
            $features = $this->getFeatures($names, $values);
            $this->addProductFeature($product_id, $features);
        }
    }

    public function getProductId($code) {
        try {
            $product_id = Product::getIdByReference($code);
            if ($product_id)
                return $product_id;
            return false;
        } catch (Exception $e) {
            throw new Exception('Error find product ' . $e->getMessage());
        }
    }

    public function getCategoryId($category) {
        try {
            $categories = Category::searchByName(1, trim($category), true, true);
             if ($categories && !empty($categories) && isset($categories['id_category']) && intval($categories['id_category']) > 0)
                return $categories['id_category'];
            return false;
        } catch (Exception $e) {
            throw new Exception('Error find category ' . $e->getMessage());
        }
    }

    public function getFeatures($names, $values) {
        $result = [];
        for ($i = 0; $i < count($names); $i++) {
            $result[$i] = ['name' => trim($names[$i]), 'value' => $values[$i]];
        }
        return $result;
    }

    public function addCategory($category, $parent_id) {
        try {
            if ($category && $category != '#NULL!') {
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
            }
        } catch (Exception $e) {
            echo 'Error add category ' . $e->getMessage() . ' 00000' . $category;
            throw new Exception('Error add category ' . $e->getMessage() . ' 00000' . $category);
        }
    }

    public function addProduct($ean13, $ref, $name, $qty, $text, $meta_title, $price, $catDef, $catAll, $width = 0, $height = 0, $depth = 0, $weight = 0, $supplier_id = 3) {
        try {
            if (!$name)
                $name = $meta_title;
            $name = str_replace(';', ' ', $name);
            $name = str_replace('>', ' ', $name);
            $name = str_replace('<', ' ', $name);
            $product = new Product();              // Create new product in prestashop
            $product->ean13 = $ean13;
            $product->reference = $ref;
            $product->name = self::createMultiLangField($name);
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
            $product->id_supplier = $supplier_id;

            $product->meta_title = self::createMultiLangField($meta_title);
            $product->weight = $weight;
            $product->width = $width;
            $product->height = $height;
            $product->depth = $depth;

            $product->add();                        // Submit new product
            StockAvailable::setQuantity($product->id, null, $qty); // id_product, id_product_attribute, quantity
            if (!empty($catAll))
                $product->addToCategories($catAll);     // After product is submitted insert all categories


            // add product image.
            return $product->id;
        } catch (Exception $e) {
            throw new Exception('Error add product ' . $e->getMessage() . $name);
        }
        //echo 'Product added successfully (ID: ' . $product->id . ')';
    }

    public function updateProduct($product_id, $price, $quantity) {
        try {
            //echo $product_id . ' - ' . $price . ' - ' . $quantity . "<br>";
            if ($product_id) {
                $product = new Product($product_id); // Product ID
                $product->price = $price; // Float value
                $product->save();
                /*Db::getInstance()->update('product', [
                    'price' => $price,
                ], 'id_product = ' . (int)$product_id);*/
                StockAvailable::setQuantity($product_id, null, $quantity);
            }
        } catch (Exception $e) {
            throw new Exception('Error update product ' . $e->getMessage());
        }
    }

    public function addProductFeature($product_id, $features) {
        // Insert "feature name" and "feature value"
        try {
            if (is_array($features)) {
                foreach ($features as $feature) {
                    $attributeName = $feature['name'];

                    $arrName = explode('/', $attributeName);
                    if (isset($arrName[1]) && $arrName[1])
                        $attributeName = trim($arrName[1]);

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
                    Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'feature_product` (`id_feature`, `id_product`, `id_feature_value`) VALUES (' . $FeatureNameId . ', ' . $product_id . ', ' . $FeatureValueId . ')');
                }
            }
        } catch (Exception $e) {
            throw new Exception('Error update features ' . $e->getMessage());
        }
    }

    public function addProductImage($product_id, $imgUrl, $cover) {
        // add product image.
        if (!$imgUrl || $imgUrl == '#NULL!')
            return false;
        $shops = Shop::getShops(true, null, true);
        $image = new Image();
        //$image->id = 1;
        $image->id_product = intval($product_id);
        $image->position = Image::getHighestPosition(intval($product_id)) + 1;
        $image->cover = $cover;
        //echo $product_id . ' - ' . $imgUrl . "\n";

        $validateField = $image->validateFields(false, true);

        $validateFieldLang = $image->validateFieldsLang(false, true);

        if ($validateField === true && $validateFieldLang === true) {
            try {

                /*Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'image` (`id_product`,`position`, `cover`) VALUES (' . $product_id . ', ' . $image->position . ', 1)');
                $imageId = Db::getInstance()->Insert_ID();

                echo $imageId;

                Db::getInstance()->execute("INSERT INTO `" . _DB_PREFIX_ . "image_lang` (`id_image`,`id_lang`) VALUES ($imageId, 1)");
                Db::getInstance()->execute("INSERT INTO `" . _DB_PREFIX_ . "image_lang` (`id_image`,`id_lang`) VALUES ($imageId, 2)");

                Db::getInstance()->execute("INSERT INTO `" . _DB_PREFIX_ . "image_shop` (`id_product`,`id_image`, `id_shop`, `cover`) VALUES ($product_id, $imageId, 1, 1)");
                */
                //$image->add();
                //print_r($image);
                //$image->associateTo($shops);

                if ($image->add()) {
                    //print_r($image);
                    $image->associateTo($shops);

                    //AdminImportControllerCore::copyImg((intval($product_id), (int)$image->id, $imgUrl, 'products', false);

                    if (!$this->uploadImage($product_id, $image->id, $imgUrl)) {
                        $image->delete();
                    }
                }
            } catch (Exception $e) {
                echo $e->getMessage();
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
        $arrContextOptions = [
            "ssl" => [
                "allow_self_signed" => true,
                "verify_peer" => false,
                "verify_peer_name" => false,
            ],
        ];
        if (@copy($imgUrl, $tmpfile, stream_context_create($arrContextOptions))) {
            ImageManager::resize($tmpfile, $path . '.jpg');
            $images_types = ImageType::getImagesTypes('products');
            foreach ($images_types as $image_type) {
                ImageManager::resize($tmpfile, $path . '-' . stripslashes($image_type['name']) . '.jpg', $image_type['width'], $image_type['height']);
                if (in_array($image_type['id_image_type'], $watermark_types)) {
                    Hook::exec('actionWatermark', array('id_image' => $id_image, 'id_product' => $id_entity));
                }
            }
        } elseif (file_put_contents($tmpfile, file_get_contents($imgUrl, false, stream_context_create($arrContextOptions)))) {
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

$result = 'error';
//$fileCatalog = 'ambrella_catalog.xls';
$inputData = [];
$inputData[] = ['file' =>'orange_catalog_2022.xlsx', 'supplier_id' => 3];
//$inputData[] = ['file' =>'ostatki.xlsx', 'supplier_id' => 4];
//$inputData[] = ['file' =>'cloyd.shop_2022-11-09.xls', 'supplier_id' => 5];

$excel = new ExcelUpdate();
foreach ($inputData as $data) {
    print_r($data);
    if ($file = $excel->getFileExcel($data['file'])) {
        $result = $excel->parseExcel($file, $data['supplier_id']);
    }
    echo $result . "\n";
}