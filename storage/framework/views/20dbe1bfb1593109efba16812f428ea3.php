<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark" id="navbarSupportedContent">
    <div class="container" >
        <a href="/" class="navbar-brand mb-0 h1 "><i class="bi bi-stack"></i> masterBarangUts</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap fw-bold">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>" id="nav-index">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('barangs.index')); ?>" class="nav-link <?php if($currentRouteName == 'barangs.index'): ?> active <?php endif; ?>"id="nav-index">List Barang</a></li>
            </ul>

            <hr class="d-md-none text-white-50">

            
        </div>
    </div>
</nav>
<?php /**PATH D:\----- 1. Kuliah\2. Bahan - bahan Kuliah\✨ SEMESTER 4\PEMROGRAMAN FRAMEWORK - IS-04-04\Pertemuan 8\masterBarangUts\resources\views/layouts/nav.blade.php ENDPATH**/ ?>