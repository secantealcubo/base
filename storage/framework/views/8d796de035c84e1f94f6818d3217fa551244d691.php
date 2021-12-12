<div>
  <div class="header">
    <div class="container-fluid">
        <!-- Body -->
        <div class="header-body">
            <div class="row align-items-end">
                <div class="col">
                    <!-- Title -->
                    <h1 class="header-title">
                        Nuevo permiso
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
    $html = \Livewire\Livewire::mount('permiso-rol.form', [])->html();
} elseif ($_instance->childHasBeenRendered('4Z1MyIV')) {
    $componentId = $_instance->getRenderedChildComponentId('4Z1MyIV');
    $componentTag = $_instance->getRenderedChildComponentTagName('4Z1MyIV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4Z1MyIV');
} else {
    $response = \Livewire\Livewire::mount('permiso-rol.form', []);
    $html = $response->html();
    $_instance->logRenderedChild('4Z1MyIV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
          </div>
      </div> <!-- / .row -->
  </div>
<div>
<?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/permiso-rol/create.blade.php ENDPATH**/ ?>