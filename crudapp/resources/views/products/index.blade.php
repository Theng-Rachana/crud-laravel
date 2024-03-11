<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <a href="{{ route('create') }}">Create Product</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td><a href="{{route('edit', [$product->id])}}">update</a></td>
                    <td><form action="{{ route('destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete Product</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
