<x-layout meta-title='{{$post->title}}' meta-description='{{$post->body}}'>
<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>
<a href="{{ route('posts.index') }}">Back to All posts</a>
</x-layout>