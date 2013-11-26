<?php

class Project extends Eloquent{

	public $timestamps = false;
	public $table = 'project';

	public function getProject(){
		$result = DB::table('project')
					->get();
		return $result;
	}
}