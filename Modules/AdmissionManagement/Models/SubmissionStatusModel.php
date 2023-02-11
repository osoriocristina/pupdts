<?php

namespace Modules\AdmissionManagement\Models;
use App\Models\BaseModel;

/**
 *
 */
class SubmissionStatusModel extends BaseModel
{

  protected $table = 'submission_status';

  protected $allowedFields = ['legend', 'submission_status'];

  
  function __construct(){
    parent::__construct();
  }

  public function getDetails($conditions = [])
  {
    $this->select('student.*, submission_status.*');

    $this->join('student', 'submission_status.id = status.id');

    foreach($conditions as $key => $value)
    {
      $this->where($key, $value);
    }

    return $this->findAll();
  }

}
