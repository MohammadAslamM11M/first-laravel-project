<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <a href="{{route('posts.create')}}">Create New Post</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->content }} <br>
                <em>Author: {{ $post->user->name ?? 'Unknown' }}</em>

                @can('update', $post)
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                @endcan

                @can('delete', $post)
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endcan
            </li>
        @endforeach
    </ul>
</body>
</html>