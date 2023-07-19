<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Your students:</p>
    @foreach ($students as $student)
    <p>{{ $student->name }}</p>
    @endforeach
</body>

</html>