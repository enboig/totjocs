<?php

use App\Models\Game;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title');
            $table->text('description');
            $table->string('category');
        });

        $games = [
            [
                "title" => "301 Parxís", 
                "category" => "dards", 
                "description" => "Cal arribar a una punctuació de 301. Si s'iguala la punctuació d'un altre jugador, aquest passa a tenir zero punts."
            ],
            [
                "title" => "Set i mig", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "Butifarra", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "Mentider", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "Siset", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "test1", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "test2", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "test3", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "test4", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "test5", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "test6", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
            [
                "title" => "test7", 
                "category" => "cartes", 
                "description" => "Lorem ipsum."
            ],
        ];

        foreach ($games as $game) {
            Game::firstOrCreate($game);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
