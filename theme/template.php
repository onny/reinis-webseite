<?php
function rs_links__system_main_menu($variables) {
	$html .= "  <ul>\n"; 
	$i=1;

	foreach ($variables['links'] as $link) {
		$html .= "<li><a class=\"a".$i;
		if (in_array('active-trail', $link['attributes']['class'])) {
			$html .= " selected";
		}
		$html .= "\" href=\"".$link['href']."\">".$link['title']."</a></li>\n";
		$i++;
	}

	$html .= "  </ul>\n";
	return $html;
}

function rs_links__system_secondary_menu($variables) {
	$html .= "  <ul>\n"; 
	
	foreach ($variables['links'] as $link) {
		$html .= "<li>".l($link['title'], $link['href'], $link)."</li>\n";
	}

	$html .= "  </ul>\n";

	return $html;
}
?>