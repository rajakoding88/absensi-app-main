<div>

    <?php if($holiday): ?>
    <div class="alert alert-success">
        <small class="fw-bold">Hari ini adalah hari libur.</small>
    </div>
    <?php else: ?>

    
    <?php if(!$attendance->data->is_using_qrcode && !$data['is_there_permission']): ?>

    
    <?php if($attendance->data->is_start && !$data['is_has_enter_today']): ?>
    <button class="btn btn-primary px-3 py-2 btn-sm fw-bold d-block w-100 mb-2" wire:click="sendEnterPresence"
        wire:loading.attr="disabled" wire:target="sendEnterPresence">Masuk</button>
    <a href="<?php echo e(route('home.permission', $attendance->id)); ?>"
        class="btn btn-info px-3 py-2 btn-sm fw-bold d-block w-100">Izin</a>
    <?php endif; ?>

    <?php if($data['is_has_enter_today']): ?>
    <div class="alert alert-success">
        <small class="d-block fw-bold text-success">Anda sudah berhasil mengirim absensi masuk.</small>
    </div>
    <?php endif; ?>

    
    <?php if($attendance->data->is_end && $data['is_has_enter_today'] && $data['is_not_out_yet']): ?>
    <button class="btn btn-primary px-3 py-2 btn-sm fw-bold d-block w-100" wire:click="sendOutPresence"
        wire:loading.attr="disabled" wire:target="sendOutPresence">Pulang</button>
    <?php endif; ?>

    
    <?php if($data['is_has_enter_today'] && !$data['is_not_out_yet']): ?>
    <div class="alert alert-success">
        <small class="d-block fw-bold text-success">Anda sudah melakukan absen masuk dan absen pulang.</small>
    </div>
    <?php endif; ?>

    
    <?php if($data['is_has_enter_today'] && !$attendance->data->is_end): ?>
    <div class="alert alert-danger">
        <small class="fw-bold">Belum saatnya melakukan absensi pulang.</small>
    </div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if($data['is_there_permission'] && !$data['is_permission_accepted']): ?>
    <div class="alert alert-info">
        <small class="fw-bold">Permintaan izin sedang diproses (atau masih belum di terima).</small>
    </div>
    <?php endif; ?>

    <?php if($data['is_there_permission'] && $data['is_permission_accepted']): ?>
    <div class="alert alert-success">
        <small class="fw-bold">Permintaan izin sudah diterima.</small>
    </div>
    <?php endif; ?>

    <?php endif; ?>

</div><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/livewire/presence-form.blade.php ENDPATH**/ ?>