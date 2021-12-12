<div>

  <form class="mb-4 needs-validation" wire:submit.prevent="<?php echo e($formMode == 'create' ? 'createRole' : 'updateRole'); ?>">

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label class="mb-1">1. Define el nombre del rol</label>
                <small class="form-text text-muted">Este nombre será utilizado para asociar nuevos usuarios</small>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label>Nombre rol</label>
                <input type="text" wire:model="name" class="form-control mb-3 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="">

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div> <!-- / .row -->

    <div class="row mt-3">
        <div class="col-sm-12 mb-5">
            <label class="mb-1">2. Asocia los permisos</label>
            <small class="form-text text-muted">
                Vincula los permisos de cada módulo que quieres asociar a este rol de usuario.
            </small>
        </div>
        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 col-md-6 pl-5">
                <div class="form-group">
                    <p class="mb-3"><?php echo e('2.'.$loop->iteration . '. ' . $module->nombre); ?></p>
                    <?php if($module->permisos->count() > 0): ?>
                        <?php $__currentLoopData = $module->permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permiso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row mb-2">
                                <div class="col-auto">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="permiso-id-<?php echo e($permiso->permiso->id); ?>" wire:change="handlePermission(<?php echo e($permiso->permiso); ?>)" <?php if(in_array($permiso->permiso->toArray(), $permissions)): ?> checked <?php endif; ?>>
                                    <label class="custom-control-label" for="permiso-id-<?php echo e($permiso->permiso->id); ?>"><?php echo e($permiso->permiso->name); ?></label>
                                </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <div class="row">
                            <div class="col-auto">
                                <small class="text-muted">Este módulo no tiene permisos asociados</small>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Divider -->
    <hr class="mt-5 mb-5">

    <!-- Buttons -->
    <button type="submit" class="btn btn-block btn-primary">
        <?php echo e($formMode == 'create' ? 'Guardar' : 'Actualizar'); ?> rol
    </button>
    <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-block btn-link text-muted">
        Cancelar
    </a>
  </form>
</div>
<?php /**PATH /home/vagrant/proyectos/base/resources/views/livewire/rol-usuario/form.blade.php ENDPATH**/ ?>