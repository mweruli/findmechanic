<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('pin');
            $table->string('employee_code');
            $table->string('staffno')->nullable();
            $table->string('payroll_category')->nullable();
            $table->string('employmenttype_id')->default('2');
            $table->string('company_id')->default('1');
            $table->string('branch_id')->default('0');
            $table->string('department_id')->default('1');
            $table->string('jobtitle_id')->default('1');
            $table->string('firstname')->nullable();
            $table->string('lastname')->default('Update');
            $table->string('middlename')->default('Update');
            $table->string('idnumber');
            $table->string('nhifnumber')->nullable();
            $table->string('id_gender')->default('1');
            $table->string('nssfnumber')->default('1');
            $table->string('nssfstate')->default('1');
            $table->string('nhifstate')->default('1');
            $table->string('loanstate')->default('1');
            $table->string('advancestate')->default('1');
            $table->string('payestate')->default('1');
            $table->string('saccostate')->default('1');
            $table->string('confirmationstatu')->default('1');
            $table->string('overtimestate')->default('1');
            $table->string('penalisestate')->default('1');
            $table->string('lunchstate')->default('1');
            $table->string('lunchamount')->default('50');
            $table->string('saccoamount')->default('1200');
            $table->string('pysicaladdress')->default('nairobi');
            $table->string('maritalstatus_id')->default('1');
            $table->string('dob')->nullable();
            $table->string('dateemployeed')->nullable();
            $table->string('cellphone')->default('123456789');
            $table->string('jobgroup_id')->default('1');
            $table->string('payfrequency_id')->default('1');
            $table->string('bank_id')->default('1');
            $table->string('bankbranch_id')->default('1');
            $table->string('accountnumber')->nullable();
            $table->string('basicpay')->default('400');
            $table->string('exempt_ot')->default('1');
            $table->string('exempt_lost')->default('0');
            $table->string('exempt_clocking')->default('0');
            $table->string('dailyrate')->default('8.0');
            $table->string('houseallowance')->default('1200');
            $table->string('passportnumber')->default('1234');
            $table->text('passportphoto')->nullable();
            $table->text('emailaddress')->nullable();
            $table->string('postaladdress')->default('0100');
            $table->string('postalcode')->default('500');
            $table->string('town')->default('nairobi');
            $table->string('country')->default('kenya');
            $table->string('homephone')->nullable();
            $table->text('homedistrict')->nullable();
            $table->timestamp('dateadded');
            $table->string('addedby')->default('1');
            $table->integer('slug')->default('0');
            $table->string('user_id')->default('0');
            $table->integer('attendence_shiftdef_id')->default('1');
            $table->string('astmanager_id')->default('1');
            $table->string('user_image_small')->nullable();
            $table->string('user_image_medium')->nullable();
            $table->string('user_image_big')->nullable();
            $table->string('password')->nullable();
            $table->string('category')->nullable();
            $table->integer('activestateemployee')->default('1');
            $table->text('dateterminated')->nullable();
            $table->text('dateofconfirmation')->nullable();
            $table->text('drivinflicense')->nullable();
            $table->text('prevemployer')->nullable();
            $table->text('nextemployer')->nullable();
            $table->text('ethnicity')->nullable();
            $table->text('curiculumvitae')->nullable();
            $table->text('yearsofservice')->nullable();
            $table->text('supervisedby')->nullable();
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
        Schema::dropIfExists('user');
    }
}
