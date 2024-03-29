<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Illustration - Anthony Pucelle - Melbrins</title>
	<meta name="description" content="Freelance Illustrator, concept artist. Have a look at my amazing illustration and Character Designs.">
	<meta name="author" content="Anthony Pucelle">

	<link rel="canonical" href="https://www.melbrins.com/category/illustration.php"/>

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
                                <?php include '../layout/project-block/ranger-amazon.php'; ?>
                    <?php include '../layout/project-block/wizardly-foxy.php'; ?>
                    <?php include '../layout/project-block/fox-dragon.php'; ?>
                    <?php include '../layout/project-block/turning-red-red.php'; ?>
                    <?php include '../layout/project-block/fantasy-weapon-shop.php'; ?>
                    <?php include '../layout/project-block/fox-woman-portrait.php'; ?>

                        </ul>

                        <ul class="work--list grid-6">
                                <?php include '../layout/project-block/efreet-daraco.php'; ?>
                                <?php include '../layout/project-block/queen-bee.php'; ?>
                                <?php include '../layout/project-block/bee-anatomy.php'; ?>
                                <?php include '../layout/project-block/burning-gaze.php'; ?>
                                <?php include '../layout/project-block/heroes-of-the-storm.php'; ?>
                                <?php include '../layout/project-block/dark-elf.php'; ?>
                        </ul>

                        <ul class="work--list grid-6">

                            <!--  ANGELA  -->
                                <?php include '../layout/project-block/angela.php'; ?>

                        <!--  STAR WARS FAMILY  -->
                    <?php include '../layout/project-block/star-wars.php'; ?>

                        <!--  OCTOCAT  -->
                    <?php include '../layout/project-block/octocat.php'; ?>

                        <!--  COLD TOUCH -->
                    <?php include '../layout/project-block/cold-touch.php'; ?>

                        <!--  MEDUSA  -->
                                <?php include '../layout/project-block/medusa.php'; ?>

                        <!--  BLACK SHEEP GOAT  -->
                    <?php include '../layout/project-block/black-sheep.php'; ?>
                        </ul>
                    </div>
            </div>

            <div class="content">
                <h1>Captivating Digital Illustrations: A Visual Journey of Imagination and Creativity</h1>
                <p>
                    Welcome to my digital illustration gallery, where imagination comes to life in vibrant colors and captivating
                    visuals. As an illustrator, I pour my heart and soul into creating unique and imaginative artworks that
                    transport viewers to extraordinary realms.
                </p>
                <p>
                    Within this collection, you'll find a diverse range of illustrations showcasing my artistic prowess.
                    From fantastical creatures and whimsical landscapes to dynamic character portraits and mesmerizing scenes,
                    each piece tells a story and evokes emotions.
                </p>
                <p>
                    I bring my skills as a UI/UX designer, full-stack developer on Magento 2, and graphic designer into my
                    illustrations, infusing them with a unique blend of creativity and technical expertise.
                    This multidisciplinary approach allows me to craft visually stunning and conceptually rich artworks
                    that resonate with a wide audience.
                </p>
                <p>
                    Whether you're seeking inspiration, looking to commission custom artwork, or simply appreciating the
                    beauty of digital illustration, this collection offers something for everyone. Explore the gallery and
                    immerse yourself in a world where imagination knows no bounds.
                </p>
                <p>
                    Each artwork is meticulously created, paying attention to intricate details, vibrant color palettes, and
                    dynamic compositions. I strive to bring characters and concepts to life, inviting you to join me on a visual
                    journey filled with wonder and curiosity.
                </p>
                <p>
                    If you're interested in collaborating on a project or commissioning a custom illustration, I would be
                    thrilled to bring your vision to life. Feel free to reach out via the contact page to discuss your ideas or
                    inquire about my illustration and design services.
                </p>
                <p>
                    Thank you for visiting my digital illustration page. I hope my artwork sparks your imagination, ignites
                    your creativity, and leaves you inspired. Enjoy the captivating world of digital illustration!
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
		$("li.menu--illustration a").addClass("active");
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