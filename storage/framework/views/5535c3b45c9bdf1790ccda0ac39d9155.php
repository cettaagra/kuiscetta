<?php $__env->startSection('title', 'Galeri Travel'); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
        <div>
            <span class="inline-block px-3.5 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-3">
                Slide 03 · Galeri <?php echo e($profil['hobi']); ?>

            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white">
                Dokumentasi Perjalanan
            </h1>
            <p class="text-slate-400 mt-1">
                Koleksi <?php echo e(count($fotos)); ?> destinasi travel favorit milik <?php echo e($profil['nama']); ?>.
            </p>
        </div>

        <a href="<?php echo e(url('/profil')); ?>" class="text-sm font-semibold text-slate-400 hover:text-emerald-400 transition">
            &larr; Kembali ke Profil
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php $__currentLoopData = $fotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $foto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="group rounded-3xl overflow-hidden bg-slate-900 border border-slate-800 hover:border-emerald-500/50 transition-all duration-300 shadow-lg flex flex-col">
                <div class="relative aspect-[3/4] overflow-hidden bg-slate-800">
                    <img src="<?php echo e($foto['gambar']); ?>"
                         alt="<?php echo e($foto['judul']); ?>"
                         class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-bold bg-slate-950/80 backdrop-blur-md text-emerald-400 border border-slate-700">
                        <?php echo e($foto['kategori']); ?>

                    </span>
                </div>
                <div class="p-5 flex-1 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-medium text-cyan-400"><?php echo e($foto['lokasi']); ?></span>
                        <h2 class="text-lg font-bold text-white mt-1 group-hover:text-emerald-400 transition">
                            <?php echo e($foto['judul']); ?>

                        </h2>
                        <p class="text-xs text-slate-400 mt-2 leading-relaxed">
                            <?php echo e($foto['deskripsi']); ?>

                        </p>
                    </div>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\kuis\resources\views/galeri.blade.php ENDPATH**/ ?>