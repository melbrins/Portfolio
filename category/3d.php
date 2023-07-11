<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>3D - Anthony Pucelle - Melbrins</title>
	<meta name="description" content="Freelance CG Artists, browse through my latest 3D projects, Character Design, Product Packaging.">
	<meta name="author" content="Anthony Pucelle">

	<link rel="canonical" href="https://www.melbrins.com/category/3d.php"/>

	<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<?php include '../layout/head.php'; ?>

</head>
<body id="portfolio">

<?php include '../layout/mobile-menu.php'; ?>
<?php include '../layout/header.php'; ?>

  <div id="container">
  


  <div class="content-wrap">
      <div id="content">

            <!-- ============================================ *
            * SECTION - WORK
            * ============================================ -->
            <div class="work section section--grey">

                    <div class="section--content">
                        <ul class="work--list grid-6">

                            <!-- GLUM & FISH -->
                            <?php include '../layout/project-block/glumFish.php'; ?>

                            <!-- LONDON COFFEE FESTIVAL -->
                            <?php include '../layout/project-block/coffeeFestival.php'; ?>

                            <!-- Wolf -->
                            <?php include '../layout/project-block/wolf.php'; ?>

                            <!-- VISION DIRECT 3D -->
                            <?php include '../layout/project-block/vd3D.php'; ?>

                            <!-- JACK -->
                            <?php include '../layout/project-block/jack.php'; ?>

                            <!-- Iphone -->
                            <?php include '../layout/project-block/iphone.php'; ?>

                        </ul>
                    </div>
            </div>

          <div class="content">
              <h1>Immersive 3D Creations: Showcasing My Captivating Portfolio</h1>
              <p>
                  Welcome to my 3D portfolio, where imagination meets the realm of three-dimensional artistry. Within
                  this curated collection, I invite you to explore an array of captivating 3D creations that push
                  the boundaries of visual storytelling.
              </p>
              <p>
                  As a skilled artist and designer, I have crafted a diverse range of 3D works that span various genres
                  and styles. From realistic architectural renderings and product visualizations to fantastical
                  character designs and immersive environments, each piece showcases my expertise in bringing concepts
                  to life with stunning depth and realism.
              </p>
              <p>
                  Through meticulous attention to detail, lighting, texture, and composition, I strive to create
                  engaging and evocative 3D artworks that transport viewers into extraordinary worlds. With a
                  combination of technical skill and creative vision, I aim to captivate and inspire.
              </p>
              <p>
                  Within this portfolio, you'll find in-depth case studies, wireframes, and final renders that shed
                  light on my design process, including concept ideation, modeling, texturing, lighting, and
                  post-production. Each project serves as a testament to my dedication, creativity, and ability to
                  transform ideas into tangible 3D masterpieces.
              </p>
              <p>
                  Whether you're seeking visualizations for architectural projects, product designs, or looking to
                  collaborate on immersive virtual experiences, my portfolio offers a glimpse into the possibilities of
                  3D art. I am passionate about working closely with clients to understand their vision and bring it to
                  life with exceptional attention to detail.
              </p>
              <p>
                  If you're interested in discussing a project or commissioning a custom 3D creation, I welcome you to
                  reach out via the contact page. I'm excited to explore new creative opportunities and contribute my
                  expertise to your endeavors.
              </p>
              <p>
                  Thank you for visiting my 3D portfolio. Immerse yourself in the captivating world of three-dimensional
                  art, where imagination takes shape and extraordinary visions become reality. Discover the power of
                  3D and envision the possibilities of bringing your ideas to life.
              </p>
          </div>
      </div>
  </div>
	<!-- page -->

<?php include '../layout/footer.php'; ?>

</body>

<?php include '../layout/after-body.php'; ?>
	<script type="text/javascript" src="../js/src/jquery.prettyPhoto.js" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
	</script>

	<script type="text/javascript">
		$("li.menu--3d a").addClass("active");
	</script>

	<script type="text/javascript" charset="utf-8">

		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				animation_speed: 'fast', /* fast/slow/normal */
				slideshow: 5000, /* false OR interval time in ms */
				autoplay_slideshow: false, /* true/false */
				opacity: 0.90, /* Value between 0 and 1 */
				show_title: true, /* true/false */
				allow_resize: true, /* Resize the photos bigger than viewport. true/false */
				allow_expand: false, /* Allow the user to expand a resized image. true/false */
				default_width: 500,
				default_height: 344,
				counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
				theme: 'light_rounded', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
				horizontal_padding: 0, /* The padding on each side of the picture */
				hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
				wmode: 'opaque', /* Set the flash wmode attribute */
				autoplay: true, /* Automatically start videos: True/False */
				modal: false, /* If set to true, only the close button will close the window */
				deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
				overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
				keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
				changepicturecallback: function(){}, /* Called everytime an item is shown/changed */
				callback: function(){}, /* Called when prettyPhoto is closed */
				ie6_fallback: true,
				markup: '<div class="pp_pic_holder"> \
							<div class="ppt">&nbsp;</div> \
							<div class="pp_content_container"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<a href="#" class="pp_expand" title="Expand the image">Expand</a> \
										<div class="pp_hoverContainer"> \
											<a class="pp_next" href="#"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> \
											<a class="pp_previous" href="#"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a> \
										</div> \
										<div id="pp_full_res"></div> \
										<div class="pp_details"> \
											<div class="pp_nav"> \
												<a href="#" class="pp_arrow_previous"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a> \
												<p class="currentTextHolder">0/0</p> \
												<a href="#" class="pp_arrow_next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> \
											</div> \
											<p class="pp_description"></p> \
											{pp_social} \
											<a class="pp_close" href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a> \
										</div> \
									</div> \
								</div> \
							</div> \
						</div> \
						<div class="pp_overlay"></div>',
				gallery_markup: '<div class="pp_gallery"> \
									<a href="#" class="pp_arrow_previous"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a> \
									<div> \
										<ul> \
											{gallery} \
										</ul> \
									</div> \
									<a href="#" class="pp_arrow_next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a> \
								</div>',
				image_markup: '<img id="fullResImage" src="{path}" />',
				flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
				quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
				iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
				inline_markup: '<div class="pp_inline">{content}</div>',
				custom_markup: ''
			});
		});
	</script>
	
</html>