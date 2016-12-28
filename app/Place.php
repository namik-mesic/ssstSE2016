<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Note
 * @package App
 */
class Place extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'vicinity',
        'lat',
        'lng',
        'type'
    ];


}