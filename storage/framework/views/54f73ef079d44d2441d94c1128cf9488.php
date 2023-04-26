<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['page']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['page']); ?>
<?php foreach (array_filter((['page']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__('dashboard.dashboard')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1 flex items-baseline gap-3">
                <?php echo e(auth()->user()->username); ?>

                <?php if(app()->getLocale() === 'ka'): ?>
                    <a href="<?php echo e(route('language.change', ['locale' => 'en'])); ?>"><div class="w-10 h-10 language-buttons text-white bg-indigo-600">en</div></a>
                <?php else: ?>
                    <a href="<?php echo e(route('language.change', ['locale' => 'ka'])); ?>"><div class="w-10 h-10 language-buttons text-white bg-indigo-600">ka</div></a>
                <?php endif; ?>
            </div>
            <div class="lg:flex lg:flex-1 lg:justify-end">
                <form action="<?php echo e(route('auth.logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button><?php echo e(__('dashboard.log_out')); ?></button>
                </form>
            </div>
        </nav>

    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl"><?php echo e(__('dashboard.dashboard')); ?></h1>
                <div class="mt-10 flex items-center justify-center gap-x-6 pb-20">
                    <a href="<?php echo e(route('admin.quote.show')); ?>" class="<?php echo e($page === "quotes" ? 'main-dashboard-button' : 'secondary-dashboard-button'); ?>"><?php echo e(__('dashboard.quotes')); ?></a>
                    <a href="<?php echo e(route('admin.movie.show')); ?>" class="<?php echo e($page === "movies" ? 'main-dashboard-button' : 'secondary-dashboard-button'); ?>"><?php echo e(__('dashboard.movies')); ?></a>
                </div>
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/dashboard-header.blade.php ENDPATH**/ ?>