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
                        <strong>UI/UX Designer</strong>
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


            <?php include 'layout/header.php'; ?>


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
            * SECTION - INTRODUCTION
            * ============================================ -->

            <!-- <div id="introduction" class="section section--dark introduction" data-section-name="introduction">
              <div class="section--content">
                <h2>Hello,</h2>

                <h4>I'm Anthony Pucelle</h4>

                <h4>and this is my story</h4>

                <p>
                  6 years experienced ui / ux designer. I design websites with the customer in the center of my concern. As mobile became the prefered medium to visit website, my workflow has gradually moved from desktop to mobile first.
                </p>

                <p>
                  I've worked with the #1 online retailer of contact lenses in UK and in Europe, conducting usability testing through all countries where we had customers. Analysing the differences in market between UK and the rest of Europe I acquired a certain flair to know what the customer desire in general and in this particuliar industry.
                </p>
              </div>
            </div>    -->

            <!-- ============================================ *
            * SECTION - SERVICES
            * ============================================ -->

            <div id="services" class="section section--white services" data-section-name="services">
                <div class="section--title">
                    <h2>
                        Services
                    </h2>
                </div>

                <div class="section--content">

                    <!-- ============================================ *
                    * SECTION - SERVICES - DESKTOP
                    * ============================================ -->
                    <ul class="service--list desktop">
                        <li class="service--ui">

                            <div class="service--title">
                                <h3>UI / UX</h3>
                            </div>

                            <div class="service--icon">
                                <?php include 'dest/svg/ui.php'; ?>
                            </div>

                            <div class="service--content">

                                <p>Provide the best experience for customers and make their shopping process as effortless and enjoyable as possible.</p>

                                <a href="/category/web.php">See UI / UX projects</a>

                            </div>

                        </li>

                        <li class="service--illu">

                            <div class="service--title">
                                <h3>Illustration</h3>
                            </div>

                            <div class="service--icon">
                                <?php include 'dest/svg/illustration.php'; ?>
                            </div>

                            <div class="service--content">
                                <p>Passionate about Character Design and to deliver original concept and high quality illustration for any purposes.</p>

                                <a href="/category/illustration.php">See Illustrations projects</a>
                            </div>
                        </li>

                        <li class="service--threed">
                            <div class="service--title">
                                <h3>3D</h3>
                            </div>

                            <div class="service--icon">
                                <?php include 'dest/svg/threeD.php'; ?>
                            </div>

                            <div class="service--content">
                                <p>Driven to make the best use of 3D to create flexible and high quality mock-up for all size businesses.</p>

                                <a href="/category/3d.php">See 3D projects</a>
                            </div>

                        </li>
                    </ul>

                    <!-- ============================================ *
                    * SECTION - SERVICES - MOBILE
                    * ============================================ -->
                    <ul class="service--list mobile owl-carousel">

                        <li class="service--illu">

                            <div class="service--title">
                                <h3>Illustration</h3>
                            </div>

                            <div class="service--icon">
                                <?php include 'dest/svg/illustration.php'; ?>
                            </div>

                            <div class="service--content">

                                <p>Passionate about Character Design and to deliver original concept and high quality illustration for any purposes.</p>

                                <a href="/category/illustration.php">See Illustrations projects</a>
                            </div>

                        </li>

                        <li class="service--threed">


                            <div class="service--title">
                                <h3>3D</h3>
                            </div>

                            <div class="service--icon">
                                <?php include 'dest/svg/threeD.php'; ?>
                            </div>

                            <div class="service--content">
                                <p>Driven to make the best use of 3D to create flexible and high quality mock-up for all size businesses.</p>

                                <a href="/category/3d.php">See 3D projects</a>
                            </div>

                        </li>

                        <li class="service--ui">

                            <div class="service--title">
                                <h3>UI / UX</h3>
                            </div>

                            <div class="service--icon">
                                <?php include 'dest/svg/ui.php'; ?>
                            </div>

                            <div class="service--content">
                                <p>Provide the best experience for customers and make their shopping process as effortless and enjoyable as possible.</p>

                                <a href="/category/web.php">See UI / UX projects</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ============================================ *
            * SECTION - WORK
            * ============================================ -->
            <div class="work section section--grey" data-section-name="work">

                <div class="section--content">
                    <ul class="work--list">

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
