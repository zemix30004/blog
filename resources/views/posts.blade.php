@extends('layout')

@section('banner')
<h1>My Blog</h1>

@section('content')
    @foreach ($posts as $post)
            </h1>
            <a href="/posts/{{ $post->id }}">
            {{ $post->title }}
            </a>
            </h1>
    <div>
            {{$post->excerpt}}
    </div>
    </article>
    @endforeach

