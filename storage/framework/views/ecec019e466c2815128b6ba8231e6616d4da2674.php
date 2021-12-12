<div>
  <div class="header">
    <div class="container-fluid">
        <!-- Body -->
        <div class="header-body">
            <div class="row align-items-end">
                <div class="col">
                    <!-- Title -->
                    <h1 class="header-title">
                        Añadir nuevo rol
                    </h1>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .header-body -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/roles')); ?>">Roles</a></li>
              <li class="breadcrumb-item active" aria-current="page">Crear</li>
            </ol>
          </nav>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('rol-usuario.form', ['formMode' => 'create'])->html();
} elseif ($_instance->childHasBeenRendered('kZmdJNc')) {
    $componentId = $_instance->getRenderedChildComponentId('kZmdJNc');
    $componentTag = $_instance->getRenderedChildComponentTagName('kZmdJNc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kZmdJNc');
} else {
    $response = \Livewire\Livewire::mount('rol-usuario.form', ['formMode' => 'create']);
    $html = $response->html();
    $_instance->logRenderedChild('kZmdJNc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          </div>
      </div> <!-- / .row -->
  </div>
</div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/rol-usuario/create.blade.php ENDPATH**/ ?>