<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Flower extends Model
{
    use HasFactory;

    /*
        The model will automatically connect/link to the correct table.
        To do this, "Eloquent" uses snake case: name of the class, lower case, plural.

        If you are using a different name, add this property to the model :
            protected $table = 'my_table';

        By default, Laravel assume that the primary key is named "id"
        If you are using a different name, add this property :
            protected $primaryKey = 'my_id';
            
            */

    // Accessors & Mutators (setters & getters)
    // protected function name(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => strtoupper($value),
    //         set: fn ($value) => strtolower($value),
    //     );
    // }

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
