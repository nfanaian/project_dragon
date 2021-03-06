<?php

/**
* Created by PhpStorm.
* User: nfanaian
* Date: 8/30/2017
* Time: 9:30 PM
*/
require_once('views/View.php');

class Controller
{
	protected $model;
	protected $view;

	/**
	 * Controller constructor.
	 * @param null $model
	 * @param null $view
	 */
	public function __construct($model = null, $view = null)
	{
		$this->model = $model;
		$this->setView($view);
	}

	/**
	 * @param $model
	 */
	protected function setModel($model)
	{
		$this->model = $model;
		if (!is_null($this->view))
			$this->view->setModel($model);
	}

	/** Set's controller's view to passed view
	 *  If view passed is null (constructor will pass null if no View provided)
	 *  Then default View() (parent class of all views) will be initiated
	 * @param $view
	 */
	protected function setView($view)
	{
		$this->view = $view;

		// Initiate default View if no view provided
		if (is_null($view)) {
			require_once('views/View.php');
			$this->view = new View();
		}

		$this->view->setModel($this->model);
	}
}