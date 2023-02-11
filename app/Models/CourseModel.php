<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
	protected $table                = 'courses';

	protected $allowedFields        = ['id', 'course', 'course_type', 'abbreviation', 'created_at', 'updated_at', 'deleted_at'];

	function __construct(){
	   parent::__construct();
	}

	public function __getStudentCourse()
	{
		$db = \Config\Database::connect();
    
	    $query   = $db->query('SELECT * FROM courses');
	    $results = $query->getResultArray();

	    return $results;
	}
}
