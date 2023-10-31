@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $post->title }}</h1>
{{-- {{ $post->body }} --}}
{!! $post->body !!}
<a href="/blog">Back to posts</a>
@endsection