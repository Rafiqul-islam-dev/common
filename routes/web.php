<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'Fontend\aboutController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('users')->group(function () {
    Route::get('/view', 'Backend\usersController@view')->name('users.view');
    Route::post('/store', 'Backend\usersController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\usersController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\usersController@update')->name('users.update');
    Route::get('/delet/{id}', 'Backend\usersController@delet')->name('users.delet');
});


Route::prefix('menu')->group(function () {
    Route::get('/view', 'Backend\menuController@view')->name('menu.view');
    Route::post('/store', 'Backend\menuController@store')->name('menu.store');
    Route::get('/edit/{id}', 'Backend\menuController@edit')->name('menu.edit');
    Route::post('/update/{id}', 'Backend\menuController@update')->name('menu.update');
    Route::get('/delet/{id}', 'Backend\menuController@delet')->name('menu.delet');
});



//slider part
Route::prefix('slider')->group(function () {
    Route::get('/view', 'Backend\sliderController@sliderView')->name('slider.view');
    Route::post('/store', 'Backend\sliderController@sliderStore')->name('slider.store');
    Route::get('/edit/{id}', 'Backend\sliderController@edit')->name('slider.edit');
    Route::post('/update/{id}', 'Backend\sliderController@update')->name('slider.update');
    Route::get('/delet/{id}', 'Backend\sliderController@delet')->name('slider.delet');
});

//Notice Part

Route::prefix('notice')->group(function () {
    Route::get('/view', 'Backend\noticeController@view')->name('notice.view');
    Route::post('/store', 'Backend\noticeController@store')->name('notice.store');
    Route::get('/edit/{id}', 'Backend\noticeController@edit')->name('notice.edit');
    Route::post('/update/{id}', 'Backend\noticeController@update')->name('notice.update');
    Route::get('/delet/{id}', 'Backend\noticeController@delet')->name('notice.delet');
});


//Album Part
Route::prefix('album')->group(function () {
    Route::get('/view', 'Backend\albumController@albumView')->name('album.view');
    Route::post('/store', 'Backend\albumController@albumStore')->name('album.store');
    Route::get('/edit/{id}', 'Backend\albumController@albumedit')->name('album.edit');
    Route::post('/update/{id}', 'Backend\albumController@albumupdate')->name('album.update');
    Route::get('/delet/{id}', 'Backend\albumController@albumdelet')->name('album.delet');
});

//Gallary Part
Route::prefix('videoGallary')->group(function () {
    Route::get('/view', 'Backend\videoController@videoGallaryView')->name('videoGallary.view');
    Route::post('/store', 'Backend\videoController@videoGallaryStore')->name('videoGallary.store');
    Route::get('/edit/{id}', 'Backend\videoController@videoGallaryedit')->name('videoGallary.edit');
    Route::post('/update/{id}', 'Backend\videoController@videoGallaryupdate')->name('videoGallary.update');
    Route::get('/delet/{id}', 'Backend\videoController@videoGallarydelet')->name('videoGallary.delet');
});
//Video Gallary Part
Route::prefix('gallary')->group(function () {
    Route::get('/view', 'Backend\gallaryController@gallaryView')->name('gallary.view');
    Route::post('/store', 'Backend\gallaryController@gallaryStore')->name('gallary.store');
    Route::get('/edit/{id}', 'Backend\gallaryController@agallaryedit')->name('gallary.edit');
    Route::post('/update/{id}', 'Backend\gallaryController@gallaryupdate')->name('gallary.update');
    Route::get('/delet/{id}', 'Backend\gallaryController@gallarydelet')->name('gallary.delet');
});

//branche Part
Route::prefix('branche')->group(function () {
    Route::get('/view', 'Backend\branchController@brancheView')->name('branche.view');
    Route::post('/store', 'Backend\branchController@brancheStore')->name('branche.store');
    Route::get('/edit/{id}', 'Backend\branchController@brancheedit')->name('branche.edit');
    Route::post('/update/{id}', 'Backend\branchController@brancheupdate')->name('branche.update');
    Route::get('/delet/{id}', 'Backend\branchController@branchedelet')->name('branche.delet');
});

//Student Corner
Route::prefix('studentCorner')->group(function () {
    Route::get('/view', 'Backend\studentCornerController@studentCornerView')->name('studentCorner.view');
    Route::post('/store', 'Backend\studentCornerController@studentCornerStore')->name('studentCorner.store');
    Route::get('/edit/{id}', 'Backend\studentCornerController@studentCorneredit')->name('studentCorner.edit');
    Route::post('/update/{id}', 'Backend\studentCornerController@studentCornerupdate')->name('studentCorner.update');
    Route::get('/delet/{id}', 'Backend\studentCornerController@studentCornerdelet')->name('studentCorner.delet');
});

//impLink
Route::prefix('impLink')->group(function () {
    Route::get('/view', 'Backend\importantController@impLinkView')->name('impLink.view');
    Route::post('/store', 'Backend\importantController@impLinkStore')->name('impLink.store');
    Route::get('/edit/{id}', 'Backend\importantController@impLinkedit')->name('impLink.edit');
    Route::post('/update/{id}', 'Backend\importantController@impLinkupdate')->name('impLink.update');
    Route::get('/delet/{id}', 'Backend\importantController@impLinkdelet')->name('impLink.delet');
});

//Teacher
Route::prefix('teacher')->group(function () {
    Route::get('/view', 'Backend\teacherController@teacherView')->name('teacher.view');
    Route::post('/store', 'Backend\teacherController@teacherStore')->name('teacher.store');
    Route::get('/edit/{id}', 'Backend\teacherController@teacheredit')->name('teacher.edit');
    Route::post('/update/{id}', 'Backend\teacherController@teacherupdate')->name('teacher.update');
    Route::get('/delet/{id}', 'Backend\teacherController@teacherdelet')->name('teacher.delet');
});

Route::prefix('governingBody')->group(function () {
    Route::get('/view', 'Backend\governingBodyController@governingBodyView')->name('governingBody.view');
    Route::post('/store', 'Backend\governingBodyController@governingBodyStore')->name('governingBody.store');
    Route::get('/edit/{id}', 'Backend\governingBodyController@governingBodyedit')->name('governingBody.edit');
    Route::post('/update/{id}', 'Backend\governingBodyController@governingBodyupdate')->name('governingBody.update');
    Route::get('/delet/{id}', 'Backend\governingBodyController@governingBodydelet')->name('governingBody.delet');
});

//NewsEvent Part
Route::prefix('newsEvent')->group(function () {
    Route::get('/view', 'Backend\newsEventController@newsEventView')->name('newsEvent.view');
    Route::post('/store', 'Backend\newsEventController@newsEventStore')->name('newsEvent.store');
    Route::get('/edit/{id}', 'Backend\newsEventController@newsEventedit')->name('newsEvent.edit');
    Route::post('/update/{id}', 'Backend\newsEventController@newsEventupdate')->name('newsEvent.update');
    Route::get('/delet/{id}', 'Backend\newsEventController@newsEventdelet')->name('newsEvent.delet');
});

//Institituion Part
Route::prefix('institution')->group(function () {
    Route::get('/view', 'Backend\institutionController@institutionView')->name('institution.view');
    Route::post('/store', 'Backend\institutionController@institutionStore')->name('institution.store');
    Route::get('/edit/{id}', 'Backend\institutionController@institutionEdit')->name('institution.edit');
    Route::post('/update/{id}', 'Backend\institutionController@institutionUpdate')->name('institution.update');
    Route::get('/delet/{id}', 'Backend\institutionController@institutionDelet')->name('institution.delet');
});

//Social Part
Route::prefix('social')->group(function () {
    Route::get('/view', 'Backend\socialActivityController@socialView')->name('social.view');
    Route::post('/store', 'Backend\socialActivityController@socialStore')->name('social.store');
    Route::get('/edit/{id}', 'Backend\socialActivityController@socialEdit')->name('social.edit');
    Route::post('/update/{id}', 'Backend\socialActivityController@socialUpdate')->name('social.update');
    Route::get('/delet/{id}', 'Backend\socialActivityController@socialDelet')->name('social.delet');
});

//Class Routine

Route::prefix('classRoutine')->group(function () {
    Route::get('/view/{id}', 'Backend\classRoutineController@classRoutineView')->name('classRoutine.view');
    Route::post('/store', 'Backend\classRoutineController@classRoutineStore')->name('classRoutine.store');
    Route::get('/edit/{id}', 'Backend\classRoutineController@classRoutineEdit')->name('classRoutine.edit');
    Route::post('/update/{id}', 'Backend\classRoutineController@classRoutineUpdate')->name('classRoutine.update');
    Route::get('/delet/{id}', 'Backend\classRoutineController@classRoutineDelet')->name('classRoutine.delet');
});

//All Page

Route::prefix('page')->group(function () {
    Route::get('/view', 'Backend\pageController@pageView')->name('page.view');
    Route::post('/store', 'Backend\pageController@pageStore')->name('page.store');
    Route::get('/edit/{id}', 'Backend\pageController@pageEdit')->name('page.edit');
    Route::post('/update/{id}', 'Backend\pageController@pageUpdate')->name('page.update');
    Route::get('/delet/{id}', 'Backend\pageController@pageDelet')->name('page.delet');
});





Route::get('/branchDetails/{id}', 'Fontend\aboutController@branchDetails');


Route::get('/mainPatron', 'Fontend\aboutController@mainPatron');
Route::get('/chairmanspeech', 'Fontend\aboutController@chairmanspeech');
Route::get('/principlespeech', 'Fontend\aboutController@principlespeech');
Route::get('/history', 'Fontend\aboutController@history');
Route::get('/missionVission', 'Fontend\aboutController@missionVission');
Route::get('/governingbody', 'Fontend\aboutController@governingbody');
Route::get('/teacherInformation', 'Fontend\aboutController@teacherInformation');
Route::get('/youtube', 'Fontend\aboutController@youtube');


Route::get('/dresscode', 'Fontend\academicController@dresscode');
Route::get('/lessonplan', 'Fontend\academicController@lessonplan');
Route::get('/routine', 'Fontend\academicController@routine');
Route::get('/syllabus', 'Fontend\academicController@syllabus');
Route::get('/extracurricular', 'Fontend\academicController@extracurricular');
Route::get('/syllabusView/{id}', 'Fontend\academicController@syllabusView');
Route::get('/routineView/{id}', 'Fontend\academicController@routineView');


Route::get('/notice', 'Fontend\informationController@notice');
Route::get('/facilities', 'Fontend\informationController@facilities');
Route::get('/ictLab', 'Fontend\informationController@ictLab');

Route::get('/photoGallary', 'Fontend\gallaryController@photoGallary');
Route::get('/ViewGallary/{id}', 'Fontend\gallaryController@ViewGallary');
Route::get('/videoGallary', 'Fontend\gallaryController@videoGallary');



Route::get('/apply', 'Fontend\admissionController@apply');
Route::get('/fastFact', 'Fontend\admissionController@fastFact');
Route::get('/feespayment', 'Fontend\admissionController@feespayment');
Route::get('/scholarship', 'Fontend\admissionController@scholarship');
Route::get('/transfer', 'Fontend\admissionController@transfer');

Route::get('/contactUs', 'Fontend\admissionController@contactUs');

//News Event Details

Route::get('/newsEventView/{id}', 'Fontend\aboutController@detailsEvent');


//calss wise Routine

Route::prefix('onlineExam')->group(function () {
    Route::get('/view', 'Backend\onlineexamController@onlineExamView')->name('onlineExam.view');
    Route::post('/store', 'Backend\onlineexamController@onlineExamStore')->name('onlineExam.store');
    Route::get('/edit/{id}', 'Backend\onlineexamController@edit')->name('onlineExam.edit');
    Route::post('/update/{id}', 'Backend\onlineexamController@update')->name('onlineExam.update');
    Route::get('/delet/{id}', 'Backend\onlineexamController@delet')->name('onlineExam.delet');
});

Route::prefix('onlineclass')->group(function () {
    Route::get('/view/{id}', 'Backend\onlineexamController@cliassView')->name('onlineclass.view');
    Route::get('/delet/{id}', 'Backend\onlineexamController@subjectDelet')->name('onlineclass.delet');
});
//Online class
Route::post('/onlineStore', 'Backend\onlineexamController@classSubStore');

//OnlineClass

Route::get('/onlineExamShedule', 'Backend\onlineexamController@examFontend');
Route::get('/banglaversion/{id}', 'Backend\onlineexamController@examFontendShedule');
