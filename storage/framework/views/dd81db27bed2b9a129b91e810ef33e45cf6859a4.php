<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-list-ul"></i> Menu</h5>
                        <hr>
                        <ul class="list-group">
                            <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('admin.logout', [])->dom;
} elseif ($_instance->childHasBeenRendered('1OKb2Td')) {
    $componentId = $_instance->getRenderedChildComponentId('1OKb2Td');
    $componentTag = $_instance->getRenderedChildComponentTagName('1OKb2Td');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1OKb2Td');
} else {
    $response = \Livewire\Livewire::mount('admin.logout', []);
    $dom = $response->dom;
    $_instance->logRenderedChild('1OKb2Td', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-tachometer-alt"></i> Dashboard</h5>
                        <hr>
                        Hi, Selamat Datang <strong><?php echo e(auth()->user()->name); ?></strong> !
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel-livewire-auth\resources\views/livewire/admin/dashboard.blade.php ENDPATH**/ ?>