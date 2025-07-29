<?php $__env->startSection('buttons'); ?>
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-sm btn-light">
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
    $html = \Livewire\Livewire::mount('employee-edit-form', ['employees' => $employees])->html();
} elseif ($_instance->childHasBeenRendered('t0wG0vE')) {
    $componentId = $_instance->getRenderedChildComponentId('t0wG0vE');
    $componentTag = $_instance->getRenderedChildComponentTagName('t0wG0vE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('t0wG0vE');
} else {
    $response = \Livewire\Livewire::mount('employee-edit-form', ['employees' => $employees]);
    $html = $response->html();
    $_instance->logRenderedChild('t0wG0vE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/employees/edit.blade.php ENDPATH**/ ?>