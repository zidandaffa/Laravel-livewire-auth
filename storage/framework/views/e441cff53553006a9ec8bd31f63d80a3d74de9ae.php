<?php $__env->startSection($section); ?>
    <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount($component, $componentParameters)->dom;
} elseif ($_instance->childHasBeenRendered('ciV3Hhk')) {
    $componentId = $_instance->getRenderedChildComponentId('ciV3Hhk');
    $componentTag = $_instance->getRenderedChildComponentTagName('ciV3Hhk');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ciV3Hhk');
} else {
    $response = \Livewire\Livewire::mount($component, $componentParameters);
    $dom = $response->dom;
    $_instance->logRenderedChild('ciV3Hhk', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-livewire-auth\vendor\livewire\livewire\src\Macros/livewire-view.blade.php ENDPATH**/ ?>