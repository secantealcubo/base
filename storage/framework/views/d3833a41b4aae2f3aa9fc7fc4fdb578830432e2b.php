<div>

  <form class="mb-4 needs-validation" wire:submit.prevent="createPermissions">
    <div class="row">
      <div class="col-12 col-md-6">

          <!-- Start date -->
          <div class="form-group">
              <!-- Label -->
              <label>Selecciona un modulo: </label>
              <!-- Input -->

              <select class="form-control custom-select" wire:model="moduleChoosenId" wire:change="loadModulePermissions">
                <option value="" selected disabled>- Seleccione -</option>
                <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($module->id); ?>"><?php echo e($module->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>

              <?php $__errorArgs = ['nombre'];
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
      <div class="col-12 col-md-6">
          <div class="form-group">
              <!-- Label -->
              <label>
                Nombre permiso
              </label>
              <!-- Input -->
              
              <div class="input-group">
                <input type="text" wire:model="newModulePermission" class="custom-input form-control <?php $__errorArgs = ['newModulePermission'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Ej: editar [nombre del modulo en plural]">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" wire:click="addPermissionToArray" type="button">Agregar</button>
                </div>
              </div>
              <?php $__errorArgs = ['modelo'];
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
  </div> 


  <?php if($showModulePermissions): ?>
      
    <div class="row mt-3">
      <div class="col-sm-12 col-md-6">
        <?php if($moduleChoosenPermissions->count() == 0): ?>
        <i class="fe fe-alert-circle"></i> Actualmente, este módulo no tiene permisos asociados.
        <?php else: ?>
        <h4 class="h4">Este modulo tiene estos permisos <strong>ya asociados:</strong></h4>
        <ul>
          <?php $__currentLoopData = $moduleChoosenPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulePermission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($modulePermission->permiso->name); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
      </div>


      <?php if(count($newModulePermissions) > 0): ?>
        <div class="col-sm-12 col-md-6">
          <h4 class="h4">Agregarás los siguientes permisos:</h4>
          <ul>
            <?php $__currentLoopData = $newModulePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulePermission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($modulePermission); ?> <i class="fe fe-x-circle" wire:click="removePermissionFromArray('<?php echo e($modulePermission); ?>')"></i> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endif; ?>

    </div>

  <?php endif; ?>


    <!-- Divider -->
    <hr class="mt-5 mb-5">


    <!-- Buttons -->
    <button type="submit" class="btn btn-block btn-primary" <?php if(count($newModulePermissions) == 0): ?> disabled <?php endif; ?> >
        Registrar permisos
    </button>
    <a href="<?php echo e(route('permisos.index')); ?>" class="btn btn-block btn-link text-muted">
        Cancelar
    </a>
  </form>

</div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/permiso-rol/form.blade.php ENDPATH**/ ?>