<div>
  <div>
    <div class="header">
        <div class="container-fluid">
            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <!-- Title -->
                        <h1 class="header-title">
                            Editar rol
                        </h1>
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .header-body -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/roles')); ?>">Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
              </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('rol-usuario.form', ['formMode' => 'edit','roleId' => $roleId])->html();
} elseif ($_instance->childHasBeenRendered('gxYxoO0')) {
    $componentId = $_instance->getRenderedChildComponentId('gxYxoO0');
    $componentTag = $_instance->getRenderedChildComponentTagName('gxYxoO0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gxYxoO0');
} else {
    $response = \Livewire\Livewire::mount('rol-usuario.form', ['formMode' => 'edit','roleId' => $roleId]);
    $html = $response->html();
    $_instance->logRenderedChild('gxYxoO0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div> <!-- / .row -->
    </div>
  </div>
</div>
<?php /**PATH /home/vagrant/proyectos/base/resources/views/livewire/rol-usuario/edit.blade.php ENDPATH**/ ?>