<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Note
 * @package App
 */
class Note extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'assignee_id',
        'content',
        'color',
        'user_id'
    ];

    /**
     * @return BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return BelongsTo
     */
    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_id');
    }
}