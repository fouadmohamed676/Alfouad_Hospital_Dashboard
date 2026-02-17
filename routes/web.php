<?php

use App\Http\Controllers\Clinks\ClinksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Doctors\DoctorsController;
use App\Http\Controllers\Hospital\HospitalController;
use App\Http\Controllers\Pharamcy\PharamcyController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Local\LocalController;
use App\Http\Controllers\Nurses\NurseController;
use App\Http\Controllers\Specializations\SpecializationsController;
use App\Http\Controllers\Time\TimeController;
use App\Http\Controllers\Duty\DutyController;
use App\Http\Controllers\Forword\TransferController as ForwordController;
use App\Http\Controllers\Pation\PationController;
use App\Http\Controllers\Pation\SickController;

Route::get('/', function () {
    return view('welcome');
});
    Route::get('/getdata', [UserController::class, 'hasOneRelation']);
    Route::get('/users', [UserController::class, 'show']);

    Route::group(['prefix' => 'user'], function(){
        Route::get('/show', [UserController::class, 'show'])->name('user.show');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/save', [UserController::class, 'save'])->name('user.save');
        Route::get('/update/{id}', [UserController::class, 'update']);
        Route::put('/save_update/{id}', [UserController::class, 'edit']);
        Route::get('/delete/{id}', [UserController::class , 'destroy'])->name('user.delete');
    });


    Route::group(['prefix' => 'doctors'], function(){
        Route::get('/show', [DoctorsController::class, 'show'])->name('doctors.show');
        Route::get('/details/{id}', [DoctorsController::class, 'display'])->name('doctors.details');
        Route::get('/create', [DoctorsController::class, 'create'])->name('doctors.create');
        Route::post('/save', [DoctorsController::class, 'save'])->name('doctors.save');
        Route::get('/update/{id}', [DoctorsController::class, 'update']);
        Route::post('/times_doctors', [DoctorsController::class, 'times_doctors'])->name('doctors.times_doctors');
        Route::get('/doctor_duty/{id}', [DoctorsController::class, 'doctor_duty'])->name('doctors.doctor_duty');
        Route::put('/save_update/{id}', [DoctorsController::class, 'edit']);
        Route::get('/delete/{id}', [DoctorsController::class , 'destroy'])->name('doctors.delete');
    });

    Route::group(['prefix' => 'hospital'], function(){
        Route::get('/show', [HospitalController::class, 'show'])->name('hospital.show');
        Route::get('/create', [HospitalController::class, 'create'])->name('hospital.create');
        Route::post('/save', [HospitalController::class, 'save'])->name('hospital.save');
        Route::post('/addDoctors', [HospitalController::class, 'addDoctors'])->name('hospital.addDoctors');
        Route::get('/update/{id}', [HospitalController::class, 'update'])->name('hospital.update');
        Route::get('/doctors/{id}', [HospitalController::class, 'doctors'])->name('hospital.doctors');
        Route::get('/hospitalDoctor/{id}', [HospitalController::class, 'hospitalDoctor'])->name('hospital.hospitalDoctor');
        Route::put('/save_update/{id}', [HospitalController::class, 'edit']);
        Route::get('delete/{id}', [HospitalController::class , 'destroy'])->name('hospital.delete');

    });


    Route::group(['prefix' => 'pharmacy'], function(){
        Route::get('/show', [PharamcyController::class, 'show'])->name('pharmacy.show');
        Route::get('/create', [PharamcyController::class, 'create'])->name('pharmacy.create');
        Route::post('/save', [PharamcyController::class, 'save'])->name('pharmacy.save');
        Route::get('/delete/{id}', [PharamcyController::class , 'destroy'])->name('pharmacy.delete');
        Route::get('/staff_pharmacy/{id}', [PharamcyController::class, 'show_staff']);
        Route::get('/staff_pharmacy_/{id}', [PharamcyController::class, 'show_staff_']);
        Route::get('/update/{id}', [PharamcyController::class, 'update']);
        Route::get('/save_update/{id}', [PharamcyController::class, 'edit']);

        Route::post('/staff_pharm', [PharamcyController::class, 'staff_pharm'])->name('pharmacy.staff_pharm');
        Route::get('/pharm_staff', [PharamcyController::class, 'pharmacy_staff'])->name('pharmacy.pharmacy_staff');
        // many to many Relation
    });


    Route::group(['prefix' => 'staff'], function(){
        Route::get('/show', [StaffController::class, 'show'])->name('staff.show');
        Route::get('/create', [StaffController::class, 'create'])->name('staff.create');
        Route::post('/save', [StaffController::class, 'save'])->name('staff.save');
        Route::get('/update/{id}', [StaffController::class, 'update']);
        Route::get('/pharmaces/{id}', [StaffController::class, 'pharmaces']);
        Route::get('/delete/{id}', [StaffController::class , 'destroy'])->name('staff.delete');
        Route::put('/save_update/{id}', [StaffController::class, 'edit']);

        // cars
        Route::get('/car/{id}', [StaffController::class, 'car'])->name('staff.car');



    });
    Route::group(['prefix' => 'sick'], function(){
        Route::get('/show', [SickController::class, 'show'])->name('sick.show');
        Route::get('/create', [SickController::class, 'create'])->name('sick.create');
        Route::post('/save', [SickController::class, 'save'])->name('sick.save');
        Route::get('/update/{id}', [SickController::class, 'update']);
        Route::get('/sicks/{id}', [SickController::class, 'sicks']);
        Route::get('/delete/{id}', [SickController::class , 'destroy'])->name('sick.delete');
        Route::put('/save_update/{id}', [SickController::class, 'edit']);
    });

    Route::group(['prefix' => 'local'], function(){
        Route::get('/show', [LocalController::class, 'show'])->name('local.show');
        Route::get('/create', [LocalController::class, 'create'])->name('local.create');
        Route::post('/save', [LocalController::class, 'save'])->name('local.save');
        Route::get('/update/{id}', [LocalController::class, 'update']);
        Route::get('/delete/{id}', [LocalController::class , 'destroy'])->name('local.delete');
        Route::put('/save_update/{id}', [LocalController::class, 'edit']);
    });




    Route::group(['prefix' => 'Nurses'], function(){
        Route::get('/show', [NurseController::class, 'show'])->name('nurses.show');
        Route::get('/create', [NurseController::class, 'create'])->name('nurses.create');
        Route::post('/save', [NurseController::class, 'save'])->name('nurses.save');
        Route::get('/update/{id}', [NurseController::class, 'update']);
        Route::get('/delete/{id}', [NurseController::class , 'destroy'])->name('nurses.delete');
        Route::put('/save_update/{id}', [NurseController::class, 'edit']);
    });

    Route::group(['prefix' => 'Specializations'], function(){
        Route::get('/show', [SpecializationsController::class, 'show'])->name('specializations.show');
        Route::get('/create', [SpecializationsController::class, 'create'])->name('specializations.create');
        Route::post('/save', [SpecializationsController::class, 'save'])->name('specializations.save');
        Route::get('/update/{id}', [SpecializationsController::class, 'update']);
        Route::get('/delete/{id}', [SpecializationsController::class , 'destroy'])->name('specializations.delete');
        Route::put('/save_update/{id}', [SpecializationsController::class, 'edit']);
    });


    Route::group(['prefix' => 'clink'], function(){
        Route::get('/show', [ClinksController::class, 'show'])->name('clink.show');
        Route::get('/create', [ClinksController::class, 'create'])->name('clink.create');
        Route::post('/save', [ClinksController::class, 'save'])->name('clink.save');
        Route::get('/update/{id}', [ClinksController::class, 'update']);
        Route::put('/save_update/{id}', [ClinksController::class, 'edit']);
        Route::get('/del_update/{id}', [ClinksController::class, 'del_update'])->name('clink.del_update');
        Route::get('/delete/{id}', [ClinksController::class , 'destroy'])->name('clink.delete');
    });
    Route::group(['prefix' => 'time'], function(){
        Route::get('/show', [TimeController::class, 'show'])->name('time.show');
        Route::get('/create', [TimeController::class, 'create'])->name('time.create');
        Route::post('/save', [TimeController::class, 'save'])->name('time.save');
        Route::get('/update/{id}', [TimeController::class, 'update']);
        Route::put('/save_update/{id}', [TimeController::class, 'edit']);
        Route::get('/delete/{id}', [TimeController::class , 'delete'])->name('time.delete');
        Route::get('/restore/{id}', [TimeController::class , 'restore'])->name('time.restore');
    });
    Route::group(['prefix' => 'duty'], function(){
        Route::get('/show', [DutyController::class, 'show'])->name('duty.show');
        Route::get('/create', [DutyController::class, 'create'])->name('duty.create');
        Route::post('/save', [DutyController::class, 'save'])->name('duty.save');
        Route::get('/update/{id}', [DutyController::class, 'update'])->name('duty.update');
        Route::get('/delete/{id}', [DutyController::class , 'destroy'])->name('duty.delete');
        Route::put('/save_update/{id}', [DutyController::class, 'edit']);
    });
    Route::group(['prefix' => 'forword'], function(){
        Route::get('/show', [ForwordController::class, 'show'])->name('forword.show');
        Route::get('/create', [ForwordController::class, 'create'])->name('forword.create');
        Route::post('/save', [ForwordController::class, 'save'])->name('forword.save');
        Route::get('/update/{id}', [ForwordController::class, 'update'])->name('forword.update');
        Route::get('/delete/{id}', [ForwordController::class , 'destroy'])->name('forword.delete');
        Route::put('/save_update/{id}', [ForwordController::class, 'edit']);
    });
    Route::group(['prefix' => 'pation'], function(){
        Route::get('/show', [PationController::class, 'show'])->name('pation.show');
        Route::get('/pation_sick', [PationController::class, 'pation_sick'])->name('pation.pation_sick');
        Route::get('/create', [PationController::class, 'create'])->name('pation.create');
        Route::post('/save', [PationController::class, 'save'])->name('pation.save');
        Route::get('/update/{id}', [PationController::class, 'update'])->name('pation.update');
        Route::get('/delete/{id}', [PationController::class , 'destroy'])->name('pation.delete');
        Route::put('/save_update/{id}', [PationController::class, 'edit']);
    });
