[API Index](ApiIndex.md)


Castiron\Peaches\Support\Str
---------------


**Class name**: Str

**Namespace**: Castiron\Peaches\Support







    

    





Properties
----------


**$pluralNoChange**





    protected  $pluralNoChange = array('child', 'fish', 'deer', 'sheep', 'bread')



This property is **static**.



**$pluralIrregular**





    protected  $pluralIrregular = array('man' => 'men', 'woman' => 'women', 'child' => 'children', 'tooth' => 'teeth', 'person' => 'people', 'mouse' => 'mice')



This property is **static**.



Methods
-------


public **cCase** ( string $str )


Turns a string from underscored to camel case





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $str | string |  |

--

public **uCase** ( string $str )


Turns a string from camel case to underscored





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $str | string |  |

--

public **startsWith** ( string $haystack, string $needle )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $haystack | string |  |
| $needle | string |  |

--

public **endsWith** ( string $haystack, string $needle )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $haystack | string |  |
| $needle | string |  |

--

public **pluralize** ( integer $count, string $singleStr, null|string $pluralStr )


English _is_ predictable! mostly.

Examples
($x = 3).&#039; &#039;.Str::pluralize($x, &#039;dog&#039;)                    # &quot;3 dogs&quot;
($x = 1).&#039; &#039;.Str::pluralize($x, &#039;banana&#039;)                 # &quot;1 banana&quot;
($x = 6).&#039; &#039;.Str::pluralize($x, &#039;moon&#039;, &#039;moons ago&#039;)      # &quot;6 moons ago&quot;
($x = 1).&#039; &#039;.Str::pluralize($x, &#039;moon&#039;, &#039;moons ago&#039;)      # &quot;1 moon&quot;
($x = 5).&#039; &#039;.Str::pluralize($x, &#039;deer&#039;)                   # &quot;5 deer&quot;



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $count | integer |  |
| $singleStr | string |  |
| $pluralStr | null|string |  |

--

[API Index](ApiIndex.md)
