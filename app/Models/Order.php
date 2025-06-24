<?php

namespace App\Models;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

// app/Models/Order.php
protected $fillable = []; // no user_id

public function pizzas()
{
    return $this->belongsToMany(Pizza::class)->withPivot('quantity')->withTimestamps();
}


}
