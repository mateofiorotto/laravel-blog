<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="{{ $metaTitle ?? 'No description' }}">
    <meta name="description" content="{{ $metaDescription ?? 'No description' }}">
    <meta name="keywords" content="GoTravel, Travel, Travel Website, Travel Destinations, Blog, Travel Blog">
    <meta name="author" content="Mateo Fiorotto">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="GoTravel">
    <meta property="og:description" content="GoTravel Website. Check Destinations for travel!">
    <meta name="twitter:card" content="summary_large_image">
    <title>{{ $metaTitle }} | GoTravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex h-screen flex-col bg-slate-100 selection:bg-sky-600 selection:text-sky-50 dark:bg-slate-950 dark:text-slate-100">
    <!--Includes view partials/header-->
    @include('partials.header')
    @if (session('status'))
        <div class="status">
            <P class="bg-green-600 p-4 text-xl text-green-50 dark:bg-green-800">{{ session('status') }}</p>
        </div>
    @endif

    {{-- Other form to do:
@session('status')
    <div class="status">
        <p>{{$value}}</p>
    </div>
@endsession --}}
    <main class="flex-1 p-4">

        <!--Includes component blade view (all content)-->
        {{ $slot }}

        {{-- Optional sidebar --}}
        {{-- @if (isset($sidebar))
        <div id="sidebar">
            <h2>Sidebar</h2>
            <div>
                {{ $sidebar }}
            </div>
        </div>
    @endif --}}
    </main>
    <h1 class="hidden">{{Route::currentRouteName()}} | GoTravel</h1>
    <!--Includes view partials/footer-->
    @include('partials.footer')
</body>

</html>
