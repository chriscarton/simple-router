<?php require_once('header.php'); ?>
<main id="Main">
    <header id="Header">
        <div id="Brand">
            <img src="logo.png" alt="">
            <h1>Hello, this is a simple router !</h1>
        </div>
        <?php 
            require_once('menu.php');
        ?>
    </header>
    <div id="Content">
        <?php 
        require_once('router.php');
        ?>
    </div>
</main>
<?php require_once('footer.php'); ?>