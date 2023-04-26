<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type', 'value', 'data', 'movies']) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type', 'value', 'data', 'movies']); ?>
<?php foreach (array_filter((['type', 'value', 'data', 'movies']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
	if (array_key_exists($__key, $__defined_vars)) {
		unset($$__key);
	}
} ?>
<?php unset($__defined_vars); ?>
<form method="POST" action="<?php echo e($type === 'update' ? route($data . '.update', [$data => $value->id]) : route($data . '.store')); ?>" enctype="multipart/form-data" class="md:w-1/2  m-10">
    <?php echo csrf_field(); ?>
    <?php if($type === 'update'): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900"><?php echo e($type === 'update' ? __('forms.update') : __('forms.add')); ?></h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="name_en" class="block text-sm font-medium leading-6 text-gray-900"><?php echo e($data === 'movie' ? __('forms.name') : __('forms.body')); ?> en</label>
                    <div class="mt-2">
                        <?php if (isset($component)) {
                        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input-en', 'data' => ['type' => '' . e($type) . '', 'data' => '' . e($data) . '', 'value' => '' . e($type === 'update' ? ($data === 'movie' ? $value->getTranslation('name', 'en') : $value->getTranslation('body', 'en')) : '') . '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input-en'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => '' . e($type) . '', 'data' => '' . e($data) . '', 'value' => '' . e($type === 'update' ? ($data === 'movie' ? $value->getTranslation('name', 'en') : $value->getTranslation('body', 'en')) : '') . '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="name_ka" class="block text-sm font-medium leading-6 text-gray-900"><?php echo e($data === 'movie' ? __('forms.name') : __('forms.body')); ?> ka</label>
                    <div class="mt-2">
                        <?php if (isset($component)) {
                        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input-ka', 'data' => ['type' => '' . e($type) . '', 'data' => '' . e($data) . '', 'value' => '' . e($type === 'update' ? ($data === 'movie' ? $value->getTranslation('name', 'ka') : $value->getTranslation('body', 'ka')) : '') . '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input-ka'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => '' . e($type) . '', 'data' => '' . e($data) . '', 'value' => '' . e($type === 'update' ? ($data === 'movie' ? $value->getTranslation('name', 'ka') : $value->getTranslation('body', 'ka')) : '') . '']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                </div>
                <?php if($data === 'quote'): ?>
                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900"><?php echo e(__('forms.photo')); ?></label>
                        <?php if (isset($component)) {
                        	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                        } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image-input', 'data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image-input'); ?>
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
                <?php endif; ?>
            </div>
        </div>
        <?php if($data === 'quote'): ?>
            <div class="sm:col-span-3">
                <label for="movie" class="block text-sm font-medium leading-6 text-gray-900"><?php echo e(__('forms.movie')); ?></label>
                <?php if($type == 'update'): ?>
                    <?php if (isset($component)) {
                    	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                    } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.movies-select-options', 'data' => ['type' => '' . e($type) . '', 'movies' => $movies, 'value' => $value]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('movies-select-options'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => '' . e($type) . '', 'movies' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($movies), 'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php else: ?>
                    <?php if (isset($component)) {
                    	$__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component;
                    } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.movies-select-options', 'data' => ['type' => '' . e($type) . '', 'movies' => $movies]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('movies-select-options'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => '' . e($type) . '', 'movies' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($movies)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <?php echo e($type === 'update' ? __('forms.update') : __('forms.save')); ?></button>
        </div>
    </div>
</form>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/store-movie-quotes-form.blade.php ENDPATH**/ ?>