<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }

    protected $fillable = [
        'cod_produto', 'nome', 'valor' , 'estoque', 'cidade_id'
    ];

}
