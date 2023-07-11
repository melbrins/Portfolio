<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Print - Anthony Pucelle - Melbrins</title>
	<meta name="description" content="Freelance Graphic Designer, have a look at my latest print projects.">
	<meta name="author" content="Anthony Pucelle">

	<link rel="canonical" href="https://www.melbrins.com/category/print.php"/>

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
                <ul class="work--list grid-2">

                    <!--  TEN CHI JIN  -->
                    <?php include '../layout/project-block/tenChiJin.php'; ?>

                    <!--  WALL STREET INSTITUTES  -->
                    <?php include '../layout/project-block/WSI.php'; ?>

                </ul>
            </div>
        </div>

        <div class="content">
              <h1>Visual Brilliance Unleashed: Showcasing My Diverse Graphic Design Portfolio</h1>
              <p>
                  Welcome to my graphic design portfolio, a realm where creativity and visual brilliance collide.
                  Within this carefully curated collection, you'll discover an eclectic range of projects that
                  demonstrate my expertise in delivering captivating designs across various mediums.
              </p>
              <p>
                  From eye-catching branding and logo designs to stunning print materials and digital graphics, each
                  piece reflects my passion for creating compelling visuals that leave a lasting impact. I specialize
                  in combining artistic flair with strategic thinking to craft designs that effectively communicate
                  messages, evoke emotions, and captivate audiences.
              </p>
              <p>
                  In this showcase, you'll find a showcase of my graphic design prowess through case studies, brand
                  identity packages, packaging designs, marketing collateral, and more. Each project tells a unique
                  story, providing insights into my design process, conceptualization, and the meticulous attention I
                  pay to typography, color theory, and composition.
              </p>
              <p>
                  With a focus on collaboration and understanding clients' objectives, I strive to create designs that
                  not only visually stun but also align with their brand's essence and resonate with their target audience.
                  Whether it's developing a cohesive visual identity or breathing new life into existing materials, my
                  goal is to craft designs that exceed expectations and deliver results.
              </p>
              <p>
                  Whether you're a business owner seeking impactful marketing materials, an entrepreneur looking to
                  elevate your brand, or simply an art enthusiast curious about the world of graphic design, this
                  portfolio offers a glimpse into the breadth and depth of my skills.
              </p>
              <p>
                  If you're interested in discussing a project or partnering on a creative endeavor, I invite you to
                  reach out via the contact page. Let's collaborate to bring your design visions to life and create
                  visual brilliance that leaves a lasting impression.
              </p>
              <p>
                  Thank you for visiting my graphic design portfolio. Dive into a world where aesthetics and
                  communication converge, and discover the power of design to transform ideas into captivating realities.
                  Together, let's create visual wonders that make a memorable mark.
              </p>
      </div>
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
		$("li.menu--print a").addClass("active");
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