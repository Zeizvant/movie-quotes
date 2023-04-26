<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['quote']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['quote']); ?>
<?php foreach (array_filter((['quote']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if($quote != null): ?>
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <img src="<?php echo e(asset('storage/' . $quote->thumbnail)); ?>" alt="movie image" class="w-700 h-400 object-cover"/>
            <p class="text-center"><?php echo e($quote->getTranslation('body', app()->getLocale())); ?></p>
            <a class="underline mb-169" href="<?php echo e(route("movie.show", ['movie' => $quote->movie->id])); ?>"><?php echo e($quote->movie->getTranslation('name', app()->getLocale())); ?></a>
        </div>
    <?php else: ?>
        <div class="w-1213 mt-228 h-fit flex flex-col items-center gap-65 text-5xl text-white">
            <p><?php echo e(__('dashboard.no_data')); ?></p>
        </div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/landing.blade.php ENDPATH**/ ?>