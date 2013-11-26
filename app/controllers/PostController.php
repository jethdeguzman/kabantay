<?php

class PostController extends \BaseController {

	public function postProject(){
		$location = Input::get("location");
		$longitude = Input::get("longitude");
		$latitude = Input::get("latitude");
		$region = Input::get("region");
		$dept = Input::get("department");
		$spfcode = Input::get("spfcode");
		$prog_Desc = Input::get("programDesc");
		$purpose = Input::get("purpose");
		$amount = Input::get("amount");
		$pic_Src = Input::get("picSrc");
		$project = new Project;
		$project->location = $location;
		$project->longitude = $longitude;
		$project->latitude = $latitude;
		$project->region = $region;
		$project->dept = $dept;
		$project->spfcode = $spfcode;
		$project->prog_Desc = $prog_Desc;
		$project->purpose = $purpose;
		$project->amount = $amount;
		$project->pic_Src = $pic_Src;
		$project->save();


	}

	public function postMood(){
		$mood = Input::get("mood");
		$project_Id = Input::get("project_Id");
	}



}