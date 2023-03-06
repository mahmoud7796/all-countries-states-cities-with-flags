<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    protected $appends = ['flag'];


    protected $guarded =[];

    public function states()
    {
        return $this->hasMany(State::class,'country_id');
    }
    public function getFlagAttribute()
    {
        return $this->flag = asset('vendor/blade-flags/country-'.$this->code.'.svg');
    }


}
