<?php

namespace MongoDBODMProxies\__PM__\App\Document\Users;

class Generated46690cb0fd7fd0dbe0828830a1c6083e extends \App\Document\Users implements \ProxyManager\Proxy\GhostObjectInterface
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
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privatePropertiesd2bfe = [
        'firstName' => [
            'App\\Document\\Users' => true,
        ],
        'lastName' => [
            'App\\Document\\Users' => true,
        ],
        'dateNaissance' => [
            'App\\Document\\Users' => true,
        ],
        'email' => [
            'App\\Document\\Users' => true,
        ],
        'password' => [
            'App\\Document\\Users' => true,
        ],
        'profilPicture' => [
            'App\\Document\\Users' => true,
        ],
        'role' => [
            'App\\Document\\Users' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedPropertiesd2cba = [
        
    ];

    private static $signature46690cb0fd7fd0dbe0828830a1c6083e = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxODoiQXBwXERvY3VtZW50XFVzZXJzIjtzOjc6ImZhY3RvcnkiO3M6NDQ6IlByb3h5TWFuYWdlclxGYWN0b3J5XExhenlMb2FkaW5nR2hvc3RGYWN0b3J5IjtzOjE5OiJwcm94eU1hbmFnZXJWZXJzaW9uIjtzOjQ4OiJ2MS4wLjE2QGVjYWRiZGM5MDUyZTRhZDA4YzYwYzhhMDIyNjg3MTJlNTA0MjdmN2MiO3M6MTI6InByb3h5T3B0aW9ucyI7YToxOntzOjE3OiJza2lwcGVkUHJvcGVydGllcyI7YToxOntpOjA7czoyMjoiAEFwcFxEb2N1bWVudFxVc2VycwBpZCI7fX19';

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

        static $cacheApp_Document_Users;

        $cacheApp_Document_Users ?? $cacheApp_Document_Users = \Closure::bind(static function ($instance) {
            $instance->dateNaissance = null;
        }, null, 'App\\Document\\Users');

        $cacheApp_Document_Users($this);




        $nonReferenceableProperties = new class() {
            public ?string $firstName_on_App_Document_Users;
            public ?string $lastName_on_App_Document_Users;
            public ?string $email_on_App_Document_Users;
            public ?string $password_on_App_Document_Users;
            public ?string $profilPicture_on_App_Document_Users;
            public ?string $role_on_App_Document_Users;
        };
        $properties = [
            '' . "\0" . 'App\\Document\\Users' . "\0" . 'firstName' => & $nonReferenceableProperties->firstName_on_App_Document_Users,
            '' . "\0" . 'App\\Document\\Users' . "\0" . 'lastName' => & $nonReferenceableProperties->lastName_on_App_Document_Users,
            '' . "\0" . 'App\\Document\\Users' . "\0" . 'email' => & $nonReferenceableProperties->email_on_App_Document_Users,
            '' . "\0" . 'App\\Document\\Users' . "\0" . 'password' => & $nonReferenceableProperties->password_on_App_Document_Users,
            '' . "\0" . 'App\\Document\\Users' . "\0" . 'profilPicture' => & $nonReferenceableProperties->profilPicture_on_App_Document_Users,
            '' . "\0" . 'App\\Document\\Users' . "\0" . 'role' => & $nonReferenceableProperties->role_on_App_Document_Users,
        ];

        static $cacheFetchApp_Document_Users;

        $cacheFetchApp_Document_Users ?? $cacheFetchApp_Document_Users = \Closure::bind(function ($instance, array & $properties) {
            $properties['' . "\0" . 'App\\Document\\Users' . "\0" . 'dateNaissance'] = & $instance->dateNaissance;
        }, null, 'App\\Document\\Users');

        $cacheFetchApp_Document_Users($this, $properties);

        $result = $this->initializer7fde2->__invoke($this, $methodName, $parameters, $this->initializer7fde2, $properties);
        static $cacheAssignApp_Document_Users;

        $cacheAssignApp_Document_Users ?? $cacheAssignApp_Document_Users = \Closure::bind(function ($instance, $nonReferenceableProperties) {
            isset($nonReferenceableProperties->firstName_on_App_Document_Users) && $instance->firstName = $nonReferenceableProperties->firstName_on_App_Document_Users;
            isset($nonReferenceableProperties->lastName_on_App_Document_Users) && $instance->lastName = $nonReferenceableProperties->lastName_on_App_Document_Users;
            isset($nonReferenceableProperties->email_on_App_Document_Users) && $instance->email = $nonReferenceableProperties->email_on_App_Document_Users;
            isset($nonReferenceableProperties->password_on_App_Document_Users) && $instance->password = $nonReferenceableProperties->password_on_App_Document_Users;
            isset($nonReferenceableProperties->profilPicture_on_App_Document_Users) && $instance->profilPicture = $nonReferenceableProperties->profilPicture_on_App_Document_Users;
            isset($nonReferenceableProperties->role_on_App_Document_Users) && $instance->role = $nonReferenceableProperties->role_on_App_Document_Users;
        }, null, 'App\\Document\\Users');

        $cacheAssignApp_Document_Users($this, $nonReferenceableProperties);
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

        \Closure::bind(function (\App\Document\Users $instance) {
            unset($instance->firstName, $instance->lastName, $instance->dateNaissance, $instance->email, $instance->password, $instance->profilPicture, $instance->role);
        }, $instance, 'App\\Document\\Users')->__invoke($instance);

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
