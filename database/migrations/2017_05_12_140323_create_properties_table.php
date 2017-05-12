<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('properties', function (Blueprint $table) {
            
            $table->increments('id');
            $table->int("bedroom_count");
            $table->int("bathroom_count");
            $table->int("garage_count");
            $table->int("plot_area");
            $table->int("constructed_area");
            $table->string("area_unit");
            $table->date("construction_year");
            $table->string("reference_no")->nullable();
            $table->string("title");
            $table->text("description");
            
            $table->unsignedInt("currency_id");
            $table->unsignedInt("type_id");
            $table->unsignedInt("state_id");
            $table->unsignedInt("user_id"); //the creator of the advert
            
            $table->boolean("sale");
            $table->double("original_selling_price");
            $table->double("current_selling_price");

            $table->boolean("rental");
            $table->double("original_rental_price");
            $table->double("current_rental_price");

            $table->string("street_address");
            $table->int("street_number");
            $table->string("city");
            $table->string("region");
            $table->string("country");
            $table->string("postal_code");

            
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
        //
    }
}
