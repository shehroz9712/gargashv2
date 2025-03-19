<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CashTransaction extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * Get the dailybalance that owns the CashTransaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dailyBalance(): BelongsTo
    {
        return $this->belongsTo(DailyBalance::class, 'daily_balances_id', 'id');
    }
    /**
     * Get the expense associated with the CashTransactions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expense(): HasOne
    {
        return $this->hasOne(Expense::class, 'cash_transactions_id', 'id');
    }
}
