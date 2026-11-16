

<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-slate-900 via-slate-900 to-emerald-950/40 border border-slate-800 p-8 sm:p-14 shadow-2xl">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 mb-6">
                Slide 01 · Homepage
            </span>

            <h1 class="text-4xl sm:text-5xl font-extrabold text-white leading-tight mb-5">
                Selamat Datang di Website <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400"><?php echo e($profil['nama']); ?></span>
            </h1>

            <p class="text-slate-300 text-base sm:text-lg leading-relaxed mb-8">
                <?php echo e($profil['deskripsi']); ?>

            </p>

            <div class="flex flex-wrap gap-4">
                <a href="<?php echo e(url('/profil')); ?>" class="px-6 py-3.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-sm transition shadow-lg shadow-emerald-500/20">
                    Lihat Profil Saya &rarr;
                </a>
                <a href="<?php echo e(url('/galeri')); ?>" class="px-6 py-3.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-semibold text-sm border border-slate-700 transition">
                    Galeri <?php echo e($profil['hobi']); ?>

                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\kuis\resources\views/home.blade.php ENDPATH**/ ?>