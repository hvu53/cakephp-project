<div class="main-container col2-left-layout">
	<div class="box clear-float">
		<div class="box col-main">
			<div class="page-title">
				<h3>Your campaigns</h3>
			</div>

			<div class="padded">
				<button id="newcampaign" class="button-box">New campaign</button>
				<table id="campaigns">
					<tr>
						<th>Campaign</th>
						<th>Description</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Status</th>
						<th>Details</th>
					</tr>
					<?php foreach($campaigns as $campaign){
						echo '<tr><td><div class="imagebox">'.$this->Html->image('campaigns/' . $campaign['Campaign']['id'] . '/' . $campaign['Campaign']['picture'], array('height'=>'80', 'width'=>'80'));
						echo '</div><h3 class="editable">'.$campaign['Campaign']['name'].'</h3>';
						echo '</td><td><span class="editable">'.$campaign['Campaign']['description'].'</span>';
						echo '</td><td><span>'.date('Y M j',strtotime($campaign['Campaign']['start_date'])).'</span>';
						echo '</td><td><span>'.date('Y M j',strtotime($campaign['Campaign']['end_date'])).'</span>';
						echo '</td><td><span>'.$this->Form->select('sks',array('Closed','Open','Ended'),$campaign['Campaign']['status'],array('empty'=>false)).'</span>';
						echo '</td><td><button>See details</button>';
						echo '</td></tr>';
					}?>
					<tr id="subtituteRow" style="display:none;">
						<td><div class="imagebox"><input class="imagefile" type="file" style="opacity: 0;"/></div><h3 class="editable">Campaign Name</h3>
				</td><td><div class="editable">Campaign description</div>
				</td><td><span>2011 Jul 21</span>
				</td><td><span>2011 Jul 21</span>
				</td><td><span><select class="campaignstate" name="data[sks]"><option value="0">Closed</option><option value="1">Open</option><option value="2">Ended</option></select></span>
				</td><td><button>See details</button></td></tr>
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
					<li class="current">Campaigns</li>
					<li><?php echo $this->Html->link('Surveys',array('controller'=>'surveys','action'=>'index'));?></li>
					
				</ul>
			</div>

		</div>
	</div>

</div>
<div class="lightbox" style="display: none;position:fixed;left:0px;top:0px;width: 100%;height: 2000px;background-color: #000000;opacity: 0.8;z-index: 90;">
	
</div>
<div class="lightbox box padded" style="display: none;text-align: left;position:fixed;left: 500px;top:200px;width: 500px;height: 370px;background-color: #FFFFFF;z-index: 100;">
	<h1>Select your targeted consumers</h1>
	<h4>Location</h4>
	<div class="input radio">
			<input type="radio" name="data[a][q0]" id="AQ02" value="2" />
			<label for="AQ02">Everywhere</label>
			<input type="radio" name="data[a][q0]" id="AQ03" value="3" />
			<label for="AQ03">By State</label>
			<input type="radio" name="data[a][q0]" id="AQ04" value="4" />
			<label for="AQ04">By City</label>
			
			<select id="cities" name="cities">
            </select>
            <br/>
            <br/>
	</div><br />
	<h4>Demographic</h4>
	<?php echo '<b>Age:</b> '.$this->Form->select('age1',range(12,64),null,array('empty'=>'Any')).' - ';
	echo $this->Form->select('age2',range(12,64),null,array('empty'=>'Any'));?><br /><br />
	<h4>Sex</h4>
	<div class="input radio">
			<input type="radio" name="data[a][q1]" id="AQ12" value="2" />
			<label for="AQ02">All</label>
			<input type="radio" name="data[a][q1]" id="AQ13" value="3" />
			<label for="AQ03">Male</label>
			<input type="radio" name="data[a][q1]" id="AQ14" value="4" />
			<label for="AQ04">Female</label>
	</div>
	
	<button class="button-box" id="startcampaign">Create campaign</button>
	<button class="button-box" id="cancelstartcampaign">Cancel</button>
</div>
<style type="text/css">
	.imagebox{
		height: 80px;
		width: 80px;
	}
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
<?php
echo $this->Html->css('jquery.jgrowl');
echo $this->Html->css('fcbkcomplete');
echo $this->Html->script('jquery.jeditable.min');
echo $this->Html->script('jquery.jgrowl.min');
echo $this->Html->script('jquery.fcbkcomplete.min');
?>
<script type="text/javascript">
	$(function(){
		$('.editable').editable(function(value, settings){return(value);}, {
         indicator : 'Saving...',
         tooltip   : 'Click to edit...'
		});
		
		
		$('#newcampaign').click(function(){
			$('.lightbox').show();
			
		});
		$('#cancelstartcampaign').click(function(){
			$('.lightbox').hide();
		});
		$('#startcampaign').click(function(){
			$('.lightbox').hide();
			$('#campaigns tr:first').after($('#subtituteRow').clone().removeAttr('id').removeAttr('style'));
			$('.editable').editable(function(value, settings){return(value);}, {
			 indicator : 'Saving...',
			 tooltip   : 'Click to edit...'
			});
		});
		
		$('.imagefile').live('change',function(){
			sa = $(this).parent();
			$(this).remove();
			sa.append('<img width="80" height="80" alt="" src="http://www.jan-leasure.com/wp-content/uploads/2011/03/Boss-by-Hugo-Boss-5ml-Grey-men-4700.jpg">');
		});
		$('.campaignstate').live('change',function(){
			$.jGrowl("Your campaign has started!",{position:'center'});
		});
		
		$('#cities').fcbkcomplete({
                    json_url: "http://xamples.info/data.txt",
                    addontab: true,                   
                    maxitems: 10,
                    height: 4,
                    cache: true
                });
	});
</script>