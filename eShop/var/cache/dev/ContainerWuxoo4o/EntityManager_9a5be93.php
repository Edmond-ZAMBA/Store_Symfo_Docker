<?php

namespace ContainerWuxoo4o;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb9524 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4ea32 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties26c48 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getConnection', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getMetadataFactory', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getExpressionBuilder', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'beginTransaction', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getCache', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'transactional', array('func' => $func), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->transactional($func);
    }

    public function commit()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'commit', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->commit();
    }

    public function rollback()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'rollback', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getClassMetadata', array('className' => $className), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'createQuery', array('dql' => $dql), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'createNamedQuery', array('name' => $name), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'createQueryBuilder', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'flush', array('entity' => $entity), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'clear', array('entityName' => $entityName), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->clear($entityName);
    }

    public function close()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'close', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->close();
    }

    public function persist($entity)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'persist', array('entity' => $entity), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'remove', array('entity' => $entity), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'refresh', array('entity' => $entity), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'detach', array('entity' => $entity), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'merge', array('entity' => $entity), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'contains', array('entity' => $entity), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getEventManager', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getConfiguration', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'isOpen', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getUnitOfWork', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getProxyFactory', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'initializeObject', array('obj' => $obj), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'getFilters', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'isFiltersStateClean', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'hasFilters', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return $this->valueHolderb9524->hasFilters();
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

        $instance->initializer4ea32 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb9524) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb9524 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb9524->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, '__get', ['name' => $name], $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        if (isset(self::$publicProperties26c48[$name])) {
            return $this->valueHolderb9524->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9524;

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

        $targetObject = $this->valueHolderb9524;
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
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9524;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb9524;
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
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, '__isset', array('name' => $name), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9524;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb9524;
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
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, '__unset', array('name' => $name), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9524;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb9524;
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
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, '__clone', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        $this->valueHolderb9524 = clone $this->valueHolderb9524;
    }

    public function __sleep()
    {
        $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, '__sleep', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;

        return array('valueHolderb9524');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4ea32 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4ea32;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4ea32 && ($this->initializer4ea32->__invoke($valueHolderb9524, $this, 'initializeProxy', array(), $this->initializer4ea32) || 1) && $this->valueHolderb9524 = $valueHolderb9524;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb9524;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb9524;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
