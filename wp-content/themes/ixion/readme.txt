=== Ixion ===

Contributors:
Tags: one-column, two-column, right-sidebar, custom-menu, custom-logo, threaded-comments

Requires at least: 4.5
Tested up to: 4.6
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

A theme for non-profits, organizations, and schools.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

Ixion includes support for many Jetpack (jetpack.me) features:

* Featured Content
* Testimonials
* Social Links Menu
* Infinite Scroll

== Setting Up Your Front Page ==

When you first activate Ixion, your homepage displays posts in a traditional blog format. To set up your homepage, follow these steps:

1) Create a page.
2) Go to the Customizer’s Static Front Page panel and set “Front page displays” to “A static page.”
3) Select the page created in Step One as “Front page,” and choose another page as “Posts page” to display your blog posts.

Ixion's front page displays, in order:

* The site header;
* the Site Tagline with optional Header Image and Call-to-Action Button;
* Featured Content;
* the page title and content, if set, and the five most recent Posts;
* the sidebar;
* and the site footer.


== Site Tagline ==

The site tagline appears on the front page of your site, and is a great place to add a brief welcome. HTML cannot be used in the tagline.


== Theme Options ==

Add a call-to-action button to your front page underneath the Site Tagline as seen on the demo. Go to Customize → Theme Options to add the URL and text to your call-to-action button.


== Featured Content ==

Featured Content (only available with Jetpack: jetpack.me) is shown on the front page below the Site Tagline area. To add a post or page to Featured Content, give it the tag "featured," or another tag of your choosing set from Customize → Featured Content.


== Featured Images ==

Ixion supports prominent Featured Images on single posts and pages at full width and an unlimited height.


== Custom Menus ==

-- Main Menu --

This theme has one main menu area called "Header." If you don't assign a custom menu to that area, your site's default page menu is displayed instead.

-- Social Links --

Ixion supports a Jetpack Social Links (jetpack.me) menu, which appears in the footer. Linking to any of the following sites will automatically display its icon in your menu:

CodePen					Digg
Dribbble				Dropbox
Facebook				Flickr
github 					Google+
Instagram				LinkedIn
Email (mailto: links)	Pinterest
Pocket					Polldaddy
Reddit					RSS Feed (urls with /feed/)
StumbleUpon				Tumblr
Twitter					Vimeo
WordPress				YouTube


== Widgets ==

-- Sidebar --

Ixion has a one-column or two-column layout. Add widgets to the sidebar area for a traditional two-column blog, or leave it blank for a sleek one-column style.

-- Footer Widget Areas --

Ixion also includes up to four optional widget areas in the footer.

Configure these widget areas from Customize → Widgets.


== Testimonials ==

Download Jetpack http://jetpack.me/ to activate this feature. Ixion features testimonials in two ways:

* The dedicated testimonial archive page displays all testimonials in reverse chronological order, with the newest displayed first.
* The Testimonial Shortcode allows you to display the testimonials wherever you want on your site.

To add a testimonial, go to Testimonials → Add New in your WP Admin dashboard. Testimonials are composed of the testimonial text, the name of the customer — added as testimonial title — and an image or logo, which can be added as a Featured Image.

-- Testimonial Archive Page --

The testimonial archive page can be found at https://ixiondemo.wordpress.com/testimonial/ — just replace https://ixiondemo.wordpress.com/ with the URL of your website. All testimonials are displayed on the testimonial archive page, which can be added to a Custom Menu using the Links Panel.

This page can be further customized by adding a title, intro text, and featured image via Customizer → Testimonials. This content will appear above the testimonials list.


== Page Templates ==

Ixion comes with a No Sidebar Page Template to give you more space for your content. It’s the perfect way to showcase a large gallery of images or a video.


== Extras ==

Ixion comes with a special CSS style for buttons. You can add the button class to your links in the HTML Editor or a Text Widget to create “call to action” buttons.

Sample code:
<a href="https://ixiondemo.wordpress.com/" class="button">Button</a>


== Additional Support ==

Ixion also supports the following features:

* Custom Logo
* Custom Backgrounds


== Quick Specs (all measurements in pixels) ==

* The main column width is 712.
* The main sidebar width is 277.
* The four optional footer widget areas' widths vary depending on the number of active areas.
* Featured Images are displayed at 1080 width and variable height on single posts and pages, and at a maximum of 712 width on the blog.
* The site logo appears at a maximum width of 500 and height of 100.
* The custom header appears at 1080 width with flexible height.

== Changelog ==

= 8 February 2019 =
* Remove unneeded visibility hidden from header search, so it can be tabbed to via keyboard.

= 7 February 2019 =
* Correct button appearance.

= 5 February 2019 =
* Fix issue with fixed cover images being offset in Chrome.

= 1 January 2019 =
* Fix issue with file block button and link overlapping on smaller screens.

= 4 December 2018 =
* Fix inconsistencies with how centre alignment is styles in widget blocks.

= 3 December 2018 =
* Update default block placeholder CSS selector. Bump version number.

= 24 November 2018 =
* not() in the editor styles; that made them too specific, they overrode other styles. Bump version number.

= 21 November 2018 =
* Minor fixes to Gutenberg implementation, including:

= 10 November 2018 =
* Remove erroneous escape characters which break some minifiers.

= 7 November 2018 =
* Add Gutenberg support to the theme.

= 23 September 2018 =
* Make sure left and right aligned images with captions have some horizontal spacing.

= 5 April 2018 =
* Optimize images

= 15 March 2018 =
* Adjust content width to account for full-width footer widgets; remove deprecated Jetpack function to adjust gallery width, as this is handled by core.

= 7 March 2018 =
* Improve contact form styles.

= 3 March 2018 =
* Use wp_kses_post rather than wp_filter_post_kses.

= 23 February 2018 =
* Simplify Headstart annotations.

= 15 February 2018 =
* Add min-height to .branding-container element to make sure there's enough space for mobile menu button, even if the site title is not being displayed.

= 28 December 2017 =
* Reduce size of captions in widget galleries, to better  match space available.

= 3 October 2017 =
* Update version number in preparation for .org submission

= 5 September 2017 =
* Filter content width for Jetpack Gallery widget so galleries and media can be displayed full width in large widget areas.

= 13 July 2017 =
* Further adjustments for testimonial shortcode in widget area.
* Adjust placement of quotation mark on testimonial shortcode in widget area.
* Add a dropdown control that allows users to change the overlay on the header image and featured images from 'none' to 'dark'. Defaults line up with the original opacities, so if users don't touch this control they won't notice a change.

= 4 July 2017 =
* Adding hover colours for social icons widget, and fixing contrast issue in links in sidebar widgets.

= 31 May 2017 =
* Updating styles so when there's no tagline or featured content, the bottom border that appears under the two doesn't display. Also updated customizer JS to make sure site title updates in preview.

= 29 March 2017 =
* Fix body-class for ixion_button_text not returning default setting.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 20 March 2017 =
* Correct path to Genericons bundled font in style enqueue
* Update readme.txt with license and credit information for photos used in screenshot.png and bundled fonts.
* Escaping for home_url() and replace three periods with ellipsis icon.
* Delete old Testimonials template file, originally intended for use on the front page template; we decided to use a widget with a shortcode here instead.
* Update custom header checks to use modern methods rather than constants
* Add Genericons font files
* Ensure inputs don't run off screen on narrow screen widths;
* Update version number in preparation for resubmission to .org; fix issue with Figures having margins on left and right, causing images to overflow the content container.

= 2 March 2017 =
* Reduce the padding around the author bio on mobile a bit; related to forum feedback linked from a ticket -
* Replace white-space: nowrap with display: block on the author bio link, to make sure it continues to display on a new line, but also wrap when the link is longer than the space available.

= 1 March 2017 =
* Reworking code that's making sure an empty CTA area isn't visible; these updates make sure 'Display Site Title and Tagline' are taken into account.
* Updating CTA/Tagline area styles, so we don't end up with an empty space on small screens if neither is added (or have an empty coloured block when one of the custom colour schemes is used).

= 27 February 2017 =
* Updating gallery column styles to make sure they display in the correct columns based on the shortcodes.
* Adding JavaScript to make the dropdown menu usable on larger touch-devices, like tablets.
* Updating the max-width styles for the site title to include the site-logo.
* Adding a max-width to the site title, so it doesn't collide with the menu toggle on mobile.
* Changing check for no-sidebar class to make sure it's not applied to the static front page.
* Fixing validation errors reported by a user.

= 21 February 2017 =
* Remove the widont filter because of the limited space for post/page title in the design.

= 6 February 2017 =
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 3 January 2017 =
* rotate the quote mark in the testimonial display in RTL
* fix issue with featured content thumbnails in rtl
* one more "translation" or arrow for the benefit of rtl
* fix post navigation arrows in rtl
* no need to translate a placeholder only string
* "translate" arrow, so that it can be reversed in RTL

= 9 December 2016 =
* Fix for Featured Content when some or no posts have a Featured Image present.
* Add helpful comment for post_class function.
* Slightly better fix for Featured Content posts without Featured Images; still needs work, though.
* Add RTL styles which were forgotten before launch. Oops!

= 6 December 2016 =
* Replace bad image with working image in Headstart annotation

= 2 December 2016 =
* Min-height on the featured content breaks on smaller screens; need a better solution for when no featured images are present.
* Update version number for eventual .org submission
* Fix position of Older Posts button when no sidebar is present
* Fix left alignment of featured posts when no sidebar is active.

= 1 December 2016 =
* Update screenshot.png to the proper dimensions.
* Add Custom Background support, which somehow got overlooked during the development process.
* Update version number, add all proper tags, and update readme in preparation for WP.org submission.
* Update version number in preparation for .org submission.
* Removing unnecessary TXT file from earlier review.

= 28 November 2016 =
* Fix Content Options implementation to use the latest features.
* Ensure Featured Content entries have a min-height set so if a Featured Image is not present for all entries, they will still appear.
* Fix typo in tagline.
* Add languages file.

= 12 November 2016 =
* Fix bug where site description appeared in a different color when hidden and shown again in the the Customizer. Also simplify Featured Content display to fix overflow/flexbox bug in Firefox.

= 8 November 2016 =
* Adjust support for Content Options Featured Images to reflect the plugin's updates. No longer need a custom _has_post_thumbnail() function.

= 7 November 2016 =
* Ensure button text can be previewed in the Customizer via postMessage
* Fix top margin to better align custom header DM icon to header image.
* Update button text for call-to-action button to be more clear about its purpose.
* Fix arrow positioning on previous/next post links.
* Widen submenu drop-downs

= 4 November 2016 =
* Adjust hover color for more recent posts link

= 3 November 2016 =
* Remove border from search button in widget to avoid it looking like a button when it's not click-able.
* Make overflow rules more specific to avoid cutting off quote marks in testimonials

= 2 November 2016 =
* Remove extra space on the left in social links menu.
* Adjust spacing/padding on search icon in header.
* Set a normal font weight on body elements.
* Give More Recent Posts button a max-width rather than a fixed width to avoid the clickable area being much larger than the actual link.
* Style previous/next post navigation buttons to look like buttons.
* Oops; don't target all entry titles on the front page, only the ones in Featured Content.
* Update spacing to replace spaces with tabs where necessary; remove underlines from button-styled links and front page featured content entry titles.
* Remove custom text field sanitization in favor of sanitize_text_field().

= 25 October 2016 =
* Update button wording for consistency; use slightly darker gray for better contrast for links/headings.
* Ensure featured content images aren't duplicated.
* Update Headstart annotation with Testimonials support.

= 24 October 2016 =
* Add Screenshot.png
* Remove margin on last widget in each column to tighten up spacing in the footer; adjust padding on button to better vertically center text.
* Add Headstart annotation.
* Make sure Testimonial shortcode in widget is styled properly regardless of the page template we're on.
* Add featured image support for testimonials, replaced by a quote mark if no featured image exists; add Masonry support to Testimonials archive to remove gaps; don't display a testimonial in the sidebar by default, we'll use widgets to do that.

= 22 October 2016 =
* Adjustments to headings to better match mock-up
* Bold all the things to match the original mock-up; some minor tweaks to line height.

= 21 October 2016 =
* Only display author bio on single posts, not testimonials, etc. Spacing for testimonials and author bio adjusted.
* Ensure Testimonials archive type looks like other page and archive types.
* Tweak for padding issues on featured content posts to avoid gaps at the bottom.
* Add styles for TEstimonials archive template.
* Fix for list margins in widgets
* Refactor featured content/front page area so we can add a full-width border along the bottom and simplify the logic in header.php
* Better contrast for links in the sidebar area.
* Make some of the footer widget styles for lists apply to all lists in widgets no matter the sidebar.
* Reduce space after widget areas in mobile view.
* Fix margins for footer widget lists; adjust line height and margins on list items
* Make sure lists are properly indented.
* Make H6's easier to read with text transform and letter spacing.
* Adjust font size of headings
* Adjust line height on more recent posts link
* Ensure no sidebar page displays a title and featured image like other pages; rename to "No Sidebar" to be more accurate; make search content look like other content templates; move search page title
* Styles for page titles
* Move archive titles above site content as in mock-up.
* Adjust line height on larger heading sizes h1 and h2
* Only display tags on single posts to avoid clutter on the blog.
* Lots more

= 20 October 2016 =
* Ensure menu is positioned properly on both mobile devices and large screens, and goes back and forth between the two states seamlessly.
* Fixes and improvements for mobile menu experience; add full-width page template in correct folder with proper filename and remove no-sidebar.php template; adjustments for full-width/no-sidebar conditional body class; always display Testimonial in the sidebar if available, because the logic otherwise is way too complicated and confusing.
* Style headings with different font sizes for better readability.
* Add better styling for Custom Logo.
* Let's not have Featured Content use the same Featured Image settings as for Content Options.
* Add support for Featured Images in Content Options.
* Fix alignment of submenus for large screens.
* Make sure long URLs in entry content word break; remove outline from header search bar.
* Ensure single post navigation buttons have some space between.
* Move post navigation below comments on single posts.

= 19 October 2016 =
* Adjust post/pagination on mobile devices.
* Add a line between recent posts and widget areas on the home page template.
* Adjusting font sizes for smaller screens
* Ensure footer widgets maintain proper widths and margins regardless of screen size and number of active widget areas.
* Remove support for fifth footer widget area, since the mock-up doesn't suggest there should be one. I made that up in my head, apparently? Also move "More posts" link in front page template so it works better for mobile.
* Readjust featured content areas for mobile devices; tweak to search icon size in the header.
* More improvements to mobile styles and spacing.
* Begin reworking media queries to be mobile-first.
* Minor adjustments to spacing
* Use arrow icons for meta-nav; remove widgets on 404.php and add sidebar instead.
* Make the Testimonials quote look more like the mock-up.
* Only show content area of home page if content exists; lots of spacing updates and minor style tweaks; wrap arrows in meta-nav spans for easier styling.

= 18 October 2016 =
* Let's stick to px rather than rem. Easier to keep track of.
* Add directional arrows after links as per original mock-ups;

= 17 October 2016 =
* Style more links.
* Begin styling Older Posts button
* Begin styling comments to more closely match mockup.
* Style no comments message.
* Style entry titles and thumbnails on pages to look like the mock-ups.
* Add setup author function as we're calling for author data outside the loop on single posts; add featured image support to Pages.
* Adjust size of search box area to match other social icons.
* Restyle button for front page template, add theme support for Testimonials.
* Ensure Author Bio has a fallback for non-Jetpack sites; style callout button on home page
* Display Site Description regardless of presence of header image; add theme option for callout button
* Minor styling tweaks; fix duplicated featured image on single posts
* Minor style tweaks; ensure excerpts have a Continue Reading link.
* Add support for Author Bio, Content Options, begin styles for author bio
* Styling entry footer to match entry meta; remove unused dequeue fonts function; add support for WP.com print styles.
* Add wpcom-specific styles; fix overflow in widgets.
* Add a function to check for the presence of testimonials for aiding in how the sidebar area of the theme displays; add wpcom $themecolors.

= 7 October 2016 =
* Add a brief description and fix alignment of recent posts header when no widgets are active.

= 5 October 2016 =
* Only display Featured Images on single post view.
* Remove duplicate borders and edit link in content footer.
* Fix avatar thumbnail reference for testimonials; adjust spacing for entry titles on blog page
* Minor style improvements; ensure the blog displays full content.
* Don't use theme_mod to show/hide site title.
* Initial commit to /pub

== Credits ==

* Based on https://github.com/Automattic/theme-components/, (C) 2015-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* Images in screenshot from pixabay.com, all licensed CC0:
- https://pixabay.com/en/bell-tower-university-tower-bell-1295714/
- https://pixabay.com/en/man-male-black-and-white-older-140547/
- https://pixabay.com/en/bookshelf-library-literature-books-413705/
- https://pixabay.com/en/language-school-team-interns-834138/
* Genericons font from https://github.com/Automattic/genericons, GNU General Public License (https://github.com/Automattic/Genericons/blob/master/LICENSE.txt)
* Cooper Hewitt font from Font Squirrel, SIL Open Font License v1.10 (https://www.fontsquirrel.com/fonts/cooper-hewitt)
