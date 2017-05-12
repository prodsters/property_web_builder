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
            $table->integer("bedroom_count")->default(0);
            $table->integer("bathroom_count")->default(0);
            $table->integer("garage_count")->default(0);
            $table->integer("plot_area")->nullable();
            $table->integer("constructed_area")->nullable();
            $table->string("area_unit")->default("m2");
            $table->string("reference_no")->nullable();
            $table->string("title");
            $table->text("description");
            $table->boolean("is_featured")->default(false);
            $table->boolean("is_public")->default(true);
            
            $table->unsignedInteger("currency_id");
            $table->unsignedInteger("type_id");
            $table->unsignedInteger("state_id");
            $table->unsignedInteger("user_id"); //the creator of the advert
            
            $table->boolean("sale");
            $table->double("original_selling_price");
            $table->double("current_selling_price");

            $table->boolean("rental");
            $table->double("original_rental_price");
            $table->double("current_rental_price");

            $table->string("street_address");
            $table->integer("street_number")->nullable();
            $table->string("city");
            $table->string("region")->nullable();
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
        Schema::dropIfExists("properties");
    }
}
