<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Veiculo;
class Cliente extends Model
{
    protected $table ='clientes';
    protected $fillable = ['Nome','CPF','Endereco','Telefone'];

}

