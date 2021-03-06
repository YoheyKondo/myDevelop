<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\Composer\ComposerProcessService' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\Composer\\ComposerServiceInterface.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Service\\Composer\\ComposerProcessService.php';

if ($lazyLoad) {
    return $this->services['Eccube\\Service\\Composer\\ComposerProcessService'] = $this->createProxy('ComposerProcessService_ccb17a8', function () {
        return \ComposerProcessService_ccb17a8::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getComposerProcessServiceService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Eccube\Service\Composer\ComposerProcessService(${($_ = isset($this->services['Eccube\\Common\\EccubeConfig']) ? $this->services['Eccube\\Common\\EccubeConfig'] : ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\Composer\\ComposerApiService']) ? $this->services['Eccube\\Service\\Composer\\ComposerApiService'] : $this->load('getComposerApiServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\BaseInfoRepository']) ? $this->services['Eccube\\Repository\\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'});
