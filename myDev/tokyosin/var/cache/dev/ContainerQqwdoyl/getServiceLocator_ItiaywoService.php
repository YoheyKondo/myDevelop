<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.itiaywo' shared service.

return $this->services['service_locator.itiaywo'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['router' => function () {
    return ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'};
}]);
