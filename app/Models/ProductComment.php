<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'user_id', 'avatar', 'name', 'content', 'reply_id'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reply()
    {
        return $this->belongsTo(ProductComment::class, 'reply_id');
    }
}
