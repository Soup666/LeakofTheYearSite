<?php

namespace ContainerBadr8TX;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9fb03 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46358 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties579f1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getConnection', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getMetadataFactory', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getExpressionBuilder', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'beginTransaction', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getCache', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'transactional', array('func' => $func), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'wrapInTransaction', array('func' => $func), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'commit', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->commit();
    }

    public function rollback()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'rollback', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getClassMetadata', array('className' => $className), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'createQuery', array('dql' => $dql), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'createNamedQuery', array('name' => $name), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'createQueryBuilder', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'flush', array('entity' => $entity), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'clear', array('entityName' => $entityName), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->clear($entityName);
    }

    public function close()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'close', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->close();
    }

    public function persist($entity)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'persist', array('entity' => $entity), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'remove', array('entity' => $entity), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'detach', array('entity' => $entity), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'merge', array('entity' => $entity), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'contains', array('entity' => $entity), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getEventManager', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getConfiguration', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'isOpen', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getUnitOfWork', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getProxyFactory', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'initializeObject', array('obj' => $obj), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'getFilters', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'isFiltersStateClean', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'hasFilters', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return $this->valueHolder9fb03->hasFilters();
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

        $instance->initializer46358 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder9fb03) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9fb03 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9fb03->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, '__get', ['name' => $name], $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        if (isset(self::$publicProperties579f1[$name])) {
            return $this->valueHolder9fb03->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fb03;

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

        $targetObject = $this->valueHolder9fb03;
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
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fb03;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9fb03;
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
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, '__isset', array('name' => $name), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fb03;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9fb03;
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
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, '__unset', array('name' => $name), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fb03;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9fb03;
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
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, '__clone', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        $this->valueHolder9fb03 = clone $this->valueHolder9fb03;
    }

    public function __sleep()
    {
        $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, '__sleep', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;

        return array('valueHolder9fb03');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46358 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46358;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46358 && ($this->initializer46358->__invoke($valueHolder9fb03, $this, 'initializeProxy', array(), $this->initializer46358) || 1) && $this->valueHolder9fb03 = $valueHolder9fb03;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9fb03;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9fb03;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
