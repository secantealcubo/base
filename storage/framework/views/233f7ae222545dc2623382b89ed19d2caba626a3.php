<div>
  <div class="header">
      <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
              <div class="row align-items-end">
                  <div class="col">



                      <!-- Title -->
                      <h1 class="header-title">
                          Editar usuario
                      </h1>

                  </div>
                  <div class="col-auto">

                      <!-- Button 
                <a  href="anadir-producto.html" class="btn btn-primary lift">
                  Añadir nuevo
                </a>-->

                  </div>
              </div> <!-- / .row -->
          </div> <!-- / .header-body -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/usuarios')); ?>">Usuarios</a></li>
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
    $html = \Livewire\Livewire::mount('usuario.form', ['mode' => 'edit','userId' => $userId])->html();
} elseif ($_instance->childHasBeenRendered('lrHVfjJ')) {
    $componentId = $_instance->getRenderedChildComponentId('lrHVfjJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('lrHVfjJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lrHVfjJ');
} else {
    $response = \Livewire\Livewire::mount('usuario.form', ['mode' => 'edit','userId' => $userId]);
    $html = $response->html();
    $_instance->logRenderedChild('lrHVfjJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

          </div>
      </div> <!-- / .row -->
  </div>
</div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/usuario/edit.blade.php ENDPATH**/ ?>