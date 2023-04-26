<?php if (isset($component)) {
	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
} ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout', 'data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if($movie): ?>
        <div class="mt-40 lg:mt-20 mb-20">
            <h1 class="text-white text-5xl"><?php echo e($movie->getTranslation('name', app()->getLocale())); ?></h1>
            <?php if(count($quotes) > 0): ?>
                <div class="flex flex-col gap-y-16 mt-[82px]">
                    <?php $__currentLoopData = $quotes;
            	$__env->addLoop($__currentLoopData);
            	foreach($__currentLoopData as $quote): $__env->incrementLoopIndices();
            		$loop = $__env->getLastLoop(); ?>
                        <?php if (isset($component)) {
                        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.quote-component', 'data' => ['src' => '' . $quote->thumbnail . '', 'body' => '' . $quote->getTranslation('body', app()->getLocale()) . '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('quote-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => '' . $quote->thumbnail . '', 'body' => '' . $quote->getTranslation('body', app()->getLocale()) . '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php endforeach;
            	$__env->popLoop();
            	$loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="mt-40 lg:mt-20 mb-20">
                    <h1 class="text-white text-5xl"><?php echo e(__('dashboard.no_data')); ?></h1>
                </div>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="mt-40 lg:mt-20 mb-20">
            <h1 class="text-white text-5xl"><?php echo e(__('dashboard.no_data')); ?></h1>
        </div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/movie.blade.php ENDPATH**/ ?>