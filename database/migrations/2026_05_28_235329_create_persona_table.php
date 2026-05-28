<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('persona', function (Blueprint $table) {

            $table->char('per_cod',14)->primary();

            $table->char('per_nom',150);

            $table->char('per_appm',150);

            $table->char('per_prof',100);

            $table->char('per_telf',17);

            $table->char('per_cel',17);

            $table->char('per_email',50)->unique();

            $table->char('per_dir',150);

            $table->date('per_fnac');

            $table->char('per_lnac',150);

            $table->boolean('per_est');

            $table->timestamp('per_create');

            $table->timestamp('per_update');

            $table->string('per_foto')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
