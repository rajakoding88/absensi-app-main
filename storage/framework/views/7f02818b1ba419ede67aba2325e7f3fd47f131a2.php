<nav class="navbar navbar-expand-md bg-dark navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand bg-transparent fw-bold" href="<?php echo e(route('home.index')); ?>">Absensi App</a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav align-items-md-center gap-md-4 py-2 py-md-0">
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <a class="nav-link <?php echo e(request()->routeIs('home.*') ? 'active fw-bold' : ''); ?>" aria-current="page"
                        href="<?php echo e(route('home.index')); ?>">Beranda</a>
                </li>
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <form action="<?php echo e(route('auth.logout')); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>

                        <button class="btn fw-bold btn-danger w-100">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\skripsi Ophy\absensi-app-main\resources\views/partials/home-navbar.blade.php ENDPATH**/ ?>