[API Index](ApiIndex.md)


Castiron\Peaches\Structures\BucketList
---------------


**Class name**: BucketList

**Namespace**: Castiron\Peaches\Structures



**This class implements**: Countable, Iterator



    Class PriorityList

    





Properties
----------


**$buckets**





    protected array $buckets = array()






**$count**





    protected integer $count






**$index**





    protected integer $index






**$flattenedList**





    protected SplFixedArray $flattenedList






**$indexToBucket**





    protected SplFixedArray $indexToBucket






**$bucketInfo**





    protected array $bucketInfo = array()






Methods
-------


public **__construct** ( array $bucketOrder, boolean $associativeWithBucketInfo )


The bucket IDs can be anything that works as an array index in PHP.








**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $bucketOrder | array |  |
| $associativeWithBucketInfo | boolean |  |

--

public **insert** ( mixed $bucket, mixed $item )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $bucket | mixed |  |
| $item | mixed |  |

--

public **setBucketInfo** ( $bucket, $info )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $bucket | mixed |  |
| $info | mixed |  |

--

public **currentBucket** (  )











--

public **currentBucketInfo** (  )











--

public **bucketExists** ( $bucket )











**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $bucket | mixed |  |

--

public **count** (  )











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


Standard rewind, flattens the buckets into a list (just once)








--

[API Index](ApiIndex.md)
