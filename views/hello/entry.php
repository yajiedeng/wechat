<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'age') ?>

    <div class="form-group">
        <?= Html::submitButton('来吧', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>