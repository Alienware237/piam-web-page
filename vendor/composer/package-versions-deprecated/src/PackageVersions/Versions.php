<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'okpt/my-web-page';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.7.13@c1b4e5a71c2235ae5a4acc8b1cee6e0ffef24484',
  'bacon/bacon-qr-code' => '2.0.8@8674e51bb65af933a5ffaf1c308a660387c35c22',
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'brick/math' => '0.11.0@0ad82ce168c82ba30d1c01ec86116ab52f589478',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'dasprid/enum' => '1.0.4@8e6b6ea76eabbf19ea2bf5b67b98e1860474012f',
  'doctrine/annotations' => '1.14.3@fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/collections' => '2.1.2@db8cda536a034337f7dd63febecc713d4957f9ee',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '3.6.4@19f0dec95edd6a3c3c5ff1d188ea94c6b7fc903f',
  'doctrine/deprecations' => 'v1.1.1@612a3ee5ab0d5dd97b7cf3874a6efe24325efac3',
  'doctrine/doctrine-bundle' => '2.10.1@f9d59c90b6f525dfc2a2064a695cb56e0ab40311',
  'doctrine/doctrine-migrations-bundle' => '3.2.4@94e6b0fe1a50901d52f59dbb9b4b0737718b2c1e',
  'doctrine/event-manager' => '2.0.0@750671534e0241a7c50ea5b43f67e23eb5c96f32',
  'doctrine/inflector' => '2.0.8@f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
  'doctrine/instantiator' => '2.0.0@c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
  'doctrine/lexer' => '2.1.0@39ab8fcf5a51ce4b85ca97c7a7d033eb12831124',
  'doctrine/migrations' => '3.6.0@e542ad8bcd606d7a18d0875babb8a6d963c9c059',
  'doctrine/orm' => '2.15.3@4c3bd208018c26498e5f682aaad45fa00ea307d5',
  'doctrine/persistence' => '3.2.0@63fee8c33bef740db6730eb2a750cd3da6495603',
  'doctrine/sql-formatter' => '1.1.3@25a06c7bf4c6b8218f47928654252863ffc890a5',
  'dompdf/dompdf' => 'v2.0.3@e8d2d5e37e8b0b30f0732a011295ab80680d7e85',
  'easycorp/easyadmin-bundle' => 'v4.7.0@17562010c5c7d160a5059c7f70b2c7e03f149d40',
  'egulias/email-validator' => '4.0.1@3a85486b709bc384dae8eb78fb2eec649bdb64ff',
  'elasticsearch/elasticsearch' => 'v7.17.2@2d302233f2bb0926812d82823bb820d405e130fc',
  'endroid/installer' => '1.4.2@86647dd927bb03752ad02e4304ed444342b018e4',
  'endroid/qr-code' => '4.8.2@2436c2333a3931c95e2b96eb82f16f53143d6bba',
  'endroid/qr-code-bundle' => '4.3.1@5a1390e1cd393206e1de39b2e7c33c45b7b3ff45',
  'ezimuel/guzzlestreams' => '3.1.0@b4b5a025dfee70d6cd34c780e07330eb93d5b997',
  'ezimuel/ringphp' => '1.2.2@7887fc8488013065f72f977dcb281994f5fde9f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.16@ecadbdc9052e4ad08c60c8a02268712e50427f7c',
  'friendsofsymfony/elastica-bundle' => 'v6.2.0@4a3e03f79ae6688056c54eb516b6dc263feb329f',
  'guzzlehttp/guzzle' => '7.7.0@fb7566caccf22d74d1ab270de3551f72a58399f5',
  'guzzlehttp/promises' => '2.0.0@3a494dc7dc1d7d12e511890177ae2d0e6c107da6',
  'guzzlehttp/psr7' => '2.5.0@b635f279edd83fc275f822a1188157ffea568ff6',
  'jms/metadata' => '2.8.0@7ca240dcac0c655eb15933ee55736ccd2ea0d7a6',
  'jms/serializer' => '3.26.0@926a7d57438fa1ff4ab794551c5ae26e68536853',
  'jms/serializer-bundle' => '5.3.1@3279738a958454793ca1e318a7dab6cfcff60124',
  'keyvanakbary/slugifier' => 'v4.0.0@0246c5b5b31a10bbdde59810152c8cf0d109fe68',
  'knplabs/doctrine-behaviors' => '2.6.2@aa7c160caec5716d4b9e065e4ed4a90a1cef9c50',
  'laminas/laminas-code' => '4.11.0@169123b3ede20a9193480c53de2a8194f8c073ec',
  'masterminds/html5' => '2.8.0@3c5d5a56d56f48a1ca08a0670f0f80c1dad368f3',
  'monolog/monolog' => '2.9.1@f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
  'myclabs/deep-copy' => '1.11.1@7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
  'nelmio/cors-bundle' => '2.3.1@185d2c0ae50a3f0b628790170164d5f1c5b7c281',
  'nette/utils' => 'v3.2.9@c91bac3470c34b2ecd5400f6e6fdf0b64a836a5c',
  'nyholm/dsn' => '2.0.1@9445621b426bac8c0ca161db8cd700da00a4e618',
  'pagerfanta/pagerfanta' => 'v3.8.0@a07c84296e491add39d103b812129de77610c33b',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.5.0@76876c6cf3080bcb6f249d7d59705108166a6685',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.7.2@b2fe4d22a5426f38e014855322200b97b5362c0d',
  'phpstan/phpdoc-parser' => '1.22.0@ec58baf7b3c7f1c81b3b00617c953249fb8cf30c',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.2@0955afe48220520692d2d09f7ab7e0f93ffd6a31',
  'psr/http-factory' => '1.0.2@e616d01114759c4c489f93b099585439f795fe35',
  'psr/http-message' => '2.0@402d35bcb92c70c026d1a6a9883f06b2ead23d71',
  'psr/link' => '2.0.1@84b159194ecfd7eaa472280213976e96415433f7',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '2.0.0@a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
  'ramsey/uuid' => '4.7.4@60a4c63ab724854332900504274f6150ff26d286',
  'react/promise' => 'v2.10.0@f913fb8cceba1e6644b7b90c4bfb678ed8a3ef38',
  'ruflin/elastica' => '7.3.1@7c61a630c3d456b00a5610960ae3a9bd29987469',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'sensio/framework-extra-bundle' => 'v6.2.10@2f886f4b31f23c76496901acaedfedb6936ba61f',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v6.0.19@d42c434e1a73d81cae7c75cd122f20fc80ac1a2b',
  'symfony/cache' => 'v6.0.19@81ca309f056e836480928b20280ec52ce8369bb3',
  'symfony/cache-contracts' => 'v3.3.0@ad945640ccc0ae6e208bcea7d7de4b39b569896b',
  'symfony/config' => 'v5.4.21@2a6b1111d038adfa15d52c0871e540f3b352d1e4',
  'symfony/console' => 'v6.0.19@c3ebc83d031b71c39da318ca8b7a07ecc67507ed',
  'symfony/dependency-injection' => 'v5.4.25@f0410c30a6c86bbce6c719c2b5cfc343362b982e',
  'symfony/deprecation-contracts' => 'v3.3.0@7c3aff79d10325257a001fcf92d991f24fc967cf',
  'symfony/doctrine-bridge' => 'v6.0.19@47f56e2ddf6a08fc2f0341940c7b1774cf1a8f89',
  'symfony/dotenv' => 'v6.0.19@9cee123707e689f7e06c09624c145d206468bcf2',
  'symfony/error-handler' => 'v6.0.19@c7df52182f43a68522756ac31a532dd5b1e6db67',
  'symfony/event-dispatcher' => 'v6.0.19@2eaf8e63bc5b8cefabd4a800157f0d0c094f677a',
  'symfony/event-dispatcher-contracts' => 'v3.3.0@a76aed96a42d2b521153fb382d418e30d18b59df',
  'symfony/expression-language' => 'v6.0.19@d912aa436eeed66ae369a2b8a247249bed8f9a03',
  'symfony/filesystem' => 'v6.0.19@3d49eec03fda1f0fc19b7349fbbe55ebc1004214',
  'symfony/finder' => 'v6.0.19@5cc9cac6586fc0c28cd173780ca696e419fefa11',
  'symfony/flex' => 'v2.3.1@3c9c3424efdafe33e0e3cfb5e87e50b34711fedf',
  'symfony/form' => 'v6.0.19@bec07ecf4aac245183b8e0fa93eb68630415346e',
  'symfony/framework-bundle' => 'v6.0.19@ee403597484be1073222373fc2962b44c36f5dd4',
  'symfony/http-client' => 'v6.0.20@541c04560da1875f62c963c3aab6ea12a7314e11',
  'symfony/http-client-contracts' => 'v3.3.0@3b66325d0176b4ec826bffab57c9037d759c31fb',
  'symfony/http-foundation' => 'v6.0.20@e16b2676a4b3b1fa12378a20b29c364feda2a8d6',
  'symfony/http-kernel' => 'v5.4.20@aaeec341582d3c160cc9ecfa8b2419ba6c69954e',
  'symfony/intl' => 'v6.0.19@a2e1ce9048ea549ee1e8d9ce521cbe9a9ec7d92c',
  'symfony/lock' => 'v6.0.19@c326af52d5db5c427d5f7269b00f6b2212ec1ad3',
  'symfony/mailer' => 'v6.0.19@cd60799210c488f545ddde2444dc1aa548322872',
  'symfony/mailgun-mailer' => 'v6.0.19@f6dff81f08e28f7f1e7dfa775b046747d800a559',
  'symfony/mime' => 'v6.0.19@d7052547a0070cbeadd474e172b527a00d657301',
  'symfony/monolog-bridge' => 'v6.0.19@8932b9108765203156fa07e819d45f58e927d3c5',
  'symfony/monolog-bundle' => 'v3.8.0@a41bbcdc1105603b6d73a7d9a43a3788f8e0fb7d',
  'symfony/options-resolver' => 'v6.0.19@6a180d1c45e0d9797470ca9eb46215692de00fa3',
  'symfony/password-hasher' => 'v6.0.19@2ae49765c5328307e82c0ee2898a39c071ef5bc8',
  'symfony/phpunit-bridge' => 'v6.3.1@0b0bf59b0d9bd1422145a123a67fb12af546ef0d',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-icu' => 'v1.27.0@a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/polyfill-uuid' => 'v1.27.0@f3cf1a645c2734236ed1e2e671e273eeb3586166',
  'symfony/process' => 'v6.0.19@2114fd60f26a296cc403a7939ab91478475a33d4',
  'symfony/property-access' => 'v6.0.19@cae9aadf6e3a08315af666d4fede905fbb5b5393',
  'symfony/property-info' => 'v6.0.19@e6dfb2223b21768d3b2ae033a5e1f9d205184d45',
  'symfony/proxy-manager-bridge' => 'v6.0.19@905733405585e584596a2ea2874dad84a738daa8',
  'symfony/routing' => 'v6.0.19@e56ca9b41c1ec447193474cd86ad7c0b547755ac',
  'symfony/runtime' => 'v6.0.19@043ac3b6c0b6749bb6848efe490abeb04f1e3ccd',
  'symfony/security-bundle' => 'v6.0.20@fbe14faff3dbae154d0004b254a201e930f3d8e0',
  'symfony/security-core' => 'v6.0.19@6085f2b5791bd2ffc4257be0e7d4f4787705afc8',
  'symfony/security-csrf' => 'v6.0.19@150d0a78b14737f66e4b2e7be7d0ec2522c453ed',
  'symfony/security-http' => 'v6.0.20@8cf1b05371898dd138d543eb3b8f72cbe5da9704',
  'symfony/serializer' => 'v6.0.14@d3bea0f239aca9589224a84150066da5495e9e11',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/stopwatch' => 'v6.0.19@011e781839dd1d2eb8119f65ac516a530f60226d',
  'symfony/string' => 'v6.0.19@d9e72497367c23e08bf94176d2be45b00a9d232a',
  'symfony/templating' => 'v6.0.19@e805d8d9d19cb866cead3be62998c059f710491f',
  'symfony/translation' => 'v6.0.19@9c24b3fdbbe9fb2ef3a6afd8bbaadfd72dad681f',
  'symfony/translation-contracts' => 'v3.3.0@02c24deb352fb0d79db5486c0c79905a85e37e86',
  'symfony/twig-bridge' => 'v6.0.19@bcd79f7845f887defec9d6737a535a3c602159e9',
  'symfony/twig-bundle' => 'v6.0.19@13ce8cae82ca5870aabfcfd2e8d4bd03d3d843d5',
  'symfony/uid' => 'v6.3.0@01b0f20b1351d997711c56f1638f7a8c3061e384',
  'symfony/validator' => 'v6.0.19@8e41a2dc215903964175ca8bdc884297f021d31c',
  'symfony/var-dumper' => 'v6.0.19@eb980457fa6899840fe1687e8627a03a7d8a3d52',
  'symfony/var-exporter' => 'v6.3.0@db5416d04269f2827d8c54331ba4cfa42620d350',
  'symfony/web-link' => 'v6.0.19@65cbc32c8177cfec22afde261e54533c408e5fa0',
  'symfony/yaml' => 'v6.0.19@deec3a812a0305a50db8ae689b183f43d915c884',
  'twig/extra-bundle' => 'v3.6.1@802cc2dd46ec88285d6c7fa85c26ab7f2cd5bc49',
  'twig/twig' => 'v3.6.1@7e7d5839d4bec168dfeef0ac66d5c5a2edbabffd',
  'vich/uploader-bundle' => '2.1.1@6674793a33bb0ff6069b01b757735a42ac5e3830',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'willdurand/negotiation' => '3.1.0@68e9ea0553ef6e2ee8db5c1d98829f111e623ec2',
  'dealerdirect/phpcodesniffer-composer-installer' => 'v1.0.0@4be43904336affa5c2f70744a348312336afd0da',
  'nikic/php-parser' => 'v4.16.0@19526a33fb561ef417e822e85f08a00db4059c17',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '9.2.26@443bc6912c9bd5b409254a40f4b0f4ced7c80ea1',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.6.9@a9aceaf20a682aeacf28d582654a1670d8826778',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.5@74be17022044ebaaecfdf0c5cd504fc9cd5a7131',
  'sebastian/environment' => '5.1.5@830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.5@e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.1@75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'slevomat/coding-standard' => '8.13.1@a13c15e20f2d307a1ca8dec5313ec462a4466470',
  'squizlabs/php_codesniffer' => '3.7.2@ed8e00df0a83aa96acf703f8c2979ff33341f879',
  'symfony/maker-bundle' => 'v1.49.0@ce1d424f76bbb377f1956cc7641e8e2eafe81cde',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php73' => '*@',
  'symfony/polyfill-php74' => '*@',
  'symfony/polyfill-php80' => '*@',
  'okpt/my-web-page' => '0.0.1@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
