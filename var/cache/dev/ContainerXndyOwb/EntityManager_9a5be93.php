<?php

namespace ContainerXndyOwb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbaa46 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbddc1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7a76f = [
        
    ];

    public function getConnection()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getConnection', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getMetadataFactory', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getExpressionBuilder', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'beginTransaction', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getCache', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'transactional', array('func' => $func), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'commit', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->commit();
    }

    public function rollback()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'rollback', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getClassMetadata', array('className' => $className), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'createQuery', array('dql' => $dql), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'createNamedQuery', array('name' => $name), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'createQueryBuilder', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'flush', array('entity' => $entity), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'clear', array('entityName' => $entityName), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->clear($entityName);
    }

    public function close()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'close', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->close();
    }

    public function persist($entity)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'persist', array('entity' => $entity), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'remove', array('entity' => $entity), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'detach', array('entity' => $entity), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'merge', array('entity' => $entity), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'contains', array('entity' => $entity), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getEventManager', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getConfiguration', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'isOpen', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getUnitOfWork', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getProxyFactory', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'initializeObject', array('obj' => $obj), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'getFilters', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'isFiltersStateClean', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'hasFilters', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return $this->valueHolderbaa46->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbddc1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderbaa46) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbaa46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbaa46->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, '__get', ['name' => $name], $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        if (isset(self::$publicProperties7a76f[$name])) {
            return $this->valueHolderbaa46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaa46;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbaa46;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaa46;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbaa46;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, '__isset', array('name' => $name), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaa46;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbaa46;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, '__unset', array('name' => $name), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbaa46;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbaa46;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, '__clone', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        $this->valueHolderbaa46 = clone $this->valueHolderbaa46;
    }

    public function __sleep()
    {
        $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, '__sleep', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;

        return array('valueHolderbaa46');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbddc1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbddc1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbddc1 && ($this->initializerbddc1->__invoke($valueHolderbaa46, $this, 'initializeProxy', array(), $this->initializerbddc1) || 1) && $this->valueHolderbaa46 = $valueHolderbaa46;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbaa46;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbaa46;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
