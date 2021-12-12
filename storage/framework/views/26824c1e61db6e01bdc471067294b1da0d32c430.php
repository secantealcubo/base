<div>

    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h1 class="header-title">Todos los roles</h1>
                    </div>
                    <div class="col-auto">
                        <?php if(\Auth::user()->can('crear roles')): ?>
                        <a href="<?php echo e(route('roles.nuevo')); ?>" class="btn btn-primary lift"><i class="fe fe-plus"></i>
                            Nuevo rol</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">

                <!-- Goals -->
                <div class="card">
                    <div class="table-responsive mb-0">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Usuarios asignados</th>
                                    <th class="text-right">Acción</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($rol->id); ?></td>
                                        <td><?php echo e($rol->name); ?></td>
                                        <td><?php echo e($rol->users->count()); ?></td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <?php if(\Auth::user()->can('editar roles')): ?>
                                                        <a href="<?php echo e(route('roles.editar', $rol->id)); ?>"
                                                            class="dropdown-item">
                                                            <i class="fe fe-edit-3"></i> Editar
                                                        </a>
                                                    <?php endif; ?>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    <?php if(\Auth::user()->can('eliminar roles')): ?>
                                                        <?php if($rol->id != 1): ?>
                                                            <button wire:click="confirmDelete('<?php echo e(base64_encode($rol->id)); ?>')"
                                                                class="dropdown-item">
                                                                <i class="fe fe-trash"></i> Eliminar
                                                            </button>
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
                
            </div>
        </div>

    </div>
</div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/rol-usuario/index.blade.php ENDPATH**/ ?>