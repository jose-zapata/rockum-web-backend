<?php

namespace App\Models;

use DOMDocument;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eternal extends Model
{
    use HasFactory;
    protected $table = 'eternal';
    protected function imagen(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value) => 'https://www.rockumweb.com/' . $value,
        );
    }
    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attrs) => url('eternal/' . $attrs['id'] . '/' . Str::slug($attrs['artista']))
        );
    }
    protected function video(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attrs) {
                $doc = new DOMDocument();
                $doc->loadHTML('<?xml encoding="UTF-8">' . $value);
                $videos = $doc->getElementsByTagName('iframe');
                $wrapper = $doc->createElement('div');
                $wrapper->setAttribute('class', 'video mb-4');
                $value = '';
                foreach ($videos as $video) {
                    $wrapper_clone = $wrapper->cloneNode();
                    $video->parentNode->replaceChild($wrapper_clone, $video);
                    $wrapper_clone->appendChild($video);
                    $value .= $doc->saveHtml($wrapper_clone);
                }
                return $value;
            }
        );
    }
}
