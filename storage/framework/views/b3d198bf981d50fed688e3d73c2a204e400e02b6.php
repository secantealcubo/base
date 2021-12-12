<div>

  <form class="mb-4 needs-validation" wire:submit.prevent="<?php echo e($formMode == 'create' ? 'createModule' : 'updateModule'); ?>">
    <div class="row">
      <div class="col-12 col-md-6">

          <!-- Start date -->
          <div class="form-group">
              <!-- Label -->
              <label>
                  Nombre
              </label>
              <!-- Input -->
              <input type="text" wire:model="nombre"
                  class="form-control mb-3 <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Ej: Usuarios">

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
                Modelo Laravel
              </label>
              <!-- Input -->
              <input type="text" wire:model="modelo"
                  class="form-control mb-3 <?php $__errorArgs = ['modelo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Ej: App\Models\Base\User">

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

    <!-- Divider -->
    <hr class="mt-5 mb-5">

    <!-- Buttons -->
    <button type="submit" class="btn btn-block btn-primary">
        <?php echo e($formMode == 'create' ? 'Registrar' : 'Actualizar'); ?> modulo
    </button>
    <a href="<?php echo e(route('modulos.index')); ?>" class="btn btn-block btn-link text-muted">
        Cancelar
    </a>
  </form>

</div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/modulo/form.blade.php ENDPATH**/ ?>