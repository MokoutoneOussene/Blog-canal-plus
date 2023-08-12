<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom_projet');
            $table->string('lieu_projet');
            $table->date('d_debut');
            $table->date('d_fin');
            $table->integer('budjet'); 
            $table->string('m_ouvrage');
            $table->string('m_oeuvre');
            $table->longText('descript')->nullable();
            $table->string('devis')->nullable();
            $table->string('img_avant')->nullable();
            $table->string('img_apres')->nullable();
            $table->string('statut')->nullable();
            $table->string('voir_plus')->nullable();

            $table->unsignedBigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('services_id')->unsigned();
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
};
