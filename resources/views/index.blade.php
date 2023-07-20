<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Score</th>
        </tr>
        @foreach ($data as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->score }}</td>
            </tr>
        @endforeach
    </table>

    Current page: {{ $data->currentPage() }} <br>
    Total data: {{ $data->total() }} <br>
    Data per page: {{ $data->perPage() }} <br>

    {{ $data->links('pagination::bootstrap-4') }}
</body>

</html>