<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Command\\CachePoolPruneCommand.php';

$this->services['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->load('getCache_AppService.php')) && false ?: '_'};
    yield 'doctrine.app_cache_pool' => ${($_ = isset($this->services['doctrine.app_cache_pool']) ? $this->services['doctrine.app_cache_pool'] : $this->getDoctrine_AppCachePoolService()) && false ?: '_'};
}, 2));

$instance->setName('cache:pool:prune');

return $instance;
