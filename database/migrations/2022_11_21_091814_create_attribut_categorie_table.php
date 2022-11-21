<?php

use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribut_categorie', function (Blueprint $table) {
            $table->primary(['attribute_id', 'category_id']);
            $table->foreignIdFor(Attribute::class);
            $table->foreignIdFor(Category::class);
            $table->string('constraints_type');
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
        Schema::dropIfExists('attribut_categorie');
    }
};
