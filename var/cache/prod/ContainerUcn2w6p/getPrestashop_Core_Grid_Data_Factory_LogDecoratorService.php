<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data.factory.log_decorator' shared service.

return $this->services['prestashop.core.grid.data.factory.log_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\LogDataFactory(${($_ = isset($this->services['prestashop.core.grid.data_factory.log']) ? $this->services['prestashop.core.grid.data_factory.log'] : $this->load('getPrestashop_Core_Grid_DataFactory_LogService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.employee.avatar_provider']) ? $this->services['prestashop.adapter.employee.avatar_provider'] : $this->load('getPrestashop_Adapter_Employee_AvatarProviderService.php')) && false ?: '_'});
