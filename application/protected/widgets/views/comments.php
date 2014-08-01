<div class="container">
    <h3>Комментарии</h3>
    <?php foreach($comments as $comment) : ?>
        <div>
            <h4><?php echo $comment['name']; ?></h4>
            <p><?php echo $comment['comment']?></p>
        </div>
    <?php endforeach; ?>
</div>
