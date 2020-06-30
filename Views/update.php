<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin()?>
<h3>Title</h3>
<?= $form->field($post, 'title');?>

<h3>Description</h3>
<?= $form->field($post, 'description')->textarea(['rows' => '6']);?>

<?= Html::submitButton('Update Post');?>
<?php ActiveForm::end() ?>
