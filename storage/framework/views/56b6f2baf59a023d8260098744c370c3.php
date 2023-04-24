<!DOCTYPE html>
<html class="h-full bg-gray-50">
    <head>
        <title><?php echo e(__('forms.login')); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    </head>
    <body class="h-full">
    <div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900"><?php echo e(__('forms.log_in_to_your_account')); ?></h2>
            </div>
            <?php if (isset($component)) {
            	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
            } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.login-form', 'data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('login-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    </div>
    </body>
</html>


<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/login.blade.php ENDPATH**/ ?>