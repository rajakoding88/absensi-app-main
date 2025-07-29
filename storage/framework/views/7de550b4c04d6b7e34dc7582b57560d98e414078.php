<?php $__env->startPush('style'); ?>
<?php echo view('livewire-powergrid::assets.styles')->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('buttons'); ?>
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="<?php echo e(route('holidays.create')); ?>" class="btn btn-sm btn-primary">
            <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
            Tambah Data Hari Libur
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('holiday-table', [])->html();
} elseif ($_instance->childHasBeenRendered('woFni21')) {
    $componentId = $_instance->getRenderedChildComponentId('woFni21');
    $componentTag = $_instance->getRenderedChildComponentTagName('woFni21');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('woFni21');
} else {
    $response = \Livewire\Livewire::mount('holiday-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('woFni21', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('jquery/jquery-3.6.0.min.js')); ?>"></script>
<?php echo view('livewire-powergrid::assets.scripts')->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/holidays/index.blade.php ENDPATH**/ ?>