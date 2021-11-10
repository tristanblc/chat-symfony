<?php

namespace ContainerOCfEfD2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7c204 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerac12a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties62b52 = [
        
    ];

    public function getConnection()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getConnection', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getMetadataFactory', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getExpressionBuilder', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'beginTransaction', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getCache', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getCache();
    }

    public function transactional($func)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'transactional', array('func' => $func), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'wrapInTransaction', array('func' => $func), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'commit', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->commit();
    }

    public function rollback()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'rollback', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getClassMetadata', array('className' => $className), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'createQuery', array('dql' => $dql), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'createNamedQuery', array('name' => $name), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'createQueryBuilder', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'flush', array('entity' => $entity), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'clear', array('entityName' => $entityName), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->clear($entityName);
    }

    public function close()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'close', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->close();
    }

    public function persist($entity)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'persist', array('entity' => $entity), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'remove', array('entity' => $entity), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'refresh', array('entity' => $entity), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'detach', array('entity' => $entity), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'merge', array('entity' => $entity), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getRepository', array('entityName' => $entityName), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'contains', array('entity' => $entity), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getEventManager', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getConfiguration', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'isOpen', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getUnitOfWork', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getProxyFactory', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'initializeObject', array('obj' => $obj), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'getFilters', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'isFiltersStateClean', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'hasFilters', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return $this->valueHolder7c204->hasFilters();
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

        $instance->initializerac12a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7c204) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7c204 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7c204->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, '__get', ['name' => $name], $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        if (isset(self::$publicProperties62b52[$name])) {
            return $this->valueHolder7c204->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c204;

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

        $targetObject = $this->valueHolder7c204;
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
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c204;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7c204;
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
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, '__isset', array('name' => $name), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c204;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7c204;
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
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, '__unset', array('name' => $name), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7c204;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7c204;
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
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, '__clone', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        $this->valueHolder7c204 = clone $this->valueHolder7c204;
    }

    public function __sleep()
    {
        $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, '__sleep', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;

        return array('valueHolder7c204');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerac12a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerac12a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerac12a && ($this->initializerac12a->__invoke($valueHolder7c204, $this, 'initializeProxy', array(), $this->initializerac12a) || 1) && $this->valueHolder7c204 = $valueHolder7c204;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7c204;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7c204;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
