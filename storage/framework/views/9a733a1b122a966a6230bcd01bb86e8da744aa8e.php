<div>

  <div class="header">
      <div class="container-fluid">
          <div class="header-body">
              <div class="row align-items-end">
                  <div class="col">
                      <h1 class="header-title">Módulos registrados</h1>
                  </div>
                  <div class="col-auto">
                      <a href="<?php echo e(route('modulos.nuevo')); ?>" class="btn btn-primary lift"><i class="fe fe-plus"></i> Registrar módulo</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container-fluid">

      <div class="row">
          <div class="col-12">
            <?php if($modulos->count() > 0): ?>
              <div class="card">
                <div class="table-responsive mb-0">
                    <table class="table table-sm table-nowrap card-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Modelo</th>
                                <th class="text-right">Acción</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $__currentLoopData = $modulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($modulo->id); ?></td>
                                    <td><?php echo e($modulo->nombre); ?></td>
                                    <td><?php echo e($modulo->modelo); ?></td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a href="<?php echo e(route('modulos.editar', $modulo->id)); ?>"
                                                    class="dropdown-item">
                                                    <i class="fe fe-edit-3"></i> Editar
                                                </a>

                                                <div class="dropdown-divider"></div>
                                                
                                                <button wire:click="confirmDelete('<?php echo e(base64_encode($modulo->id)); ?>')"
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

            <?php else: ?>
             <p class="text-muted text-center mt-5"><i class="fe fe-info"></i> No hay modulos registrados. Comienza registrando uno para administrar los permisos.</p>
            <?php endif; ?>

          </div>
      </div>

      <div class="row">
          <div class="col-sm-12">
              
          </div>
      </div>

  </div>
</div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/modulo/index.blade.php ENDPATH**/ ?>