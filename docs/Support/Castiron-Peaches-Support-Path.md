[API Index](ApiIndex.md)


Castiron\Peaches\Support\Path
---------------


**Class name**: Path

**Namespace**: Castiron\Peaches\Support







    

    







Methods
-------


public **ext** ( string $path, string $newExt )


1. Get the extension
2. Set the extension (if $newExt is there)





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |
| $newExt | string |  |

--

public **dir** ( string $path )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |

--

public **noDir** ( string $path )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |

--

public **noExt** ( string $path )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |

--

public **make** (  )


Path::make(&#039;some/dir&#039;,&#039;file&#039;,&#039;xml&#039;)
Path::make([&#039;some&#039;,&#039;dir&#039;], &#039;file&#039;, &#039;xml&#039;)
Path::make([&#039;some&#039;,&#039;dir&#039;,&#039;file&#039;,&#039;xml&#039;])
Path::make([&#039;some&#039;,&#039;dir&#039;,&#039;file&#039;], &#039;xml&#039;)
Path::make([&#039;some&#039;,&#039;dir&#039;], &#039;file.xml&#039;)
=&gt; &#039;some/dir/file.xml&#039;





This method is **static**.



--

public **join** (  )


Same as Path::make but no extension





This method is **static**.



--

public **diff** ( string $path1, string $path2 )


Returns an array like [$commonPath, $path1Additional, $path2Additional]





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path1 | string |  |
| $path2 | string |  |

--

public **common** ( $array )








This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $array | mixed |  |

--

protected **trim** ( string $path )


Removes any slashes at the beginning or end





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |

--

protected **rtrim** ( string $path )


Removes any slashes at the beginning or end





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |

--

protected **ltrim** ( string $path )


Removes any slashes at the beginning or end





This method is **static**.



**Parameters**:

| Parameter | Type | Description |
|-----------|------|-------------|
| $path | string |  |

--

[API Index](ApiIndex.md)
