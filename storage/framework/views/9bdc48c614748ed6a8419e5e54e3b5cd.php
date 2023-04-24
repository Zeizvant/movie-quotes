<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(__('dashboard.movie_quotes')); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    </head>
    <body class="w-full flex justify-center gradient static">
        <div class="absolute lg:fixed left-[54px] inset-y-0 flex flex-col flex flex-col mt-5 lg:justify-center space-y-[15px]">
            <a href="<?php echo e(route('language.change', ['locale' => 'en'])); ?>"><div class="<?php echo e(app()->getLocale() === 'en' ? 'language-buttons bg-white text-black bg-white' : 'language-buttons'); ?>">en</div></a>
            <a href="<?php echo e(route('language.change', ['locale' => 'ka'])); ?>"><div class="<?php echo e(app()->getLocale() === 'ka' ? 'language-buttons bg-white text-black bg-white' : 'language-buttons'); ?>">ka</div></a>
        </div>
        <?php echo e($slot); ?>

    </body>
</html>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/layout.blade.php ENDPATH**/ ?>