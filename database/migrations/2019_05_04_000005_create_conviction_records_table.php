<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvictionRecordsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'conviction_records';

    /**
     * Run the migrations.
     * @table conviction_records
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('convict_id');
            $table->date('date_of_conviction');
            $table->string('court', 191);
            $table->string('nature_of_offence', 191)->nullable();
            $table->date('offence_commited_on')->nullable();
            $table->date('warrant_issued_on')->nullable();
            $table->string('warrant_type', 191)->nullable();

            $table->index(["convict_id"], 'fk_conviction_records_convicts1_idx');


            $table->foreign('convict_id', 'fk_conviction_records_convicts1_idx')
                ->references('id')->on('convicts')
                ->onDelete('cascade')
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
