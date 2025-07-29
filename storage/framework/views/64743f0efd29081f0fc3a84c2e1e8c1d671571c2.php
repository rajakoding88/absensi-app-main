<?php $__env->startPush('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('tom-select/tom-select.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('buttons'); ?>
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="<?php echo e(route('attendances.index')); ?>" class="btn btn-sm btn-light">
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
    $html = \Livewire\Livewire::mount('attendance-create-form', [])->html();
} elseif ($_instance->childHasBeenRendered('sUqprZ0')) {
    $componentId = $_instance->getRenderedChildComponentId('sUqprZ0');
    $componentTag = $_instance->getRenderedChildComponentTagName('sUqprZ0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sUqprZ0');
} else {
    $response = \Livewire\Livewire::mount('attendance-create-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('sUqprZ0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/attendances/create.blade.php ENDPATH**/ ?>