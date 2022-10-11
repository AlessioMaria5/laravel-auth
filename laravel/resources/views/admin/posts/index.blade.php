@extends ('layouts.app')

@section ('content')
<a href="{{route('admin.posts.create')}}">+ Nuovo post</a>
<ul>
    @foreach ($posts as $post)
        <li>{{$post->id}} - {{$post->title}} | {{$post->slug}} | 
            <a href="{{route('admin.posts.edit', $post->id )}}">Edit</a>

            <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina</button>
            </form>
        </li>
    @endforeach
</ul>


@endsection