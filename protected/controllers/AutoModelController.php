<?php

class AutoModelController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if(isset($_POST['series_id'])){
			$series_id = $_POST['series_id'];
			$models = json_decode($_POST['json']);
			if(!empty($models)){
				foreach($models as $key=>$value)
				{
					if($key!==0)
					{
						$upd = AutoModel::model()->findByPk($key);
						if(!empty($upd)&&!empty($value)){
							if($upd->name!==$value){
								$upd->name = $value;
								if(!$upd->save())
								{
									echo "Не удалось сменить название модели на: $value ; id=$key";
									exit();
								}
							}
						}
					}
					else{
						if(!empty($models[0])){
							$model = new AutoModel();
							$model->series_id = $series_id;
							$model->name = $models[0];
							if(!$model->save())
							{
								echo 'Не удалось сохранить новую модель';
								exit();
							}
						}
					}
				}
			}

			echo 'ok';
			exit();
		}

		if(isset($_POST['delete_id'])){
			$del_id = $_POST['delete_id'];
			if(AutoModel::canDelete($del_id))
			{
				$del_model = AutoModel::model()->findByPk($del_id);
				if($del_model->delete()){
					echo 'ok';
					exit();
				}
				else{
					echo 'Критическая ошибка при удалении записи. Обратитесь к разработчику';
					exit();
				}
			}
			echo 'Невозможно удалить модель. Удалите сначала авто в салоне';
			exit();
		}

		if(isset($_POST['request_id'])){
			$id = $_POST['request_id'];
			$models = AutoModel::model()->findAllByAttributes(array('series_id'=>$id),array('order'=>'name'));
			$this->renderPartial('_models',array('models'=>$models, 'series'=>$id));
			exit();
		}
		$series = AutoSeries::model()->findAll(array('order'=>'name'));
		$this->render('index',array('series'=>$series));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AutoModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=AutoModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AutoModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='auto-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
