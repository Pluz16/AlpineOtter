<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerDogTable extends Migration
{
    public function up()
{
    Schema::create('owner_dog', function (Blueprint $table) {
        $table->unsignedBigInteger('owner_id');
        $table->unsignedBigInteger('dog_id');
        $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
        $table->foreign('dog_id')->references('id')->on('dogs')->onDelete('cascade');
        $table->timestamps();
    });

    }

    public function down()
    {
        Schema::dropIfExists('owner_dog');
    }
}
