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
            <th>Action</th>
        </tr>
        @foreach ($data as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>
                    <a href="{{ route('show', $student->id) }}">
                        {{ $student->name }}
                    </a>
                </td>
                <td>{{ $student->score }}</td>
                <td>
                    <form action="{{ route('edit', $student) }}" method="get">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    Current page: {{ $data->currentPage() }} <br>
    Total data: {{ $data->total() }} <br>
    Data per page: {{ $data->perPage() }} <br>

    {{ $data->links('pagination::bootstrap-4') }}
</body>

</html>
