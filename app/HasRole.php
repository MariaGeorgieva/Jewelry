<?php

namespace App;


/**
 * Trait HasRole
 * @package App
 */
trait HasRole
{
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);

    }

    /**
     * @param $role
     * @return mixed
     */
    public function assignRole($role)
    {

        return $this->roles()->save(

            Role::whereName($role)->firstOrFail()
        );
    }

    /**
     * @param $role
     * @return mixed
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return $role->intersect($this->roles)->count();


    }
}
