<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input class="block w-full mt-1" id="title" name="title" type="text" value="{{old('title', $post->title)}}"/>
        <x-input-error :messages="$errors->get('title')" class="mt-2"/>
</div>

<div>
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea id="body" class="block w-full mt-1" name="body">{{ old('body', $post->body) }}</x-textarea>
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>

