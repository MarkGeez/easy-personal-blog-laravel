<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>title</th>
            <th>date</th>
            <th>content</th>
        </tr>
        <tr>
            <td>
                    {{ $data->title }}

            </td>
            <td>    {{ \Carbon\Carbon::parse($data->uploaded_at)->format('F j, Y') }}
</td>
            <td>    {{ $data->content }}
</td>
        </tr>
    </table>
    <form action="{{route('submit.update', ['id' => $data->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="title" value="{{ old('title', $data->title )}}">
        <input value="{{ \Carbon\Carbon::parse($data->uploaded_at)->format('F j, Y') }}" readonly >
        <input type="text" name="content" id="title" value="{{ old('content', $data->content )}} ">

        <button type="submit">submit</button>
    </form>
</body>
</html>