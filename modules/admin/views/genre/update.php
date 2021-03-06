<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Genre */

$this->title = 'Изменить: ' . $model->id_g;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_g, 'url' => ['view', 'id_g' => $model->id_g]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
