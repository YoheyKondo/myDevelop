<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Admin\SearchProductType' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractType.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Form\\Type\\Admin\\SearchProductType.php';

return $this->services['Eccube\\Form\\Type\\Admin\\SearchProductType'] = new \Eccube\Form\Type\Admin\SearchProductType(${($_ = isset($this->services['Eccube\\Repository\\Master\\ProductStatusRepository']) ? $this->services['Eccube\\Repository\\Master\\ProductStatusRepository'] : $this->load('getProductStatusRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\CategoryRepository']) ? $this->services['Eccube\\Repository\\CategoryRepository'] : $this->load('getCategoryRepositoryService.php')) && false ?: '_'});
