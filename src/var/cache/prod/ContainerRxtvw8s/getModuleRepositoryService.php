<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Repository\ModuleRepository' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository(${($_ = isset($this->services['ps_eventbus.db']) ? $this->services['ps_eventbus.db'] : $this->load('getPsEventbus_DbService.php')) && false ?: '_'});
