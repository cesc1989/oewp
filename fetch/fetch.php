<?php
$url = trim($_REQUEST['url']);
$url = check_url($url);

function check_url($value)
{
	$value = trim($value);
	if (get_magic_quotes_gpc()) 
	{
		$value = stripslashes($value);
	}
	$value = strtr($value, array_flip(get_html_translation_table(HTML_ENTITIES)));
	$value = strip_tags($value);
	$value = htmlspecialchars($value);
	return $value;
}

include "AutoEmbed.class.php";

$AE = new AutoEmbed();

// load the embed source from a remote url
if (!$AE->parseUrl($url)) {
    // No embeddable video found (or supported)
	echo "Please check the video link";
} else {

$AE->setParam('wmode','transparent');
$AE->setParam('autoplay','false');
?>
<div>
<?php
echo $AE->getEmbedCode();
?>
</div>
<?php
}
?>