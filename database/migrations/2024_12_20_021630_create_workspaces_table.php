<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkspacesTable extends Migration
{
    public function up()
    {
        schema::create('workspaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('author');
            $table->timestamps();
        });
    }

    public function down()
    {
        schema::dropIfExists('workspaces');
    }
}
