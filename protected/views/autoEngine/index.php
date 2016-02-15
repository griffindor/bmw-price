<?php
/* @var $this AutoEngineController */
/* @var $dataProvider CActiveDataProvider */
/* @var $ex AutoEngine */


$this->breadcrumbs=array(
	'Двигатели авто',
);
?>

<h1>Двигатели авто</h1>
<hr/>
<p>Двигатель автомобиля указывается в конце первой строки названия авто на основном сайте. Будьте предельно внимательны при создании двигателя.</p>
<hr/>

<div class="color-wrapper">
	<?php
	if(!empty($existed)) {
		foreach ($existed as $ex):
			?>
			<div class="color-item">
				<span class="color-name"><?=$ex->name;?></span><span class="color-delete" id="color_del_<?=$ex->id?>"></span>
			</div>
			<?php
		endforeach;
	}
	?>
</div>

<hr/>

<div class="new-color-form">
	<input class="custom-input" type="text" id="new-color-name">
	<button class="custom-button" id="new-color-name-submit">Добавить</button>
</div>

<script>
	$(document).ready(function(){
		$(".color-item").on('mouseenter',function(){
			$(".color-delete", this).show();
		});
		$(".color-item").on('mouseleave',function(){
			$(".color-delete", this).hide();
		});

		$(".color-delete").on('click',function(){
			var id = $(this).attr('id').split('_')[2];
			$.ajax({
				type: 'post',
				data: {delete:id},
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


		$("#new-color-name").val("");
		$("#new-color-name-submit").on('click',function(){
			var value = $("#new-color-name").val();
			$.ajax({
				type: 'post',
				data: {value:value},
				success: function(){
					location.reload();
				}
			});
		})
	})
</script>

