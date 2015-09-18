<?php

namespace Castiron\Peaches\Structures;

use Castiron\Peaches\Support\Arr;

/**
 *
 * A simple HTML/XML tag builder
 *
 */
class Tag
{
    protected $attributes = [];
    protected $name = '';
    protected $body = '';
    protected $children = [];

    public function __construct($name, $attributes = [])
    {
        $this->name = $name;
        $this->attributes = $attributes;
    }

    public function attribute($key, $val = null)
    {
        if (count(func_get_args()) == 1) {
            return Arr::safe($this->attributes, $key);
        }
        $this->attributes[$key] = $val;
        return $this;
    }

    public function attributes($val = null)
    {
        if (count(func_get_args()) == 1 && is_array($val)) {
            $this->attributes = $val;
            return $this;
        }
        return $this->attributes;
    }

    public function append(self $tag)
    {
        $this->children[] = $tag;
        return $this;
    }

    public function prepend(self $tag)
    {
        array_unshift($this->children, $tag);
        return $this;
    }

    public function newChild($name, $attributes = [])
    {
        $t = new static($name, $attributes);
        $this->children[] = $t;
        return $t;
    }

    public function body($str = null)
    {
        if (count(func_get_args()) == 1) {
            $this->body = $str;
            return $this;
        }
        return $this->body;
    }

    public function __toString()
    {
        $contents = $this->body;
        foreach ($this->children as $child) {
            $contents .= (string) $child;
        }

        if ($contents) {
            $contents = "\n$contents";
        }

        $attrs = $this->attributesToString();
        if ($attrs) {
            $attrs = " $attrs";
        }
        return "<{$this->name}$attrs>{$contents}</{$this->name}>\n";
    }

    protected function attributesToString()
    {
        $attrs = [];
        foreach ($this->attributes() as $key => $val) {
            if (is_string($val)) {
                $attrs[] = "$key=\"$val\"";
            } else {
                $attrs[] = "$key";
            }

        }
        return implode(' ', $attrs);
    }



}