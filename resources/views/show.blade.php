<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9</title>
</head>

<body>
    <p>Id : {{ $student->id }}</p>
    <p>Name : {{ $student->name }}:</p>
    <p>Score :{{ $student->score }}</p>
    <br>
    <p>Activities</p>
    @foreach ($student->activities as $activity)
        <p>{{ $activity->name }}</p>
    @endforeach
</body>

</html>
