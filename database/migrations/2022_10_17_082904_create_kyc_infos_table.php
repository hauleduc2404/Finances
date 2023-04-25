<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKYCInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyc_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('trinh_do_hoc_van');
            $table->string('thu_nhap_ca_nhan');
            $table->string('muc_dich_vay');
            $table->string('co_nha_cua_khong');
            $table->string('co_xe_co_khong');
            $table->string('tien_luong_hang_thang');
            $table->string('dia_chi_chi_tiet');
            $table->string('gia_dinh_ho_ten');
            $table->string('gia_dinh_sdt');
            $table->string('gia_dinh_moi_quan_he');
            $table->string('gia_dinh_2_ho_ten')->nullable();
            $table->string('gia_dinh_2_sdt')->nullable();
            $table->string('gia_dinh_2_moi_quan_he')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->timestamp('verify_time')->default(null)->nullable();
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
        Schema::dropIfExists('kyc_infos');
    }
}
