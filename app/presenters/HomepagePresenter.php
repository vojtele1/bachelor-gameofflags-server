<?php

namespace App\Presenters;

use Nette,
    App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
    /** @var Nette\Database\Context */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    public function renderDefault()
{	
    $this->template->student = $this->database->table('student');
	/*
	$students = $this->database->table('student');
	
	$arr = array();
	foreach ($students as $student)
	{
			$arr[] = array("id"=>$student->id,"firstname"=>$student->firstname,"lastname"=>$student->lastname,"age"=>$student->age);
	}


	
	$this->payload->students = $arr;
	$this->sendPayload($arr);*/
}

}