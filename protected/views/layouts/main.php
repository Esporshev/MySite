<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="content" id="page">
    <div class="container">
    <div class="row">
        <div class="span12">
	        <div class="page-header" id="header">
                <h1>ООО "ССВ-ПАРКЕТ" <small>Делаем дерево, а не дерово нас</small></h1>
            </div>
	    </div>
    </div><!-- header -->

    <div class="row" id="navbar">
        <div class="span12">
            <?php $this->widget('bootstrap.widgets.TbNavbar', array(
                'type'=>'null', // null or 'inverse'
                'brand'=>false,
                'collapse'=>false, // requires bootstrap-responsive.css
                'fluid'=>false,
                'fixed'=>false,
                'items'=>array(
                    array(
                        'class'=>'bootstrap.widgets.TbMenu',
                        'items'=>array(
                            array('label'=>'Home', 'url'=>'/site/index', 'active'=>true),
                            array('label'=>'Admin', 'url'=>'/admin/index'),
                            array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                                array('label'=>'Action', 'url'=>'#'),
                                array('label'=>'Another action', 'url'=>'#'),
                                array('label'=>'Something else here', 'url'=>'#'),
                                '---',
                                array('label'=>'NAV HEADER'),
                                array('label'=>'Separated link', 'url'=>'#'),
                                array('label'=>'One more separated link', 'url'=>'#'),
                            )),
                        ),
                    ),
                    array(
                        'class'=>'bootstrap.widgets.TbMenu',
                        'htmlOptions'=>array('class'=>'pull-right'),
                        'items'=>array(
                            array('label'=>'Link', 'url'=>'#'),
                            '---',
                            array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                                array('label'=>'Action', 'url'=>'#'),
                                array('label'=>'Another action', 'url'=>'#'),
                                array('label'=>'Something else here', 'url'=>'#'),
                                '---',
                                array('label'=>'Separated link', 'url'=>'#'),
                            )),
                        ),
                    ),
                ),
            )); ?>
        </div>
    </div><!-- navbar -->
    <div class="row" id="breadcrumbs">
        <div class="span12">
        	<?php if(isset($this->breadcrumbs)):?>
        		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
        			'links'=>$this->breadcrumbs,
        		)); ?>
        	<?php endif?>
        </div>
    </div> <!-- breadcrumbs -->
    
    
	<?php echo $content; ?>
    
    
    <div class="row">
	    <div class="span12" id="footer">
		    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		    All Rights Reserved.<br/>
		    <?php echo Yii::powered(); ?>
	    </div>
    </div> <!-- footer -->   
</div>
</div><!-- page -->

</body>
</html>
