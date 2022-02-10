<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER triger_test BEFORE UPDATE ON `users` FOR EACH ROW
            BEGIN
                INSERT INTO triger_test (`user_id`, `created_at`, `updated_at`) 
                VALUES (NEW.id, now(), null);
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger');
    }
}
