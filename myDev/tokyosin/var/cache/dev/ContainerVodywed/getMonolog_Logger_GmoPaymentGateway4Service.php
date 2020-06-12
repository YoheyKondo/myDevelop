<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'monolog.logger.GmoPaymentGateway4' shared service.

$this->services['monolog.logger.GmoPaymentGateway4'] = $instance = new \Symfony\Bridge\Monolog\Logger('GmoPaymentGateway4');

$instance->pushProcessor(${($_ = isset($this->services['Eccube\\Log\\Processor\\SessionProcessor']) ? $this->services['Eccube\\Log\\Processor\\SessionProcessor'] : $this->getSessionProcessorService()) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Eccube\\Log\\Processor\\TokenProcessor']) ? $this->services['Eccube\\Log\\Processor\\TokenProcessor'] : $this->getTokenProcessorService()) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Monolog\\Processor\\UidProcessor']) ? $this->services['Monolog\\Processor\\UidProcessor'] : ($this->services['Monolog\\Processor\\UidProcessor'] = new \Monolog\Processor\UidProcessor())) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Monolog\\Processor\\IntrospectionProcessor']) ? $this->services['Monolog\\Processor\\IntrospectionProcessor'] : ($this->services['Monolog\\Processor\\IntrospectionProcessor'] = new \Monolog\Processor\IntrospectionProcessor('!php/const:Monolog\\Logger::DEBUG', [0 => 'Eccube\\\\Log', 1 => 'Psr\\\\Log']))) && false ?: '_'});
$instance->pushProcessor(${($_ = isset($this->services['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor']) ? $this->services['Symfony\\Bridge\\Monolog\\Processor\\WebProcessor'] : $this->getWebProcessorService()) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.GmoPaymentGateway4']) ? $this->services['monolog.handler.GmoPaymentGateway4'] : $this->load('getMonolog_Handler_GmoPaymentGateway4Service.php')) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : ($this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))) && false ?: '_'});
$instance->pushHandler(${($_ = isset($this->services['monolog.handler.buffered']) ? $this->services['monolog.handler.buffered'] : $this->getMonolog_Handler_BufferedService()) && false ?: '_'});

return $instance;
