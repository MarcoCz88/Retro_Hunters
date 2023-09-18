<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retro Hunters Support</title>
</head>
<body>
    <div>
        <h2>Un utente si è candidato al ruolo di revisore</h2>
        <h3>I suoi dati sono: </h3>
        <p>Nome: <?php echo e($user->name); ?></p>
        <p>Email: <?php echo e($user->email); ?></p>
        <p>Se vuoi renderlo revisore clicca qui</p>
        <a href="<?php echo e(route('make.revisor', compact('user'))); ?>">Rendi revisore</a>
    </div>
</body>
</html><?php /**PATH C:\Users\amste\wa\Retro-Hunters_gruppo_01\resources\views/mail/become_revisor.blade.php ENDPATH**/ ?>