<x-layout meta-title='Blog' meta-description='Here you have all of the articles in the website!'>
    <h1 class="hidden">Blog</h1>
    {{-- <a href="{{ route('posts.create') }}">Create new post</a> --}}
    
    <section>
    
        @foreach ($posts as $post)
            <h2>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </h2>
        @endforeach

    </section>
    
</x-layout>