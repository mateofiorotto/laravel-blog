<div>

    <x-input-label for="title" :value="__('Title')" />
    <x-text-input class="block w-full mt-1" type="text" id="title" name="title" value="{{ old('title', $post->title) }}" />
    <x-input-error class="mt-2" :messages="$errors->get('title')" />
</div>
<div>
    <label for="body">Body of post</label>
    <x-textarea class="block w-full mt-1" name="body" id="body">{{ old('body', $post->body) }}</x-textarea>
    <x-input-error class="mt-2" :messages="$errors->get('body')" />

</div>
