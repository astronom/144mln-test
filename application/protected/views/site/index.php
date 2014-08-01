<?php
/* @var $products array */
/* @var $count int */
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<?php
echo 'Количество товаров на странице: ' . CHtml::dropDownList(
				'pageSize',
				$pageSize,
				array(10 => 10, 20 => 20, 50 => 50),
				array('class' => 'change-pagesize')
		);
?>
<?php
$this->widget('zii.widgets.CListView', array(
		'id'            => 'products-list',
		'dataProvider'  => $dataProvider,
		'template'      => "{items}\n{pager}",
		'pager'         => array(
				'class' => 'application.components.EPager',
		),
		'itemView'      => '/site/_itemsList',
		'separator'     => false,
		'emptyText'     => 'Нет товаров',
		'ajaxUpdate'    => true,
		'enableHistory' => true,
));
?>
<?php //$this->widget('zii.widgets.grid.CGridView', array(
//    'id'=>'user-grid',
//    'dataProvider'=>$dataProvider,
//    'filter'=> false,
//    'columns'=>array(
//        'username',
//        'password',
//        'email',
//        array(
//            'class'=>'CButtonColumn',
//            'header'=>
//            ),
//        ),
//    ),
//));
?>
<?php
Yii::app()->clientScript->registerScript('initPageSize', <<<EOD
    $('.change-pagesize').live('change', function() {
        $.fn.yiiListView.update('products-list',{ data:{ pageSize: $(this).val() }})
    });
EOD
		, CClientScript::POS_READY);
?>

<div class="container recent-activity">
	<h3>Недавние действия</h3>
	<?php foreach (Yii::app()->user->getActivity() as $activity) : ?>
		<p><?php echo $activity; ?></p>
	<?php endforeach; ?>
</div>