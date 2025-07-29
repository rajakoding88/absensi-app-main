<?php $__env->startSection('buttons'); ?>
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="<?php echo e(route('holidays.index')); ?>" class="btn btn-sm btn-light">
            <span data-feather="arrow-left-circle" class="align-text-bottom"></span>
            Kembali
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-7">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('holiday-create-form', [])->html();
} elseif ($_instance->childHasBeenRendered('NjEhykF')) {
    $componentId = $_instance->getRenderedChildComponentId('NjEhykF');
    $componentTag = $_instance->getRenderedChildComponentTagName('NjEhykF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NjEhykF');
} else {
    $response = \Livewire\Livewire::mount('holiday-create-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('NjEhykF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/holidays/create.blade.php ENDPATH**/ ?>