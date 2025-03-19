<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyBalance extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'opening_balance', 'closing_balance', 'status'];

}
