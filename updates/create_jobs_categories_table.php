<?php namespace Zaweb\Octoportfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateJobsCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('zaweb_octoportfolio_jobs_categories', function($table)
        {
            Schema::dropIfExists('zaweb_octoportfolio_jobs_categories');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('jobs_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zaweb_octoportfolio_jobs_categories');
    }

}
