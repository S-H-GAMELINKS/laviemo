@foreach ($videos["body"]["data"] as $video)
    <p>{!! $video["embed"]["html"] !!}</p>
@endforeach
