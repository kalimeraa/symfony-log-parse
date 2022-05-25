<?php

namespace ContainerPsCWfhH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2d78d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd6230 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseaff6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getConnection', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getMetadataFactory', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getExpressionBuilder', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'beginTransaction', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getCache', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'transactional', array('func' => $func), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'commit', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->commit();
    }

    public function rollback()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'rollback', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getClassMetadata', array('className' => $className), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'createQuery', array('dql' => $dql), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'createNamedQuery', array('name' => $name), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'createQueryBuilder', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'flush', array('entity' => $entity), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'clear', array('entityName' => $entityName), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->clear($entityName);
    }

    public function close()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'close', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->close();
    }

    public function persist($entity)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'persist', array('entity' => $entity), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'remove', array('entity' => $entity), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'refresh', array('entity' => $entity), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'detach', array('entity' => $entity), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'merge', array('entity' => $entity), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'contains', array('entity' => $entity), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getEventManager', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getConfiguration', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'isOpen', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getUnitOfWork', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getProxyFactory', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'initializeObject', array('obj' => $obj), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'getFilters', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'isFiltersStateClean', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'hasFilters', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return $this->valueHolder2d78d->hasFilters();
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

        $instance->initializerd6230 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2d78d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2d78d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2d78d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, '__get', ['name' => $name], $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        if (isset(self::$publicPropertieseaff6[$name])) {
            return $this->valueHolder2d78d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d78d;

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

        $targetObject = $this->valueHolder2d78d;
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
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d78d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2d78d;
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
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, '__isset', array('name' => $name), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d78d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2d78d;
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
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, '__unset', array('name' => $name), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2d78d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2d78d;
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
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, '__clone', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        $this->valueHolder2d78d = clone $this->valueHolder2d78d;
    }

    public function __sleep()
    {
        $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, '__sleep', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;

        return array('valueHolder2d78d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd6230 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd6230;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd6230 && ($this->initializerd6230->__invoke($valueHolder2d78d, $this, 'initializeProxy', array(), $this->initializerd6230) || 1) && $this->valueHolder2d78d = $valueHolder2d78d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2d78d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2d78d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
