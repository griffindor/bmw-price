<?php
/* @var $this SettingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Настройки',
);
?>

<h1>Настройки путей</h1>

<hr/>
<p>Настройки очень важны для генерации правильных ссылок на изображения, прайсы.<br/>
Также очень важно: у приложения есть два режима работы: DEV (разработка, отладочный) и STD (стандартный).<br/>
НЕ ВКЛЮЧАЙТЕ режим DEV на боевом сервере. Он только для отладки работы приложения разработчиком.</p>
<hr/>

<?php
    $mode = $model->mode==0?"mode-off":"mode-on";
?>
<div class="mode-switch">
    <div class="mode-label">STD MODE</div><div class="mode-img <?=$mode;?>"></div>
</div>
<br/><br/><br/>
<hr/>
<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'settings-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'img_path_dev_local'); ?>
        <?php echo $form->textField($model,'img_path_dev_local', array('class'=>'custom-input')); ?>
        <?php echo $form->error($model,'img_path_dev_local'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'img_path_remote'); ?>
        <?php echo $form->textField($model,'img_path_remote', array('class'=>'custom-input')); ?>
        <?php echo $form->error($model,'img_path_remote'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'img_path_site'); ?>
        <?php echo $form->textField($model,'img_path_site', array('class'=>'custom-input')); ?>
        <?php echo $form->error($model,'img_path_site'); ?>
    </div>



    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'custom-button')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->

<script>
    $(".mode-img").on('click', function(){
        var mode = $(this).hasClass('mode-on');
        var data = 1;
        if(mode){
            data = 0;
        }
        $.ajax({
            type: 'post',
            data: {mode:data},
            success: function(response){
                location.reload();
            }
        });
    });


</script>