<?php

include ('../inc/includes.php');

print_r($_POST);
header("Content-Type: text/html; charset=UTF-8");
Html::header_nocache();

Session::checkCentralAccess();

// Make a select box
print_r($_POST);
if ($_POST['items_id'] && $_POST['itemtype'] && class_exists($_POST['itemtype'])) {
	echo <table class='tab_cadre_fixe'>;
	echo "<tr><td class=left>" . __('Number to add'); 
	Dropdown::showNumber('number_of',array('value' => 1,
                                                'min'   => 0,
                                                'max'   => 100));
	echo "</td><td rowspan='2'>" . __('Unit cost');
	Html::autocompletionTextField($this,'contact');
	echo "</td></tr>";
	echo "</table>";
}
?>