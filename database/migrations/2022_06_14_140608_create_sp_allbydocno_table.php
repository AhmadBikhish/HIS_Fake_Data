<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up()
    {
        Schema::create('sp_allbydocno', function (Blueprint $table) {
            $table->id();
            $table->string('docno')->nullable()->collation('utf8mb4_general_ci');
            $table->string('Ncode')->nullable()->collation('utf8mb4_general_ci');
            $table->string('fname')->nullable()->collation('utf8mb4_general_ci');
            $table->string('lname')->nullable()->collation('utf8mb4_general_ci');
            $table->string('FatherName')->nullable()->collation('utf8mb4_general_ci');
            $table->string('passno')->nullable()->collation('utf8mb4_general_ci');
            $table->string('birthdate')->nullable()->collation('utf8mb4_general_ci');
            $table->string('birthplace')->nullable()->collation('utf8mb4_general_ci');
            $table->string('sex')->nullable()->collation('utf8mb4_general_ci');
            $table->string('marital')->nullable()->collation('utf8mb4_general_ci');
            $table->string('religion')->nullable()->collation('utf8mb4_general_ci');
            $table->string('job')->nullable()->collation('utf8mb4_general_ci');
            $table->string('organization')->nullable()->collation('utf8mb4_general_ci');
            $table->string('tel')->nullable()->collation('utf8mb4_general_ci');
            $table->string('mob')->nullable()->collation('utf8mb4_general_ci');
            $table->string('address')->nullable()->collation('utf8mb4_general_ci');
            $table->string('mname')->nullable()->collation('utf8mb4_general_ci');
            $table->string('mtel')->nullable()->collation('utf8mb4_general_ci');
            $table->string('maddress')->nullable()->collation('utf8mb4_general_ci');
            $table->string('hisno')->nullable()->collation('utf8mb4_general_ci');
            $table->string('pdate')->nullable()->collation('utf8mb4_general_ci');
            $table->string('ptime')->nullable()->collation('utf8mb4_general_ci');
            $table->string('ward')->nullable()->collation('utf8mb4_general_ci');
            $table->string('bed')->nullable()->collation('utf8mb4_general_ci');
            $table->string('doctor')->nullable()->collation('utf8mb4_general_ci');
            $table->string('admission')->nullable()->collation('utf8mb4_general_ci');
            $table->string('police')->nullable()->collation('utf8mb4_general_ci');
            $table->string('intype')->nullable()->collation('utf8mb4_general_ci');
            $table->string('inno')->nullable()->collation('utf8mb4_general_ci');
            $table->string('tdate')->nullable()->collation('utf8mb4_general_ci');
            $table->string('ttime')->nullable()->collation('utf8mb4_general_ci');
            $table->string('ttype')->nullable()->collation('utf8mb4_general_ci');
            $table->string('tdesc')->nullable()->collation('utf8mb4_general_ci');
            $table->string('tadesc')->nullable()->collation('utf8mb4_general_ci');
            $table->string('isconsultation')->nullable()->collation('utf8mb4_general_ci');
            $table->string('tadvice')->nullable()->collation('utf8mb4_general_ci');
            $table->string('tstay')->nullable()->collation('utf8mb4_general_ci');
            $table->string('tndate')->nullable()->collation('utf8mb4_general_ci');
            $table->string('isdead')->nullable()->collation('utf8mb4_general_ci');
            $table->string('fdate')->nullable()->collation('utf8mb4_general_ci');
            $table->string('ftime')->nullable()->collation('utf8mb4_general_ci');
            $table->string('fdesc')->nullable()->collation('utf8mb4_general_ci');
            $table->string('hospitaltest')->nullable()->collation('utf8mb4_general_ci');
            $table->string('firstrecognition')->nullable()->collation('utf8mb4_general_ci');
            $table->string('duringrecognition')->nullable()->collation('utf8mb4_general_ci');
            $table->string('lastrecognition')->nullable()->collation('utf8mb4_general_ci');
            $table->string('externalcause')->nullable()->collation('utf8mb4_general_ci');
            $table->string('surgery')->nullable()->collation('utf8mb4_general_ci');
            $table->string('surgreycode')->nullable()->collation('utf8mb4_general_ci');
            $table->string('surgreydate')->nullable()->collation('utf8mb4_general_ci');
            $table->string('emrcode')->nullable()->collation('utf8mb4_general_ci'); 
            $table->timestamps();  
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('stored_procedures');
    }
};
