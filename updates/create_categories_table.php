<?php namespace Zaweb\Octoportfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('zaweb_octoportfolio_categories', function($table)
        {
            Schema::dropIfExists('zaweb_octoportfolio_categories');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('alias');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zaweb_octoportfolio_categories');
    }

}
