<label for="title">Title</label>
<input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
@error('title')
    <p class="error-message">{{ $message }}</p>
@enderror

<label for="body">Body of post</label>
<textarea name="body" id="body">{{ old('body', $post->body) }}</textarea>
@error('body')
    <p class="error-message">{{ $message }}</p>
@enderror
