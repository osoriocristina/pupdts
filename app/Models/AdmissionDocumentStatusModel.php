<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\BaseModel;
use App\Models;



class AdmissionDocumentStatusModel extends Model
{
	protected $table = 'student_admission';

	protected $allowedFields = ['studID', 'sar_pupcet_result_status', 'f137_status', 'g10_status', 'g11_status', 'g12_status', 'psa_nso_status','good_moral_status', 'medical_cert_status', 'twobytwo_status'];

	
	public function insertStatusData($data){
		
	

	$this->db->table($this->table)->insert($data);

		

	}
	
	public function __updateAdmissionDocument($id, $sar_pupcet_result_status, $f137_status, $g10_status, $g11_status, $g12_status, $psa_nso_status, $goodmoral_status, $medical_cert_status, $pictwobytwo_status)
	{	
		$this->set('sar_pupcet_result_status', $sar_pupcet_result_status);
		$this->set('f137_status', $f137_status);
		$this->set('g10_status', $g10_status);
		$this->set('g11_status', $g11_status);
		$this->set('g12_status', $g12_status);
		$this->set('psa_nso_status', $psa_nso_status);
		$this->set('good_moral_status', $goodmoral_status);
		$this->set('medical_cert_status', $medical_cert_status);
		$this->set('twobytwo_status', $pictwobytwo_status);

		$this->where('studID', $id);
        return $this->update();
		
		
	}

	public function __getStudentAdmissionStatus($id){ 
		return $this->db->table($this->table)
						->where('studID', $id)
						->get() 
						->getRowArray();
	}
	
	

	public function __getDocumentFilesStatus($id){ 
		return $this->db->table($this->table)
						->where('studID', $id)
						->get()
						->getRowArray(); 

	}
	public function __getStudentFiles($id)
	{
		return $this->db->table($this->table)
						->where('studID', $id)
                        ->get()
                        ->getRowArray();
	}
	public function __getStudentImageFiles($id)
	{
		return $this->db->table($this->table)
						->where('studID', $id)
                        ->get()
                        ->getRowArray();
	}
}
