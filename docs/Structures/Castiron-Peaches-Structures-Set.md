[API Index](ApiIndex.md)


Castiron\Peaches\Structures\Set
---------------


**Class name**: Set

**Namespace**: Castiron\Peaches\Structures


**Parent class**: [Castiron\Peaches\Structures\AbstractArray](Castiron-Peaches-Structures-AbstractArray.md)





    A basic Set implementation. Simply uses php array keys as hashes,
but guarantees uniqueness.

    NOTE: Right now, this is only for simple values (integers, strings, ...) that
can be listed as a key for an array. See array_unique for restrictions.

Class Set





Properties
----------


**$storage**





    protected array $storage






Methods
-------


public **__construct** ( $vals )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $vals | mixed |  |

--

public **add** ( Set $set )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $set | array|[Set](Castiron-Peaches-Structures-Set.md) |  |

--

public **remove** ( Set $set )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $set | array|[Set](Castiron-Peaches-Structures-Set.md) |  |

--

public **union** ( Set $set )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $set | array|[Set](Castiron-Peaches-Structures-Set.md) |  |

--

public **intersection** ( Set $set )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $set | array|[Set](Castiron-Peaches-Structures-Set.md) |  |

--

public **toArray** (  )











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

public **count** (  )











--

[API Index](ApiIndex.md)
