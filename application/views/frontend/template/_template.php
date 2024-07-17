<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?>MiyoMart</title>
    <?php require_once('_css.php') ?>
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <?php require_once('_navbar.php') ?>

    <!--================ End Header Menu Area =================-->
    <main class="site-main">
        <section>
            <div style="width: 90vw; height:10vh;"></div>
        </section>

        <button style="display: none;" class="flash-data-error" value="<?= $this->session->flashdata('flash-error'); ?>"></button>
        <button style="display: none;" class="flash-data-success" value="<?= $this->session->flashdata('flash-success'); ?>"></button>
        <?= $contents; ?>
    </main>
    <!--================ Start footer Area  =================-->
    <?php require_once('_footer.php') ?>
    <!--================ End footer Area  =================-->


    <?php require_once('_js.php') ?>

</body>

</html>