@extends ('layouts.app')

@section ('content')

<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf

    <input type="text" id="title" name='title'>
    <input type="text" id="slug" name="slug">
    <textarea type="text" id="content" name="content" ></textarea>
    
    <button type="submit">Crea</button>
</form>


@endsection