<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['type', 'data', 'value']) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['type', 'data', 'value']); ?>
<?php foreach (array_filter((['type', 'data', 'value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
	if (array_key_exists($__key, $__defined_vars)) {
		unset($$__key);
	}
} ?>
<?php unset($__defined_vars); ?>
<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
    <input value="<?php echo e($value); ?>" type="text" name="name[ka]" id="name_ka" autocomplete="name[ka]" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="<?php echo e($data === 'movie' ? __('forms.enter_name') : __('forms.enter_quote')); ?>" />
</div>
<?php $__errorArgs = ['name.ka'];
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
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/text-input-ka.blade.php ENDPATH**/ ?>