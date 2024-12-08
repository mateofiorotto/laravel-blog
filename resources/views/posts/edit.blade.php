<x-layout meta-title='{{$post->title}}' meta-description='{{$post->body}}'>
    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post)}}" method="POST">
        {{-- necessary for method post (csrf) and emulate patch method --}}
        @csrf @method('PATCH')
        
        @include('posts.form-fields')

        <button type="submit">Edit</button>
    </form>

    <a href="{{ route('posts.index') }}">Back to All posts</a>
</x-layout>