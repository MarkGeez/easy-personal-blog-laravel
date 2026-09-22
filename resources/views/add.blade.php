<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     @if (session('success'))
        {{ session('success') }}
    @endif
    <form action="{{route('add.admin')}}" method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="text" id="title" name="title" value="{{ old('title') }}"> title
        <textarea id="content" name="content">{{ old('content') }}</textarea> content
        <button type="submit">Save</button>
    </form>
</body>
</html>