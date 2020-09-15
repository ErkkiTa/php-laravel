<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="p-12">
    <table class="w-full table-auto">
        <thead class="font-bold mb-4">
            <tr>
                <td>Pealkiri</td>
                <td>Autor</td>
                <td>Aasta</td>
                <td>Lehekülgi</td>
                <td>Laoseis</td>
                <td>Tüüp</td>
                <td>Hind</td>
            </tr>
        </thead>
        <tbody class="text-sm">
        @foreach ($books as $book) {}
        <tr>
                <td class="border rounded px-4 py-2">{{$book->title}}</td>
                <td class="border rounded px-4 py-2">{{book->release_date}}</td>
                <td class="border rounded px-4 py-2">{{$book->language}}</td>
                <td class="border rounded px-4 py-2">{{$book->pages}}</td>
                <td class="border rounded px-4 py-2">{{$book->stock_saldo>}}</td>
                <td class="border rounded px-4 py-2">{{$book->type}}</td>
                <td class="border rounded px-4 py-2">{{$book->price}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>