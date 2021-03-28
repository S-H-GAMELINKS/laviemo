@foreach ($videos["body"]["data"] as $video)
    <p>{{ $video["link"] }}</p>
@endforeach
