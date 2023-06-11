<?php
use yii\widgets\LinkPager;
?>


<?php foreach ($comments as $comment): ?>
    <div class="post">
        <h3><?= $comment->title ?></h3>
        <p><?= $comment->text ?></p>
    </div>
<?php endforeach; ?>


<?= LinkPager::widget([
    'pagination' => $pagination,
]) ?>
        
</div>
