<?php

namespace Modules\UserManagement\Models;
use App\Models\BaseModel;

/**
 *
 */
class AdmissionofficeModel extends BaseModel
{

  protected $table = 'admins';

  protected $allowedFields = ['id', 'firstname', 'lastname', 'middlename', 'contact', 'user_id','deleted_at'];

  function __construct(){
    parent::__construct();
  }

  public function getAdmissionofficeByUserId($id){
    $this->where('user_id', $id);
    return $this->findAll();
  }
}