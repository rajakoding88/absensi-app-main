<?php if($attendance->data->is_holiday_today): ?>
<span class="badge text-bg-success rounded-pill">Hari Libur</span>
<?php else: ?>

<?php if($attendance->data->is_start): ?>
<span class="badge bg-primary rounded-pill">Jam Masuk</span>
<?php elseif($attendance->data->is_end): ?>
<span class="badge text-bg-warning rounded-pill">Jam Pulang</span>
<?php else: ?>
<span class="badge text-bg-danger rounded-pill">Tutup</span>
<?php endif; ?>

<?php endif; ?><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/partials/attendance-badges.blade.php ENDPATH**/ ?>