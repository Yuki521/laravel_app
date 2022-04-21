<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    ];

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ScopePerson);
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }
}
