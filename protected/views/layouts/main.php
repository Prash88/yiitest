<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerCoreScript('jquery.ui');  

	?>
	<?php Yii::app()->bootstrap->register(); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<?php $this->widget('application.extensions.fontsizer.Sizer'); ?>
	<div id="wrap">
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h2><?php echo CHtml::encode($this->pageTitle); ?></h2>
        </div>
      </div>
      <div id="push"></div>
    </div>
	<?php echo $content; ?>
	<div id="footer">
	<div class="container">
        <p class="muted credit">&copy; 2013 Prashanth</p>
      </div>
    </div>
</body>
</html>
