<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Product_Name </td>
<td>Product_Description</td>
<td>Price</td>
<td>Status</td>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->Product_Name }}</td>
<td>{{ $product->Product_Description }}</td>
<td>{{ $product->Price }}</td>
<td>{{ $product->Status }}</td>
</tr>
@endforeach
</table>
</body>
</html>