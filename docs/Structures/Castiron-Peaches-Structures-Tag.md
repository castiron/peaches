[API Index](ApiIndex.md)


Castiron\Peaches\Structures\Tag
---------------


**Class name**: Tag

**Namespace**: Castiron\Peaches\Structures







    A simple HTML/XML tag builder

    





Properties
----------


**$attributes**





    protected  $attributes = array()






**$name**





    protected  $name = ''






**$body**





    protected  $body = ''






**$children**





    protected  $children = array()






Methods
-------


public **__construct** ( $name, $attributes )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $name | mixed |  |
| $attributes | mixed |  |

--

public **attribute** ( $key, $val )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $key | mixed |  |
| $val | mixed |  |

--

public **attributes** ( $val )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $val | mixed |  |

--

public **append** (  $tag )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $tag | self |  |

--

public **prepend** (  $tag )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $tag | self |  |

--

public **newChild** ( $name, $attributes )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $name | mixed |  |
| $attributes | mixed |  |

--

public **body** ( $str )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $str | mixed |  |

--

public **__toString** (  )











--

protected **attributesToString** (  )











--

[API Index](ApiIndex.md)
