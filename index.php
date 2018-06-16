<!DOCTYPE html>
<html lang="en">
<head>

  <title>Anthony Pucelle - Freelance UI / UX Designer </title>
  <meta name="description" content="Hello, I'm Anthony Pucelle, Freelance UI / UX Designer and also illustrator. Open for new opportunities from February 2018"/>
  <meta name="author" content="Anthony Pucelle">
  
	<?php include 'layout/head.php'; ?>

</head>

<body id="index">

  	<?php include 'layout/header.php'; ?>

        <!-- ============================================ *
        * MAIN BANNER
        * ============================================ -->
        <div class="banner banner-main banner-fullscreen">
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
        </div>
        
        <!-- ============================================ *
        * SECTION - SERVICES
        * ============================================ -->

        <div class="section section--white services">
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

                  <div class="service--icon">
                    <img src="images/layout/ui-icon.png"/>
                  </div>

                  <h3>UI / UX</h3>

                  <p>Provide the best experience for customers and make their shopping process as effortless and enjoyable as possible.</p>

                  <a href="/web.php">See UI / UX projects</a>

              </li>

              <li class="service--illu">

                  <div class="service--icon">
                    <img src="images/layout/illu-icon.png"/>
                  </div>

                  <h3>Illustration</h3>

                  <p>Passionate about Character Design and to deliver original concept and high quality illustration for any purposes.</p>

                  <a href="/illustration.php">See Illustrations projects</a>

              </li>

              <li class="service--threed">

                  <div class="service--icon">
                    <img src="images/layout/3d-icon.png"/>
                  </div>

                  <h3>3D</h3>

                  <p>Driven to make the best use of 3D to create flexible and high quality mock-up for all size businesses.</p>

                  <a href="/3d.php">See 3D projects</a>

              </li>
            </ul>

            <!-- ============================================ *
            * SECTION - SERVICES - MOBILE
            * ============================================ -->
            <ul class="service--list mobile owl-carousel">
              
              <li class="service--illu">

                  <div class="service--icon">
                    <img src="images/layout/illu-icon.png"/>
                  </div>

                  <h3>Illustration</h3>

                  <p>Passionate about Character Design and to deliver original concept and high quality illustration for any purposes.</p>

                  <a href="/illustration.php">See Illustrations projects</a>

              </li>

              <li class="service--threed">

                  <div class="service--icon">
                    <img src="images/layout/3d-icon.png"/>
                  </div>

                  <h3>3D</h3>

                  <p>Driven to make the best use of 3D to create flexible and high quality mock-up for all size businesses.</p>

                  <a href="/3d.php">See 3D projects</a>

              </li>

              <li class="service--ui">

                  <div class="service--icon">
                    <img src="images/layout/ui-icon.png"/>
                  </div>

                  <h3>UI / UX</h3>

                  <p>Provide the best experience for customers and make their shopping process as effortless and enjoyable as possible.</p>

                  <a href="/web.php">See UI / UX projects</a>

              </li>
            </ul>
          </div>
        </div>

        <!-- ============================================ *
        * SECTION - WORK
        * ============================================ -->
        <div class="work section section--grey">

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
