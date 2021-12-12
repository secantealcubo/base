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
                            Editar módulo
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
    $html = \Livewire\Livewire::mount('modulo.form', ['formMode' => 'edit','moduleId' => $moduleId])->html();
} elseif ($_instance->childHasBeenRendered('Os5UWwO')) {
    $componentId = $_instance->getRenderedChildComponentId('Os5UWwO');
    $componentTag = $_instance->getRenderedChildComponentTagName('Os5UWwO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Os5UWwO');
} else {
    $response = \Livewire\Livewire::mount('modulo.form', ['formMode' => 'edit','moduleId' => $moduleId]);
    $html = $response->html();
    $_instance->logRenderedChild('Os5UWwO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div> <!-- / .row -->
    </div>
  </div>
</div><?php /**PATH /home/vagrant/proyectos/talentoswalmart/resources/views/livewire/modulo/edit.blade.php ENDPATH**/ ?>