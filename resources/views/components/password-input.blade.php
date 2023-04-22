<div>
    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="{{ __('forms.password') }}">
    @error('password')
    <p class='text-xs text-red-500'>{{ $message }}</p>
    @enderror
</div>
