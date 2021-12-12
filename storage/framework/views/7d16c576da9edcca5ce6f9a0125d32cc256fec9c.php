<div>

  <div class="header">
      <div class="container-fluid">
          <div class="header-body">
              <div class="row align-items-end">
                  <div class="col">
                      <h1 class="header-title">Todos los permisos</h1>
                  </div>
                  <div class="col-auto">
                      <a href="<?php echo e(route('permisos.nuevo')); ?>" class="btn btn-primary lift"><i class="fe fe-plus"></i> Nuevo permiso</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container-fluid">

    <?php if($permissions->count() > 0): ?>
      <div class="row">
        <div class="col-12">

            <!-- Goals -->
            <div class="card">

              <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">

                        <!-- Form -->
                        <form>
                            <div class="input-group input-group-flush">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fe fe-search"></i>
                                    </span>
                                </div>
                                <input class="list-search form-control" type="search" placeholder="Buscar">
                            </div>
                        </form>

                    </div>
                    <div class="col-auto">

                      <!-- Dropdown -->
                      <div class="dropdown">

                        <!-- Toggle -->
                        <button class="btn btn-sm btn-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fe fe-sliders mr-1"></i> Filtro <span class="badge badge-primary ml-1 d-none">0</span>
                        </button>

                        <!-- Menu -->
                        <form class="dropdown-menu dropdown-menu-right dropdown-menu-card" style="">
                          <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                              Filtros
                            </h4>

                            <!-- Link -->
                            <button class="btn btn-sm btn-link text-reset d-none" type="reset">
                              <small>Cliente</small>
                            </button>

                          </div>
                          <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush mt-n4">
                              <div class="list-group-item">
                                <div class="row">
                                  <div class="col">

                                    <!-- Text -->
                                    <small>Módulo</small>

                                  </div>
                                  <div class="col-auto">

                                    <!-- Select -->
                                    <select class="custom-select custom-select-sm" wire:model="filterModule">
                                      <option value="" selected>Todos</option>
                                      <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($module->id); ?>"><?php echo e($module->nombre); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                  </div>
                                </div> <!-- / .row -->
                              </div>

                            </div>
                          </div>
                        </form>

                      </div>

                    </div>
                </div> <!-- / .row -->
              </div>

                <div class="table-responsive mb-0">
                    <table class="table table-sm table-nowrap card-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Permiso</th>
                                <th>Modulo</th>
                                <th class="text-right">Acción</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($relation->permiso->id); ?></td>
                                    <td><?php echo e($relation->permiso->name); ?></td>
                                    <td><?php echo e($relation->modulo->nombre); ?></td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <div class="dropdown-divider"></div>
                                                
                                                <button wire:click="confirmDelete('<?php echo e(base64_encode($relation->id)); ?>')"
                                                    class="dropdown-item">
                                                    <i class="fe fe-trash"></i> Eliminar
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>

      <div class="row">
          <div class="col-sm-12">
              
          </div>
      </div>
    <?php else: ?><p class="text-muted text-center mt-5"><i class="fe fe-info"></i> No se han creado permisos. Crea uno nuevo para comenzar a utilizar esta función.</p>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/permiso-rol/index.blade.php ENDPATH**/ ?>