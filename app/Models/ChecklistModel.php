<?php

namespace App\Models;

use CodeIgniter\Model;

class ChecklistModel extends Model
{
	protected $table                = 'checklists';
	protected $allowedFields        = ['checklistID', 'checklistName', 'remarks', 'created_at'];
	
	public function __getChecklistDetails()
	{
		return $this->db->table($this->table)
                        ->get()
                        ->getResultArray();
	}
	
}
