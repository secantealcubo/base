<?php if($errors->any()): ?>
    <div <?php echo e($attributes); ?>>
        <div class="font-medium text-red-600" style="color:red;"><?php echo e(__('Oops! Ocurrió algo malo.')); ?></div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600" style="color:red;">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>