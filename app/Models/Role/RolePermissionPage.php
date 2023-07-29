<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermissionPage extends Model
{
    
    use HasFactory;
   
    public $incrementing = false;
     protected $fillable = [
        'status',
    ];
     protected function setKeysForSaveQuery($query)
    {
        $query->where('role_id', '=', $this->getAttribute('role_id'))
            ->where('permission_id', '=', $this->getAttribute('permission_id'))
            ->where('page_id', '=', $this->getAttribute('page_id'));
        return $query;
    }
}
