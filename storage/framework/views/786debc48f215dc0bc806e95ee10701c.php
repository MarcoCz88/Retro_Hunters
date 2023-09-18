<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">RH</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link link-custom" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-custom" aria-current="page" href="<?php echo e(route('announcement.index')); ?>">Tutti gli
                        annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link-custom dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Generi
                    </a>
                    <ul class="dropdown-menu">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="dropdown-item link-custom" href="<?php echo e(route('categoryShow', compact('category'))); ?>"><?php echo e($category->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                <form action="<?php echo e(route('register')); ?>" method="GET">
                    <li class="nav-item">
                        <button class="btn btn-primary mx-2"> Registrati</button>
                    </li>
                </form>
                <form action="<?php echo e(route('login')); ?>" method="GET">
                    <li class="nav-item">
                        <button class="btn btn-primary mx-2">Login </button>
                    </form>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                    <a class="nav-link link-custom" href="<?php echo e(route('announcement.create')); ?>">Inserisci articolo</a>
                </li>
                
                <?php if(Auth::user()->is_revisor): ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm link-custom" href="<?php echo e(route('revisor.index')); ?>">Area Revisioni
                        <span class="badge rounded-pill bg-danger">
                            <?php echo e(App\Models\Announcement::toBeRevisionedCount()); ?>

                            <span class="visually-hidden">messaggi non letti</span>
                        </span>
                    </a>
                </li>    
                <?php endif; ?>
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <li class="nav-item">
                        <button class="btn btn-primary">Logout</button>
                    </li>
                </form>
            <?php endif; ?>
                
                
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\amste\wa\Retro-Hunters_gruppo_01\resources\views/components/navbar.blade.php ENDPATH**/ ?>