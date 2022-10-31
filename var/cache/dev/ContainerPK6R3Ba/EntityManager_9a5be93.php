<?php

namespace ContainerPK6R3Ba;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1f6fd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3ef7b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf90a2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getConnection', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getMetadataFactory', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getExpressionBuilder', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'beginTransaction', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getCache', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'transactional', array('func' => $func), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'commit', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->commit();
    }

    public function rollback()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'rollback', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getClassMetadata', array('className' => $className), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'createQuery', array('dql' => $dql), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'createNamedQuery', array('name' => $name), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'createQueryBuilder', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'flush', array('entity' => $entity), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'clear', array('entityName' => $entityName), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->clear($entityName);
    }

    public function close()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'close', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->close();
    }

    public function persist($entity)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'persist', array('entity' => $entity), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'remove', array('entity' => $entity), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'refresh', array('entity' => $entity), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'detach', array('entity' => $entity), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'merge', array('entity' => $entity), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'contains', array('entity' => $entity), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getEventManager', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getConfiguration', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'isOpen', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getUnitOfWork', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getProxyFactory', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'initializeObject', array('obj' => $obj), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'getFilters', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'isFiltersStateClean', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'hasFilters', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return $this->valueHolder1f6fd->hasFilters();
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

        $instance->initializer3ef7b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1f6fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1f6fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1f6fd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, '__get', ['name' => $name], $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        if (isset(self::$publicPropertiesf90a2[$name])) {
            return $this->valueHolder1f6fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f6fd;

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

        $targetObject = $this->valueHolder1f6fd;
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
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f6fd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1f6fd;
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
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, '__isset', array('name' => $name), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f6fd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1f6fd;
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
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, '__unset', array('name' => $name), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f6fd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1f6fd;
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
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, '__clone', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        $this->valueHolder1f6fd = clone $this->valueHolder1f6fd;
    }

    public function __sleep()
    {
        $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, '__sleep', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;

        return array('valueHolder1f6fd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3ef7b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3ef7b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3ef7b && ($this->initializer3ef7b->__invoke($valueHolder1f6fd, $this, 'initializeProxy', array(), $this->initializer3ef7b) || 1) && $this->valueHolder1f6fd = $valueHolder1f6fd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1f6fd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1f6fd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
