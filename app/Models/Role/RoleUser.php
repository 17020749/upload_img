<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;
         protected $fillable = [
        'role_id',
        'user_id'
    ];
     protected function setKeysForSaveQuery($query)
    {
        $query->where('role_id', '=', $this->getAttribute('role_id'))
            ->where('user_id', '=', $this->getAttribute('page_id'));
        return $query;
    }
}
