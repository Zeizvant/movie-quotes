<!DOCTYPE html>
<html class="h-full bg-gray-50">
<head>
    <title><?php echo e($type === 'update' ? __('forms.update') : __('forms.add')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="h-full md:flex md:justify-center md:items-center">
    <?php if($type == 'update' && $data == 'movie'): ?>
        <?php if (isset($component)) {
        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.store-movie-quotes-form', 'data' => ['type' => $type, 'data' => '' . e($data) . '', 'value' => $value]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-movie-quotes-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type), 'data' => '' . e($data) . '', 'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php elseif($type == 'update' && $data == 'quote'): ?>
        <?php if (isset($component)) {
        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.store-movie-quotes-form', 'data' => ['type' => $type, 'data' => '' . e($data) . '', 'value' => $value, 'movies' => $movies]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-movie-quotes-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type), 'data' => '' . e($data) . '', 'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value), 'movies' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($movies)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php elseif($data == 'quote'): ?>
        <?php if (isset($component)) {
        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.store-movie-quotes-form', 'data' => ['type' => '$type', 'data' => '' . e($data) . '', 'movies' => $movies]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-movie-quotes-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => '$type', 'data' => '' . e($data) . '', 'movies' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($movies)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php else: ?>
        <?php if (isset($component)) {
        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.store-movie-quotes-form', 'data' => ['type' => '$type', 'data' => '' . e($data) . '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('store-movie-quotes-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => '$type', 'data' => '' . e($data) . '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/store-quote-movie.blade.php ENDPATH**/ ?>