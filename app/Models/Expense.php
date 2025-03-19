<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    use HasFactory;

    protected $guarded = [];


    // Automatically set current date if no date is provided
    protected $attributes = [
        'date' => null,
    ];

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ?? now()->toDateString();
    }


    /**
     * Get the company that owns the Expense
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
