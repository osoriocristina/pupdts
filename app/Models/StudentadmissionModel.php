<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\BaseModel;


class StudentadmissionModel extends Model
{
	protected $table                = 'student_admission';
	protected $allowedFields        = ['stud_admissionID', 'studID', 'sar_pupcct_resultID', 'f137ID', 'f138ID', 'psa_nsoID', 'good_moralID', 'medical_certID', 'picture_two_by_twoID', 'nc_non_enrollmentID', 'coc_hs_shsID', 'ac_pept_alsID', 'cert_dry_sealID', 'cert_dry_sealID_twelve','admission_status', 'created_at'];

	public function insertAdmissionStudents($userID, $sar_pupcct_resultID, $f137ID, $f138ID, $psa_nsoID, $good_moralID, $medical_certID, $picture_two_by_twoID, $nc_non_enrollmentID, $coc_hs_shsID, $ac_pept_alsID, $cert_dry_sealID, $cert_dry_sealID_twelve, $admission_status)
	{	
		$this->set('studID', $userID);	
		$this->set('sar_pupcct_resultID', $sar_pupcct_resultID);
		$this->set('f137ID', $f137ID);
		$this->set('f138ID', $f138ID);
		$this->set('psa_nsoID', $psa_nsoID);
		$this->set('good_moralID', $good_moralID);
		$this->set('medical_certID', $medical_certID);
		$this->set('picture_two_by_twoID', $picture_two_by_twoID);
		$this->set('nc_non_enrollmentID', $nc_non_enrollmentID);
		$this->set('coc_hs_shsID', $coc_hs_shsID);
		$this->set('ac_pept_alsID', $ac_pept_alsID);
		$this->set('cert_dry_sealID', $cert_dry_sealID);
		$this->set('cert_dry_sealID_twelve', $cert_dry_sealID_twelve);
		$this->set('admission_status', $admission_status);

		$this->insert();

		$rdata = [
			'userID' => $userID,			
			'admission_status' => $admission_status,			
		];

		return  $rdata;
	}
	public function updateAdmissionStudents($userID, $sar_pupcct_resultID, $f137ID, $f138ID, $psa_nsoID, $good_moralID, $medical_certID, $picture_two_by_twoID, $nc_non_enrollmentID, $coc_hs_shsID, $ac_pept_alsID, $cert_dry_sealID, $cert_dry_sealID_twelve, $admission_status)
	{	
		$this->set('sar_pupcct_resultID', $sar_pupcct_resultID);
		$this->set('f137ID', $f137ID);
		$this->set('f138ID', $f138ID);
		$this->set('psa_nsoID', $psa_nsoID);
		$this->set('good_moralID', $good_moralID);
		$this->set('medical_certID', $medical_certID);
		$this->set('picture_two_by_twoID', $picture_two_by_twoID);
		$this->set('nc_non_enrollmentID', $nc_non_enrollmentID);
		$this->set('coc_hs_shsID', $coc_hs_shsID);
		$this->set('ac_pept_alsID', $ac_pept_alsID);
		$this->set('cert_dry_sealID', $cert_dry_sealID);
		$this->set('cert_dry_sealID_twelve', $cert_dry_sealID_twelve);
		$this->set('admission_status', $admission_status);
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
