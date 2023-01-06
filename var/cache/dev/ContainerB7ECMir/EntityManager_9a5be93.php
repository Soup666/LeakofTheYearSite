<?php

namespace ContainerB7ECMir;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3a828 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer47770 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf4de5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getConnection', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getMetadataFactory', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getExpressionBuilder', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'beginTransaction', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getCache', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getCache();
    }

    public function transactional($func)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'transactional', array('func' => $func), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'wrapInTransaction', array('func' => $func), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'commit', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->commit();
    }

    public function rollback()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'rollback', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getClassMetadata', array('className' => $className), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'createQuery', array('dql' => $dql), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'createNamedQuery', array('name' => $name), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'createQueryBuilder', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'flush', array('entity' => $entity), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'clear', array('entityName' => $entityName), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->clear($entityName);
    }

    public function close()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'close', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->close();
    }

    public function persist($entity)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'persist', array('entity' => $entity), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'remove', array('entity' => $entity), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'detach', array('entity' => $entity), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'merge', array('entity' => $entity), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getRepository', array('entityName' => $entityName), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'contains', array('entity' => $entity), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getEventManager', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getConfiguration', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'isOpen', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getUnitOfWork', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getProxyFactory', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'initializeObject', array('obj' => $obj), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'getFilters', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'isFiltersStateClean', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'hasFilters', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return $this->valueHolder3a828->hasFilters();
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

        $instance->initializer47770 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder3a828) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3a828 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3a828->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, '__get', ['name' => $name], $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        if (isset(self::$publicPropertiesf4de5[$name])) {
            return $this->valueHolder3a828->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a828;

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

        $targetObject = $this->valueHolder3a828;
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
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a828;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3a828;
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
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, '__isset', array('name' => $name), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a828;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3a828;
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
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, '__unset', array('name' => $name), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a828;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3a828;
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
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, '__clone', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        $this->valueHolder3a828 = clone $this->valueHolder3a828;
    }

    public function __sleep()
    {
        $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, '__sleep', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;

        return array('valueHolder3a828');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer47770 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer47770;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer47770 && ($this->initializer47770->__invoke($valueHolder3a828, $this, 'initializeProxy', array(), $this->initializer47770) || 1) && $this->valueHolder3a828 = $valueHolder3a828;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3a828;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3a828;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
