<?php

namespace ContainerNYlwckd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_BuilderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = new \Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor(new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
            yield 1 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 2), new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $container->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService'));
            yield 1 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 2), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());
        }, 1)), ($container->privates['cache.property_info'] ?? $container->load('getCache_PropertyInfoService')));

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', true],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', true],
            'Symfony\\Component\\Validator\\Constraints\\WhenValidator' => ['privates', 'validator.when', 'getValidator_WhenService', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', true],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\WhenValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        if ($container->has('translator')) {
            $instance->setTranslator(($container->services['translator'] ?? $container->load('getTranslatorService')));
        }
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(true);
        $instance->setDoctrineAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMappingCache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($container->targetDir.''.'/validation.php'), ($container->privates['cache.validator'] ?? $container->load('getCache_ValidatorService'))));
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($container->services['doctrine'] ?? $container->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), NULL));

        return $instance;
    }
}
