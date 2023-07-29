<?php

namespace App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Role extends Model
{
    use HasFactory;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function permissionsPage(): BelongsToMany 
    {
        return $this->belongsToMany(Permission::class,'role_permission_pages','role_id','permission_id')
        ->withPivot(['page_id','status'])
        ->withTimestamps();
    }
}
