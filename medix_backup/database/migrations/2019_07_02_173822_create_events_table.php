<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventsnew', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->text('event_heading');
             $table->text('short_desc');
              $table->text('long_desc');
               $table->text('event_heading');
             $table->text('short_desc');
              $table->text('long_desc');
               $table->text('event_heading');
             $table->text('short_desc');
           

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
        Schema::dropIfExists('events');
    }
}
