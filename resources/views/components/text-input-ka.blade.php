@props(['type', 'data', 'value'])
<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
    <input value="{{ $value }}" type="text" name="name[ka]" id="name_ka" autocomplete="name[ka]" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $data === 'movie' ? __('forms.enter_name') : __('forms.enter_quote')}}" />
</div>
@error('name.ka')
<p class='text-xs text-red-500'>{{ $message }}</p>
@enderror
