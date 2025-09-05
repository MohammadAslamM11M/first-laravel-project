@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized</title>
</head>
<body>
    <h1>🚫 Unauthorized</h1>
    <p>Sorry, you are not allowed to perform this action.</p>
    <a href="{{ route('posts.index') }}">Go back to Posts</a>
</body>
</html>
