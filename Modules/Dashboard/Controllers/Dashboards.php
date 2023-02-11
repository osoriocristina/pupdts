<?php namespace Modules\Dashboard\Controllers;

use App\Controllers\BaseController;
use Modules\Dashboard\Models as Dashboard;

class Dashboards extends BaseController {

  function __construct(){
    $this->dashboardsModel = new Dashboard\DashboardsModel();
  }

  public function index(){
    $data['view'] = 'Modules\Dashboard\Views\dashboards\index';
    return view('template/index', $data);
  }


 // MAIA'S MEMA CODE======================================================

  /**public function dBoard()
  {
    $this->data['students'] = $this->dashboardsModel->get();
    $this->data['request_details'] = $this->requestDetailModel->getDetails(['request_details.status' => 'c', 'requests.status' => 'c']);
    $this->data['view'] = 'Modules\DocumentRequest\Views\requests\claimed';
    return view('template/index', $this->data);
  }

  public function dBoardFilter(){
    if($_GET['document_id'] == 0){
      $this->data['request_details'] = $this->requestDetailModel->getDetails(['request_details.status' => 'c', 'requests.status' => 'c']);
    }else{
      $this->data['request_details'] = $this->requestDetailModel->getDetails(['request_details.status' => 'c', 'requests.status' => 'c', 'document_id' => $_GET['document_id']]);
    }
    return view('Modules\DocumentRequest\Views\requests\tables\claimed', $this->data);
  }
  **/
}
