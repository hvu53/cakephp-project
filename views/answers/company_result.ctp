<div class="main-container col1-layout">
	<div class="box col-main">
		<div class="page-title">
			<h3 class="f-left">Survey: <?php echo $results['Survey']['name'];?></h3>
			<?php echo $this->Html->link('Back to surveys',array('controller'=>'surveys','action'=>'index'),array('class'=>'button-box f-right'));?>
		</div>
		<div class="padded">
			<?php echo '<h2>Responses: '.$results['Survey']['answer_count'].'</h2>';
			foreach($results['Questions'] as $qid=>$question):?>
			<div class="box padded">
			<?php	switch($question[0]){
					case '1':
			?>	
			
				<h4><?php echo $question[1];?></h4>
				<div id="q<?php echo $qid;?>pie" style="height:300px;width:450px;"></div>
			
			<?php		break;
					case '2':
			?>	
			
				<h4><?php echo $question[1];?></h4>
				<div id="q<?php echo $qid;?>bar" style="height:300px;width:450px;"></div>
			
			<?php
						break;
					default:
				}
				?>
			
			<table style="border: 1px;width: 450px;">
				<tr><th>Answer</th><th>Bar</th><th>Response</th><th>%</th></tr>
				<?php for($i=2;$i<count($question);$i++){echo '<tr><th>'.
				$question[$i].'</th><th><div style="background-color:blue;width:'.$results['Results'][$qid][$i]*100/$results['Survey']['answer_count'].
				'%">.</div></th><th>'.$results['Results'][$qid][$i].'</th><th>'.($results['Results'][$qid][$i]*100/$results['Survey']['answer_count']).'%</th></tr>';}?>
				</table>
				</div>
			<?php endforeach;?>
			</div>
	</div>
</div>
<?php echo $this->Html->css('jquery.jqplot.min');
	echo '<!--[if lt IE 9]>';echo $this->Html->script('excanvas.min');echo '<![endif]-->';
    echo $this->Html->script('jquery.jqplot.min');
    echo $this->Html->script('jqplot.pieRenderer.min');
	echo $this->Html->script('jqplot.barRenderer.min');
	echo $this->Html->script('jqplot.categoryAxisRenderer.min');
	echo $this->Html->script('jqplot.pointLabels.min');
?>
<style type="text/css">
	table.jqplot-table-legend{
		width: auto;
		font: 15px Helvetica;
	}
	.jqplot-data-label{
		font: 16px Helvetica;
		color: white;
	}
</style>
<script type="text/javascript">
	$(function() {
		<?php foreach($results['Questions'] as $qid=>$question):
				switch($question[0]){
					case '1':
			?>	
			jQuery.jqplot ('q<?php echo $qid;?>pie', 
				[[<?php for($i=2;$i<count($question)-1;$i++){
					echo '[\''.$question[$i].'\','.$results['Results'][$qid][$i].'],';
				}
				if(count($question)>2)echo '[\''.$question[count($question)-1].'\','.$results['Results'][$qid][count($question)-1].']';
				?>]], 
				{  
				  seriesColors: [ "#2aa3da", "#a8ea8a", "#ff8b1e", "#71b8d4","#f49e51"],
				  seriesDefaults: {
					renderer: jQuery.jqplot.PieRenderer, 
					shadow: false,
					rendererOptions: {
						//diameter: 150,
						//dataLabels: 'label',
						showDataLabels: true,
						sliceMargin: 8
						//dataLabelPositionFactor: 0.43
					},
					color: 'white'
				  }, 
				  legend: { show:true, location: 'e' }
				}
			  );

			<?php		break;
					case '2':
			?>	
			jQuery.jqplot ('q<?php echo $qid;?>bar', 
				[[<?php 
				$max = 0;
				for($i=2;$i<count($question)-1;$i++){
					if($max<$results['Results'][$qid][$i])$max=$results['Results'][$qid][$i];
					echo $results['Results'][$qid][$i].',';
				}
				if(count($question)>2)echo $results['Results'][$qid][count($question)-1];
				?>]], 
				{  
				  seriesColors: [ "#2aa3da", "#a8ea8a", "#ff8b1e", "#71b8d4","#f49e51"],
				  seriesDefaults: {
					renderer: jQuery.jqplot.BarRenderer, 
					shadow: false,
					rendererOptions: {
						varyBarColor: true,
						//diameter: 150,
						//dataLabels: 'label',
						showDataLabels: true,
						sliceMargin: 8
						//dataLabelPositionFactor: 0.43
					}
				  }, //'[\''.$question[$i].'\','.
				  series:[
					  {pointLabels:{
							  show: true,
							  escapeHTML: false,
							  labels:[<?php
								  for($i=2;$i<count($question)-1;$i++){
									  echo '\''.$question[$i].'\',';
								}
								if(count($question)>2) echo '\''.$question[$i].'\'';
							  ?>]
						  }}],
				  axes: {
					  xaxis:{renderer:$.jqplot.CategoryAxisRenderer},
					  yaxis:{padMax:1.3,min:0,max:<?php echo $max/0.6;?>}
				  }
				}
			  );

			<?php		break;
					default:
				}
				?>
			
			<?php endforeach;?>
	});
</script>