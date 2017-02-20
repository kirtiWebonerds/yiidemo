<?php
namespace app\controllers;
use yii\web\controller;
use yii\data\pagination;
use app\models\Country;

/**
* 
*/
class CountryController extends Controller
{
	
	function actionIndex()
	{
		$query= Country::find();

		$pagination= new pagination(['defaultPageSize =>5','totalCount=> $query->count()',]);

		$countries= $query->orderBy('name')
				->offset('pagination->offset')
				->limit('pagination->limit')
				->all();

				return $this->render('index',['countries' => $countries,'pagination'=>$pagination,]);
	}
}