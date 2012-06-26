<?php

/*
 * expect variables:
 * $products
 * optional : $wishlish is set
 */
if(empty($products))echo '<div class="padded">No items</div>';
else foreach ($products as $product) {
	echo '<li>' . $this->Html->image(
		'products/' . $product['Product']['id'] . '/' . $product['Product']['picture']
	);
	echo '<p>' . $this->Html->link($product['Product']['name'], array($product['Product']['id']));
	echo (isset($wishlist)?'<br /><a class="link-wishlist" href="#">Add to Wishlist</a>':'').'</p></li>';
}
?>