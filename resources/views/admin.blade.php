<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>dsa</div>

    @if (session('success'))
        {{ session('success') }}
    @endif

    <a href="{{ route('add.admin') }}">add</a>
    <div>
        <table border="1">
            <tr>
                <th>title</th>
            </tr>
        @foreach ($posts as $post)
            
            <tr>
                <td>  {{ $post->title }}</td>
                <td> {{ \Carbon\Carbon::parse($post->uploaded_at )->format('F j, Y') }}</td>
                <td> <a href="{{ route('update.admin', $post->id) }}">UPDATE</a>
      </td>
                <td>


                    <form action="{{ route('delete.blog', ["id" => $post->id ]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                   
                </td>

            </tr>

    
           
        @endforeach
         </table>

    </div>
</body>
</html>