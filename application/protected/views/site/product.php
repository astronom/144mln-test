<?php

$this->pageTitle = 'Просмотр товара - ' . $product['name'];
?>

<div class="container product-full">
    <div class="product-image">
        <img src="<?php echo $product['image_url']; ?>"/>
    </div>
    <div class="product-data">
        <h3><?php echo $product['name']; ?></h3>
        <p>Цена:
            <?php if($product['inet_price'] < $product['old_price']) : ?>
                <span class="old-price"><?php echo $product['old_price'] ?></span>
            <?php endif; ?>
            <span><?php echo $product['inet_price'] ?></span>
        </p>
        <p><?php echo $product['description']; ?></p>
    </div>
</div>

<div id="comments">
	<?php $this->widget('application.widgets.CommentsWidget', array('comments' => $product->comments)) ?>
</div>

<?php /* @var $form CActiveForm */ ?>
<?php $form = $this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->urlManager->createUrl('site/review',['product_id' => $product['id']]),
	'htmlOptions' => array(
		'data-id'     => $this->id,
	),
	'enableClientValidation' => true,
	'clientOptions'          => array(
		'validateOnSubmit' => true,
		'errorCssClass' => 'b-input_st_error',
	),
));

?>
    <div class="container comment-form form">
        <h3>Добавить комментарий</h3>
        <div class="row">
	        <?php echo $form->labelEx($review, 'name'); ?>
	        <?php echo $form->error($review, 'name'); ?>
	        <?php echo $form->textField($review, 'name') ?>
            <p class="hint">Ведите ваше имя</p>
        </div>
        <div class="row">
	        <?php echo $form->labelEx($review, 'email'); ?>
	        <?php echo $form->error($review, 'email'); ?>
	        <?php echo $form->textField($review, 'email') ?>
            <p class="hint">Ведите адрес вашей электронной почты</p>
        </div>
        <div class="row">
	        <?php echo $form->labelEx($review, 'comment'); ?>
	        <?php echo $form->error($review, 'comment'); ?>
	        <?php echo $form->textArea($review, 'comment') ?>
            <p class="hint">Ведите ваш комментарий</p>
        </div>
        <div class="row">
            <input name="comment" id="input-comment" type="submit" value="Отправить" />
        </div>
    </div>
<?php $this->endWidget(); ?>

<script>
	$(function() {
		$('#<?php echo $form->getId() ?>').submit(function() {
			$.post($(this).attr('action'), $(this).serialize(), function(data) {
				if(data.success)
				{
					$('#comments').html(data.list);
				}
				else {

				}
			}, 'json');
			return false;
		});
	});
</script>