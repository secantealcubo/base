<div>
  <div class="header">
    <div class="container-fluid">
        <!-- Body -->
        <div class="header-body">
            <div class="row align-items-end">
                <div class="col">
                    <!-- Title -->
                    <h1 class="header-title">
                        Registrar nuevo módulo
                    </h1>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .header-body -->
      </div>
  </div>
  <div class="container-fluid">
      <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modulo.form', ['formMode' => 'create'])->html();
} elseif ($_instance->childHasBeenRendered('Z7YrA9P')) {
    $componentId = $_instance->getRenderedChildComponentId('Z7YrA9P');
    $componentTag = $_instance->getRenderedChildComponentTagName('Z7YrA9P');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Z7YrA9P');
} else {
    $response = \Livewire\Livewire::mount('modulo.form', ['formMode' => 'create']);
    $html = $response->html();
    $_instance->logRenderedChild('Z7YrA9P', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          </div>
      </div> <!-- / .row -->
  </div>
<div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/modulo/create.blade.php ENDPATH**/ ?>