<?php
/**
 * If you need an environment-specific system or application configuration,
 * there is an example in the documentation
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-system-configuration
 * @see https://docs.zendframework.com/tutorials/advanced-config/#environment-specific-application-configuration
 */
return [
    // Retrieve list of modules used in this application.
    'modules' => [

        'Zend\Cache',
        'Zend\Paginator',
        'Zend\Validator',
        'Zend\Session',
        'Zend\Hydrator',
        'Zend\InputFilter',
        'Zend\Filter',
        'Zend\Db',
        'Zend\Mvc\Plugin\Prg',
        'Zend\Mvc\Plugin\Identity',
        'Zend\Mvc\Plugin\FilePrg',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Navigation',
        'Zend\Router',
        'Zend\Form',
        'Zend\I18n',

        'DoctrineModule',
        'DoctrineORMModule',

        'MSBios\Test',
        'MSBios\I18n',
        'MSBios\Db',
        'MSBios\Assetic',
        'MSBios\Form',
        'MSBios\Widget',
        'MSBios\Theme',
        'MSBios\Navigation',
        'MSBios\Application',
        'MSBios\Authentication',
        'MSBios\Resource',
        'MSBios\View',
        'MSBios\Guard',
        'MSBios\Guard\Resource',

        'MSBios\Doctrine',
        'MSBios\Authentication\Doctrine',
        'MSBios\Form\Doctrine',
        'MSBios\Resource\Doctrine',
        'MSBios\Guard\Doctrine',
        'MSBios\Guard\Resource\Doctrine',

        'Zend\Log',
        'ZendDeveloperTools',

    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => false,
        // 'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => false,
        // 'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/',
    ],
];
