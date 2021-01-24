<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    
    public function abilities()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    // $role->allowTo('edit_forum);  we can accept an object or a string
    public function allowTo($ability)
    {
        // $this->abilities()->save($ability);

        if (is_string($ability)) {
            $ability = Ability::whereName($ability)->firstOrFail();
        }

        $this->abilities()->sync($ability, false);
    }
}
