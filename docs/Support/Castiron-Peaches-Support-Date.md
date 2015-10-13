[API Index](ApiIndex.md)


Castiron\Peaches\Support\Date
---------------


**Class name**: Date

**Namespace**: Castiron\Peaches\Support







    

    





Properties
----------


**$months**





    public  $months = array('january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december')



This property is **static**.



Methods
-------


public **monthStringToInteger** ( string $monthString, string $format )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $monthString | string |  |
| $format | string |  |

--

public **monthIntegerToString** ( integer $monthInteger, string $format )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $monthInteger | integer |  |
| $format | string |  |

--

public **monthStartTimestamp** ( integer $year, string|integer $month )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $year | integer |  |
| $month | string|integer |  |

--

public **monthEndTimestamp** ( integer $year, string|integer $month, DateTimeZone $tz )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $year | integer |  |
| $month | string|integer |  |
| $tz | null|DateTimeZone |  |

--

public **dayStartTimestamp** ( integer $year, string|integer $month, integer $day )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $year | integer |  |
| $month | string|integer |  |
| $day | integer |  |

--

public **dayEndTimestamp** ( integer $year, string|integer $month, integer $day, DateTimeZone $tz )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $year | integer |  |
| $month | string|integer |  |
| $day | integer |  |
| $tz | null|DateTimeZone |  |

--

public **dayStart** ( DateTime $dt )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $dt | DateTime |  |

--

public **dayEnd** ( DateTime $dt )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $dt | DateTime |  |

--

public **spansMultipleDays** ( DateTime $start, DateTime $end )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $start | DateTime |  |
| $end | DateTime |  |

--

public **hasSameDay** ( DateTime $one, DateTime $two )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $one | DateTime |  |
| $two | DateTime |  |

--

public **hasSameMonth** ( DateTime $one, DateTime $two )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $one | DateTime |  |
| $two | DateTime |  |

--

public **hasSameYear** ( DateTime $one, DateTime $two )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $one | DateTime |  |
| $two | DateTime |  |

--

public **hasLaterYear** ( DateTime $one, DateTime $two )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $one | DateTime |  |
| $two | DateTime |  |

--

public **hasLaterMonth** ( DateTime $one, DateTime $two )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $one | DateTime |  |
| $two | DateTime |  |

--

public **hasLaterDay** ( DateTime $one, DateTime $two )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $one | DateTime |  |
| $two | DateTime |  |

--

public **copyDate** ( DateTime $target, DateTime $source )


Copies just the date portion from one DateTime to another





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $target | DateTime |  |
| $source | DateTime |  |

--

public **copyTime** ( DateTime $target, DateTime $source )


Copies just the time portion from one DateTime to another





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $target | DateTime |  |
| $source | DateTime |  |

--

public **reformat** ( string $str, string $inFormat, string $outFormat )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $str | string |  |
| $inFormat | string |  |
| $outFormat | string |  |

--

[API Index](ApiIndex.md)
