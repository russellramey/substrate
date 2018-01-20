<?php
/************************************************************************************
*** Shortcodes - global
	Shortcodes for elements: buttons, seperator, gap, spacer, videos etc...
************************************************************************************/

// BUTTONS
// [button title=" " url=" " size=" " class=" "]
function button_func( $atts ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'class' => ' ',
		'title' => 'Button',
		'size' => 'default'
	), $atts ) );
	return "<a class='button button-{$size} {$class}' href='{$url}' target='_blank'>{$title}</a>";
}
add_shortcode( 'button', 'button_func' );

// LINK
// Use this to add grapical style to hyperlinks (add icon, and panel)
// [link type=" "]
function list_link_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'type' => '',
		'date' => ''
	), $atts ) );
	return "<div class='link-panel link-{$type}'>" . $content . "</div>";
}
add_shortcode( 'link', 'list_link_func' );

// YOUTUBE
// easilly embed responsive youtube videos, just add id
// [youtube url=" "]
function youtube_func( $atts ) {
	extract( shortcode_atts( array(
		'id' => '#',
		'class' => ' ',
	), $atts ) );
	return "<div class='videoWrapper'><iframe class='video {$class}' src='https://www.youtube.com/embed/{$id}?showinfo=0&color=ffffff&title=0&byline=0&portrait=0&wmode=transparent' width='500' height='281' frameborder='0'></iframe></div>";
}
add_shortcode( 'youtube', 'youtube_func' );

// VIMEO
// easilly embed responsive viemo videos, just add id
// [vimeo id=" "]
function vimeo_func( $atts ) {
	extract( shortcode_atts( array(
		'id' => '#',
		'class' => ' ',
	), $atts ) );
	return "<div class='videoWrapper'><iframe class='video {$class}' src='https://player.vimeo.com/video/{$id}?showinfo=0&color=ffffff&title=0&byline=0&portrait=0&wmode=transparent' width='500' height='281' frameborder='0'></iframe></div>";
}
add_shortcode( 'vimeo', 'vimeo_func' );

// LINE
// Add a line seperator to the content
// [line]
function line_func( $atts, $content = null ){
	return '<div class="divider"></div>';
}
add_shortcode( 'line', 'line_func' );

// Pullquote
// Add a line seperator to the content
//[pullquote]
function pullquote_func( $atts, $content = null ){
	$url = get_permalink();
	$icon = '<i class="edl-icon--social-twitter edl-icon"></i>';
	return '<blockquote class="pullquote edl-panel"><p>' . $content . '</p><a class="tweetthis" href="https://twitter.com/intent/tweet?url=' . $url . '&via=Sabre_Corp&text=' . urlencode(html_entity_decode($content)) . '" target="_blank">' . $icon . 'Share</a></blockquote>';
}
add_shortcode( 'pullquote', 'pullquote_func' );

// ANCHOR
// use this to add jump links into content
// [anchor id=" "]
function anchor_func( $atts ) {
	extract( shortcode_atts( array(
		'id' => ' ',
	), $atts ) );

	return "<div id='$id'></div>";
}
add_shortcode( 'anchor', 'anchor_func' );
