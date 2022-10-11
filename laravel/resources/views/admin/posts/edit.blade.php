@extends ('layouts.app')

@section ('content')

<form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">
    @csrf

    @method('PUT')

    <input type="text" id="title" name='title'>
    <input type="text" id="slug" name="slug" >
    <textarea type="text" id="content" name="content" ></textarea>
    
    <button type="submit">Complete Edit</button>
</form>


@endsection