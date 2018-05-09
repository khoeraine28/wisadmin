<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->date('application');
            $table->enum('level', ['PRESCHOOL', 'GRADESCHOOL', 'MIDDLE SCHOOL', 'HIGH SCHOOL']);
            $table->string('photo'); //notsure
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->enum('gender', ['Male', 'Female']);
            $table->date('birthdate');
            $table->string('citizenship');
            $table->string('passport');
            $table->longText('birthplace');
            $table->longText('residentialaddress');
            $table->string('email');
            $table->string('religion');
            $table->longText('living');
            $table->string('legalguardian')->nullable();
            $table->string('contactnumber');
            $table->enum('readingwriting', ['Good', 'Fair', 'Limited', 'None']);
            $table->enum('verbalproficiency', ['Good', 'Fair', 'Limited', 'None']);
            $table->longText('mojorlanguages');
            $table->string('otherlanguages')->nullable();
            $table->longText('classparticipation')->nullable();
            $table->boolean('remedialhelp');
            $table->longText('remedialhelpexplantion')->nullable();
            $table->longText('specialtalent');
            $table->string('athletics')->nullable(); //may not be needed
            $table->string('band')->nullable();//may not be needed
            $table->string('string')->nullable();//may not be needed
            $table->longText('otherinfo')->nullable();
            $table->boolean('disciplinaryproblem');
            $table->longText('disciplinaryproblemexplanation')->nullable();
            $table->longText('previousschool');
            $table->longText('previousschooladdress');
            $table->longText('schooltable');
            //------------------------------------------------------------------
            $table->enum('father', ['Father', 'Step-father', 'Legal Guardian']);
            $table->string('fatherfirstname');
            $table->string('fatherlastname');
            $table->string('fathermiddlename');
            $table->string('fathercitizenship');
            $table->string('fatherpassport');
            $table->string('fathervisastatus');
            $table->longText('fatheremployer');
            $table->string('fatherofficenumber');
            $table->longText('fatherdegree');
            $table->longText('fatherschool');
            $table->string('fathernumber');
            $table->boolean('fatherreceivetext');
            //-------------------------------------------------------------------
            $table->enum('mother', ['Mother', 'Step-mother', 'Legal Guardian']);
            $table->string('motherfirstname');
            $table->string('motherlastname');
            $table->string('mothermiddlename');
            $table->string('mothercitizenship');
            $table->string('motherpassport');
            $table->string('mothervisastatus');
            $table->longText('motheremployer');
            $table->string('motherofficenumber');
            $table->longText('motherdegree');
            $table->longText('motherschool');
            $table->string('mothernumber');
            $table->boolean('motherreceivetext');
            //------------------------------------------------------------------

            $table->longText('emergencycontactname');
            $table->string('emergencyofficephone');
            $table->string('emergencymobilenumber');
            $table->longText('emergencyaddress');
            $table->string('emergencyhomephone');

            $table->boolean('isagree');//not sure
            $table->boolean('formiscorrect');//not sure

            $table->string('fathersignature');
            $table->string('mothersignature');
            $table->date('date');
            //------------------3rd page
            $table->string('schoolyear');
            $table->boolean('asthma');
            $table->boolean('asthmainhaler');
            $table->boolean('allergy');
            $table->longText('allergies')->nullable();
            $table->longText('allergyreaction')->nullable();
            $table->boolean('drugallergy');
            $table->longText('drugallergies')->nullable();
            $table->longText('drugallergyreaction')->nullable();
            $table->boolean('visionproblem');
            $table->longText('visionproblemdescription')->nullable();
            $table->boolean('hearingproblem');
            $table->longText('hearingproblemdescription')->nullable();
            $table->longText('healthcondition')->nullable();
            $table->longText('hospitalized')->nullable();
            $table->longText('injuries')->nullable();
            $table->boolean('medication');
            $table->longText('medications')->nullable();
            $table->boolean('schoolhourmedication');
            //---------------------
            $table->boolean('firstaid');
            $table->boolean('emergencycare');
            $table->boolean('hospitalemergencycare');
            $table->boolean('oralmedication');
            $table->string('parentsignature');
            $table->date('date2');

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
        Schema::dropIfExists('students');
    }
}
