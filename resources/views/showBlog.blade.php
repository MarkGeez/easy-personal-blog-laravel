


{{ $data->title }}
<br>
{{ \Carbon\Carbon::parse($data->uploaded_at )->format('F j, Y') }}
<br>
{{ $data->content }}