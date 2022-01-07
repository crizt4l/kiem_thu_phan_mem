<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->integer('InvoiceId')->unsigned();
            $table->foreign('InvoiceId')->references('id')->on('invoices');
            $table->integer('ProductId')->unsigned();
            $table->foreign('ProductId')->references('id')->on('products');
            $table->integer('Quantity');
            $table->integer('UnitPrice');
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
        Schema::dropIfExists('invoice_details');
    }
}
