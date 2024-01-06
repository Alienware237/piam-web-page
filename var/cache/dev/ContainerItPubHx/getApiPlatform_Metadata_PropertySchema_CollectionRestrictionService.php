<?php

namespace ContainerItPubHx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Metadata_PropertySchema_CollectionRestrictionService extends okpt_my_web_page_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.metadata.property_schema.collection_restriction' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCollectionRestriction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaRestrictionMetadataInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Core/Bridge/Symfony/Validator/Metadata/Property/Restriction/PropertySchemaCollectionRestriction.php';

        return $container->privates['api_platform.metadata.property_schema.collection_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCollectionRestriction(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['api_platform.metadata.property_schema.choice_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.choice_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaChoiceRestriction()));
            yield 1 => ($container->privates['api_platform.metadata.property_schema.collection_restriction'] ?? $container->load('getApiPlatform_Metadata_PropertySchema_CollectionRestrictionService'));
            yield 2 => ($container->privates['api_platform.metadata.property_schema.count_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.count_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCountRestriction()));
            yield 3 => ($container->privates['api_platform.metadata.property_schema.greater_than_or_equal_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.greater_than_or_equal_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanOrEqualRestriction()));
            yield 4 => ($container->privates['api_platform.metadata.property_schema.greater_than_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.greater_than_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaGreaterThanRestriction()));
            yield 5 => ($container->privates['api_platform.metadata.property_schema.length_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.length_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLengthRestriction()));
            yield 6 => ($container->privates['api_platform.metadata.property_schema.less_than_or_equal_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.less_than_or_equal_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanOrEqualRestriction()));
            yield 7 => ($container->privates['api_platform.metadata.property_schema.less_than_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.less_than_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaLessThanRestriction()));
            yield 8 => ($container->privates['api_platform.metadata.property_schema.one_of_restriction'] ?? $container->load('getApiPlatform_Metadata_PropertySchema_OneOfRestrictionService'));
            yield 9 => ($container->privates['api_platform.metadata.property_schema.range_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.range_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRangeRestriction()));
            yield 10 => ($container->privates['api_platform.metadata.property_schema.regex_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.regex_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaRegexRestriction()));
            yield 11 => ($container->privates['api_platform.metadata.property_schema.format_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.format_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaFormat()));
            yield 12 => ($container->privates['api_platform.metadata.property_schema.unique_restriction'] ?? ($container->privates['api_platform.metadata.property_schema.unique_restriction'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaUniqueRestriction()));
        }, 13));
    }
}
