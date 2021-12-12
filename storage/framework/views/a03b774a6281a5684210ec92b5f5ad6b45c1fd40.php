<div>
   <div class="header">
      <div class="container-fluid">
         <!-- Body -->
         <div class="header-body">
            <div class="row align-items-end">
               <div class="col">
                  <!-- Title -->
                  <h1 class="header-title">
                     Todos los usuarios
                  </h1>
               </div>
               <div class="col-auto">
                  <?php if(\Auth::user()->can('crear usuarios')): ?>
                  <a href="<?php echo e(route('usuarios.nuevo')); ?>" class="btn btn-primary lift"><i class="fe fe-plus"></i> Crear usuario</a>
                  <?php endif; ?>
               </div>
            </div>
            <!-- / .row -->
         </div>
         <!-- / .header-body -->
      </div>
   </div>
   <div class="container-fluid">
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
                              <input class="list-search form-control" type="search" placeholder="Buscar" wire:model="search">
                           </div>
                        </form>
                     </div>
                     <div class="col-auto mr-n3">
                        <!-- Select -->
                        <form>
                           <select
                              class="custom-select custom-select-sm form-control-flush"
                              tabindex="-1" wire:model="resultsPerPage">
                              <option value="10">10 por página</option>
                              <option value="20">20 por página</option>
                              <option value="40">40 por página</option>
                           </select>
                        </form>
                     </div>
                  </div>
                  <!-- / .row -->
               </div>
               <div class="table-responsive mb-0"
                  data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                  <table class="table table-sm table-nowrap card-table">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Nombre</th>
                           <th>Correo electrónico</th>
                           <th>Rol</th>
                           <th class="text-right">Acción</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody class="list">
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e($usuario->id); ?></td>
                           <td><?php echo e($usuario->name); ?></td>
                           <td><?php echo e($usuario->email); ?></td>
                           <td>
                              <span class="badge badge-pill badge-primary text-uppercase"><?php echo e($usuario->getRoleNames()->first()); ?></span>
                           </td>
                           <td class="text-right">
                              <div class="dropdown">
                                 <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fe fe-more-vertical"></i>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <?php if(\Auth::user()->can('editar usuarios')): ?>
                                       <a href="<?php echo e(route('usuarios.editar', $usuario->id )); ?>" class="dropdown-item">
                                          <i class="fe fe-edit-3"></i> Editar
                                       </a>
                                    <?php endif; ?>
                                    <div class="dropdown-divider"></div>
                                    <?php if(\Auth::user()->can('eliminar usuarios')): ?>
                                       <?php if(\Auth::user()->id != $usuario->id): ?>
                                          <?php if(\Auth::user()->id ==1): ?>
                                             <button wire:click="confirmDelete('<?php echo e(base64_encode($usuario->id)); ?>')" class="dropdown-item">
                                                <i class="fe fe-trash"></i> Eliminar
                                             </button>
                                          <?php endif; ?>
                                       <?php endif; ?>
                                    <?php endif; ?>
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
            <?php echo e($usuarios->links()); ?>

         </div>
      </div>
   </div>
</div><?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/usuario/index.blade.php ENDPATH**/ ?>