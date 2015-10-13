[API Index](ApiIndex.md)


Castiron\Peaches\Structures\AbstractArray
---------------


**Class name**: AbstractArray

**Namespace**: Castiron\Peaches\Structures



**This class implements**: Iterator, ArrayAccess, Countable



    A basic class that iterates through an array. This is
a starting point for structures that iterate through
a basic array, but apply some special features/constraints
to make the array more useful.

    Class AbstractArray





Properties
----------


**$storage**





    protected array $storage






Methods
-------


public **toArray** (  )











--

public **current** (  )











--

public **next** (  )











--

public **key** (  )











--

public **valid** (  )











--

public **rewind** (  )











--

public **offsetExists** ( $offset )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $offset | mixed |  |

--

public **offsetGet** ( $offset )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $offset | mixed |  |

--

public **offsetSet** ( $offset, $value )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $offset | mixed |  |
| $value | mixed |  |

--

public **offsetUnset** ( $offset )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $offset | mixed |  |

--

public **count** (  )











--

[API Index](ApiIndex.md)
