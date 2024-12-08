<x-layout meta-title='Blog' meta-description='Here you have all of the articles in the website!'>

    <h1 class="hidden">Blog</h1>

    <a href="{{ route('posts.create') }}">Create new post</a>
    
    <section>
    
        @foreach ($posts as $post)
        <div>
            <h2>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </h2>
            <a href="{{route('posts.edit', $post)}}">Edit</a>
            <form action="{{route('posts.destroy', $post)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        @endforeach

    </section>
    
</x-layout>