@extends ('layouts.app')

@section ('content')
<ul>
    @foreach ($posts as $post)
        <li>{{$post->id}} - {{$post->title}} | {{$post->slug}} |</li>
    @endforeach
</ul>


@endsection