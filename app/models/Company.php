<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Company extends Model  {
    protected $connection = 'pgsql-bolsa-empleo';
    protected $fillable = [
        'identity',
        'nature',
        'email',
        'trade_name',
        'comercial_activity',
        'phone',
        'cell_phone',
        'web_page',
        'address'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
