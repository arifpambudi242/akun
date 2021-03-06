<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Akun3 */

$this->title = 'Update Akun3: ' . $model->kd_akun1;
$this->params['breadcrumbs'][] = ['label' => 'Akun3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_akun1, 'url' => ['view', 'kd_akun1' => $model->kd_akun1]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akun3-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
