<?php 
    $title = 'Dashboard';
    $user = $_SESSION['user'];
?>

<?php
    ob_start();
    include 'style.css';
    $style = ob_get_clean();
?>

<?php ob_start(); ?>
<header class="bg-dark text-light py-4 ml-5">
    <div class="container">
        <h1><?= ucfirst(isset($data[1]) ? $data[1] : 'dashboard')?></h1>
        <div class="user-icon d-flex flex-column">
            <div class="d-flex justify-content-center">
                <span><i class="bi bi-person-fill"></i></span>
            </div>
            <span><?= $user['name'] ?></span>
        </div>
    </div>
</header>
<aside class="sidebar">
    <h3 class="px-3">Contact App</h3>
    <ul class="mt-5 px-2">
        <li>
            <a href="<?= urlpath('dashboard'); ?>">Dashboard</a>
        </li>
        <li>
            <a href="<?= urlpath('dashboard/contacts'); ?>">Contacts</a>
        </li>
        <li>
            <a href="<?= urlpath('dashboard/admin'); ?>">Admin</a>
        </li>
        <li>
            <a href="<?= urlpath('dashboard/logout'); ?>">Logout</a>
        </li>
    </ul>
</aside>
<main class="container content">
    <?php
        if (isset($url)) {
            include $url.'.php';
        }
        else {
            include 'home.php';
        }
    ?>
</main>
<?php $body = ob_get_clean(); ?>

<?php include 'view/master.php'; ?>