<?php

$config['author']	= "http://www.larsformella.de/portfolio/programme-software/rss-extender/";
$config['url']		= "http://feeds.feedburner.com/UbuntuGeek";
$config['base_url']	= "http://www.ubuntugeek.com";
$config['content']	= array("#</iframe></div>(.*)<div class=\"addtoany_share_save_container\">#Uis", 1);
$config['search']	= array("#<script.*>([^<]*)<\/script>#Uis");
$config['replace']	= array("");
$config['use_utf8']	= true;

?>
