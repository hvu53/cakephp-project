<?php
class Sample extends AppModel {
	var $name = 'Sample';
	
	var $belongsTo = array('Product');
	var $hasMany = array('CustomersSample');
}
?>