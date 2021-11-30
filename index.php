<?php
// Change page title and meta tags here
$title = "Microsoft Certified Training | Robust IT Training";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$meta['og:title'] = "Microsoft Certified Training | Robust IT Training";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

?>

<?php include './assets/inc/header.php' ?>
<?php include './assets/inc/components/nav.php' ?>
<?php include './assets/inc/components/hero.php' ?>


<main id="home" class="container-fluid">

    <section class="container">
        <div class="row seven-cols text-center">
            <div class="col-6 col-md-1 hover-effect">
                <a href="<? echo SITE_ADDR ?>/">
                    <span class="iconify fa-5x" data-icon="lucide:server"></span>
                    <h3>Server</h3>
                </a>
            </div>
            <div class="col-6 col-md-1 hover-effect">
                <a href="<? echo SITE_ADDR ?>/">
                    <span class="iconify fa-5x" data-icon="akar-icons:cloud"></span>
                    <h3>Cloud</h3>
                </a>
            </div>
            <div class="col-6 col-md-1 hover-effect">
                <a href="<? echo SITE_ADDR ?>/">
                    <span class="iconify fa-5x" data-icon="ant-design:lock-outlined"></span>
                    <h3>Security</h3>
                </a>
            </div>
            <div class="col-6 col-md-1 hover-effect">
                <a href="<? echo SITE_ADDR ?>/">
                    <span class="iconify fa-5x" data-icon="mdi:microsoft-azure"></span>
                    <h3>Azure</h3>
                </a>
            </div>
            <div class="col-6 col-md-1 hover-effect">
                <a href="<? echo SITE_ADDR ?>/">
                    <span class="iconify fa-5x" data-icon="simple-icons:mysql"></span>
                    <h3>SQL</h3>
                </a>
            </div>
            <div class="col-6 col-md-1 hover-effect">
                <a href="<? echo SITE_ADDR ?>/">
                    <span class="iconify fa-5x" data-icon="uil:programming-language"></span>
                    <h3>Coding</h3>
                </a>
            </div>
            <div class="col-6 col-md-1 hover-effect">
                <a href="<? echo SITE_ADDR ?>/">
                    <span class="iconify fa-5x" data-icon="akar-icons:desktop-device"></span>
                    <h3>Desktop</h3>
                </a>
            </div>
        </div>

    </section>

</main>

<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>



<?php include './assets/inc/footer.php' ?>