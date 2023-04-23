<form class="mt-8 space-y-6" action="{{ route('auth.login') }}" method="POST">
    @csrf
    <input type="hidden" name="remember" value="true">
    <div class="-space-y-px rounded-md shadow-sm flex flex-col gap-2">
        <x-login-input></x-login-input>
        <x-password-input></x-password-input>
    </div>
    <div>
        <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            <x-icons.block-icon />
            {{ __('forms.login') }}
        </button>
    </div>
</form>
