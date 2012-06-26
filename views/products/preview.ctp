<div class="box col-main" style="font-size: 1.4em;margin:0px;">
	<div class="page-title">
		<h3><?php echo $product['Product']['name']; ?></h3>
	</div>
	<div class="product-view">
		<div class="clear-float">
			<?php
			echo $this->Html->image(
				'products/' . $product['Product']['id'] . '/' . $product['Product']['picture'], array('class' => 'f-left', 'style' => 'width: 265px;margin-right: 10px;')
			);
			?>
			<p><?php
			echo '<h3>Points: ' . $product['Sample']['point'] . '</h3>';
			if (isset($product['Sample']['CustomersSample']['0']['id']))
				echo '<h4>You have already taken this sample.</h4>';
			else if ($product['Sample']['quantity'] == 0)
				echo 'Sorry, we ran out of this sample :(';
			else echo $this->Html->link('I want this sample!',array('action'=>'view',$product['Product']['id']));
			?>
			</p>

			<div class="padded">
				<h3> Quick Overview</h3>
				<div><?php echo $product['Product']['overview']; ?></div>
			</div>

		</div>
	</div>
</div>