<?php

namespace ContainerItPubHx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder00010 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer190a1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7acb = [
        
    ];

    public function getConnection()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getConnection', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getMetadataFactory', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getExpressionBuilder', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'beginTransaction', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getCache', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getCache();
    }

    public function transactional($func)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'transactional', array('func' => $func), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'wrapInTransaction', array('func' => $func), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'commit', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->commit();
    }

    public function rollback()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'rollback', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getClassMetadata', array('className' => $className), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'createQuery', array('dql' => $dql), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'createNamedQuery', array('name' => $name), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'createQueryBuilder', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'flush', array('entity' => $entity), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'clear', array('entityName' => $entityName), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->clear($entityName);
    }

    public function close()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'close', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->close();
    }

    public function persist($entity)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'persist', array('entity' => $entity), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'remove', array('entity' => $entity), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'detach', array('entity' => $entity), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'merge', array('entity' => $entity), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getRepository', array('entityName' => $entityName), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'contains', array('entity' => $entity), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getEventManager', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getConfiguration', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'isOpen', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getUnitOfWork', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getProxyFactory', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'initializeObject', array('obj' => $obj), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'getFilters', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'isFiltersStateClean', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'hasFilters', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return $this->valueHolder00010->hasFilters();
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

        $instance->initializer190a1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder00010) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder00010 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder00010->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, '__get', ['name' => $name], $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        if (isset(self::$publicPropertiesf7acb[$name])) {
            return $this->valueHolder00010->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00010;

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

        $targetObject = $this->valueHolder00010;
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
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00010;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder00010;
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
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, '__isset', array('name' => $name), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00010;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder00010;
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
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, '__unset', array('name' => $name), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder00010;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder00010;
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
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, '__clone', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        $this->valueHolder00010 = clone $this->valueHolder00010;
    }

    public function __sleep()
    {
        $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, '__sleep', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;

        return array('valueHolder00010');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer190a1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer190a1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer190a1 && ($this->initializer190a1->__invoke($valueHolder00010, $this, 'initializeProxy', array(), $this->initializer190a1) || 1) && $this->valueHolder00010 = $valueHolder00010;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder00010;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder00010;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
