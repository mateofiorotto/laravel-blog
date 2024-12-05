<x-layout meta-title='Blog' meta-description='Here you have all of the articles in the website!'>
    <h1 class="hidden">Blog</h1>
    
    <section>
    
        @foreach ($posts as $post)
            <h2>{{ $post['title'] }}</h2>
        @endforeach

    </section>
    
</x-layout>