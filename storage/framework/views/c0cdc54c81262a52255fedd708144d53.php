<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['movies', 'value', 'type']) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['movies', 'value', 'type']); ?>
<?php foreach (array_filter((['movies', 'value', 'type']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
	if (array_key_exists($__key, $__defined_vars)) {
		unset($$__key);
	}
} ?>
<?php unset($__defined_vars); ?>
<div class="mt-2">
    <select  id="movie" name="movie_id" autocomplete="movie_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
        <option disabled selected><?php echo e(__('forms.choose_movie')); ?></option>
        <?php $__currentLoopData = $movies;
$__env->addLoop($__currentLoopData);
foreach($__currentLoopData as $movie): $__env->incrementLoopIndices();
	$loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($movie->id); ?>" <?php echo e($type === 'update' ? ($movie->id === $value->movie_id ? 'selected' : '') : ''); ?>><?php echo e($movie->name); ?></option>
        <?php endforeach;
$__env->popLoop();
$loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php $__errorArgs = ['movie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
	if (isset($message)) {
		$__messageOriginal = $message;
	}
	$message = $__bag->first($__errorArgs[0]); ?>
<p class='text-xs text-red-500'><?php echo e($message); ?></p>
<?php unset($message);
	if (isset($__messageOriginal)) {
		$message = $__messageOriginal;
	}
endif;
unset($__errorArgs, $__bag); ?>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/movies-select-options.blade.php ENDPATH**/ ?>