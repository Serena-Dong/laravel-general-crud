<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['name_card', 'coast', 'img', 'type_card', 'ed', 'effect', 'text', 'force', 'costitution'];
}
