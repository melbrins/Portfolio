

<?php 
function contributors() {
global $wpdb;
 
$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users ORDER BY display_name");
 
foreach($authors as $author) {
echo "<li>";
echo "<a href=\"".get_bloginfo('url')."/?author=";
echo $author->ID;
echo "\">";
echo userphoto($author->ID);
echo "</a>";
echo '<div>';
echo "<a href=\"".get_bloginfo('url')."/?author=";
echo $author->ID;
echo "\">";
the_author_meta('display_name', $author->ID);
echo "</a>";
echo "</div>";
echo "</li>";
}
}
?>

<p class="main-para">
	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
</p>

<!-- Start journalist -->
<div class="journalist clearfix">

	<div class="fl">
	[PICTURE]
	</div>

	<div class="fr">
		<h2>Susan Kennedy</h2>

		<h3>
			<p>
				<a href="#">Journalist at BBC.co.uk</a><span> - Food & Restaurants writer</span>
			</p>
		</h3>

		<p>
			Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
		</p>
	</div>
</div>
<!-- end journalist -->

<!-- Start journalist -->
<div class="journalist clearfix">

	<div class="fl">
		[PICTURE]
	</div>

	<div class="fr">
		<h2>Susan Kennedy</h2>

		<h3>
			<p>
				<a href="#">Journalist at BBC.co.uk</a><span> - Food & Restaurants writer</span>
			</p>
		</h3>

		<p>
		Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
		</p>
	</div>
</div>
<!-- end journalist -->

<!-- Start journalist -->
<div class="journalist clearfix">
	<div class="fl">
		[PICTURE]
	</div>
	<div class="fr">
		<h2>Susan Kennedy</h2>

		<h3>
			<p>
				<a href="#">Journalist at BBC.co.uk</a><span> - Food & Restaurants writer</span>
			</p>
		</h3>

		<p>
		Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
		</p>
	</div>
</div>
<!-- end journalist -->