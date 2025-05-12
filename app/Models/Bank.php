<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /** @use HasFactory<\Database\Factories\BankFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'swift',
        'country',
    ];

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Account::class);
    }
}
