<nav class="navbar navbar-expand-lg navbar-custom py-3">
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
                    <a class="nav-link link-custom" aria-current="page" href="<?php echo e(route('announcement.index')); ?>">Tutti
                        gli
                        annunci</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link link-custom" href="<?php echo e(route('announcement.create')); ?>">Inserisci articolo</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link link-custom dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Generi
                    </a>
                    <ul class="dropdown-menu">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="dropdown-item link-custom"
                                    href="<?php echo e(route('categoryShow', compact('category'))); ?>"><?php echo e($category->name); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>

            </ul>
            <?php if(auth()->guard()->check()): ?>
                <p class="d-none">
                    <?php echo e($counter = App\Models\Announcement::toBeRevisionedCount()); ?>

                </p>
                <li class="nav-item dropdown ms-auto mx-5">
                    <a class="nav-link link-custom dropdown-toggle mx-2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                        <?php if(Auth::user()->is_revisor): ?>
                            <?php if($counter > 0): ?>
                                <span class="badge rounded-pill bg-danger">
                                    <?php echo e(App\Models\Announcement::toBeRevisionedCount()); ?>

                                    <span class="visually-hidden">messaggi non letti</span>
                                </span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(Auth::user()->is_revisor): ?>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm link-custom" href="<?php echo e(route('revisor.index')); ?>">Area
                                    Revisioni
                                    <span class="badge rounded-pill bg-danger">
                                        <?php echo e(App\Models\Announcement::toBeRevisionedCount()); ?>

                                        <span class="visually-hidden">messaggi non letti</span>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <hr class="mx-2">
                        <li class="nav-item mx-2">
                            <a href="/logout"
                                onclick="event.preventDefault();getElementById('form-logout').submit()">Logout</a>
                        </li>
                        <form id="form-logout" action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                        </form>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link link-custom dropdown-toggle mx-2" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Visitatore
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item mx-2">
                            <a href="/login"
                                onclick="event.preventDefault();getElementById('form-login').submit()">Login</a>
                        </li>
                        <form id="form-login" action="<?php echo e(route('login')); ?>" method="GET">
                        </form>
                        <li class="nav-item mx-2">
                            <a href="/register"
                                onclick="event.preventDefault();getElementById('form-register').submit()">Registrati</a>
                        </li>
                        <form id="form-register" action="<?php echo e(route('register')); ?>" method="GET">
                        </form>
                    </ul>
                </li>
            <?php endif; ?>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\amste\wa\Retro-Hunters_gruppo_01\resources\views/components/navbar.blade.php ENDPATH**/ ?>