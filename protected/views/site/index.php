<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>
<div class="container">

	<div class="row">
		<div class="span12">
			<div  class="span4">
				<textarea rows="20" style="resize: none; " disabled></textarea>
			</div>
			<div  class="span6">
				<textarea rows="20" style="resize: none; " placeholder="/*Java code here*/"></textarea>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
			<div  class="span4">
				<textarea rows="3" style="resize: none; " disabled></textarea>
			</div>
			<div  class="span6">
				<textarea rows="3" style="resize: none; " disabled></textarea>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="span12">
	
		<div class="span3">

	<?php echo TbHtml::button('Run',
    array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_SMALL)); ?>		</div>
	
	</div>
	</div>
</div>