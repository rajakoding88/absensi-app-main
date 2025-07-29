<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">
            <div class="mb-2">
                <?php echo $__env->make('partials.attendance-badges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <h1 class="fs-2"><?php echo e($attendance->title); ?></h1>
            <p class="text-muted"><?php echo e($attendance->description); ?></p>

            <div class="mb-4">
                <span class="badge text-bg-light border shadow-sm">Masuk : <?php echo e(substr($attendance->data->start_time, 0 , -3)); ?> - <?php echo e(substr($attendance->data->batas_start_time,0,-3 )); ?></span>
                <span class="badge text-bg-light border shadow-sm">Pulang : <?php echo e(substr($attendance->data->end_time, 0 , -3)); ?> - <?php echo e(substr($attendance->data->batas_end_time,0,-3 )); ?></span>
            </div>

            <?php if(!$attendance->data->is_using_qrcode): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('presence-form', ['attendance' => $attendance,'data' => $data,'holiday' => $holiday])->html();
} elseif ($_instance->childHasBeenRendered('2A5sEkt')) {
    $componentId = $_instance->getRenderedChildComponentId('2A5sEkt');
    $componentTag = $_instance->getRenderedChildComponentTagName('2A5sEkt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2A5sEkt');
} else {
    $response = \Livewire\Livewire::mount('presence-form', ['attendance' => $attendance,'data' => $data,'holiday' => $holiday]);
    $html = $response->html();
    $_instance->logRenderedChild('2A5sEkt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php else: ?>
                <?php echo $__env->make('home.partials.qrcode-presence', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
        </div>
        <div class="col-md-6">
            <h5 class="mb-3">Histori 30 Hari Terakhir</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jam Masuk</th>
                            <th scope="col">Jam Pulang</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $priodDate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            
                            <?php
                            $histo = $history->where('presence_date', $date)->first();
                            ?>
                            <?php if(!$histo): ?>
                            <td><?php echo e($date); ?></td>
                            <td colspan="3">
                                <?php if($date == now()->toDateString()): ?>
                                <div class="badge text-bg-info">Belum Hadir</div>
                                <?php else: ?>
                                <div class="badge text-bg-danger">Tidak Hadir</div>
                                <?php endif; ?>
                            </td>
                            <?php else: ?>
                            <td><?php echo e($histo->presence_date); ?></td>
                            <td><?php echo e($histo->presence_enter_time); ?></td>
                            <td><?php if($histo->presence_out_time): ?>
                                <?php echo e($histo->presence_out_time); ?>

                                <?php else: ?>
                                <span class="badge text-bg-danger">Belum Absensi Pulang</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($histo->is_permission): ?>
                                <div class="badge text-bg-warning">Izin</div>
                                <?php else: ?>
                                <div class="badge text-bg-success">Hadir</div>
                                <?php endif; ?>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/home/show.blade.php ENDPATH**/ ?>