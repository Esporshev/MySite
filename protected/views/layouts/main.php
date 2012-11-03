<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- bootstrap CSS framework -->
	<? Yii::app()->getClientScript()->registerCoreScript('jquery');?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.lightbox.js', CClientScript::POS_HEAD); ?>
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.min.css', CClientScript::POS_HEAD); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
        <div class="container">
            
            <div class="span12">
                <div class="row">
                    <div class ="span5"><img src="bootstrap/img/header.jpg" class="">
                        <h2 align="center">ООО "ССВ-ПАРКЕТ"</h2>
                    </div>
                    <div class="span4 offset3">
                        <h1>(495)799-12-93</h1>
                        <h2>C 9:00 до 20:00 без выходных</h2>
                    </div>
                </div> 
            </div> 
            <div class="span12">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                         <ul class="nav">
                            <li class="active">
                                <a href="#">Главная</a>
                            </li>
                            <li class="">
                                <a href="#">Услуги и цены</a>
                            </li>
                            <li class="">
                                <a href="#">Химия</a>
                            </li>
                            <li class="">
                                <a href="#">Массиваня доска</a>
                            </li>
                            <li class="">
                                <a href="#">Оборудование</a>
                            </li>
                            <li class="">
                                <a href="#">Контакты</a>
                            </li>
                            <form class="navbar-search pull-right">
                                <input type="text" class="search-query" placeholder="Поиск по сайту">
                            </form>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
			<? echo $content; ?>
        
 <footer>
     <hr>
     <div class="container">
         <p>&copy; Company 2012</p>
     </div>
 </footer>                   


</body>
</html>
