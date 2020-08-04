<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->integer("age");
            $table->string("gender");
            $table->string("handphone")->nullable();
            $table->string("email");
            $table->string("shouldfixed");
            $table->string("goodthings");
            $table->string("ordertype");
            $table->string("foodordered");
            $table->integer("foodsatisfaction");
            $table->string("drinkordered");
            $table->integer("drinksatisfaction");
            $table->string("favoritefood");
            $table->string("favoritedrink");
            $table->string("menusuggestion");
            $table->integer("price");
            $table->string("howoften");
            $table->string("references");
            $table->string("promo");
            $table->string("distance");
            $table->integer("stafffriendliness");
            $table->integer("servicequality");
            $table->integer("outletcleanliness");
            $table->string("companyname");
            $table->string("branchlocation");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionnaires');
    }
}
