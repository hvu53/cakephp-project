<div class="main-container col1-layout">
	<div class="box col-main">
		<div class="page-title">
			<h3>Survey: <?php echo $survey['Survey']['name'];?></h3>
		</div>
		<div class="padded">
			<?php echo $this->Form->create('Answer',array('url'=>array($survey['Survey']['id'])));
				echo $this->Form->hidden('survey_id',array('value'=>$survey['Survey']['id']));
				
				foreach($questions as $qid=>$question):
				switch($question[0]){
					case '1':
			?>	
			<div class="box padded">
				<h4><?php echo $question[1];?></h4>
				<?php unset($question[0]);unset($question[1]);
					echo $this->Form->input('a.q'.$qid,array('type' => 'radio','options' => $question));
				?>
			</div>
			<?php		break;
					case '2':
						?>
			<div class="box padded">
				<h4><?php echo $question[1];?></h4>
				<?php unset($question[0]);unset($question[1]);
					echo $this->Form->input('a.q'.$qid,array('type' => 'select','multiple' =>'checkbox','options' => $question,'label'=>false,'escape'=>false));
				?>
			</div>
			<?php
						break;
					default:
				}
				?>
			
			<?php endforeach;
			 echo $this->Form->end(array('label'=>'Submit','div'=>array('style'=>'text-align: center;')));?>
		</div>
		
	</div>
</div>
<style type="text/css">
</style>