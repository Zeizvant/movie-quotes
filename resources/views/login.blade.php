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
            <x-login-form></x-login-form>
        </div>
    </div>
    </body>
</html>


