<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6493a5777e353b79a862d9814e9fe825
{
    public static $files = array (
        'cf97c57bfe0f23854afd2f3818abb7a0' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/create_uploaded_file.php',
        '9bf37a3d0dad93e29cb4e1b1bfab04e9' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_headers_from_sapi.php',
        'ce70dccb4bcc2efc6e94d2ee526e6972' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_method_from_sapi.php',
        'f86420df471f14d568bfcb71e271b523' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_protocol_version_from_sapi.php',
        'b87481e008a3700344428ae089e7f9e5' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/marshal_uri_from_sapi.php',
        '0b0974a5566a1077e4f2e111341112c1' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/normalize_server.php',
        '1ca3bc274755662169f9629d5412a1da' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/normalize_uploaded_files.php',
        '40360c0b9b437e69bcbb7f1349ce029e' => __DIR__ . '/..' . '/zendframework/zend-diactoros/src/functions/parse_cookie_header.php',
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Diactoros\\' => 15,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'SuperClosure\\' => 13,
        ),
        'R' => 
        array (
            'Relay\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PhpParser\\' => 10,
            'PhpDocReader\\' => 13,
        ),
        'N' => 
        array (
            'Narrowspark\\HttpEmitter\\' => 24,
        ),
        'M' => 
        array (
            'Middlewares\\Utils\\' => 18,
            'Middlewares\\' => 12,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'ExampleApp\\' => 11,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'SuperClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremeamia/superclosure/src',
        ),
        'Relay\\' => 
        array (
            0 => __DIR__ . '/..' . '/relay/relay/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Narrowspark\\HttpEmitter\\' => 
        array (
            0 => __DIR__ . '/..' . '/narrowspark/http-emitter/src',
        ),
        'Middlewares\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/middlewares/utils/src',
        ),
        'Middlewares\\' => 
        array (
            0 => __DIR__ . '/..' . '/middlewares/fast-route/src',
            1 => __DIR__ . '/..' . '/middlewares/request-handler/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'ExampleApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
    );

    public static $classMap = array (
        'Dibi\\Bridges\\Nette\\DibiExtension22' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Bridges/Nette/DibiExtension22.php',
        'Dibi\\Bridges\\Tracy\\Panel' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Bridges/Tracy/Panel.php',
        'Dibi\\Connection' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Connection.php',
        'Dibi\\ConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\DataSource' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/DataSource.php',
        'Dibi\\DateTime' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/DateTime.php',
        'Dibi\\Driver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\DriverException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Drivers\\DummyDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/DummyDriver.php',
        'Dibi\\Drivers\\FirebirdDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdDriver.php',
        'Dibi\\Drivers\\FirebirdReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdReflector.php',
        'Dibi\\Drivers\\FirebirdResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/FirebirdResult.php',
        'Dibi\\Drivers\\MySqlReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqlReflector.php',
        'Dibi\\Drivers\\MySqliDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqliDriver.php',
        'Dibi\\Drivers\\MySqliResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/MySqliResult.php',
        'Dibi\\Drivers\\NoDataResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/NoDataResult.php',
        'Dibi\\Drivers\\OdbcDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcDriver.php',
        'Dibi\\Drivers\\OdbcReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcReflector.php',
        'Dibi\\Drivers\\OdbcResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OdbcResult.php',
        'Dibi\\Drivers\\OracleDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleDriver.php',
        'Dibi\\Drivers\\OracleReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleReflector.php',
        'Dibi\\Drivers\\OracleResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/OracleResult.php',
        'Dibi\\Drivers\\PdoDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PdoDriver.php',
        'Dibi\\Drivers\\PdoResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PdoResult.php',
        'Dibi\\Drivers\\PostgreDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreDriver.php',
        'Dibi\\Drivers\\PostgreReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreReflector.php',
        'Dibi\\Drivers\\PostgreResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/PostgreResult.php',
        'Dibi\\Drivers\\Sqlite3Driver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/Sqlite3Driver.php',
        'Dibi\\Drivers\\Sqlite3Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/Sqlite3Result.php',
        'Dibi\\Drivers\\SqliteDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteDriver.php',
        'Dibi\\Drivers\\SqliteReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteReflector.php',
        'Dibi\\Drivers\\SqliteResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqliteResult.php',
        'Dibi\\Drivers\\SqlsrvDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvDriver.php',
        'Dibi\\Drivers\\SqlsrvReflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvReflector.php',
        'Dibi\\Drivers\\SqlsrvResult' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Drivers/SqlsrvResult.php',
        'Dibi\\Event' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Event.php',
        'Dibi\\Exception' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Expression' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Expression.php',
        'Dibi\\Fluent' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Fluent.php',
        'Dibi\\ForeignKeyConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\HashMap' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/HashMap.php',
        'Dibi\\HashMapBase' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/HashMap.php',
        'Dibi\\Helpers' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Helpers.php',
        'Dibi\\IConnection' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\IDataSource' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\Literal' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Literal.php',
        'Dibi\\Loggers\\FileLogger' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Loggers/FileLogger.php',
        'Dibi\\NotImplementedException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\NotNullConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\NotSupportedException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\PcreException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\ProcedureException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'Dibi\\Reflection\\Column' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Column.php',
        'Dibi\\Reflection\\Database' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Database.php',
        'Dibi\\Reflection\\ForeignKey' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/ForeignKey.php',
        'Dibi\\Reflection\\Index' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Index.php',
        'Dibi\\Reflection\\Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Result.php',
        'Dibi\\Reflection\\Table' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Reflection/Table.php',
        'Dibi\\Reflector' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\Result' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Result.php',
        'Dibi\\ResultDriver' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/interfaces.php',
        'Dibi\\ResultIterator' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/ResultIterator.php',
        'Dibi\\Row' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Row.php',
        'Dibi\\Strict' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Strict.php',
        'Dibi\\Translator' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Translator.php',
        'Dibi\\Type' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/Type.php',
        'Dibi\\UniqueConstraintViolationException' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/exceptions.php',
        'ICanBoogie\\DateTime' => __DIR__ . '/..' . '/icanboogie/datetime/lib/DateTime.php',
        'ICanBoogie\\TimeZone' => __DIR__ . '/..' . '/icanboogie/datetime/lib/TimeZone.php',
        'ICanBoogie\\TimeZoneLocation' => __DIR__ . '/..' . '/icanboogie/datetime/lib/TimeZoneLocation.php',
        'dibi' => __DIR__ . '/..' . '/dibi/dibi/src/Dibi/dibi.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6493a5777e353b79a862d9814e9fe825::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6493a5777e353b79a862d9814e9fe825::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6493a5777e353b79a862d9814e9fe825::$classMap;

        }, null, ClassLoader::class);
    }
}
