<?php

namespace Starweb\Api\Model;

abstract class Model implements ModelInterface
{
    /**
     * @var array
     */
    protected static $properties = [];

    /**
     * @var array
     */
    protected $attributes = [];


    /**
     * Magic method used to automate getters & setters for row data.
     *
     * @param string $name
     * @param array  $arguments
     * @return mixed
     */
    public function __call($name, array $arguments = [])
    {
        $propertyName = lcfirst(substr($name, 3));

        if (strpos($name, 'get') === 0 && isset(static::$properties[$propertyName])) {
            return $this->getAttribute($propertyName);
        } elseif (strpos($name, 'set') === 0 && isset(static::$properties[$propertyName])) {
            $argumentCount = count($arguments);
            if ($argumentCount >= 1 && $argumentCount <= 3) {
                return $this->setDbValue($propertyName, ...$arguments);
            } else {
                throw new \BadMethodCallException("Invalid argument count[{$argumentCount}] for {$name}()");
            }
        } else {
            throw new \BadMethodCallException("No method named {$name}()");
        }
    }

    protected function getAttribute($name)
    {
        return $this->attributes[$name] ?? null;
    }
}
