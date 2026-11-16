<header class="sticky top-0 z-50 bg-slate-950/85 backdrop-blur-md border-b border-slate-800">
    <div class="max-w-5xl mx-auto px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4">
        <a href="<?php echo e(url('/')); ?>" class="flex items-center gap-3 group">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-400 to-cyan-500 flex items-center justify-center text-slate-950 font-extrabold text-sm shadow-lg shadow-emerald-500/20">
                <?php echo e(substr($profil['nama'], 0, 2)); ?>

            </div>
            <div>
                <span class="font-bold text-white tracking-tight group-hover:text-emerald-400 transition">
                    <?php echo e($profil['nama']); ?>

                </span>
                <span class="block text-xs text-slate-400"><?php echo e($profil['jurusan']); ?> · <?php echo e($profil['hobi']); ?></span>
            </div>
        </a>

        <nav class="flex items-center gap-2 bg-slate-900 p-1.5 rounded-xl border border-slate-800">
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url($menu['url'])); ?>"
                   class="px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 <?php echo e(request()->routeIs($menu['route']) ? 'bg-emerald-500 text-slate-950 shadow-md shadow-emerald-500/20' : 'text-slate-300 hover:text-white hover:bg-slate-800'); ?>">
                    <?php echo e($menu['label']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>
    </div>
</header><?php /**PATH C:\xampp\htdocs\kuis\resources\views/layouts/header.blade.php ENDPATH**/ ?>