<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'content',
        'user_id',
        'is_published',
        'comment_count',
        'category_id',
    ];
}
