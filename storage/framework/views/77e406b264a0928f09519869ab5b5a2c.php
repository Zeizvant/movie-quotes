<?php if (isset($component)) {
	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
} ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-header', 'data' => ['page' => 'quotes']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['page' => 'quotes']); ?>
    <div class="w-full flex flex-col gap-y-1">
        <?php if (isset($component)) {
        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.add-button', 'data' => ['text' => '' . e(__('dashboard.add_quote')) . '', 'link' => 'quote']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('add-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => '' . e(__('dashboard.add_quote')) . '', 'link' => 'quote']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <div class="overflow-y-scroll h-400">
            <?php $__currentLoopData = $quotes;
	$__env->addLoop($__currentLoopData);
	foreach($__currentLoopData as $quote): $__env->incrementLoopIndices();
		$loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) {
                	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.info-component', 'data' => ['body' => $quote, 'id' => '' . e($quote->id) . '', 'link' => 'quote', 'img' => '' . $quote->thumbnail . '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('info-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['body' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($quote), 'id' => '' . e($quote->id) . '', 'link' => 'quote', 'img' => '' . $quote->thumbnail . '']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/quotes-dashboard.blade.php ENDPATH**/ ?>