<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Validator\EmailValidator' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\validator\\ConstraintValidator.php';
include_once $this->targetDirs[3].'\\src\\Eccube\\Form\\Validator\\EmailValidator.php';

return $this->services['Eccube\\Form\\Validator\\EmailValidator'] = new \Eccube\Form\Validator\EmailValidator();
