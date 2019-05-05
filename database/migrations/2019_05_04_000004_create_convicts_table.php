<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvictsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'convicts';

    /**
     * Run the migrations.
     * @table convicts
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 191);
            $table->string('surname', 191);
            $table->string('civil_status', 191)->nullable();
            $table->string('profession', 191)->nullable();;
            $table->string('name_father', 191)->nullable();
            $table->string('place_of_birth', 191);
            $table->string('id_card_number', 191);
            $table->string('residence', 191)->nullable();
            $table->string('name_mother', 191)->nullable();
            $table->string('nationality', 191);
            $table->string('gender', 45);
            $table->date('date_of_birth');
            $table->unsignedInteger('subdivision_id');

            $table->index(["subdivision_id"], 'fk_convicts_subdivisions1_idx');


            $table->foreign('subdivision_id', 'fk_convicts_subdivisions1_idx')
                ->references('id')->on('subdivisions')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
