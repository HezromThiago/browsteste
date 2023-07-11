<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produto extends Model{

    public function up() {
        Schema::create('produtos', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->text('descricao');
            $table->decimal('preco', 8, 2);
            $table->timestamps();
        });
    }
}
