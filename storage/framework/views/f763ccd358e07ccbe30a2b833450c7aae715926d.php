<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/feather/feather.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/flatpickr/dist/flatpickr.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/quill/dist/quill.core.css')); ?>" />
    <link rel="stylesheet" href=".<?php echo e(asset('assets/libs/highlightjs/styles/vs2015.css')); ?>" />
    <!--
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('')); ?>">
   -->
    <!-- Map -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />

    <!-- Theme CSS -->
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/theme.min.css')); ?>">
      
    <!-- Title -->
    <title>Iniciar sesión</title>

  </head>
  <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

          <!-- Logo Header-->
          <div class="row align-items-center">
            <!--
            <img src="<?php echo e(asset('')); ?>" class="avatar-img text-center container" alt="...">
            -->
          </div>

          <!-- GAP -->
          <br>
          
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Iniciar sesión
          </h1>
          
          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            
          </p>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
          <?php if(session('status')): ?>
              <div class="mb-4 font-medium text-sm text-green-600">
                  <?php echo e(session('status')); ?>

              </div>
          <?php endif; ?>
          <!-- Form -->
          <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Correo electrónico</label>

              <!-- Input -->
              <input id="email" class="form-control form-control-appended" type="email" name="email" :value="old('email')" required autofocus class="form-control" placeholder="nombre@direccion.com">

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Contraseña</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  <?php if(Route::has('password.request')): ?>
                    <a class="form-text small text-muted" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Olvidaste tu contraseña?')); ?>

                    </a>
                  <?php endif; ?>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input  class="form-control form-control-appended" placeholder="Ingresa tu contraseña" id="password" type="password" name="password" required autocomplete="current-password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'btn btn-lg btn-block btn-primary mb-3']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'btn btn-lg btn-block btn-primary mb-3']); ?>
                    <?php echo e(__('Ingresar')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            
          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="<?php echo e(asset('assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/autosize/dist/autosize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/chart.js/dist/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/dropzone/dist/min/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flatpickr/dist/flatpickr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/highlightjs/highlight.pack.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/list.js/dist/list.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/quill/dist/quill.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/select2/dist/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/chart.js/Chart.extension.js')); ?>"></script>

    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Theme JS -->
    <script src="<?php echo e(asset('assets/js/theme.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/dashkit.min.js')); ?>"></script>


  </body>
</html><?php /**PATH /home/vagrant/proyectos/base/resources/views/auth/login.blade.php ENDPATH**/ ?>