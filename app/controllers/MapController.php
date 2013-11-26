<?php

class MapController extends \BaseController {

	public function getIndex(){
		// $username = Request::segment(1);
	

		$project = new Project;
		$result = $project -> getProject();
		return json_encode($result);
		// return View::make('landing.bodymap')->with(array('$result'=>$result));
	}

	public function getMap(){
		
	}

}