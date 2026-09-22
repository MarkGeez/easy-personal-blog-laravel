<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add.admin')}}" method="POST">
        @csrf
        <input type="text" id="title"> title
        <input type="date" readonly>
        <input type="text" id="content"> content
    </form>
</body>
</html>