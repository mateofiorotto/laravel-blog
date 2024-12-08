<x-layout meta-title='Create new Post' meta-description='Form to create new post'>
    <h2>Create post</h2>

    {{-- FORM 1: Show errors --}}
    {{-- @foreach ($errors->all() as $error) 
        <p>{{$error}}</p>
    @endforeach --}}

   {{-- Check laravel lang (github) if want to translate validations --}}
    <form action="{{ route('posts.store')}}" method="POST">
        {{-- necessary for method post --}}
        @csrf

        @include('posts.form-fields')
        
        <button type="submit">Create</button>
    </form>

    <a href="{{route('posts.index')}}">Go back</a>

    </x-layout>