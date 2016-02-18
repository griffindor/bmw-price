<?php
/* @var $this AutoModelController */
/* @var $dataProvider CActiveDataProvider */
/* @var $s AutoSeries */

$this->breadcrumbs=array(
	'Модели авто',
);
?>

<h1>Модели авто</h1>

<hr/>
<p>
	Выберите из списка слева необходимую серию. В правой части отобразится список существующих моделей этой серии.<br/>
	Можно изменить название существующих моделей, создать новую, удалить ненужную (если это возможно).<br/>
	<strong>ВАЖНО!!! Пакеты, двигатели, цвет и прочие атрибуты модели не относятся к названию модели.</strong><br/>
	<strong>Например: </strong>"X5 25d", "X5 M-пакет" это всего-лишь "X5".
</p>
<hr/>
<div class="two-side-wrapper">
	<div class="left-side-wrapper series-names">
		<?php if(!empty($series)){
			foreach($series as $s):?>
				<div class="series-item" id="s_<?=$s->id;?>">
					<div class="series-caption"><?=$s->name;?></div>
					<div class="right-arrow-button"></div>
					<div class="clear"></div>
				</div>
			<?php endforeach;
		}
		?>
	</div>
	<div class="right-side-wrapper model-names">

	</div>
	<div class="clear"></div>
</div>


<script>
	function getID(string){
		return string.split('_')[1];
	}

	$(".right-arrow-button").on('click', function(){
		var parent_id = $(this).parent().attr('id');
		var id = getID(parent_id);
		$.ajax({
			type: 'post',
			data: {request_id:id},
			success: function(html){
				$('.right-side-wrapper').html(html);
			}
		});
	});



</script>