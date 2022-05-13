<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
   protected $fillable = ['nome', 'sobrenome', 'cpf', 'email', 'email2', 'celular', 'telefone'];
}
