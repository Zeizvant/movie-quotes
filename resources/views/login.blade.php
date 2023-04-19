<!DOCTYPE html>
<html class="h-full bg-gray-50">
    <head>
        <title>{{ __('forms.login') }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="h-full">
    <div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">{{ __('forms.log_in_to_your_account') }}</h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('auth.login') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm flex flex-col gap-2">
                    <div>
                        <input id="username" name="username" type="text" autocomplete="username" required class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="{{ __('forms.username') }}">
                        @error('username')
                        <p class='text-xs text-red-500'>{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="{{ __('forms.password') }}">
                        @error('password')
                        <p class='text-xs text-red-500'>{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <x-icons.block-icon />
                        {{ __('forms.login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    </body>
</html>


