<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perumahan</title>
</head>

<body>
    <table border="1cm">
        <thead>
            <tr>
                <td>id</td>
                <td>Nama</td>
                <td>Luas</td>
                <td>Harga</td>
            </tr>
            <tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perumahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($perumahan->nama_perumahan); ?></td>
                <td><?php echo e($perumahan->luas_perumahan); ?></td>
                <td><?php echo e($perumahan->harga_perumahan); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>

</html><?php /**PATH /home/kira/Sekolah/Kejuruan/TOT UGM/diklat22/resources/views/index.blade.php ENDPATH**/ ?>