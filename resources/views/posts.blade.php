@extends('layout')

@section('banner')
<h1>My Blog</h1>

@section('content')
    @foreach ($posts as $post)
    <article class="{{ $$loop->even ? 'foobar' : '' }}">
            </h1>
            <a href="posts{{ $post->slug }}">
                    {{ $post->title }}
            </a>
            </h1>
    <div>
                    {{$post->excerpt}}
    </div>
    </article>
    @endforeach

