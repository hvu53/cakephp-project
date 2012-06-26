<?php

echo $this->Html->link(
	$this->Html->image('yourbag.png',array('class'=>'f-left')).
	'<div style="margin-top: 20px;">XAMPLES BAG</div><p>'.$this->Session->read('Cart.count').' items</p>',
	array('controller'=>'customers','action'=>'cart'),array('escape'=>false,'id'=>'shoppingcart')
	);
?>