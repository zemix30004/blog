<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    {{-- <script src="/js/app.js"></script> --}}
    <title>My blog</title>
</head>
<body>
    <article>
<h1>{{ $post->title }}</h1>
<div>
{{!!$post->body!!}}
</div>
    </article>
    <a href="/" class="">Go back</a>
</body>
</html>
