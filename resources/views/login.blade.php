<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Log in</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="id">ID</label>
        <input id="id" name="id" type="number" value="{{ old('id') }}" required>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>

        <label>
            <input name="remember" type="checkbox" value="1">
            Remember me
        </label>

        <button type="submit">Log in</button>
    </form>
</body>
</html>
