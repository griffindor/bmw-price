<?php
/* @var $this AutoSeriesController */
/* @var $d AutoSeries */

$this->breadcrumbs=array(
	'Серии авто',
);
?>

<h1>Серии авто</h1>

<hr/>
<p>Самым важным параметром серии есть приоритет. Название серии также может быть использовано при генерации названий авто.<br/>
Используя кнопки "Вверх" и "Вниз" установите порядок серий в каком автомобили будут размещены на сайте.<br/>
Для стабильности работы приложения возможность удалять серии отсутствует.</p>

<hr/>


<div class="series-wrapper">
<?php
	if(!empty($data)) {
		foreach ($data as $d):?>
			<div class="series-tile">
				<div class="series-name"><input id="s_<?=$d->id;?>"type="text" value="<?=$d->name;?>"></div>
				<div class="series-controls">
					<div class="up-priority" id="su_<?=$d->id;?>_<?=$d->priority?>"></div>
					<div class="down-priority" id="sd_<?=$d->id;?>_<?=$d->priority?>"></div>
				</div>
				<div class="clear"></div>
			</div>
			<?php
		endforeach;
	}
?>
</div>

<button class="custom-button" id="series-save">Сохранить</button>

<script>
	function getId(string)
	{
		return string.split('_')[1];
	}

	function getPrio(string)
	{
		return string.split('_')[2];
	}
	/*Отключим бессмысленные контролсы*/
	$(document).ready(function(){
		var count = $(".series-tile").length;
		var prio = null;
		var i = 0;
		$(".series-tile").each(function(){
			prio = getPrio($(".up-priority", this).attr('id'));
			if(prio==1)
			{
				$(".up-priority", this).addClass('disabled');
			}
			if(prio==count)
			{
				$(".down-priority", this).addClass('disabled');
			}
			i++;
		});
	});

	$(".up-priority").on('click',function(){
		if(!$(this).hasClass('disabled')){
			var ident = $(this).attr('id');
			var id = getId(ident);
			$.ajax({
				type: 'post',
				data: {id:id, prioup:1},
				success: function(response){
					if(response=='ok'){
						location.reload();
					}
					else{
						alert(response);
					}
				}
			});
		}
	});

	$(".down-priority").on('click',function(){
		if(!$(this).hasClass('disabled')){
			var ident = $(this).attr('id');
			var id = getId(ident);
			$.ajax({
				type: 'post',
				data: {id:id, priodown:1},
				success: function(response){
					if(response=='ok'){
						location.reload();
					}
					else{
						alert(response);
					}
				}
			});
		}
	});

	$("#series-save").on('click',function(){
		var data = new Array();
		$(".series-name input").each(function(){
			data[getId($(this).attr('id'))] = $(this).val();
		});
		var json = JSON.stringify(data);
		$.ajax({
			type: 'post',
			data: {json:json},
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