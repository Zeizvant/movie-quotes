<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["body", "img", 'link', 'id']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["body", "img", 'link', 'id']); ?>
<?php foreach (array_filter((["body", "img", 'link', 'id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="h-20 rounded border-4 flex items-center justify-between px-3">
    <?php if($img): ?>
        <img class="h-16 w-28 object-cover" src="<?php echo e(asset('storage/' . $img)); ?>" />
    <?php endif; ?>
    <p class="text-lg h-full flex justify-center items-center px-2 w-1/3 lg:w-1/2 p-2"><?php echo $link === 'quote' ? $body->getTranslation('body', app()->getLocale()) : $body->getTranslation('name', app()->getLocale()); ?></p>
    <div><a href="<?php echo e(route("{$link}.edit", [$link => $id])); ?>"><?php echo e(__('dashboard.update')); ?></a></div>
    <form method="POST" action="<?php echo e(route("{$link}.delete", [$link => $id])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button><?php echo e(__('dashboard.delete')); ?></button>
    </form>
</div>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/info-component.blade.php ENDPATH**/ ?>