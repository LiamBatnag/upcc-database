<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> All posts! </h2>

    <a href="{{ route('posts.create') }}">Create New Post </a>

    @foreach($posts as $post)
    <div>
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        <a href="{{route('posts.edit', $post->id)}}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
            @csrf 
            @method('DELETE')
            <button type="submit" onclick="return confirm('are you sure you want to delet')">Delete</button>
        </div>
        @endforeach
</body>
</html>
