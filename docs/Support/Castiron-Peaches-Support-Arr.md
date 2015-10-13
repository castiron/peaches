[API Index](ApiIndex.md)


Castiron\Peaches\Support\Arr
---------------


**Class name**: Arr

**Namespace**: Castiron\Peaches\Support







    

    



Constants
----------


### KEY_ONLY

    const KEY_ONLY = 1





### VAL_ONLY

    const VAL_ONLY = 2





### KEY_VAL

    const KEY_VAL = 4







Methods
-------


public **defaults** ( array $defaults, array $overrides, boolean $strict )


Returns an array with the default values being overwritten by any values in the $overrides array.

Modifies the original array.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $defaults | array |  |
| $overrides | array |  |
| $strict | boolean | &lt;p&gt;If strict, then only the keys in $defaults will be merged from overrides&lt;/p&gt; |

--

public **keysUnderscoreToLowerCamelCase** ( array $array )


Converts array keys from underscore to lower camel case.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **walkKeysRecursive** ( array $array, callable $func )


Apply a function to all keys of an array.

Because `array_walk_recursive` does not allow altering keys



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $func | callable | &lt;p&gt;Returns a new key&lt;/p&gt; |

--

public **mapMethod** ( array $array, string $method )


Apply a method to each object in an array and get the results as an array.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $method | string |  |

--

public **swapByKeys** ( array $array, mixed $alphaKey, mixed $betaKey )


Swaps two values in an array by key.

$betaKey&#039;s value will have $alphaKey&#039;s value and vice versa.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $alphaKey | mixed |  |
| $betaKey | mixed |  |

--

public **moveToFirstByKey** ( array $array, mixed $key )


Moves an element to the beginning of the array while maintaining
the association between the key and the value.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $key | mixed |  |

--

public **flatten** ( array $array )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **sortBy** ( array $array, mixed $key )


Use an accessor (property, method, or callable) to sort an array.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $key | mixed |  |

--

public **groupBy** ( array $array, mixed $key )


Use an accessor (property, method, or callable) to group an array.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $key | mixed |  |

--

public **spliceWhere** ( array $array, callable $where, integer $limit )


Remove and return values from an array using a callable.

- If $limit is greater than 0, then only that many results can be returned.
- If $where return -1, then that breaks the loop and returns early.
- If $where returns true or equivalent to true, then that value is taken from the
  given $array and added to the result set.

NOTE: This alters the given array.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $where | callable |  |
| $limit | integer |  |

--

public **find** ( array $array, callable $where, integer $callableArgs, mixed $notFoundValue )


Returns the first value where the callable returns true.

Callable takes $val, $key as args unless specified differently with a flag.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $where | callable |  |
| $callableArgs | integer | &lt;p&gt;Which arguments the callable takes&lt;/p&gt; |
| $notFoundValue | mixed | &lt;p&gt;Which value to return to signify no value was found.&lt;/p&gt; |

--

public **findNot** ( array $array, callable $where, integer $callableArgs, mixed $notFoundValue )


Returns the first value where the callable returns false.

Callable takes $val, $key as args unless specified differently with a flag.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $where | callable |  |
| $callableArgs | integer | &lt;p&gt;Which arguments the callable takes&lt;/p&gt; |
| $notFoundValue | mixed | &lt;p&gt;Which value to return to signify no value was found.&lt;/p&gt; |

--

public **filterByKeys** ( array $array, array $keys )


Returns a new array with only the elements with the given keys.

Associations are preserved.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $keys | array |  |

--

public **removeByKeys** ( array $array, array $keys )


Returns a new array with only the elements with the given keys.

Associations are preserved.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $keys | array |  |

--

public **findWithKey** ( array $array, callable $where )


Returns the first value where the callable returns true.

Callable only takes $key as argument.
Only works if no values are -1.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $where | callable |  |

--

public **shuffleAssoc** ( array $array )


Shuffle an array preserving the key/value pairs.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **selectRand** ( array $array, integer $count )


Selects random key/value pairs from the given array and returns
a new array with those pairs.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $count | integer |  |

--

public **sum** ( array $array )


Returns the sum of the array values





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **maxKey** ( array $array )


Returns the key with the highest value. If there are multiple keys
with the highest value, then the last one is returned.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **minKey** ( array $array )


Returns the key with the lowest value. If there are multiple keys
with the lowest value, then the last one is returned.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **isSameByKeys** ( array $a, array $b, array $keys, boolean $keysRequired )


Checks if two arrays have the same values for the given set of keys





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $a | array |  |
| $b | array |  |
| $keys | array |  |
| $keysRequired | boolean | &lt;p&gt;If true, this fails if either array (a or b) does not contain a value for the provided keys&lt;/p&gt; |

--

public **hasValuesForKeys** ( array $target, array $keys )


Returns TRUE if the $target has a truey value for the given $keys.

NOTE: Values with 0 are considered FALSE here.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $target | array |  |
| $keys | array |  |

--

public **describeDifferencesByKeys** ( array $alpha, array $beta )


Tells you how two arrays are different according to their keys.

Returns an array of the original key/values but split like so:
  &#039;both&#039;  -&gt; Keys are the same in both arrays
  &#039;alpha&#039; -&gt; Keys are unique to the alpha array
  &#039;beta&#039;  -&gt; Keys are unique to the beta array



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $alpha | array |  |
| $beta | array |  |

--

public **describeDifferences** ( array $alpha, array $beta )


Tells you how two arrays are different.

Returns an array of the original values but split like so:
  &#039;both&#039;  -&gt; Values are the same in both arrays
  &#039;alpha&#039; -&gt; Values are unique to the alpha array
  &#039;beta&#039;  -&gt; Values are unique to the beta array



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $alpha | array |  |
| $beta | array |  |

--

public **isIndexed** ( array $array )


Indexed if all keys are numeric (1 or &quot;1&quot;)





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **isAssoc** ( array $array )


Associative if no keys are numeric.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **isTraversable** ( Traversable $storage )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $storage | array|Traversable |  |

--

public **column** ( array $rows, mixed $valueColumn, null $keyColumn )


Creates a new array from a set of &quot;rows&quot; with the
provided arguments extracted out:

$rows = [
  [&#039;one&#039; =&gt; 1, &#039;two&#039; =&gt; 2, &#039;three&#039; =&gt; 3],
  [&#039;one&#039; =&gt; &#039;a&#039;, &#039;two&#039; =&gt; &#039;b&#039;, &#039;three&#039; =&gt; &#039;c&#039;]
];

// You must pass a key or value field to use
Arr::column($rows); // throws error, must provide a key or a value column to use

// Passing value and key fields returns associative array
Arr::column($rows, &#039;one&#039;, &#039;three&#039;) returns:  [3 =&gt; 1, &#039;c&#039; =&gt; &#039;a&#039;]

// Passing just value field returns indexed array
Arr::column($rows, &#039;one&#039;)          returns:  [1, &#039;a&#039;]

// Passing just key field returns same array of &quot;rows&quot; with the key field as the index
Arr::column($rows, NULL, &#039;one&#039;)    returns:  [1 =&gt; [&#039;one&#039; =&gt; 1, ...], &#039;a&#039; =&gt; [...]]



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $rows | array |  |
| $valueColumn | mixed |  |
| $keyColumn | null |  |

--

public **toStdClass** ( array $array )


Converts multidimensional associative arrays into a
stdClass object. This works recursively, but whenever
it comes across an indexed array (as opposed to
associative) it will leave that as an array though
it will convert any associative array values of that
indexed array into stdClass objects.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |

--

public **fromStdClass** ( stdClass $obj )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $obj | stdClass |  |

--

protected **recursiveToStdClass** ( mixed $val )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $val | mixed |  |

--

protected **recursiveFromStdClass** ( mixed $val )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $val | mixed |  |

--

public **commaListToArray** ( array|string $items, string $msg )


Converts a comma list to an array. No-op for arrays. Throws exception
if not a string or an array.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $items | array|string |  |
| $msg | string |  |

--

public **safe** ( ArrayAccess $array, mixed $index, mixed $default )


Access an array element by index regardless of whether that
index has been defined.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array|ArrayAccess |  |
| $index | mixed | &lt;p&gt;If $index is array, then it&#039;s assumed we should dig recursively&lt;/p&gt; |
| $default | mixed |  |

--

public **safePath** ( array $array, string $path, mixed $default, string $pathDelimiter )


Same as Arr::safe, but allows using a string value like &quot;key.nestedKey.moreNestedKey&quot;





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $path | string |  |
| $default | mixed |  |
| $pathDelimiter | string |  |

--

public **safeAppend** ( array $array, mixed $index, null|mixed $value )


Sometimes you want to add elements to the end of an array,
but in nested arrays you don&#039;t know if the array you&#039;re
adding to has been initialized yet. This helps.

You can also do nested appends:

Arr::safeAppend(&#039;grandma&#039;, &#039;mom&#039;, &#039;daughter&#039;, &#039;Sara&#039;);

becomes: [&#039;grandma&#039; =&gt; [&#039;mom&#039; =&gt; [&#039;daughter&#039; =&gt; [&#039;Sarah&#039;]]]]



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $index | mixed |  |
| $value | null|mixed |  |

--

public **safeSet** ( array $array, mixed $index, null|mixed $value )


Sometimes you want to set elements to the end of an array,
but in nested arrays you don&#039;t know if the array you&#039;re
adding to has been initialized yet. This helps.

You can also do nested sets:

Arr::safeAppend(&#039;grandma&#039;, &#039;mom&#039;, &#039;daughter&#039;, &#039;Sara&#039;);

becomes: [&#039;grandma&#039; =&gt; [&#039;mom&#039; =&gt; [&#039;daughter&#039; =&gt; &#039;Sarah&#039;]]]



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | array |  |
| $index | mixed |  |
| $value | null|mixed |  |

--

[API Index](ApiIndex.md)
