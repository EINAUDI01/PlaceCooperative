<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Fonction qui sera créer la table
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            //Création des champs
            $table->uuid('id')->primary();
            $table->string('type');
            $table->morphs('notifiable');
            $table->text('data');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            $table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    //Fonction qui permet de supprimer la table
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
