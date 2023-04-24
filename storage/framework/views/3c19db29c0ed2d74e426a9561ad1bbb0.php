<?php if (isset($component)) {
	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
} ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-header', 'data' => ['page' => 'movies']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'movies']); ?>
    <div class="w-full flex flex-col gap-y-1">
        <?php if (isset($component)) {
        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.add-button', 'data' => ['text' => '' . e(__('dashboard.add_movie')) . '', 'link' => 'movie']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('add-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => '' . e(__('dashboard.add_movie')) . '', 'link' => 'movie']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <div class="overflow-y-scroll h-400">
            <?php $__currentLoopData = $movies;
	$__env->addLoop($__currentLoopData);
	foreach($__currentLoopData as $movie): $__env->incrementLoopIndices();
		$loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) {
                	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-component', 'data' => ['body' => $movie, 'id' => '' . e($movie->id) . '', 'link' => 'movie', 'img' => '' . e(false) . '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['body' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($movie), 'id' => '' . e($movie->id) . '', 'link' => 'movie', 'img' => '' . e(false) . '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php endforeach;
	$__env->popLoop();
	$loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/movies-dashboard.blade.php ENDPATH**/ ?>