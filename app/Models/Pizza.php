<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pizza extends Model
{
    /** @use HasFactory<\Database\Factories\PizzaFactory> */
    use HasFactory;

        protected $fillable = [
        'name',
        'price'
    ];

    public function orders()
{
    return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
}


}
