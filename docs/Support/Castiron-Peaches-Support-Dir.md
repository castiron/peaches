[API Index](ApiIndex.md)


Castiron\Peaches\Support\Dir
---------------


**Class name**: Dir

**Namespace**: Castiron\Peaches\Support







    

    







Methods
-------


public **listCommon** ( string $path, boolean $usePath )


Returns an array of files and directories without &quot;.&quot; or &quot;.

.&quot;.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |
| $usePath | boolean | &lt;p&gt;Instead of just naming the files, return each file appended to the given $path&lt;/p&gt; |

--

public **listDirs** ( string $path, boolean $usePath )


Returns an array of just directories without &quot;.&quot; or &quot;.

.&quot;.



This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |
| $usePath | boolean | &lt;p&gt;Instead of just naming the files, return each file appended to the given $path&lt;/p&gt; |

--

public **listFiles** ( string $path, boolean $usePath )


Returns an array of just the files (no directories).





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |
| $usePath | boolean | &lt;p&gt;Instead of just naming the files, return each file appended to the given $path&lt;/p&gt; |

--

public **dirsExist** ( array $dirs )


Quick test to see that all directories exist.





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $dirs | array |  |

--

public **prependPath** ( $arr, string $path )


Adds the path to all the array values (supposedly strings)





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $arr | mixed |  |
| $path | string |  |

--

[API Index](ApiIndex.md)
