<!DOCTYPE html>
<html lang="en">
<head>

    <title>Anthony Pucelle - Freelance UI / UX Designer </title>
    <meta name="description" content="Hello, I'm Anthony Pucelle, Freelance UI / UX Designer and also illustrator. Open for new opportunities from February 2018"/>
    <meta name="author" content="Anthony Pucelle">

    <?php include 'layout/head.php'; ?>

</head>

<body id="index">

<?php include 'layout/mobile-menu.php'; ?>
<?php include 'layout/header.php'; ?>

<div id="container">

    <div class="content-wrap">
        <div id="content">

            <!-- ============================================ *
            * LOADING BANNER
            * ============================================ -->
            <div id="loading" class="container">

                <div class="loading-logo">
                    <?php include 'dest/svg/logo-outline.php'; ?>
                </div>

                <div class="page-title">
                    <h1>Melbrins</h1>
                </div>

                <div class="subtitle">
                    <h2>
                        Freelance<br>
                        <strong>Illustrator</strong>
                    </h2>
                </div>

                <div class="discover-more">
                    <a href="#" id="discover">
                        <p>Discover More</p>
                        <span class="icon">
                <?php include 'dest/svg/arrow-down.php'; ?>
              </span>
                    </a>
                </div>

            </div>


            <!-- ============================================ *
            * MAIN BANNER
            * ============================================ -->

            <!-- <div class="banner banner-main banner-fullscreen">
              <div class="wrap">
                <div class="banner-content">
                  <h2>
                    <span class="f-bold">Hello,</span><br>
                    <span>I'm Anthony Pucelle</span>
                  </h2>

                  <h1>
                    <span class="f-light">Freelance</span><br>
                    <span class="f-main-colour">UI / UX Designer</span>
                  </h1>
                </div>
              </div>
            </div> -->



            <!-- ============================================ *
            * SECTION - WORK
            * ============================================ -->
            <div id="homepage-work" class="work section section--grey" data-section-name="work">

                <div class="section--content">
                    <ul class="work--list grid-3">

                        <!--  VISION DIRECT  -->
                        <?php include 'layout/project-block/vision-direct.php'; ?>

                        <!--  MERCHMAKER  -->
                        <?php include 'layout/project-block/merchmaker.php'; ?>

                        <!--  CHOOSEY  -->
                        <?php include 'layout/project-block/choosey.php'; ?>

                    </ul>
                </div>

            </div>

            <?php include 'layout/footer.php'; ?>
</body>

<?php include 'layout/after-body.php'; ?>

</html>
