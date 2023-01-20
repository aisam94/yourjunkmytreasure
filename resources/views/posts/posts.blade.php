@extends('components/layout')
@section('content')

@include('components/_posts-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
    <div class="grid grid-cols-3 justify-items-center mt-5 mx-5 justify-center">
        @foreach( $posts as $post)
        @include('components/post-card', ['post' => $post])
        @endforeach
    </div>
    @else
    <p class='text-center'>No posts yet. Please check back later.</p>
    @endif
</main>