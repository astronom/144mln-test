<?php
/* @var $data Product */
?>
<div class="container product">
    <div class="product-image">
        <img src="<?php echo $data->image_url; ?>"/>
    </div>
    <div class="product-data">
        <a href="<?php echo $this->createUrl('product', ['id' =>  $data->id]); ?>">
            <h3><?php echo $data->name; ?></h3>
        </a>
        <p>Цена:
            <?php if($data->inet_price < $data->old_price) : ?>
                <span class="old-price"><?php echo $data->old_price ?></span>
            <?php endif; ?>
            <span><?php echo $data->inet_price ?></span>
        </p>
        <p>Отзывов: <?php echo $data->reviews_num; ?></p>
        <p><?php echo TextHelper::word_limiter($data->description, 50, CHtml::link('&#8230;', array('/site/product', 'id' => $data->id)), true); ?></p>
    </div>
</div>