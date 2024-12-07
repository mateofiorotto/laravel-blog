<!DOCTYPE html>
<html lang="en">

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
    <title>{{ $metaTitle ?? 'No title'}} | GoTravel</title>
</head>

<body>
    <!--Includes view partials/header-->
    @include('partials.header')

    <main>

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
    <!--Includes view partials/footer-->
    @include('partials.footer')
</body>

</html>
