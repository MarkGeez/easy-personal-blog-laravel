<div>
    <h1>Personal blog</h1>

    <table border="1">
        <tr>
            <th>title</th>
            <th>Date</th>
        </tr>
        
            @foreach ($posts as $post )
        <tr>
            <td><a href="{{ route('view.blog' , ["id" => $post->id]) }}">{{$post->title}}</a></td>
                <td> {{ \Carbon\Carbon::parse($post->uploaded_at )->format('F j, Y') }}</td>
        </tr>
    @endforeach

    </table>
   
</div>
