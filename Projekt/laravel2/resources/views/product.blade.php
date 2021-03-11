<html>
<head>
    <title>Alle Produkte</title>
</head>
<table>
    <tr>
        <th>Name</th>
        <th>Preis</th>
        <th>Details</th>
        <th>Benutzung</th>
        <th>Bild</th>
    </tr>
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->details }}</td>
            <td>{{ $product->manual }}</td>
            <td>{{ $product->image }}</td>
        </tr>
    </table>
</body>
</html>