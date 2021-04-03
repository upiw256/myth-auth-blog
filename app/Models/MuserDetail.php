<?php

namespace App\Models;

use CodeIgniter\Model;

class MuserDetail extends Model
{
	protected $table                = 'users';
	protected $allowedFields = ['email', 'username', 'full_name', 'password_hash', 'active', 'force_pass_reset', 'created_at', 'updated_at'];
	
}
