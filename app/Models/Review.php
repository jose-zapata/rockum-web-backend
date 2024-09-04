<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    protected $table = 'reviews';
    use HasFactory;
    protected function imagen() : Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) => 'https://www.rockumweb.com/' . $value,
        );
    }
    protected function url() : Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attrs) => url('review/' . $attrs['id'] . '/' . Str::slug($attrs['banda'].'-'.$attrs['album']))
        );
    }
}
