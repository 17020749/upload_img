<?php

namespace App\Models;
use App\Models\Role\Role;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Page;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $with = [];
    protected $fillable = [
        'name',
        'email',
        'password',
        'isAdmin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

     protected $visible = ['id', 'name', 'email', 'isAdmin', 'created_at', 'updated_at'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function roles():BelongsToMany {
        return $this->belongsToMany(Role::class, 'role_users', 'user_id', 'role_id')
        ->withTimestamps();
    }
    public function hasAddPermission($permissionsName)
{
    $permissions = $this->roles->flatMap->permissionsPage->pluck(['name', 'page'])->unique();

    return $permissions->contains($permissionsName);
}

   public function list()
{
    $permissions = $this->roles->flatMap->permissionsPage;
 $result = $permissions->filter(function ($item) {
    return $item->pivot->status==1;
})->map(function ($permission) {
       $page = Page::find($permission->pivot->page_id);
        return $permission->name .':'. $page->name;
    })->unique();
    return $result->values();
}
 public function check($permission) {
    return $this->list()->contains($permission);
 }
}
