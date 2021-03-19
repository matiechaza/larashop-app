<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const STATE_DRAFT = 'draft';
    const STATE_PENDING = 'pending';
    const STATE_PUBLISHED = 'published';
    const STATE_FINISHED = 'finished';

    protected $table = 'products';
}
