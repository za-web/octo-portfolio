<?php namespace ZaWeb\Octoportfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateWorksTable extends Migration
{

    public function up()
    {
        Schema::create('zaweb_octoportfolio_jobs', function($table)
        {
            Schema::dropIfExists('zaweb_octoportfolio_jobs');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zaweb_octoportfolio_jobs');
    }

}
