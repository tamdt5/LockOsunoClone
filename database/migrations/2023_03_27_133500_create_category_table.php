<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('tentheloai');
            $table->boolean('hidden');
            $table->boolean('delete')->default(0);
            $table->string('icon');
            $table->string('type');
            $table->timestamps();
        });
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('tensanpham');
            $table->string('masanpham');
            $table->string('hinhanhsanpham');
            $table->string('hinhanhsanpham2');
            $table->string('hinhanhsanpham3');
            $table->string('hinhanhsanpham4');
            $table->text('thongsokythuat');
            $table->text('noidungsanpham');
            $table->string('tinhnang');
            $table->string('congnghe');
            $table->string('thuonghieu');
            $table->tinyInteger('baohanh');
            $table->string('lapdat');
            $table->boolean('delete')->default(0);
            $table->bigInteger('giasanpham');
            $table->boolean('hidden');
            $table->unsignedBigInteger('theloai')->nullable();
            $table->foreign('theloai')->references('id')->on('category');
            $table->timestamps();
        });
        Schema::create('new', function (Blueprint $table) {
            $table->id();
            $table->string('tieude');
            $table->string('hinhanhbaiviet');
            $table->boolean('delete')->default(0);
            $table->string('noidung');
            $table->unsignedBigInteger('theloai')->nullable();
            $table->foreign('theloai')->references('id')->on('category');
            $table->boolean('hidden');
            $table->timestamps();
        });
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->boolean('delete')->default(0);
            $table->string('hoten');
            $table->string('image');
            $table->tinyInteger('danhgia')->nullable();
            $table->string('email');
            $table->unsignedBigInteger('baiviet')->nullable();
            $table->foreign('baiviet')->references('id')->on('new');
            $table->unsignedBigInteger('sanpham')->nullable();
            $table->foreign('sanpham')->references('id')->on('product');
            $table->timestamps();
        });
        Schema::create('cskh', function (Blueprint $table) {
            $table->id();
            $table->string('sdt');
            $table->boolean('delete')->default(0);
            $table->boolean('tuvan');
            $table->unsignedBigInteger('sanpham')->nullable();
            $table->foreign('sanpham')->references('id')->on('product');
            $table->timestamps();
        });
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('hoten');
            $table->string('diachi')->nullable();
            $table->string('tensanpham');
            $table->string('sdt');
            $table->string('quantity');
            $table->string('price');
            $table->string('totalprice');
            $table->boolean('status')->default(0);
            $table->string('email');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('category');
        Schema::dropIfExists('product');
    }
};
