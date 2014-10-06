@extends('admin._layouts.admin')

@section('content')

    @if(count($posts))
        <ul>
        @foreach($posts as $post)
            <li>
                {{ link_to_route('admin.posts.edit', $post->title, array($post->id)) }}
            </li>
        @endforeach
        </ul>
    @endif

@stop
