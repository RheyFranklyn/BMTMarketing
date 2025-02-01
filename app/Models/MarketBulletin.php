<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketBulletin extends Model
{
    use HasFactory;

    protected $table = "tblmarketbulletin";

    protected $fillable = [
        'unitcode',
        'pname',
        'kind',
        'content'
    ];
}
