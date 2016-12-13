=== Social Media Shortcodes ===
Contributors: tw2113
Tags: social media, shortcodes
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: 1.0.3
License: WTFPL
License URI: http://sam.zoy.org/wtfpl/

Creates shortcodes for profile links to various social media websites.

== Description ==

This plugin registers shortcodes for the following websites, social service on the left, format for the shortcode on the right:

Service / shortcode version

* Codesnipp.it [codesnippit]
* Colourlovers [colourlovers]
* Daily Booth [dailybooth]
* Delicious [delicious]
* Digg [digg]
* Dribbble [dribbble]
* Facebook [facebook]
* Favstar.FM [favstarfm]
* Flickr [flickr]
* Forrst [forrst]
* Foursquare [foursquare]
* Github [github]
* Identica [identica]
* Last.FM [lastfm]
* Linkedin [linkedin]
* Myspace [myspace]
* OkCupid [okcupid]
* Programmable Web [programmableweb]
* Reddit [reddit]
* Scribd [scribd]
* Slideshare [slideshare]
* Stickam [stickam]
* StumbleUpon [stumbleupon]
* Twitter [twitter]
* Vimeo [vimeo]
* Youtube [youtube]

All examples updated for v1.0.3

Example 1:

`[twitter name="JoeSomeone" text="some text you want the link to appear as"]`

results in:

`<a href="http://www.twitter.com/JoeSomeone" title="JoeSomeone's Twitter profile\" class="twitter_smsc">some text you want the link to appear as</a>`

on your post/page

Example 2:

`[twitter name="JoeSomeone"]`

results in:

`<a href="http://www.twitter.com/JoeSomeone" title="JoeSomeone's Twitter profile\" class="twitter_smsc">JoeSomeone (Twitter)</a>`

on your post/page.

Example 3:

`[twitter name="JoeSomeone" target="_blank"]`

results in:

`<a href="http://www.twitter.com/JoeSomeone" title="JoeSomeone's Twitter profile\" target="_blank" class="twitter_smsc">JoeSomeone (Twitter)</a>`

on your post/page.

#### Notes
* Setting target to "_self" will not output a target tag, as it's already the default browser behavior.

### Adding your own sites not already listed.
<pre><code>
&lt;?php
add_filter('smsc_shortcodes','myfunc');
function myfunc ( $codes ) {
	$codes['myhandle'] = array ('sitename', 'PATH TO PROFILE URL')
	return $codes;
}
?&gt;
</code></pre>

#### Notes
* 'myhandle' is what you use when using the [myhandle] in the actual post.
* 'sitename' is the name of the site to show in the output.
* 'PATH…' is the part of the url before you enter the user name. For example, Twitter user profiles are http://www.twitter.com/username. You need to specify everything before 'username'. You can see examples if you view the source of the plugin.

== Installation ==

1. Upload the `social-media-shortcode` folder to your `/wp-content/plugins/` directory
1. Activate through the 'Plugins' menu in WordPress
1. Write some blog posts.
1. Link some social media sites.
1. You look very nice today, did you get your hair did?
1. Ignore what Grumpy Cat thinks of your post. It's wonderful.

== Frequently Asked Questions ==

None yet

== Screenshots ==

None

== Changelog ==

= 1.0.3 =
* Added classes to the link markup based on social media site. Twitter will get 'class="twitter_smsc"' and so on. Added optional target parameter to shortcode in case someone wants to open in different browser windows.

= 1.0.2 =
* Added is_array() check after filter and some function documentation.

= 1.0.1 =
* Added filter for users to add their own sites.

= 1.0 =
* Initial upload

== Upgrade Notice ==

= 1.01 =
Just a new filter to add your own sites with.

= 1.0.2 =
* Added is_array() check after filter and some function documentation.

= 1.0.3 =
* Added class output for the links and optional browser window target for shortcode.