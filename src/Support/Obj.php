<?php

namespace Castiron\Peaches\Support;

class Obj
{
    /**
     * Takes something and tries to use $key to access a value
     * from that thing. Something can be an array or an object.
     * Key can be a method name or
     *
     * @param mixed $obj
     * @param mixed $key
     * @return mixed
     */
    public static function access($obj, $key)
    {
        $args = array_slice(func_get_args(), 2);

        // property or method
        if (is_string($key)) {
            if (is_array($obj)) {
                return Arr::safe($obj, $key);
            }

            if (method_exists($obj, $key)) {
                return call_user_func_array([$obj, $key], $args);
            }

            return $obj->{$key};
        }

        // callable that takes an object
        if (is_callable($key)) {
            return call_user_func_array($key, array_merge([$obj], $args));
        }

    }

    /**
     * Creates a function that can take any number of ways
     * to access values on an object for the given key.
     *
     * @param mixed $key
     * @return \Closure
     */
    public static function accessor($key)
    {
        $args = array_slice(func_get_args(), 1);
        return function ($obj) use ($key, $args) {
            return call_user_func_array([static::class, 'access'], array_merge([$obj, $key], $args));
        };
    }
}