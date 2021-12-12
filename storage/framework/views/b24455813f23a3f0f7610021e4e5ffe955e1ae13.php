<div>
   <form class="mb-4 needs-validation" wire:submit.prevent="<?php echo e(($mode == 'edit') ? 'updateUser' : 'crearUsuario'); ?>">
      <div class="row">
         <div class="col-12 col-md-6">
            <!-- Start date -->
            <div class="form-group">
               <!-- Label -->
               <label>
               Nombre
               </label>
               <!-- Input -->
               <input type="text" wire:model="name"
                  class="form-control mb-3 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">
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
         <div class="col-md-6">
            <div class="form-group">
               <!-- Label  -->
               <label>
               Correo electrónico
               </label>
               <!-- Input -->
               <input type="email" wire:model="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
               <?php $__errorArgs = ['email'];
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
      <!-- / .row -->
      <div class="row">
         <div class="col-12 col-md-6">
            <!-- Start date -->
            <div class="form-group">
               <!-- Label -->
               <label>
               Contraseña
               </label>
               <!-- Input -->
               <input type="password" wire:model="password"
                  class="form-control mb-3  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">
               <?php $__errorArgs = ['password'];
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
               Repetir contraseña
               </label>
               <!-- Input -->
               <input type="password" wire:model="password_confirmation"
                  class="form-control mb-3 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="">
            </div>
         </div>
      </div>
      <!-- / .row -->
      <!-- Divider -->
      <hr class="mt-5 mb-5">
      <div class="row">
         <div class="col-12 col-md-6">
            <!-- Private project -->
            <div class="form-group">
               <!-- Label -->
               <label class="mb-1">
               Define un rol al usuario
               </label>
               <!-- Text -->
               <small class="form-text text-muted">
               El rol que le asignes le permitirá ver los módulos habilitados para ese perfil
               </small>
            </div>
         </div>
         <div class="col-12 col-md-6">
            <div class="form-group">
               <!-- Input -->
               <select class="custom-select <?php $__errorArgs = ['rolUsuario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="verifica"
                  wire:model="rolUsuario">
                  <option value="" selected>- Selecciona -</option>
                  
                  <?php $__currentLoopData = $userRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
               </select>
               <?php $__errorArgs = ['rolUsuario'];
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
      <!-- / .row -->
      <!-- Divider -->
      <hr class="mt-5 mb-5">
      <!-- Buttons -->
      <button type="submit" class="btn btn-block btn-primary">
      <?php echo e(($mode == 'edit' ) ? 'Editar usuario' : 'Crear usuario'); ?>

      </button>
      <a href="<?php echo e(route('usuarios.index')); ?>" class="btn btn-block btn-link text-muted">
      Cancelar
      </a>
   </form>
</div><?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/usuario/form.blade.php ENDPATH**/ ?>