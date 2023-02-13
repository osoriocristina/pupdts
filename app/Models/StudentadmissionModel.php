<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\BaseModel;


class StudentadmissionModel extends Model
{
	protected $table = 'student_admission';
	protected $allowedFields = [
		'stud_admissionID', 'studID', 'sar_pupcct_resultID', 'f137ID', 'f138ID', 
		'psa_nsoID', 'good_moralID', 'medical_certID', 'picture_two_by_twoID', 
		'nc_non_enrollmentID', 'coc_hs_shsID', 'ac_pept_alsID', 'cert_dry_sealID', 
		'cert_dry_sealID_twelve','app_grad','or_app_grad','latest_regi','eval_res',
		'course_curri', 'cert_candi', 'gen_clear', 'or_grad_fee', 'cert_confer',
		'schoolid', 'honor_dis', 'trans_rec',
		'admission_status', 'created_at'
	];

	public function insertAdmissionStudents($userID = 0, $data, $admission_status = "")
	{	
		$this->insert($data);

		$rdata = [
			'userID' => $userID,			
			'admission_status' => $admission_status,			
		];

		return  $rdata;
	}
	public function updateAdmissionStudents($userID = 0, $data, $admission_status = "")
	{	
		$this->set($data);
		$this->where('studID', $userID);
        $this->update();

		$rdata = [
			'userID' => $userID,			
			'admission_status' => $admission_status,			
		];

		return  $rdata;
	}
	public function __getSAMDetails($id){
		return $this->db->table($this->table)
						->join('users', 'users.id = student_admission.studID')
						->where('studID', $id)
                        ->get()
                        ->getRowArray();
	}
	public function __getCompleteDocs(){
		return $this->db->table($this->table)
						->where('admission_status', 'complete')
                        ->get()
                        ->getResultArray();
	}
	public function __getIncompleteDocs(){
		return $this->db->table($this->table)
						->where('admission_status', 'incomplete')
                        ->get()
                        ->getResultArray();
	}
	public function __getRecheckDocs()
	{
		return $this->db->table($this->table)
						->where('admission_status', 'rechecking')
                        ->get()
                        ->getResultArray();
	}
	public function __setUpdateToRechecking($id)
	{
		$this->set('admission_status', 'rechecking');
		$this->where('studID', $id); 
		$is_ok = $this->update();
		
		if ($is_ok) {
			return 'success';
		}else{
			return 'error';
		}
	}
}
