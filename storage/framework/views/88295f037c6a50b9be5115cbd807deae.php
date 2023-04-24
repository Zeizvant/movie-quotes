<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach ($attributes->onlyProps(['text', 'link']) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['text', 'link']); ?>
<?php foreach (array_filter((['text', 'link']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
	$$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
	if (array_key_exists($__key, $__defined_vars)) {
		unset($$__key);
	}
} ?>
<?php unset($__defined_vars); ?>
<a href="<?php echo e(route("{$link}.create")); ?>">
    <div class="cursor-pointer rounded-md bg-indigo-600 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        <?php echo e($text); ?>

    </div>
</a>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/add-button.blade.php ENDPATH**/ ?>