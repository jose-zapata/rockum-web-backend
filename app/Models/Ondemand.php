<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ondemand extends Model
{
    use HasFactory;
    protected $table = 'ondemand';
    protected function imagen(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) => 'https://www.rockumweb.com/' . $value,
        );
    }
    protected function url() : Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attrs) => url('radio/' . $attrs['id'] . '/' . Str::slug($attrs['artista']))
        );
    }
}
