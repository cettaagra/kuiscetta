<?php $__env->startSection('title', 'Profil Saya'); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-3xl mx-auto w-full">
        <div class="mb-8">
            <span class="inline-block px-3.5 py-1 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-3">
                Slide 02 · Profil Mahasiswa
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-white">
                Identitas <?php echo e($profil['nama']); ?>

            </h1>
            <p class="text-slate-400 mt-2">
            </p>
        </div>

        <div class="rounded-3xl bg-slate-900/90 border border-slate-800 p-6 sm:p-8 shadow-xl">
            <div class="flex items-center gap-5 pb-6 mb-6 border-b border-slate-800">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-400 to-cyan-500 flex items-center justify-center text-slate-950 font-extrabold text-2xl shrink-0">
                    <?php echo e(substr($profil['nama'], 0, 1)); ?>

                </div>
                <div>
                    <h2 class="text-2xl font-bold text-white"><?php echo e($profil['nama']); ?></h2>
                    <p class="text-emerald-400 font-medium text-sm mt-0.5">
                        <?php echo e($profil['nim']); ?> · <?php echo e($profil['jurusan']); ?>

                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <?php $__currentLoopData = $biodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800">
                        <span class="block text-xs font-semibold uppercase tracking-wider text-slate-500">
                            <?php echo e($item['label']); ?>

                        </span>
                        <span class="block text-lg font-bold text-white mt-1">
                            <?php echo e($item['value']); ?>

                        </span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="mt-8 pt-6 border-t border-slate-800 flex items-center justify-between">
                <a href="<?php echo e(url('/')); ?>" class="text-sm font-semibold text-slate-400 hover:text-white transition">
                    &larr; Homepage
                </a>
                <a href="<?php echo e(url('/galeri')); ?>" class="px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-sm transition">
                    Lanjut ke Galeri Travel &rarr;
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\kuis\resources\views/profil.blade.php ENDPATH**/ ?>