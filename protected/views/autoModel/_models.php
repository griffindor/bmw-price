<?php
/* @var $this AutoModelController */
/* @var $model AutoModel */
/* @var $series integer */

if(!empty($models)){
    foreach($models as $model):?>
        <div class="model-item" id="m_<?=$model->id;?>_<?=$series;?>">
            <div class="model-caption"><input type="text" value="<?=$model->name;?>"></div>
            <div class="model-delete"></div>
            <div class="clear"></div>
        </div>
    <?php endforeach;
}?>
<div class="model-item" id="m_0_<?=$series;?>">
    <div class="model-caption"><input type="text" value=""></div>
    <div class="clear"></div>
</div>

<button id="models-save" class="custom-button">Сохранить</button>



<script>
    function getID(string){
        return string.split('_')[1];
    }

    function getSeries(){
        return $("[id^=m_0_]").attr('id').split('_')[2];
    }

    $(document).ready(function(){
        $(".model-item").on('mouseenter',function(){
            $(".model-delete",this).show();
        });

        $(".model-item").on('mouseleave',function(){
            $(".model-delete",this).hide();
        });
    });

    $("#models-save").on('click',function(){
        var series = getSeries();
        var models = new Array();
        $(".model-item").each(function(){
            models[getID($(this).attr('id'))] = $("input",this).val();
        });
        var json = JSON.stringify(models);
        $.ajax({
            type: 'post',
            data: {series_id:series, json:json},
            success: function(response){
                if(response=='ok'){
                    location.reload();
                }
                else{
                    alert(response);
                }
            }
        });
    });

    $(".model-delete").on('click',function(){
        var id = getID($(this).parent().attr('id'));
        $.ajax({
            type: 'post',
            data: {delete_id:id},
            success: function(response){
                if(response=='ok'){
                    location.reload();
                }
                else{
                    alert(response);
                }
            }
        });
    });


</script>
