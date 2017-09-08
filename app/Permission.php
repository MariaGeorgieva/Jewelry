<?php

namespace App;
use App\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);

    }
}
