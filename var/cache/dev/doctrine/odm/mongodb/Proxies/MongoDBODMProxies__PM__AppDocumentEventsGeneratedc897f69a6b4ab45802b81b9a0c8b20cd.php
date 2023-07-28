<?php

namespace MongoDBODMProxies\__PM__\App\Document\Events;

class Generatedc897f69a6b4ab45802b81b9a0c8b20cd extends \App\Document\Events implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7fde2 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker97e2a = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd9ab1 = [
        'address' => true,
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privatePropertiesd2bfe = [
        'startDate' => [
            'App\\Document\\Events' => true,
        ],
        'endDate' => [
            'App\\Document\\Events' => true,
        ],
        'description' => [
            'App\\Document\\Events' => true,
        ],
        'picture' => [
            'App\\Document\\Events' => true,
        ],
        'place' => [
            'App\\Document\\Events' => true,
        ],
        'planner' => [
            'App\\Document\\Events' => true,
        ],
        'title' => [
            'App\\Document\\Events' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertiesd2cba = [
        
    ];

    private static $signaturec897f69a6b4ab45802b81b9a0c8b20cd = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxOToiQXBwXERvY3VtZW50XEV2ZW50cyI7czo3OiJmYWN0b3J5IjtzOjQ0OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ0dob3N0RmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0ODoidjEuMC4xNkBlY2FkYmRjOTA1MmU0YWQwOGM2MGM4YTAyMjY4NzEyZTUwNDI3ZjdjIjtzOjEyOiJwcm94eU9wdGlvbnMiO2E6MTp7czoxNzoic2tpcHBlZFByb3BlcnRpZXMiO2E6MTp7aTowO3M6MjM6IgBBcHBcRG9jdW1lbnRcRXZlbnRzAGlkIjt9fX0=';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializer9dad3($methodName, array $parameters)
    {
        if ($this->initializationTracker97e2a || ! $this->initializer7fde2) {
            return;
        }

        $this->initializationTracker97e2a = true;

        $this->address = '';
        static $cacheApp_Document_Events;

        $cacheApp_Document_Events ?? $cacheApp_Document_Events = \Closure::bind(static function ($instance) {
            $instance->startDate = null;
            $instance->endDate = null;
            $instance->description = '';
            $instance->picture = '';
            $instance->place = '';
            $instance->planner = '';
            $instance->title = '';
        }, null, 'App\\Document\\Events');

        $cacheApp_Document_Events($this);




        $properties = [
            'address' => & $this->address,
        ];

        static $cacheFetchApp_Document_Events;

        $cacheFetchApp_Document_Events ?? $cacheFetchApp_Document_Events = \Closure::bind(function ($instance, array & $properties) {
            $properties['' . "\0" . 'App\\Document\\Events' . "\0" . 'startDate'] = & $instance->startDate;
            $properties['' . "\0" . 'App\\Document\\Events' . "\0" . 'endDate'] = & $instance->endDate;
            $properties['' . "\0" . 'App\\Document\\Events' . "\0" . 'description'] = & $instance->description;
            $properties['' . "\0" . 'App\\Document\\Events' . "\0" . 'picture'] = & $instance->picture;
            $properties['' . "\0" . 'App\\Document\\Events' . "\0" . 'place'] = & $instance->place;
            $properties['' . "\0" . 'App\\Document\\Events' . "\0" . 'planner'] = & $instance->planner;
            $properties['' . "\0" . 'App\\Document\\Events' . "\0" . 'title'] = & $instance->title;
        }, null, 'App\\Document\\Events');

        $cacheFetchApp_Document_Events($this, $properties);

        $result = $this->initializer7fde2->__invoke($this, $methodName, $parameters, $this->initializer7fde2, $properties);
        $this->initializationTracker97e2a = false;

        return $result;
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

        unset($instance->address);

        \Closure::bind(function (\App\Document\Events $instance) {
            unset($instance->startDate, $instance->endDate, $instance->description, $instance->picture, $instance->place, $instance->planner, $instance->title);
        }, $instance, 'App\\Document\\Events')->__invoke($instance);

        $instance->initializer7fde2 = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializer7fde2 && ! $this->initializationTracker97e2a && $this->callInitializer9dad3('__get', array('name' => $name));

        if (isset(self::$publicPropertiesd9ab1[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedPropertiesd2cba[$name])) {
            if ($this->initializationTracker97e2a) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesd2cba[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privatePropertiesd2bfe[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesd2bfe[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker97e2a || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesd2bfe[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

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

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer7fde2 && $this->callInitializer9dad3('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicPropertiesd9ab1[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedPropertiesd2cba[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesd2cba[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privatePropertiesd2bfe[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesd2bfe[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesd2bfe[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer7fde2 && $this->callInitializer9dad3('__isset', array('name' => $name));

        if (isset(self::$publicPropertiesd9ab1[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedPropertiesd2cba[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesd2cba[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesd2bfe[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesd2bfe[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer7fde2 && $this->callInitializer9dad3('__unset', array('name' => $name));

        if (isset(self::$publicPropertiesd9ab1[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedPropertiesd2cba[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedPropertiesd2cba[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privatePropertiesd2bfe[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesd2bfe[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesd2bfe[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer7fde2 && $this->callInitializer9dad3('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer7fde2 && $this->callInitializer9dad3('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7fde2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7fde2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7fde2 && $this->callInitializer9dad3('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializer7fde2;
    }
}
