<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.eccube_command_updateschemadoctrinecommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\AbstractCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Command\\UpdateSchemaDoctrineCommand.php';

return $this->services['console.command.eccube_command_updateschemadoctrinecommand'] = new \Eccube\Command\UpdateSchemaDoctrineCommand(${($_ = isset($this->services['Eccube\\Repository\\PluginRepository']) ? $this->services['Eccube\\Repository\\PluginRepository'] : $this->load('getPluginRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\PluginService']) ? $this->services['Eccube\\Service\\PluginService'] : $this->load('getPluginServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Service\\SchemaService']) ? $this->services['Eccube\\Service\\SchemaService'] : $this->load('getSchemaServiceService.php')) && false ?: '_'});
