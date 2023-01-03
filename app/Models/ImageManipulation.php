<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageManipulation extends Model
{
    use HasFactory;

    public const TYPE_RESIZE = 'resize';
    public const UPDATED_AT = false;

    protected array $filable = [
        'name',
        'path',
        'type',
        'data',
        'output_path',
        'user_id',
        'album_id',
    ];
}
