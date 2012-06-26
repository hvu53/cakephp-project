<div class="main-container col1-layout">
	<div class="box col-main">
		<div class="page-title">
			<h3>Your surveys</h3>
		</div>

		<div class="padded">
			<table>
				<tr>
					<th>Name</th>
					<th>Company</th>
				</tr>
				<?php foreach ($surveys as $survey):?>
				<tr>
					<td>
<?php echo $this->Html->link($survey['Survey']['name'], array('controller' => 'answers', 'action' => 'take', $survey['Survey']['id'])); ?>
					</td>
					<td><?php echo $survey['Company']['name']; ?>&nbsp;</td>
				</tr>
				<?php endforeach; ?>
			</table>

		</div>

	</div>
</div>
<style type="text/css">
	.col-main{
		min-height: 200px;
	}
</style>