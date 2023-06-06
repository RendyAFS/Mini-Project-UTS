<?php
    $currentRouteName = Route::currentRouteName();
?>



<?php $__env->startSection('content'); ?>
    <div class="container py-5" >
        <div>
            <h2 class="text-center"> <i class="bi bi-stack"></i> Selamat Datang Di masterBarangUts</h2><br>
            <p>Website ini adalah sebuah platform yang
                menyediakan konten terkait dengan manajemen barang
                dan satuan. Di dalamnya terdapat dua tabel utama, yaitu
                 Tabel Barang dan Tabel Satuan, yang saling terhubung
                 melalui atribut Satuan Barang.
            </p>
            <p>
                <strong><i class="bi bi-stack"></i> Barang memiliki atribut sebagai berikut:</strong>
                <ol type="1">
                    <li>Kode Barang: Merupakan kode unik yang mengidentifikasi setiap barang dalam sistem.</li>
                    <li>Nama Barang: Menyimpan nama atau judul dari setiap barang.</li>
                    <li>Harga Barang: Menyimpan informasi tentang harga atau nilai moneter dari setiap barang.</li>
                    <li>Deskripsi Barang: Menyediakan deskripsi atau penjelasan singkat mengenai barang tersebut.</li>
                    <li>Satuan Barang: Merupakan atribut yang merupakan foreign key, yang merujuk pada tabel Satuan. Hal ini berarti setiap barang terkait dengan satuan tertentu dalam sistem.</li>
                </ol>
                <strong> <i class="bi bi-stack"></i> Tabel Satuan, di sisi lain, memiliki atribut sebagai berikut:</strong>
                <ol type="1">
                    <li>Kode Satuan: Merupakan kode unik yang mengidentifikasi setiap satuan dalam sistem.</li>
                    <li>Nama Satuan: Menyimpan informasi tentang nama atau keterangan singkat dari setiap satuan.</li>
                </ol>
                Dengan adanya kedua tabel ini, pengguna dapat memanfaatkannya
                untuk mengelola dan melacak informasi terkait barang, seperti kode,
                nama, harga, deskripsi, dan satuan yang digunakan. Ini memungkinkan
                pengguna untuk memiliki kontrol yang lebih baik dalam mengorganisir
                dan mengelola data barang yang ada.
            </p>

            <p>
                <strong><i class="bi bi-stack"></i>
                    Untuk mengecek data pada tabel barang dan satuan bisa
                    klik link berikut
                </strong>
            </p>
            <div class="row" >
                <div class="col-6">
                    <a class="btn btn-dark" id="btn-index2" href="<?php echo e(route('barangs.index')); ?>" class="nav-link <?php if($currentRouteName == 'barangs.index'): ?> active <?php endif; ?>">List Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 ">
                <img class="rounded mx-auto d-block" src="<?php echo e(Vite::asset('resources/images/fotoprofile.jpg')); ?>" class="img-fluid" alt="Gambar" id="fprofile">
            </div>
            <div class="col-md-8"><br>
                <h2>Biodata</h2><br>
                <p ><strong> Nama:</strong> Rendy Adi Fatma Saputra</p>
                <p ><strong> TTL:</strong> Tulungagung, 28 Juli 2002</p>
                <p><strong>Umur:</strong> 20 tahun</p>
                <p><strong>Alamat:</strong> Jl. Patimura 14, Pacet, Gedangsewu, Kec. Boyolangu, Kabupaten Tulungagung, Jawa Timur 66231</p>
                <p><strong>Pekerjaan:</strong> Mahasiswa S1 Sistem Informasi Institut Teknologi Telkom Surabaya</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\----- 1. Kuliah\2. Bahan - bahan Kuliah\✨ SEMESTER 4\PEMROGRAMAN FRAMEWORK - IS-04-04\Pertemuan 8\masterBarangUts\resources\views/default.blade.php ENDPATH**/ ?>