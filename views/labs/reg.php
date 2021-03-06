<?php

/** @var yii\web\View $this */

use yii\widgets\LinkPager;
use yii\bootstrap4\Button;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>
<h1>Регистрация</h1><br>
    <div class="site-login">
        <h1><?= Html::encode($this->title) ?></h1>

        <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
        ]); ?>
        <?= $form->field($mod, 'username')->label('Логин'); ?>
        <?= $form->field($mod, 'password')->label('Пароль')->passwordInput(); ?>
        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Зарегестрироваться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>


</div>