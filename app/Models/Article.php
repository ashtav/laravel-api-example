<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Article extends Model
{
    use HasFactory, SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'title',
        'content',
        'thumbnail',
        'created_by',
        'updated_by',
    ];

    /**
     * Get the user who created the article.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who last updated the article.
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
