<div>
    <input id="username" name="username" type="text" autocomplete="username" required class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="<?php echo e(__('forms.username')); ?>">
    <?php $__errorArgs = ['username'];
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
</div>
<?php /**PATH /Users/admin/Desktop/redberry homework/movie-quotes/resources/views/components/login-input.blade.php ENDPATH**/ ?>