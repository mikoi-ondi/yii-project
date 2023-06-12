<?php

use app\modules\comment\models\Comment;
use app\modules\user\models\User;
use yii\widgets\LinkPager;
?>


<?php foreach ($comments as $comment): ?>
    <div class="post">
        <h3><?= $comment->title ?></h3>
        <p><?= $comment->text ?></p>
        <p><?= $author = User::findOne(['id' => $comment->id_author]);
               //echo "<p>$author->fio</p>"?></p>
    </div>
<?php endforeach; ?>


<?= LinkPager::widget([
    'pagination' => $pagination,
]) ?>
        
</div>
