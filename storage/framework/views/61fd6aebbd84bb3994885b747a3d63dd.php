<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>masterBarangUts</title>
     
     <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
     
</head>
<body id="bg-container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container" style="width:100%;">
            <!-- Konten -->
            <div class="row d-flex justify-content-center align-items-center" style="width:100%;">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h2><i class="bi bi-stack"></i> masterBa</h2><h2 style="color: #393E46">rangUts <i class="bi bi-stack"></i></h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center" style="width:100%;">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <a class="btn btn-dark" href="<?php echo e(route('home')); ?>" style="width:200px;">Start</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\arend\OneDrive\Desktop\RAHUL\masterBarangUts\resources\views/welcome.blade.php ENDPATH**/ ?>