<?php

class AutoPackageController extends Controller
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
		if(!empty($_POST['value']))
		{
			$new_package = $_POST['value'];
			$new_model = new AutoPackage();
			$new_model->name = $new_package;
			$new_model->save();
			exit();
		}

		if(!empty($_POST['delete']))
		{
			$del_package_id = $_POST['delete'];
			$del_model = AutoPackage::model()->findByPk($del_package_id);
			if(AutoPackage::canDelete($del_package_id))
			{
				$del_model->delete();
				echo 'ok';
				exit();
			}
			else{
				echo 'Невозможно удалить. Удалите сначала авто';
				exit();
			}

		}

		$existed = AutoPackage::model()->findAll(array('order'=>'name'));
		$this->render('index',array(
			'existed'=>$existed,
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AutoPackage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=AutoPackage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AutoPackage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='auto-package-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
