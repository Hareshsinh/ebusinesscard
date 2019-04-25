<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEBusinessCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_business_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable();
            $table->string('designation', 50)->nullable();
            $table->string('organisation', 50)->nullable();
            $table->string('slug', 50)->nullable();
            $table->string('email',70)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('skype_name', 50)->nullable();
            $table->string('website')->nullable();
            $table->string('street', 30)->nullable();
            $table->string('city', 30)->nullable();
            $table->string('state', 30)->nullable();
            $table->string('country', 30)->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->string('about')->nullable();
            $table->string('logo', 50)->nullable();
            $table->string('profile', 50)->nullable();
            $table->string('background', 50)->nullable();
            $table->string('whatsapp', 20)->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('twitter')->nullable();
            $table->string('foursquare')->nullable();
            $table->string('youTube')->nullable();
            $table->string('blog')->nullable();
            $table->string('meetup')->nullable();
            $table->string('pinterest')->nullable();

            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedInteger('created_by')->nullable();
//            $table->foreign('created_by')
//                ->references('id')->on('users')
//                ->onDelete('set null');
            $table->unsignedInteger('updated_by')->nullable();
//            $table->foreign('updated_by')
//                ->references('id')->on('users')
//                ->onDelete('set null');
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
        Schema::dropIfExists('e_business_cards');
    }
}
