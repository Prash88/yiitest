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
<?php


echo '<div id="xxx" style="width:200px;height:80px;border:1px solid #eee">';
$this->beginWidget('zii.widgets.jui.CJuiDraggable',
        array(
                'options'=>array('containment'=>'#xxx'), //set who is the containment
                 'htmlOptions'=> array(
                         'style'=>'float:left;width:50px;height:50px;border:1px solid #000',
                 )
        )
);

echo 'Drag me';

$this->endWidget();

echo '</div>';

?>
