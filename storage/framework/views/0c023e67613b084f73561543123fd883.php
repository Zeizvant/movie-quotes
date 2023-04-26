<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['src', 'body']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['src', 'body']); ?>
<?php foreach (array_filter((['src', 'body']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class=" md:w-748 flex flex-col">
    <img class="w-748 h-400 object-cover z-0" src="<?php echo e(asset('storage/' . $src)); ?>" alt="movie image"/>
    <div class="w-full min-h-[120px] bg-white text-black flex justify-center items-center rounded-b-xl -mt-1 p-10">
        <p class="text-4xl text-center"><?php echo e($body); ?></p>
    </div>
</div>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/quote-component.blade.php ENDPATH**/ ?>