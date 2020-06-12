<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Command\\DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load('getForm_RegistryService.php')) && false ?: '_'}, [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Eccube\\Form\\Type', 2 => 'Eccube\\Form\\Type\\Admin', 3 => 'Eccube\\Form\\Type\\Front', 4 => 'Eccube\\Form\\Type\\Install', 5 => 'Eccube\\Form\\Type\\Master', 6 => 'Eccube\\Form\\Type\\Shopping', 7 => 'Plugin\\Securitychecker4\\Form\\Type', 8 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'Eccube\\Form\\Type\\AddCartType', 1 => 'Eccube\\Form\\Type\\AddressType', 2 => 'Eccube\\Form\\Type\\Admin\\AuthenticationType', 3 => 'Eccube\\Form\\Type\\Admin\\AuthorityRoleType', 4 => 'Eccube\\Form\\Type\\Admin\\BlockType', 5 => 'Eccube\\Form\\Type\\Admin\\CategoryType', 6 => 'Eccube\\Form\\Type\\Admin\\ChangePasswordType', 7 => 'Eccube\\Form\\Type\\Admin\\ClassCategoryType', 8 => 'Eccube\\Form\\Type\\Admin\\ClassNameType', 9 => 'Eccube\\Form\\Type\\Admin\\CsvImportType', 10 => 'Eccube\\Form\\Type\\Admin\\CustomerType', 11 => 'Eccube\\Form\\Type\\Admin\\DeliveryFeeType', 12 => 'Eccube\\Form\\Type\\Admin\\DeliveryTimeType', 13 => 'Eccube\\Form\\Type\\Admin\\DeliveryType', 14 => 'Eccube\\Form\\Type\\Admin\\LayoutType', 15 => 'Eccube\\Form\\Type\\Admin\\LogType', 16 => 'Eccube\\Form\\Type\\Admin\\LoginType', 17 => 'Eccube\\Form\\Type\\Admin\\MailType', 18 => 'Eccube\\Form\\Type\\Admin\\MainEditType', 19 => 'Eccube\\Form\\Type\\Admin\\MasterdataDataType', 20 => 'Eccube\\Form\\Type\\Admin\\MasterdataEditType', 21 => 'Eccube\\Form\\Type\\Admin\\MasterdataType', 22 => 'Eccube\\Form\\Type\\Admin\\MemberType', 23 => 'Eccube\\Form\\Type\\Admin\\NewsType', 24 => 'Eccube\\Form\\Type\\Admin\\OrderItemForShippingRegistrationType', 25 => 'Eccube\\Form\\Type\\Admin\\OrderItemType', 26 => 'Eccube\\Form\\Type\\Admin\\OrderMailType', 27 => 'Eccube\\Form\\Type\\Admin\\OrderPdfType', 28 => 'Eccube\\Form\\Type\\Admin\\OrderType', 29 => 'Eccube\\Form\\Type\\Admin\\PageType', 30 => 'Eccube\\Form\\Type\\Admin\\PaymentRegisterType', 31 => 'Eccube\\Form\\Type\\Admin\\PluginLocalInstallType', 32 => 'Eccube\\Form\\Type\\Admin\\PluginManagementType', 33 => 'Eccube\\Form\\Type\\Admin\\ProductClassEditType', 34 => 'Eccube\\Form\\Type\\Admin\\ProductClassMatrixType', 35 => 'Eccube\\Form\\Type\\Admin\\ProductClassType', 36 => 'Eccube\\Form\\Type\\Admin\\ProductTag', 37 => 'Eccube\\Form\\Type\\Admin\\ProductType', 38 => 'Eccube\\Form\\Type\\Admin\\SearchCustomerType', 39 => 'Eccube\\Form\\Type\\Admin\\SearchOrderType', 40 => 'Eccube\\Form\\Type\\Admin\\SearchPluginApiType', 41 => 'Eccube\\Form\\Type\\Admin\\SearchProductType', 42 => 'Eccube\\Form\\Type\\Admin\\SecurityType', 43 => 'Eccube\\Form\\Type\\Admin\\ShippingType', 44 => 'Eccube\\Form\\Type\\Admin\\ShopMasterType', 45 => 'Eccube\\Form\\Type\\Admin\\TagType', 46 => 'Eccube\\Form\\Type\\Admin\\TaxRuleType', 47 => 'Eccube\\Form\\Type\\Admin\\TemplateType', 48 => 'Eccube\\Form\\Type\\Front\\ContactType', 49 => 'Eccube\\Form\\Type\\Front\\CustomerAddressType', 50 => 'Eccube\\Form\\Type\\Front\\CustomerLoginType', 51 => 'Eccube\\Form\\Type\\Front\\EntryType', 52 => 'Eccube\\Form\\Type\\Front\\ForgotType', 53 => 'Eccube\\Form\\Type\\Front\\NonMemberType', 54 => 'Eccube\\Form\\Type\\Front\\PasswordResetType', 55 => 'Eccube\\Form\\Type\\Front\\ShoppingShippingType', 56 => 'Eccube\\Form\\Type\\Install\\Step1Type', 57 => 'Eccube\\Form\\Type\\Install\\Step3Type', 58 => 'Eccube\\Form\\Type\\Install\\Step4Type', 59 => 'Eccube\\Form\\Type\\Install\\Step5Type', 60 => 'Eccube\\Form\\Type\\KanaType', 61 => 'Eccube\\Form\\Type\\MasterType', 62 => 'Eccube\\Form\\Type\\Master\\CategoryType', 63 => 'Eccube\\Form\\Type\\Master\\CsvType', 64 => 'Eccube\\Form\\Type\\Master\\CustomerStatusType', 65 => 'Eccube\\Form\\Type\\Master\\DeliveryDurationType', 66 => 'Eccube\\Form\\Type\\Master\\DeviceTypeType', 67 => 'Eccube\\Form\\Type\\Master\\JobType', 68 => 'Eccube\\Form\\Type\\Master\\MailTemplateType', 69 => 'Eccube\\Form\\Type\\Master\\OrderStatusType', 70 => 'Eccube\\Form\\Type\\Master\\PageMaxType', 71 => 'Eccube\\Form\\Type\\Master\\PaymentType', 72 => 'Eccube\\Form\\Type\\Master\\PrefType', 73 => 'Eccube\\Form\\Type\\Master\\ProductListMaxType', 74 => 'Eccube\\Form\\Type\\Master\\ProductListOrderByType', 75 => 'Eccube\\Form\\Type\\Master\\ProductStatusType', 76 => 'Eccube\\Form\\Type\\Master\\RoundingTypeType', 77 => 'Eccube\\Form\\Type\\Master\\SaleTypeType', 78 => 'Eccube\\Form\\Type\\Master\\SexType', 79 => 'Eccube\\Form\\Type\\NameType', 80 => 'Eccube\\Form\\Type\\PhoneNumberType', 81 => 'Eccube\\Form\\Type\\PostalType', 82 => 'Eccube\\Form\\Type\\PriceType', 83 => 'Eccube\\Form\\Type\\RepeatedEmailType', 84 => 'Eccube\\Form\\Type\\RepeatedPasswordType', 85 => 'Eccube\\Form\\Type\\SearchProductBlockType', 86 => 'Eccube\\Form\\Type\\SearchProductType', 87 => 'Eccube\\Form\\Type\\ShippingMultipleItemType', 88 => 'Eccube\\Form\\Type\\ShippingMultipleType', 89 => 'Eccube\\Form\\Type\\ShoppingMultipleType', 90 => 'Eccube\\Form\\Type\\ShoppingType', 91 => 'Eccube\\Form\\Type\\Shopping\\CustomerAddressType', 92 => 'Eccube\\Form\\Type\\Shopping\\OrderItemType', 93 => 'Eccube\\Form\\Type\\Shopping\\OrderType', 94 => 'Eccube\\Form\\Type\\Shopping\\ShippingType', 95 => 'Eccube\\Form\\Type\\ToggleSwitchType', 96 => 'Plugin\\Securitychecker4\\Form\\Type\\Securitychecker4ConfigType', 97 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 98 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 99 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Eccube\\Form\\Extension\\DoctrineOrmExtension', 1 => 'Eccube\\Form\\Extension\\HelpTypeExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 3 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 7 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 8 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 9 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
