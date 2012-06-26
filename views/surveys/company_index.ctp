<div class="main-container col2-left-layout">
	<div class="box clear-float">
		<div class="box col-main">
			<div class="page-title">
				<h3>Your surveys</h3>
			</div>

			<div class="padded">
				<table>
					<tr>
						<th>Name</th>
						<th>Responses</th>
					</tr>
					<?php foreach ($surveys as $survey): ?>
						<tr>
							<td>
								<?php echo $this->Html->link($survey['Survey']['name'], array('controller' => 'answers', 'action' => 'result', $survey['Survey']['id'])); ?>
							</td>
							<td><?php echo $survey['Survey']['answer_count']; ?>&nbsp;</td>
						</tr>
					<?php endforeach; ?>
				</table>

			</div>

		</div>
		<div class="col-left box">

			<div class="page-title">
				<h3> My Account</h3>
			</div>
			<div class="padded">
				<ul>
					<li><?php echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('Campaigns',array('controller'=>'campaigns','action'=>'index'));?></li>
					<li class="current">Surveys</li>
					
				</ul>
			</div>

		</div>
	</div>

</div>
<style type="text/css">
	.padded li a{
		border-bottom: 1px solid #DDDDDD;
		color: #5F5D5C;
    display: block;
    padding: 3px 0;
    text-decoration: none !important;
    }
.padded li a:hover {
    color: #EA7900;
}
.padded li.current {
    border-bottom: 1px solid #DDDDDD;
    color: #EA7900;
    padding: 3px 0;
}
</style>