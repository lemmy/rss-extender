<?php
$config['author']     = "Rafael Bugajewski";
$config['author_url'] = "http://www.juicycocktail.com/";
$config['url']        = "http://www.taz.de/rss.xml";
$config['base_url']   = "http://www.taz.de/";
$config['content']    = array("#</h1>(.*)<\/div><div class=\"sectfoot\">#Uis", 1);
// search[i] match is replaced with corresponding replace[i]
$config['search']     = array("#<!-- start  smarty\/plugin_morearticles.tmpl -->.*<!--  end   smarty\/plugin_morearticles.tmpl -->#Uis", 
		"#<div class=\"sect sect_shorty box first_box last_box\" role=\"region\">.*<p class=\"article\">#Uis",
		"#<div class=\"sect sect_author box first_box last_box\" role=\"region\">.*<p class=\"article\">#Uis",
		"#<div class=\"sect sect_seealso box first_box last_box\" role=\"region\">.*<p class=\"article\">#Uis",
		"#<div class=\"rack\">#Uis",
		"#<div class=\"anchor anchor_tzi_paywall\" id=\"tzi_paywall\">.*</p></div></div></div></div></div>#Uis",
		"#<div id=\"tzi_paywall\" class=\"anchor anchor_tzi_paywall\">.*</div>#Uis",
		"#<h2>taz paywall</h2>.*<p class=\"article\">#Uis",
		"#<span id=\"ad_bin_artikel_co\" class=\"ad_bin sold contentad\">.*</iframe></span>#Uis",
		"#<script.*/script>#Uis",
		"#<style.*/style>#Uis");
$config['replace']    = array("<div>", 
		"<p class=\"article\">",
		"<p class=\"article\">",
		"<p class=\"article\">",
		"",
		"",
		"",
		"<p class=\"article\">",
		"",
		"",
		"");
?>
