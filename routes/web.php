<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

/*Route::get('/', function () {
    return view('frontend/pages/index');
});*/
Route::get('wel', function () {
    return view('frontend/pages/wel');
});

/*Route::get('myevents', function () {
    return view('user/pages/my_events');
});*/
Route::get('/', 'HomefrontController@index')->name('webfront');

Route::get('/about', function () {
    return view('frontend/pages/about_us');
});

Route::get('/about', function () {
    return view('frontend/pages/about_us');
});

Route::get('/contactinfo', function () {
    return view('frontend/pages/contact-information');
});

/*Route::get('/contact', function () {
    return view('frontend/pages/contact');
});*/

/*Route::get('/members', function () {
    return view('frontend/pages/members');
});*/
Route::get('/onlineregister', function () {
    return view('frontend/pages/new_member_reg');
});
Route::get('/contact', 'ContactfrontController@index')->name('contactfront.show');
Route::post('/contact', 'ContactfrontController@store')->name('contactfront.send');
Route::get('/ourstaff', 'StafffrontController@index')->name('stafffront');
Route::get('/ourstaff/fetch_data', 'StafffrontController@fetch_data')->name('stafffrontdata');
Route::get('/search','SearchController@noResult')->name('searchnoresult');
Route::post('/search','SearchController@SearchAll')->name('searchall');
Route::get('/noresult','SearchController@noResult')->name('noresult');

/*Route::get('/ourstaff', function () {
    return view('frontend/pages/team');
});*/

/*Route::post('/search',function(){
   $q = Input::get('q');



   if ($q!=""){
   	$member = DB::select("select * from users where employee_id  like ? or name  like ? ",['%'.$q.'%','%'.$q.'%']);
    $downloads = DB::select("select * from downloads where name  like ? or description  like ? ",['%'.$q.'%','%'.$q.'%']);

   	if(count($member)>0||count($downloads)){
   		return view('frontend/pages/search')->withDetails($member,$downloads)->withQuery($q);
   }

   	}
   	return view('frontend/pages/no_result');
});*/

Route::get('/sendbirthdaywish', 'BirthdayMessageController@sendBirthdaymessage')->name('birthdaywish');

Route::get('/ournews', 'NewsfrontController@index')->name('news');
Route::get('ournews/{id}','NewsfrontController@show')->name('newsfront.show');
Route::get('/ourallnews/fetch_data', 'NewsfrontController@fetch_data')->name('newsfrontdata');
Route::get('/ourevents', 'EventfrontController@index')->name('events');
Route::get('/downloads', 'DownloadsfrontController@index')->name('downloads');
Route::get('/downloads/fetch_data', 'DownloadsfrontController@fetch_data')->name('downloadfrontdata');
Route::get('/ourmembers', 'MembersfrontController@index')->name('members');
Route::get('/ourmembers/fetch_data', 'MembersfrontController@fetch_data')->name('membersfrontdata');
Route::get('/ouragents', 'AgentsfrontController@index')->name('agents');
Route::get('/ouragents/fetch_data', 'AgentsfrontController@fetch_data')->name('agentsfrontdata');
Route::get('ourevents/{id}','EventfrontController@show')->name('eventfront.show');
Route::get('/ourallevents/fetch_data', 'EventfrontController@fetch_data')->name('eventfrontdata');

Route::get('/selftest','CovidMeterFrontController@createnewinterview')->name('covid19selftest');
Route::post('/selftest','CovidMeterFrontController@store')->name('covid19meterfrontinterviewsave');
Route::post('/selftest/savetest','CovidMeterFrontController@completequestionarie')->name('covid19meterfrontquestionariesave');
//Route::get('/covid19meter/patients/profile/{id}','CovidMeterFrontController@patientinfo')->name('userpatientinfo');
//Route::get('/covid19meter/patients/edit/{id}','CovidMeterFrontController@editpatientinfo')->name('userpatientinfoedit');
//Route::post('/covid19meter/patients/edit/{id}','CovidMeterFrontController@patientupdate')->name('userpatientinfoupdate');
//Route::get('/covid19meter/patients/','CovidMeterFrontController@getcovidpatients')->name('usercovid19patients');
//Route::get('/covid19meter/fetch_data','CovidMeterFrontController@fetch_patient_data');
Route::resource('selftests','CovidMeterFrontController');

//Route::get('/dashboard/admin','AdminController@index')->name('adminhome');
//Route::get('/dashboard/user','HomeController@index')->name('userhome');



//Route::get('/adminlogin','SessionController@create')->name('adminlogin');
//Route::get('/adminsignup','RegisterController@create');


//Route::post('/adminsignup','RegisterController@store');

//Route::get('/adminlogout','SessionController@destroy');

//Route::post('/adminlogin','SessionController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myevents/', 'HomeController@showevents')->name('myevents');
Route::post('/mymessages/', 'HomeController@showmessages')->name('mymessages');


Route::post('/mygroups/', 'HomeController@mygroups')->name('mygroups');

Route::get('user/editprofile','HomeController@showeditprofile')->name('user.editprofile');
Route::post('user/editprofile','HomeController@saveprofile')->name('user.editprofile');
Route::get('user/changepassword','HomeController@changepasswordform')->name('user.changepassword');
Route::get('/covid19meter/dashboard','CovidMeterController@index')->name('covid19meterdashboard');
Route::get('/covid19meter/cratenew','CovidMeterController@createnewinterview')->name('covid19meterinterview');
Route::post('/covid19meter/cratenew','CovidMeterController@store')->name('covid19meterinterviewsave');
Route::post('/covid19meter/savequestionarie','CovidMeterController@completequestionarie')->name('covid19meterquestionariesave');
Route::get('/covid19meter/patients/profile/{id}','CovidMeterController@patientinfo')->name('userpatientinfo');
Route::get('/covid19meter/patients/edit/{id}','CovidMeterController@editpatientinfo')->name('userpatientinfoedit');
Route::post('/covid19meter/patients/edit/{id}','CovidMeterController@patientupdate')->name('userpatientinfoupdate');
Route::get('/covid19meter/patients/','CovidMeterController@getcovidpatients')->name('usercovid19patients');
Route::get('/covid19meter/fetch_data','CovidMeterController@fetch_patient_data');

Route::resource('covid19meters','CovidMeterController');
Route::post('user/changepassword','HomeController@savechangepassword')->name('user.changepassword');

Route::post('/verifymobilebyotp','HomeController@verifymobile')->name('user.verifymobile');
Route::get('user/profile','HomeController@viewprofile')->name('user.profile');

Route::get('admin/editprofile','AdminController@showeditprofile')->name('admin.editprofile');
Route::post('admin/editprofile','AdminController@saveprofile')->name('admin.editprofile');
Route::get('admin/changepassword','AdminController@changepasswordform')->name('admin.changepassword');
Route::post('admin/changepassword','AdminController@savechangepassword')->name('admin.changepassword');
Route::get('admin/profile','AdminController@viewprofile')->name('admin.profile');
Route::get('admin/home','AdminController@index')->name('admin.home');



Route::get('admin/editor','EditorController@index');
Route::get('admin/test','EditorController@test');

//Export Excel Report Section Routes
Route::get('admin/reports/usersbybday','ReportController@getUsersbyBdayForm')->name('reports.exportbybday');
Route::post('admin/reports/usersbybday','ReportController@getUsersbyBday')->name('reports.exportbybday');

Route::get('admin/reports/usersbyworkplace','ReportController@getUsersbyWorkplaceForm')->name('reports.exportbyworkplace');
Route::post('admin/reports/usersbyworkplace','ReportController@getUsersbyWorkplace')->name('reports.exportbyworkplace');

Route::get('admin/reports/usersbydesignation','ReportController@getUsersbyDesignationForm')->name('reports.exportbydesignation');
Route::post('admin/reports/usersbydesignation','ReportController@getUsersbyDesignation')->name('reports.exportbydesignation');

Route::get('admin/reports/usersbygroup','ReportController@getUsersbyGroupForm')->name('reports.exportbygroup');
Route::post('admin/reports/usersbygroup','ReportController@getUsersbyGroup')->name('reports.exportbygroup');


//Pdf Report Section Routes

Route::get('admin/pdfreports/','PdfReportController@getPdfReportsPage')->name('pdfreports.exportpdfs');
Route::get('admin/pdfreports/exportusersbyworkplace','PdfReportController@exportuserbyworkplacepdf')->name('pdfreports.exportworkplacepdf');
Route::get('admin/pdfreports/exportusersbydesignation','PdfReportController@exportuserbydesignationpdf')->name('pdfreports.exportdesignationpdf');
Route::get('admin/pdfreports/exportusersbygroup','PdfReportController@exportuserbygrouppdf')->name('pdfreports.exportgrouppdf');
Route::get('admin/pdfreports/exportuser','PdfReportController@exportuserpdf')->name('pdfreports.exportuserpdf');




//test word route
Route::get('admin/createword','WordReportController@createWordDocx');


//Word Report Section Routes

Route::get('admin/wordreports','WordReportsController@getWordReportsPage')->name('wordreports.exportdocx');;
Route::get('admin/wordreports/exportusersbyworkplace','WordReportsController@exportuserbyworkplaceword')->name('wordreports.exportworkplaceword');
Route::get('admin/wordreports/exportusersbydesignation','WordReportsController@exportuserbydesignationword')->name('wordreports.exportdesignationword');
Route::get('admin/wordreports/exportusersbygroup','WordReportsController@exportuserbygroupword')->name('wordreports.exportgroupword');
Route::get('admin/wordreports/exportuser','WordReportsController@exportuserword')->name('wordreports.exportuserword');


//Membership section routes
Route::delete('deleteall','MembershipController@deleteAll');
Route::delete('deleteallimportedmembers','MembershipController@deleteAllimported');
Route::delete('restoreall','MembershipController@restoreall');
Route::delete('recycleAll','MembershipController@recycleAll');
Route::get('admin/deletedmembers','MembershipController@showTrash')->name('member.deletedmembers');
Route::get('admin/members','MembershipController@index')->name('member.members');
Route::get('admin/members/add','MembershipController@create')->name('member.add');
Route::post('admin/members/add','MembershipController@store')->name('member.add');
Route::get('admin/members/importmemberlist','MembershipController@createimport')->name('member.import');
Route::post('admin/members/importmemberlist','MembershipController@storeimport')->name('member.import');
Route::get('admin/members/edit','MembershipController@edit')->name('member.edit');
Route::get('admin/members/restore/{id}','MembershipController@restore')->name('member.restore');
Route::get('admin/members/recycle/{id}','MembershipController@recycle')->name('member.recycle');
Route::get('admin/members/deleteimported/{id}','MembershipController@destroyimported')->name('member.deleteimported');
Route::get('admin/members/profile/{id}','MembershipController@show')->name('member.show');
Route::post('admin/members/edit/{id}','MembershipController@update')->name('member.edit');
Route::get('admin/members/fetch_data','MembershipController@fetch_data');
Route::get('admin/members/fetch_import_data','MembershipController@fetch_import_data');
Route::get('admin/members/fetch_trash_data','MembershipController@fetch_trash_data');

Route::resource('members','MembershipController');

//online member registration routes
Route::get('/onlineregister','OnlineMemberRegisterController@create')->name('onlinemember.add');
Route::post('/onlineregister','OnlineMemberRegisterController@store')->name('onlinemember.add');

//Province Admin Agent section routes
Route::delete('deleteallprovinceagents','ProvinceAgentAdminController@deleteAll');
Route::delete('deleteallimported','ProvinceAgentAdminController@deleteAllimported');
Route::delete('restoreallprovinceagents','ProvinceAgentAdminController@restoreall');
Route::delete('recycleAllprovinceagents','ProvinceAgentAdminController@recycleAll');
Route::get('admin/deletedprovinceagents','ProvinceAgentAdminController@showTrash')->name('provinceagent.deletedagents');
Route::get('admin/provinceagents','ProvinceAgentAdminController@index')->name('provinceagent.agents');
Route::get('admin/provinceagents/add','ProvinceAgentAdminController@create')->name('provinceagent.add');
Route::post('admin/provinceagents/add','ProvinceAgentAdminController@store')->name('provinceagent.add');
Route::get('admin/provinceagents/edit','ProvinceAgentAdminController@edit')->name('provinceagent.edit');
Route::get('admin/provinceagents/restore/{id}','ProvinceAgentAdminController@restore')->name('provinceagent.restore');
Route::get('admin/provinceagents/recycle/{id}','ProvinceAgentAdminController@recycle')->name('provinceagent.recycle');
Route::get('admin/provinceagents/deleteimported/{id}','ProvinceAgentAdminController@destroyimported')->name('provinceagent.deleteimported');
Route::get('admin/provinceagents/profile/{id}','ProvinceAgentAdminController@show')->name('provinceagent.show');
Route::post('admin/provinceagents/edit/{id}','ProvinceAgentAdminController@update')->name('provinceagent.edit');
Route::get('admin/provinceagents/fetch_data','ProvinceAgentAdminController@fetch_data');
Route::get('admin/provinceagents/fetch_trash_data','ProvinceAgentAdminController@fetch_trash_data');


Route::resource('admin/provinceagentss','ProvinceAgentAdminController');


//District Admin Agent section routes

Route::delete('deletealldistrictagents','DistrictAgentAdminController@deleteAll');
Route::delete('deleteallimported','DistrictAgentAdminController@deleteAllimported');
Route::delete('restorealldistrictagents','DistrictAgentAdminController@restoreall');
Route::delete('recycleAlldistrictagents','DistrictAgentAdminController@recycleAll');
Route::get('admin/deleteddistrictagents','DistrictAgentAdminController@showTrash')->name('districtagent.deletedagents');
Route::get('admin/districtagents','DistrictAgentAdminController@index')->name('districtagent.agents');
Route::get('admin/districtagents/add','DistrictAgentAdminController@create')->name('districtagent.add');
Route::post('admin/districtagents/add','DistrictAgentAdminController@store')->name('districtagent.add');
Route::get('admin/districtagents/edit','DistrictAgentAdminController@edit')->name('districtagent.edit');
Route::get('admin/districtagents/restore/{id}','DistrictAgentAdminController@restore')->name('districtagent.restore');
Route::get('admin/districtagents/recycle/{id}','DistrictAgentAdminController@recycle')->name('districtagent.recycle');
Route::get('admin/districtagents/deleteimported/{id}','DistrictAgentAdminController@destroyimported')->name('districtagent.deleteimported');
Route::get('admin/districtagents/profile/{id}','DistrictAgentAdminController@show')->name('districtagent.show');
Route::post('admin/districtagents/edit/{id}','DistrictAgentAdminController@update')->name('districtagent.edit');
Route::get('admin/districtagents/fetch_data','DistrictAgentAdminController@fetch_data');
Route::get('admin/districtagents/fetch_trash_data','DistrictAgentAdminController@fetch_trash_data');


Route::resource('admin/districtagentss','DistrictAgentAdminController');

//Zonal Admin Agent section routes

Route::delete('deleteallhospitaltypeadmins','ZonalAgentAdminController@deleteAll');
Route::delete('deleteallimported','ZonalAgentAdminController@deleteAllimported');
Route::delete('restoreallhospitaltypeadmins','ZonalAgentAdminController@restoreall');
Route::delete('recycleAllhospitaltypeadmins','ZonalAgentAdminController@recycleAll');
Route::get('admin/deletedhospitaltypeadmins','ZonalAgentAdminController@showTrash')->name('hospitaltypegent.deletedagents');
Route::get('admin/hospitaltypeadmins','ZonalAgentAdminController@index')->name('hospitaltypegent.agents');
Route::get('admin/hospitaltypeadmins/add','ZonalAgentAdminController@create')->name('hospitaltypegent.add');
Route::post('admin/hospitaltypeadmins/add','ZonalAgentAdminController@store')->name('hospitaltypegent.add');
Route::get('admin/hospitaltypeadmins/edit','ZonalAgentAdminController@edit')->name('hospitaltypegent.edit');
Route::get('admin/hospitaltypeadmins/restore/{id}','ZonalAgentAdminController@restore')->name('hospitaltypegent.restore');
Route::get('admin/hospitaltypeadmins/recycle/{id}','ZonalAgentAdminController@recycle')->name('hospitaltypegent.recycle');
Route::get('admin/hospitaltypeadmins/deleteimported/{id}','ZonalAgentAdminController@destroyimported')->name('hospitaltypegent.deleteimported');
Route::get('admin/hospitaltypeadmins/profile/{id}','ZonalAgentAdminController@show')->name('hospitaltypegent.show');
Route::post('admin/hospitaltypeadmins/edit/{id}','ZonalAgentAdminController@update')->name('hospitaltypegent.edit');
Route::get('admin/hospitaltypeadmins/fetch_data','ZonalAgentAdminController@fetch_data');
Route::get('admin/hospitaltypeadmins/fetch_trash_data','ZonalAgentAdminController@fetch_trash_data');


Route::resource('admin/hospitaltypeadminss','ZonalAgentAdminController');


//Divisional Admin Agent section routes

Route::delete('deleteallhospitaladmins','DivisionalAgentAdminController@deleteAll');
Route::delete('deleteallimported','DivisionalAgentAdminController@deleteAllimported');
Route::delete('restoreallhospitaladmins','DivisionalAgentAdminController@restoreall');
Route::delete('recycleAllhospitaladmins','DivisionalAgentAdminController@recycleAll');
Route::get('admin/deletedhospitaladmins','DivisionalAgentAdminController@showTrash')->name('hospitalagent.deletedagents');
Route::get('admin/hospitaladmins','DivisionalAgentAdminController@index')->name('hospitalagent.agents');
Route::get('admin/hospitaladmins/add','DivisionalAgentAdminController@create')->name('hospitalagent.add');
Route::post('admin/hospitaladmins/add','DivisionalAgentAdminController@store')->name('hospitalagent.add');
Route::get('admin/hospitaladmins/edit','DivisionalAgentAdminController@edit')->name('hospitalagent.edit');
Route::get('admin/hospitaladmins/restore/{id}','DivisionalAgentAdminController@restore')->name('hospitalagent.restore');
Route::get('admin/hospitaladmins/recycle/{id}','DivisionalAgentAdminController@recycle')->name('hospitalagent.recycle');
Route::get('admin/hospitaladmins/deleteimported/{id}','DivisionalAgentAdminController@destroyimported')->name('hospitalgent.deleteimported');
Route::get('admin/hospitaladmins/profile/{id}','DivisionalAgentAdminController@show')->name('hospitalagent.show');
Route::post('admin/hospitaladmins/edit/{id}','DivisionalAgentAdminController@update')->name('hospitalagent.edit');
Route::get('admin/hospitaladmins/fetch_data','DivisionalAgentAdminController@fetch_data');
Route::get('admin/hospitaladmins/fetch_trash_data','DivisionalAgentAdminController@fetch_trash_data');
Route::resource('admin/hospitaladminss','DivisionalAgentAdminController');

//School Admin Agent section routes

Route::delete('deletealldepartmentadmins','SchoolAgentAdminController@deleteAll');
Route::delete('deleteallimported','SchoolAgentAdminController@deleteAllimported');
Route::delete('restorealldepartmentadmins','SchoolAgentAdminController@restoreall');
Route::delete('recycleAlldepartmentadmins','SchoolAgentAdminController@recycleAll');
Route::get('admin/deleteddepartmentadmins','SchoolAgentAdminController@showTrash')->name('departmentagent.deletedagents');
Route::get('admin/departmentadmins','SchoolAgentAdminController@index')->name('departmentagent.agents');
Route::get('admin/departmentadmins/add','SchoolAgentAdminController@create')->name('departmentagent.add');
Route::post('admin/departmentadmins/add','SchoolAgentAdminController@store')->name('departmentagent.add');
Route::get('admin/departmentadmins/edit','SchoolAgentAdminController@edit')->name('departmentagent.edit');
Route::get('admin/departmentadmins/restore/{id}','SchoolAgentAdminController@restore')->name('departmentagent.restore');
Route::get('admin/departmentadmins/recycle/{id}','SchoolAgentAdminController@recycle')->name('departmentagent.recycle');
Route::get('admin/departmentadmins/deleteimported/{id}','SchoolAgentAdminController@destroyimported')->name('departmentagent.deleteimported');
Route::get('admin/departmentadmins/profile/{id}','SchoolAgentAdminController@show')->name('departmentagent.show');
Route::post('admin/departmentadmins/edit/{id}','SchoolAgentAdminController@update')->name('departmentagent.edit');
Route::get('admin/departmentadmins/fetch_data','SchoolAgentAdminController@fetch_data');
Route::get('admin/departmentadmins/fetch_trash_data','SchoolAgentAdminController@fetch_trash_data');

Route::resource('admin/departmentadminss','SchoolAgentAdminController');


//Transfer Board Section Routes

Route::get('admin/transfersboard/import','TransferBoardController@createimport')->name('transfer.import');
Route::post('admin/transfersboard/import','TransferBoardController@storeimport')->name('transfer.import');
Route::get('admin/transfersboard/deleteimported/{id}','TransferBoardController@destroyimported')->name('transfer.deleteimported');

Route::get('admin/transfersboard/allrequests','TransferBoardController@allTransferRequests')->name('transfer.allrequests');
Route::get('admin/transfersboard/pendingrequests','TransferBoardController@pendingTransferRequests')->name('transfer.pendingrequests');
Route::get('admin/transfersboard/completedrequests','TransferBoardController@completedTransferRequests')->name('transfer.completedrequests');
Route::get('admin/transfersboard/addnewrequest','TransferBoardController@getaddtransferrequest')->name('transfer.addrequest');
Route::post('admin/transfersboard/addnewrequest','TransferBoardController@addtransferRequest')->name('transfer.addrequest');

Route::get('admin/transfersboard/edittransferrequest/{id}','TransferBoardController@getedittransferrequest')->name('transfer.editrequest');
Route::post('admin/transfersboard/edittransferrequest/{id}','TransferBoardController@edittransferRequest')->name('transfer.editrequest');
Route::get('admin/transfersboard/transferrequestinfo/{id}','TransferBoardController@transferProfile')->name('transfer.requestinfo');


Route::get('admin/transfersboard/transferrequest/{id}','TransferBoardController@transferInfoProfile')->name('transfer.requestcomplete');
Route::post('admin/transfersboard/transferrequest/{id}','TransferBoardController@completeTransferRequest')->name('transfer.requestcomplete');

Route::get('admin/transfersboard/transfercycles','TransferBoardController@allTransferCycles')->name('transfer.allcycles');
Route::get('admin/transfersboard/transfercycleinfo/{id}','TransferBoardController@getCycleInfo')->name('transfer.cycleinfo');
Route::get('admin/transfersboard/transfercycleinfoview/{id}','TransferBoardController@getCycleInfoview')->name('transfer.cycleinfoview');


Route::get('admin/transfersboard/completedtransfercycles','TransferBoardController@completedTransferCycles')->name('transfer.completedcycles');
Route::delete('deletealltransferrequests','TransferBoardController@deleteAllimported');
Route::get('admin/transfersboard/deletetransfercycle/{id}','TransferBoardController@deleteCycle')->name('transfer.deletecycle');
Route::delete('deleteallcycles','TransferBoardController@deleteAllCycles')->name('transfer.deleteAllcycles');

Route::get('admin/transfersboard/exportcyclestoexcel/{id}','TransferBoardController@ExportTransferCycleToExcel')->name('transfer.exportcycleexcel');
Route::get('admin/transfersboard/exportcyclestoword/{id}','TransferBoardController@ExportCyclesToWordDocx')->name('transfer.exportcycleword');
Route::get('admin/transfersboard/exportcyclestopdf/{id}','TransferBoardController@ExportCycleToPDF')->name('transfer.exportcyclepdf');
Route::resource('transfersboard','TransferBoardController');




//Contactbook section routes
Route::delete('deleteallcontacts','ContactsController@deleteAll');
Route::delete('restoreallcontacts','ContactsController@restoreall');
Route::delete('recycleAllcontacts','ContactsController@recycleAll');
Route::get('admin/deletedcontacts','ContactsController@showTrash')->name('contact.deletedcontacts');
Route::get('admin/contacts','ContactsController@index')->name('contact.members');
Route::get('admin/contacts/add','ContactsController@create')->name('contact.add');
Route::post('admin/contacts/add','ContactsController@store')->name('contact.add');
Route::get('admin/contacts/edit','ContactsController@edit')->name('contact.edit');
Route::get('admin/contacts/restore/{id}','ContactsController@restore')->name('contact.restore');
Route::get('admin/contacts/recycle/{id}','ContactsController@recycle')->name('contact.recycle');
Route::get('admin/contacts/profile/{id}','ContactsController@show')->name('contact.show');
Route::post('admin/contacts/edit/{id}','ContactsController@update')->name('contact.edit');
Route::resource('contacts','ContactsController');

//Downloaditems section routes
Route::delete('deletealldownloads','DownloadItemsController@deleteAll');
Route::delete('restorealldownloads','DownloadItemsController@restoreall');
Route::delete('recycleAlldownloads','DownloadItemsController@recycleAll');
Route::get('admin/deleteddownloaditems','DownloadItemsController@showTrash')->name('downloaditems.deleteditems');
Route::get('admin/downloaditems','DownloadItemsController@index')->name('downloaditems.downloads');
Route::get('admin/downloaditems/add','DownloadItemsController@create')->name('downloaditems.add');
Route::post('admin/downloaditems/add','DownloadItemsController@store')->name('downloaditems.add');
Route::get('admin/downloaditems/edit/{id}','DownloadItemsController@edit')->name('downloaditems.edit');
Route::get('admin/downloaditems/restore/{id}','DownloadItemsController@restore')->name('downloaditems.restore');
Route::get('admin/downloaditems/recycle/{id}','DownloadItemsController@recycle')->name('downloaditems.recycle');
Route::get('admin/downloaditems/profile/{id}','DownloadItemsController@show')->name('downloaditems.show');
Route::post('admin/downloaditems/edit/{id}','DownloadItemsController@update')->name('downloaditems.downloadedit');
Route::resource('downloaditems','DownloadItemsController');


//Admin Role Manage section routes
Route::delete('deletealladmins','AdminManagerController@deleteAll');
Route::delete('restorealladmins','AdminManagerController@restoreall');
Route::delete('recycleAlladmins','AdminManagerController@recycleAll');
Route::get('admin/deletedadmins','AdminManagerController@showTrash')->name('manageadmins.deletedadmins');
Route::get('admin/manageadmins','AdminManagerController@index')->name('manageadmins.admins');
//Route::get('admin/downloaditems/add','DownloadItemsController@create')->name('downloaditems.add');
//Route::post('admin/downloaditems/add','DownloadItemsController@store')->name('downloaditems.add');
Route::get('admin/manageadmins/edit/{id}','AdminManagerController@edit')->name('manageadmins.edit');
//Route::get('admin/downloaditems/restore/{id}','DownloadItemsController@restore')->name('downloaditems.restore');
//Route::get('admin/downloaditems/recycle/{id}','DownloadItemsController@recycle')->name('downloaditems.recycle');
//Route::get('admin/downloaditems/profile/{id}','DownloadItemsController@show')->name('downloaditems.show');
Route::post('admin/manageadmins/edit/{id}','AdminManagerController@update')->name('manageadmins.adminedit');
Route::resource('manageadmins','AdminManagerController');

//staff section routes
Route::delete('deleteallstaff','StaffController@deleteAll');
Route::delete('restoreallstaff','StaffController@restoreall');
Route::delete('recycleAllstaff','StaffController@recycleAll');
Route::get('admin/deletedstaff','StaffController@showTrash')->name('staff.deletedstaff');
Route::get('admin/staff','StaffController@index')->name('staff.staffmembers');
Route::get('admin/staff/add','StaffController@create')->name('staff.add');
Route::post('admin/staff/add','StaffController@store')->name('staff.add');
Route::get('admin/staff/edit','StaffController@edit')->name('staff.edit');
Route::get('admin/staff/restore/{id}','StaffController@restore')->name('staff.restore');
Route::get('admin/staff/recycle/{id}','StaffController@recycle')->name('staff.recycle');
Route::post('admin/staff/edit/{id}','StaffController@update')->name('staffs.update');
Route::resource('staff','StaffController');


//events section routes
Route::delete('restoreallevents','EventController@restoreall');
Route::delete('recycleAllevents','EventController@recycleAll');
Route::delete('deleteallevents','EventController@deleteAll');
Route::get('admin/deletedevents','EventController@showTrash')->name('event.deletedevents');
Route::get('admin/events','EventController@index')->name('event.events');
Route::get('admin/events/add','EventController@create')->name('event.add');
Route::post('admin/events/add','EventController@store')->name('event.add');
Route::get('admin/events/restore/{id}','EventController@restore')->name('event.restore');
Route::get('admin/events/recycle/{id}','EventController@recycle')->name('event.recycle');
Route::post('admin/events/show/{id}','EventController@show')->name('event.show');
Route::get('admin/events/edit','EventController@edit')->name('event.edit');
Route::post('admin/events/edit/{id}','EventController@update')->name('event.edit');
Route::get('admin/events/profile/{id}','EventController@show')->name('event.show');
Route::resource('events','EventController');


//news  section routes
Route::delete('restoreallnews','NewsController@restoreall');
Route::delete('recycleAllnews','NewsController@recycleAll');
Route::delete('deleteallnews','NewsController@deleteAll');
Route::get('admin/deletednews','NewsController@showTrash')->name('news.deletednews');
Route::get('admin/news','NewsController@index')->name('news.newses');
Route::get('admin/news/add','NewsController@create')->name('news.add');
Route::post('admin/news/add','NewsController@store')->name('news.add');
Route::post('admin/news/show/{id}','NewsController@show')->name('news.show');
Route::get('admin/news/edit','NewsController@edit')->name('news.edit');
Route::get('admin/news/restore/{id}','NewsController@restore')->name('news.restore');
Route::get('admin/news/recycle/{id}','NewsController@recycle')->name('news.recycle');
//Route::post('news/edit/{id}','NewsController@update')->name('news.edit');
Route::post('admin/news/edit/{id}','NewsController@update')->name('news.newsupdate');
Route::get('admin/news/profile/{id}','NewsController@show')->name('news.show');
Route::resource('news','NewsController');


//Workplace section routes
Route::delete('deleteallworkplace','WorkplaceController@deleteAll');
Route::get('admin/workplaces','WorkplaceController@index')->name('workplace.workplaces');
Route::get('admin/workplaces/add','WorkplaceController@create')->name('workplace.add');
Route::post('admin/workplaces/add','WorkplaceController@store')->name('workplace.add');
Route::get('admin/workplaces/edit','WorkplaceController@edit')->name('workplace.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/workplaces/edit/{id}','WorkplaceController@update')->name('workplace.edit');
Route::resource('workplaces','WorkplaceController');

//Workplace section routes
Route::delete('deletealldepo','DepoController@deleteAll');
Route::get('admin/depos','DepoController@index')->name('depo.depos');
Route::get('admin/depos/add','DepoController@create')->name('depo.add');
Route::post('admin/depos/add','DepoController@store')->name('depo.add');
Route::get('admin/depos/edit','DepoController@edit')->name('depo.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/depos/edit/{id}','DepoController@update')->name('depo.edit');
Route::resource('depos','DepoController');

//province section routes
Route::delete('deleteallprovince','ProvinceController@deleteAll');
Route::get('admin/provinces','ProvinceController@index')->name('province.provinces');
Route::get('admin/provinces/add','ProvinceController@create')->name('province.add');
Route::post('admin/provinces/add','ProvinceController@store')->name('province.add');
Route::get('admin/provinces/edit','ProvinceController@edit')->name('province.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/provinces/edit/{id}','ProvinceController@update')->name('province.edit');
Route::resource('provinces','ProvinceController');

//subject section routes
Route::delete('deleteallhospitaldesignations','SubjectController@deleteAll');
Route::get('admin/hospitaldesignations','SubjectController@index')->name('subject.subjects');
Route::get('admin/hospitaldesignations/add','SubjectController@create')->name('subject.add');
Route::post('admin/hospitaldesignations/add','SubjectController@store')->name('subject.add');
Route::get('admin/hospitaldesignations/edit','SubjectController@edit')->name('subject.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/hospitaldesignations/edit/{id}','SubjectController@update')->name('subject.edit');
Route::resource('hospitaldesignations','SubjectController');

//district section routes
Route::delete('deletealldistrict','DistrictController@deleteAll');
Route::get('admin/districts','DistrictController@index')->name('district.districts');
Route::get('admin/districts/add','DistrictController@create')->name('district.add');
Route::post('admin/districts/add','DistrictController@store')->name('district.add');
Route::get('admin/districts/edit','DistrictController@edit')->name('district.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/districts/edit/{id}','DistrictController@update')->name('district.edit');
Route::resource('districts','DistrictController');


//Hospital Type section routes
Route::delete('deleteallzone','ZoneController@deleteAll');
Route::get('admin/zones','ZoneController@index')->name('zone.zones');
Route::get('admin/zones/add','ZoneController@create')->name('zone.add');
Route::post('admin/zones/add','ZoneController@store')->name('zone.add');
Route::get('admin/zones/edit','ZoneController@edit')->name('zone.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/zones/edit/{id}','ZoneController@update')->name('zone.edit');
Route::resource('zones','ZoneController');


//Hospital section routes
Route::delete('deletealldivision','DivisionController@deleteAll');
Route::get('admin/divisions','DivisionController@index')->name('division.divisions');
Route::get('admin/divisions/add','DivisionController@create')->name('division.add');
Route::post('admin/divisions/add','DivisionController@store')->name('division.add');
Route::get('admin/divisions/edit','DivisionController@edit')->name('division.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/divisions/edit/{id}','DivisionController@update')->name('division.edit');
Route::resource('divisions','DivisionController');

//Department section routes
Route::delete('deletealldepartment','SchoolController@deleteAll');
Route::get('admin/departments','SchoolController@index')->name('school.schools');
Route::get('admin/departments/add','SchoolController@create')->name('school.add');
Route::post('admin/departments/add','SchoolController@store')->name('school.add');
Route::get('admin/departments/edit','SchoolController@edit')->name('school.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/departments/edit/{id}','SchoolController@update')->name('school.edit');
Route::resource('departments','SchoolController');


//Hospital Department section routes
Route::delete('deleteallhospitaldepartment','Divisionagent\DivisionSchoolController@deleteAll');
Route::get('hospitaladmin/departments','Divisionagent\DivisionSchoolController@index')->name('divdepartments');
Route::get('hospitaladmin/departments/add','Divisionagent\DivisionSchoolController@create')->name('divschools.add');
Route::post('hospitaladmin/departments/add','Divisionagent\DivisionSchoolController@store')->name('divschools.add');
Route::get('hospitaladmin/departments/edit','Divisionagent\DivisionSchoolController@edit')->name('divschools.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('hospitaladmin/departments/edit/{id}','Divisionagent\DivisionSchoolController@update')->name('divschools.edit');
Route::resource('hospitaladmin/departmentss','Divisionagent\DivisionSchoolController');



//Designation section routes
Route::delete('deletealldesignation','DesignationsController@deleteAll');
Route::get('admin/designations','DesignationsController@index')->name('designation.designations');
Route::get('admin/designations/add','DesignationsController@create')->name('designation.add');
Route::post('admin/designations/add','DesignationsController@store')->name('designation.add');
Route::get('admin/designations/edit','DesignationsController@edit')->name('designation.edit');
//Route::get('admin/workplaces/profile/{id}','WorkplaceController@show')->name('workplace.show');
Route::post('admin/designations/edit/{id}','DesignationsController@update')->name('designation.edit');
Route::resource('designations','DesignationsController');


//Province Dependent Dropdown Routes

Route::get('/json-districts','CountryController@districts');
Route::get('/json-zones','CountryController@zones');
Route::get('/json-divisions','CountryController@divisions');
Route::get('/json-schools','CountryController@schools');

//Province Front  Dependent Dropdown Routes

Route::get('/json-districts-province','CountryFrontController@districts');
Route::get('/json-zones-province','CountryFrontController@zones');
Route::get('/json-divisions-province','CountryFrontController@divisions');
Route::get('/json-schools-province','CountryFrontController@schools');


//User Section Dependent Dropdown Routes 
Route::get('/json-districts-user','CountryUserController@districts');
Route::get('/json-zones-user','CountryUserController@zones');
Route::get('/json-divisions-user','CountryUserController@divisions');
Route::get('/json-schools-user','CountryUserController@schools');



//Group section routes

Route::delete('restoreallgroups','GroupsController@restoreall');
Route::delete('recycleAllgroups','GroupsController@recycleAll');
Route::delete('deleteallgroups','GroupsController@deleteAll');
Route::get('admin/deletedgroups','GroupsController@showTrash')->name('groups.deletedgroups');
Route::get('admin/groups','GroupsController@index')->name('group.groups');
Route::get('admin/groups/add','GroupsController@create')->name('group.add');
Route::post('admin/groups/add','GroupsController@store')->name('group.add');
Route::get('admin/groups/edit','GroupsController@edit')->name('group.edit');
Route::get('admin/groups/restore/{id}','GroupsController@restore')->name('group.restore');
Route::get('admin/groups/recycle/{id}','GroupsController@recycle')->name('group.recycle');
Route::get('admin/groups/profile/{id}','GroupsController@show')->name('group.show');
Route::post('admin/groups/profile/addmember','GroupsController@savememberingroup')->name('group.addmemberingroup');
Route::post('admin/groups/edit/{id}','GroupsController@update')->name('group.edit');
Route::post('admin/groups/destroymember/','GroupsController@destroymember')->name('group.destroymember');
Route::post('admin/groups/destroymembers/','GroupsController@deleteAllmembers')->name('group.deleteallmembers');
Route::get('admin/groups/addmember/','GroupsController@showaddmemberform')->name('group.addmember');
Route::post('admin/groups/addmember/','GroupsController@savemember')->name('group.addmember');
Route::get('admin/searchmembergroup', ['as'=>'searchmembergroup','uses'=>'SmsController@searchResponse']);
Route::resource('groups','GroupsController');


//Message section routes
//Route::delete('deleteall','SmsController@deleteAll');
Route::get('admin/messages','SmsController@index')->name('message.messages');
Route::get('admin/messages/singlesend','SmsController@createsinglemessage')->name('message.singlesend');
Route::post('admin/messages/singlesend','SmsController@storesinglemessage')->name('message.singlesend');
Route::get('admin/messages/sendall','SmsController@createmultiplemessage')->name('message.multiplesend');
Route::post('admin/messages/sendall','SmsController@storesmultiplemessage')->name('message.multiplesend');

Route::post('admin/messages/sendallprovince','SmsController@storesmultiplemessageprovince')->name('message.multiplesendprovince');
Route::post('admin/messages/sendalldistrict','SmsController@storesmultiplemessagedistrict')->name('message.multiplesenddistrict');
Route::post('admin/messages/sendallzone','SmsController@storesmultiplemessagezones')->name('message.multiplesendzone');
Route::post('admin/messages/sendalldivision','SmsController@storesmultiplemessagedivision')->name('message.multiplesenddivision');
Route::post('admin/messages/sendallschool','SmsController@storesmultiplemessageschool')->name('message.multiplesendschool');


Route::get('admin/messages/sendgroupmessage','SmsController@creategroupmessage')->name('message.groupsend');
Route::post('admin/messages/sendgroupmessage','SmsController@storesgroupmessage')->name('message.groupsend');
Route::get('admin/messages/sendmessageusers','SmsController@createmultiplemessageusers')->name('message.multiplesendusers');
Route::post('admin/messages/sendmessageusers','SmsController@storesmultiplemessageusers')->name('message.multiplesendusers');
//Route::post('admin/messages/send','SmsController@store')->name('message.send');
//Route::get('admin/messages/edit','SmsController@edit')->name('message.edit');
//Route::get('admin/messages/profile/{id}','SmsController@show')->name('message.show');
//Route::post('admin/messages/edit/{id}','SmsController@update')->name('message.edit');
//Route::get('admin/messages/addmember/','SmsController@showaddmemberform')->name('message.addmember');
//Route::post('admin/messages/addmember/','SmsController@savemember')->name('message.addmember');
Route::get('admin/searchmember', ['as'=>'searchmember','uses'=>'SmsController@searchResponse']);
Route::resource('messages','SmsController');









Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/login', 'Admin\LoginController@login');
Route::post('admin/register', 'Admin\RegisterController@register')->name('admin.register');
//Route::post('admin', 'Admin\LoginController@logout');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//Route::post('register','Admin\RegisterController@register');
//Route::get('register','Admin\RegisterController@showRegistrationForm');


//Province Agent Section Routes
Route::get('provinceagent/dashboard','Provinceagent\ProvinceAgentController@index')->name('provinceagentuser.home');



Route::get('provinceagent/hospitaltypeadmins','Provinceagent\ProvinceAgentController@zoneAgents')->name('provinceagentuser.zones');
Route::get('provinceagent/hospitaladmins','Provinceagent\ProvinceAgentController@divisionAgents')->name('provinceagentuser.divisions');
Route::get('provinceagent/hospitaladmins/profile/{id}','Provinceagent\ProvinceAgentController@divisionAgentshow')->name('provinceagentuser.divshow');
Route::get('provinceagent/hospitaltypeadmins/profile/{id}','Provinceagent\ProvinceAgentController@zonalAgentshow')->name('provinceagentuser.zoneshow');
Route::get('provinceagent/members/profile/{id}','Provinceagent\ProvinceAgentController@membershow')->name('provinceagentuser.membershow');

Route::get('provinceagent/departmentadmins/profile/{id}','Provinceagent\ProvinceAgentController@schoolAgentshow')->name('provinceagentuser.schoolshow');
Route::get('provinceagent/departmentadmins','Provinceagent\ProvinceAgentController@schoolAgents')->name('provinceagentuser.schools');
Route::get('provinceagent/hospitaltypeadmins/fetch_data','Provinceagent\ProvinceAgentController@zoneAgentsfetchdata');
Route::get('provinceagent/hospitaladmins/fetch_data','Provinceagent\ProvinceAgentController@divisionAgentsfetchdata');
Route::get('provinceagent/departmentadmins/fetch_data','Provinceagent\ProvinceAgentController@schoolAgentsfetchdata');
Route::get('provinceagent/members/fetch_data','Provinceagent\ProvinceAgentController@memberfetch_data');
Route::get('provinceagent/members','Provinceagent\ProvinceAgentController@getProvinceMembers')->name('provinceagentuser.members');
//District Agent Management Section in Province Agent Section


//District Admin Agent section routes

Route::delete('provinceagent/districagents/deletealldistrictagents','Provinceagent\DistrictAgentAdminController@deleteAll');
Route::delete('provinceagent/districagents/deleteallimported','Provinceagent\DistrictAgentAdminController@deleteAllimported');
Route::delete('provinceagent/districagents/restorealldistrictagents','Provinceagent\DistrictAgentAdminController@restoreall');
Route::delete('provinceagent/districagents/recyclealldistrictagents','Provinceagent\DistrictAgentAdminController@recycleAll');
Route::get('provinceagent/districagents/deleteddistrictagents','Provinceagent\DistrictAgentAdminController@showTrash')->name('provincedistrictagent.deletedagents');
Route::get('provinceagent/districagents','Provinceagent\DistrictAgentAdminController@index')->name('provincedistrictagent.agents');
Route::get('provinceagent/districagents/add','Provinceagent\DistrictAgentAdminController@create')->name('provincedistrictagent.add');
Route::post('provinceagent/districagents/add','Provinceagent\DistrictAgentAdminController@store')->name('provincedistrictagent.add');
Route::get('provinceagent/districagents/edit','Provinceagent\DistrictAgentAdminController@edit')->name('provincedistrictagent.edit');
Route::get('provinceagent/districagents/restore/{id}','Provinceagent\DistrictAgentAdminController@restore')->name('provincedistrictagent.restore');
Route::get('provinceagent/districagents/recycle/{id}','Provinceagent\DistrictAgentAdminController@recycle')->name('provincedistrictagent.recycle');
Route::get('provinceagent/districagents/deleteimported/{id}','Provinceagent\DistrictAgentAdminController@destroyimported')->name('provincedistrictagent.deleteimported');
Route::get('provinceagent/districagents/profile/{id}','Provinceagent\DistrictAgentAdminController@show')->name('provincedistrictagent.show');
Route::post('provinceagent/districagents/edit/{id}','Provinceagent\DistrictAgentAdminController@update')->name('provincedistrictagent.edit');

Route::get('provinceagent/districagents/fetch_data','Provinceagent\DistrictAgentAdminController@fetch_data');


Route::get('provinceagent/districagents/fetch_trash_data','Provinceagent\DistrictAgentAdminController@fetch_trash_data');




Route::resource('provinceagent/districtagents','Provinceagent\DistrictAgentAdminController');

Route::get('provinceagent/editprofile','Provinceagent\ProvinceAgentController@showeditprofile')->name('provinceagentuser.editprofile');
Route::post('provinceagent/editprofile','Provinceagent\ProvinceAgentController@saveprofile')->name('provinceagentuser.editprofile');
Route::get('provinceagent/changepassword','Provinceagent\ProvinceAgentController@changepasswordform')->name('provinceagentuser.changepassword');
Route::post('provinceagent/changepassword','Provinceagent\ProvinceAgentController@savechangepassword')->name('provinceagentuser.changepassword');
Route::get('provinceagent/profile','Provinceagent\ProvinceAgentController@viewprofile')->name('provinceagentuser.profile');







//District Agent Section Routes
Route::get('districtagent/dashboard','Districtagent\DistrictAgentController@index')->name('districtagentuser.home');




Route::get('districtagent/hospitaladmins','Districtagent\DistrictAgentController@divisionAgents')->name('districtagentuser.divisions');
Route::get('districtagent/hospitaladmins/profile/{id}','Districtagent\DistrictAgentController@divisionAgentshow')->name('districtagentuser.divshow');

Route::get('districtagent/members/profile/{id}','Districtagent\DistrictAgentController@membershow')->name('districtagentuser.membershow');

Route::get('districtagent/departmentadmins/profile/{id}','Districtagent\DistrictAgentController@schoolAgentshow')->name('districtagentuser.schoolshow');
Route::get('districtagent/departmentadmins','Districtagent\DistrictAgentController@schoolAgents')->name('districtagentuser.schools');
Route::get('districtagent/hospitaladmins/fetch_data','Districtagent\DistrictAgentController@divisionAgentsfetchdata');
Route::get('districtagent/departmentadmins/fetch_data','Districtagent\DistrictAgentController@schoolAgentsfetchdata');
Route::get('districtagent/members/fetch_data','Districtagent\DistrictAgentController@memberfetch_data');
Route::get('districtagent/members','Districtagent\DistrictAgentController@getProvinceMembers')->name('districtagentuser.members');


//Zonal Agent Management Section in District Agent Section


//District Admin Agent section routes

Route::delete('districtagent/hospitaltypeadmins/deleteallhospitaltypeadmins','Districtagent\ZonalAgentAdminController@deleteAll');
Route::delete('districtagent/hospitaltypeadmins/deleteallimported','Districtagent\ZonalAgentAdminController@deleteAllimported');
Route::delete('districtagent/hospitaltypeadmins/restoreallhospitaltypeadmins','Districtagent\ZonalAgentAdminController@restoreall');
Route::delete('districtagent/hospitaltypeadmins/recycleAllhospitaltypeadmins','Districtagent\ZonalAgentAdminController@recycleAll');
Route::get('districtagent/hospitaltypeadmins/deletedhospitaltypeadmins','Districtagent\ZonalAgentAdminController@showTrash')->name('districtzonalagent.deletedagents');
Route::get('districtagent/hospitaltypeadmins','Districtagent\ZonalAgentAdminController@index')->name('districtzonalagent.agents');
Route::get('districtagent/hospitaltypeadmins/add','Districtagent\ZonalAgentAdminController@create')->name('districtzonalagent.add');
Route::post('districtagent/hospitaltypeadmins/add','Districtagent\ZonalAgentAdminController@store')->name('districtzonalagent.add');
Route::get('districtagent/hospitaltypeadmins/edit','Districtagent\ZonalAgentAdminController@edit')->name('districtzonalagent.edit');
Route::get('districtagent/hospitaltypeadmins/restore/{id}','Districtagent\ZonalAgentAdminController@restore')->name('districtzonalagent.restore');
Route::get('districtagent/hospitaltypeadmins/recycle/{id}','Districtagent\ZonalAgentAdminController@recycle')->name('districtzonalagent.recycle');
Route::get('districtagent/hospitaltypeadmins/deleteimported/{id}','Districtagent\ZonalAgentAdminController@destroyimported')->name('districtzonalagent.deleteimported');
Route::get('districtagent/hospitaltypeadmins/profile/{id}','Districtagent\ZonalAgentAdminController@show')->name('districtzonalagent.show');
Route::post('districtagent/hospitaltypeadmins/edit/{id}','Districtagent\ZonalAgentAdminController@update')->name('districtzonalagent.edit');
Route::get('districtagent/hospitaltypeadmins/fetch_data','Districtagent\ZonalAgentAdminController@fetch_data');
Route::get('districtagent/hospitaltypeadmins/fetch_trash_data','Districtagent\ZonalAgentAdminController@fetch_trash_data')->name('districtzonalagent.deletedagents');

Route::resource('districtagent/hospitaltypeadminss','DistrictAgent\ZonalAgentAdminController');



Route::get('districtagent/editprofile','Districtagent\DistrictAgentController@showeditprofile')->name('districtagentuser.editprofile');
Route::post('districtagent/editprofile','Districtagent\DistrictAgentController@saveprofile')->name('districtagentuser.editprofile');
Route::get('districtagent/changepassword','Districtagent\DistrictAgentController@changepasswordform')->name('districtagentuser.changepassword');
Route::post('districtagent/changepassword','Districtagent\DistrictAgentController@savechangepassword')->name('districtagentuser.changepassword');
Route::get('districtagent/profile','Districtagent\DistrictAgentController@viewprofile')->name('districtagentuser.profile');




//Zonal Agent Section Routes
Route::get('hospitaltypeadmin/dashboard','Zonalagent\ZonalAgentController@index')->name('zonalagentuser.home');







Route::get('hospitaltypeadmin/members/profile/{id}','Zonalagent\ZonalAgentController@membershow')->name('zonalagentuser.membershow');

Route::get('hospitaltypeadmin/departmentadmins/profile/{id}','Zonalagent\ZonalAgentController@schoolAgentshow')->name('zonalagentuser.schoolshow');
Route::get('hospitaltypeadmin/departmentadmins','Zonalagent\ZonalAgentController@schoolAgents')->name('zonalagentuser.schools');
Route::get('hospitaltypeadmin/departmentadmins/fetch_data','Zonalagent\ZonalAgentController@schoolAgentsfetchdata');
Route::get('hospitaltypeadmin/members/fetch_data','Zonalagent\ZonalAgentController@memberfetch_data');
Route::get('hospitaltypeadmin/members','Zonalagent\ZonalAgentController@getProvinceMembers')->name('zonalagentuser.members');


//Zonal Agent Management Section in District Agent Section


//Division Admin Agent section routes

Route::delete('hospitaltypeadmin/hospitaladmins/deleteallzonalagents','Zonalagent\DivisionalAgentAdminController@deleteAll');
Route::delete('hospitaltypeadmin/hospitaladmins/deleteallimported','Zonalagent\DivisionalAgentAdminController@deleteAllimported');
Route::delete('hospitaltypeadmin/hospitaladmins/restoreallzonalagents','Zonalagent\DivisionalAgentAdminController@restoreall');
Route::delete('hospitaltypeadmin/hospitaladmins/recycleallzonalagents','Zonalagent\DivisionalAgentAdminController@recycleAll');
Route::get('hospitaltypeadmin/hospitaladmins/deleteddivisionalagents','Zonalagent\DivisionalAgentAdminController@showTrash')->name('zonaldivisionagent.deletedagents');
Route::get('hospitaltypeadmin/hospitaladmins','Zonalagent\DivisionalAgentAdminController@index')->name('zonaldivisionagent.agents');
Route::get('hospitaltypeadmin/hospitaladmins/add','Zonalagent\DivisionalAgentAdminController@create')->name('zonaldivisionagent.add');
Route::post('hospitaltypeadmin/hospitaladmins/add','Zonalagent\DivisionalAgentAdminController@store')->name('zonaldivisionagent.add');
Route::get('hospitaltypeadmin/hospitaladmins/edit','Zonalagent\DivisionalAgentAdminController@edit')->name('zonaldivisionagent.edit');
Route::get('hospitaltypeadmin/hospitaladmins/restore/{id}','Zonalagent\DivisionalAgentAdminController@restore')->name('zonaldivisionagent.restore');
Route::get('hospitaltypeadmin/hospitaladmins/recycle/{id}','Zonalagent\DivisionalAgentAdminController@recycle')->name('zonaldivisionagent.recycle');
Route::get('hospitaltypeadmin/hospitaladmins/deleteimported/{id}','Zonalagent\DivisionalAgentAdminController@destroyimported')->name('zonaldivisionagent.deleteimported');
Route::get('hospitaltypeadmin/hospitaladmins/profile/{id}','Zonalagent\DivisionalAgentAdminController@show')->name('zonaldivisionagent.show');
Route::post('hospitaltypeadmin/hospitaladmins/edit/{id}','Zonalagent\DivisionalAgentAdminController@update')->name('zonaldivisionagent.edit');
Route::get('hospitaltypeadmin/hospitaladmins/fetch_data','Zonalagent\DivisionalAgentAdminController@fetch_data');
Route::get('hospitaltypeadmin/hospitaladmins/fetch_trash_data','Zonalagent\DivisionalAgentAdminController@fetch_trash_data')->name('zonaldivisionagent.deletedagentsfetch');

Route::resource('hospitaltypeadmin/hospitaladminss','Zonalagent\DivisionalAgentAdminController');



Route::get('hospitaltypeadmin/editprofile','Zonalagent\ZonalAgentController@showeditprofile')->name('zonalagentuser.editprofile');
Route::post('hospitaltypeadmin/editprofile','Zonalagent\ZonalAgentController@saveprofile')->name('zonalagentuser.editprofile');
Route::get('hospitaltypeadmin/changepassword','Zonalagent\ZonalAgentController@changepasswordform')->name('zonalagentuser.changepassword');
Route::post('hospitaltypeadmin/changepassword','Zonalagent\ZonalAgentController@savechangepassword')->name('zonalagentuser.changepassword');
Route::get('hospitaltypeadmin/profile','Zonalagent\ZonalAgentController@viewprofile')->name('zonalagentuser.profile');







//Division  Agent Section Routes
Route::get('hospitaladmin/dashboard','Divisionagent\DivisionAgentController@index')->name('divisionagentuser.home');







Route::get('hospitaladmin/members/profile/{id}','Divisionagent\DivisionAgentController@membershow')->name('divisionagentuser.membershow');
Route::get('hospitaladmin/members/fetch_data','Divisionagent\DivisionAgentController@memberfetch_data');
Route::get('hospitaladmin/members','Divisionagent\DivisionAgentController@getProvinceMembers')->name('divisionagentuser.members');





//School Admin Agent section routes

Route::delete('hospitaladmin/departmentadmins/deleteallschoolagents','Divisionagent\SchoolAgentAdminController@deleteAll');
Route::delete('hospitaladmin/departmentadmins/deleteallimported','Divisionagent\SchoolAgentAdminController@deleteAllimported');
Route::delete('hospitaladmin/departmentadmins/restoreallschoolagents','Divisionagent\SchoolAgentAdminController@restoreall');
Route::delete('hospitaladmin/departmentadmins/recycleallschoolagents','Divisionagent\SchoolAgentAdminController@recycleAll');
Route::get('hospitaladmin/departmentadmins/deletedschoolagents','Divisionagent\SchoolAgentAdminController@showTrash')->name('divisionschoolagent.deletedagents');
Route::get('hospitaladmin/departmentadmins','Divisionagent\SchoolAgentAdminController@index')->name('divisionschoolagent.agents');
Route::get('hospitaladmin/departmentadmins/add','Divisionagent\SchoolAgentAdminController@create')->name('divisionschoolagent.add');
Route::post('hospitaladmin/departmentadmins/add','Divisionagent\SchoolAgentAdminController@store')->name('divisionschoolagent.add');
Route::get('hospitaladmin/departmentadmins/edit','Divisionagent\SchoolAgentAdminController@edit')->name('divisionschoolagent.edit');
Route::get('hospitaladmin/departmentadmins/restore/{id}','Divisionagent\SchoolAgentAdminController@restore')->name('divisionschoolagent.restore');
Route::get('hospitaladmin/departmentadmins/recycle/{id}','Divisionagent\SchoolAgentAdminController@recycle')->name('divisionschoolagent.recycle');
Route::get('hospitaladmin/departmentadmins/deleteimported/{id}','Divisionagent\SchoolAgentAdminController@destroyimported')->name('divisionschoolagent.deleteimported');
Route::get('hospitaladmin/departmentadmins/profile/{id}','Divisionagent\SchoolAgentAdminController@show')->name('divisionschoolagent.show');
Route::post('hospitaladmin/departmentadmins/edit/{id}','Divisionagent\SchoolAgentAdminController@update')->name('divisionschoolagent.edit');
Route::get('hospitaladmin/departmentadmins/fetch_data','Divisionagent\SchoolAgentAdminController@fetch_data');
Route::get('hospitaladmin/departmentadmins/fetch_trash_data','Divisionagent\SchoolAgentAdminController@fetch_trash_data')->name('divisionschoolagent.deletedagentsfetch');

Route::resource('hospitaladmin/schoolagentss','Divisionagent\SchoolAgentAdminController');



Route::get('hospitaladmin/editprofile','Divisionagent\DivisionAgentController@showeditprofile')->name('divisionagentuser.editprofile');
Route::post('hospitaladmin/editprofile','Divisionagent\DivisionAgentController@saveprofile')->name('divisiongentuser.editprofile');
Route::get('hospitaladmin/changepassword','Divisionagent\DivisionAgentController@changepasswordform')->name('divisionagentuser.changepassword');
Route::post('hospitaladmin/changepassword','Divisionagent\DivisionAgentController@savechangepassword')->name('divisionagentuser.changepassword');
Route::get('hospitaladmin/profile','Divisionagent\DivisionAgentController@viewprofile')->name('divisionagentuser.profile');

//covid19meter section hospital admin dashboard
Route::get('hospitaladmin/covid19meter/dashboard','Divisionagent\CovidMeterController@index')->name('hospitaladmincovid19meterdashboard');
Route::get('hospitaladmin/covid19meter/allpatients','Divisionagent\CovidMeterController@getcovidpatients')->name('hospitaladminallassesdpatients');
Route::get('hospitaladmin/covid19meter/patients/profile/{id}','Divisionagent\CovidMeterController@patientinfo')->name('hospitaladminpatientinfo');
Route::get('hospitaladmin/covid19meter/patients/edit/{id}','Divisionagent\CovidMeterController@editpatientinfo')->name('hospitaladminpatientinfoedit');
Route::post('hospitaladmin/covid19meter/patients/edit/{id}','Divisionagent\CovidMeterController@patientupdate')->name('hospitaladminpatientinfoupdate');
Route::get('hospitaladmin/covid19meter/patients/','Divisionagent\CovidMeterController@getcovidpatients')->name('hospitaladmincovid19patients');
Route::get('hospitaladmin/covid19meter/fetch_data','Divisionagent\CovidMeterController@fetch_patient_data');
Route::resource('covid19meters','Divisionagent\CovidMeterController');
Route::resource('hospitaladmin/schoolagentss','Divisionagent\SchoolAgentAdminController');





//Division  Agent Section Routes
Route::get('departmentadmin/dashboard','Schoolagent\SchoolAgentController@index')->name('schoolagentuser.home');













//School Members section routes

Route::delete('departmentadmin/members/deleteallmembers','Schoolagent\MembershipController@deleteAll');
Route::delete('departmentadmin/members/deleteallimported','Schoolagent\MembershipController@deleteAllimported');
Route::delete('departmentadmin/members/restoreallmembers','Schoolagent\MembershipController@restoreall');
Route::delete('departmentadmin/members/recycleallmembers','Schoolagent\MembershipController@recycleAll');
Route::get('departmentadmin/members/deletedmembers','Schoolagent\MembershipController@showTrash')->name('schoolagentmember.deletedmembers');
Route::get('departmentadmin/members','Schoolagent\MembershipController@index')->name('schoolagentmember.members');
Route::get('departmentadmin/members/add','Schoolagent\MembershipController@create')->name('schoolagentmember.add');
Route::post('departmentadmin/members/add','Schoolagent\MembershipController@store')->name('schoolagentmember.add');
Route::get('departmentadmin/members/edit','Schoolagent\MembershipController@edit')->name('schoolagentmember.edit');
Route::get('departmentadmin/members/importmemberlist','Schoolagent\MembershipController@createimport')->name('schoolagentmember.import');
Route::post('departmentadmin/members/importmemberlist','Schoolagent\MembershipController@storeimport')->name('schoolagentmember.import');
Route::get('departmentadmin/members/restore/{id}','Schoolagent\MembershipController@restore')->name('schoolagentmember.restore');
Route::get('departmentadmin/members/recycle/{id}','Schoolagent\MembershipController@recycle')->name('schoolagentmember.recycle');
Route::get('departmentadmin/members/deleteimported/{id}','Schoolagent\MembershipController@destroyimported')->name('schoolagentmember.deleteimported');
Route::get('departmentadmin/members/profile/{id}','Schoolagent\MembershipController@show')->name('schoolagentmember.show');
Route::post('departmentadmin/members/edit/{id}','Schoolagent\MembershipController@update')->name('schoolagentmember.edit');
Route::get('departmentadmin/members/fetch_data','Schoolagent\MembershipController@fetch_data');
Route::get('departmentadmin/members/fetch_import_data','Schoolagent\MembershipController@fetch_import_data');
Route::get('departmentadmin/members/fetch_trash_data','Schoolagent\MembershipController@fetch_trash_data')->name('schoolagentmember.deletedagentsfetch');

//covid19meter section department admin dashboard
Route::get('departmentadmin/covid19meter/dashboard','Schoolagent\CovidMeterController@index')->name('depadmincovid19meterdashboard');
Route::get('departmentadmin/covid19meter/allpatients','Schoolagent\CovidMeterController@getcovidpatients')->name('depadminallassesdpatients');
Route::get('departmentadmin/covid19meter/patients/profile/{id}','Schoolagent\CovidMeterController@patientinfo')->name('depadminpatientinfo');
Route::get('departmentadmin/covid19meter/patients/edit/{id}','Schoolagent\CovidMeterController@editpatientinfo')->name('depadminpatientinfoedit');
Route::post('departmentadmin/covid19meter/patients/edit/{id}','Schoolagent\CovidMeterController@patientupdate')->name('depadminpatientinfoupdate');
Route::get('departmentadmin/covid19meter/patients/','Schoolagent\CovidMeterController@getcovidpatients')->name('depadmincovid19patients');
Route::get('departmentadmin/covid19meter/fetch_data','Schoolagent\CovidMeterController@fetch_patient_data');
Route::resource('covid19meters','Schoolagent\CovidMeterController');

Route::resource('departmentadmin/memberss','Schoolagent\MembershipController');



Route::get('departmentadmin/editprofile','Schoolagent\SchoolAgentController@showeditprofile')->name('schoolagentuser.editprofile');
Route::post('departmentadmin/editprofile','Schoolagent\SchoolAgentController@saveprofile')->name('schoolagentuser.editprofile');
Route::get('departmentadmin/changepassword','Schoolagent\SchoolAgentController@changepasswordform')->name('schoolagentuser.changepassword');
Route::post('departmentadmin/changepassword','Schoolagent\SchoolAgentController@savechangepassword')->name('schoolagentuser.changepassword');
Route::get('departmentadmin/profile','Schoolagent\SchoolAgentController@viewprofile')->name('schoolagentuser.profile');


//covid19application routes

Route::delete('admin/covid19application/deleteallquestions','QuestionController@deleteAll');
//Route::delete('admin/covid19application/deleteallimported','QuestionController@deleteAllimported');
Route::delete('admin/covid19application/restoreallquestions','QuestionController@restoreall');
Route::delete('admin/covid19application/recycleallquestions','QuestionController@recycleAll');
Route::get('admin/covid19application/deletedquestions','QuestionController@showTrash')->name('covid19questions.deletedquestions');
Route::get('admin/covid19application/','QuestionController@index')->name('covid19questions.questions');
Route::get('admin/covid19application/decessions/','QuestionController@decessionindex')->name('covid19questions.decessions');
Route::get('admin/covid19application/add','QuestionController@create')->name('covid19questions.add');
Route::post('admin/covid19application/add','QuestionController@store')->name('covid19questions.add');
Route::get('admin/covid19application/edit','QuestionController@edit')->name('covid19questions.edit');
Route::get('admin/covid19application/decessions/edit/{id}','QuestionController@decessionedit')->name('covid19questions.decessionedit');

Route::get('admin/covid19application/restore/{id}','QuestionController@restore')->name('covid19questions.restore');
Route::get('admin/covid19application/recycle/{id}','QuestionController@recycle')->name('covid19questions.recycle');
//Route::get('admin/covid19application/deleteimported/{id}','QuestionController@destroyimported')->name('covid19questions.deleteimported');
Route::get('admin/covid19application/profile/{id}','QuestionController@show')->name('covid19questions.show');
Route::post('admin/covid19application/edit/{id}','QuestionController@update')->name('covid19questions.edit');
Route::post('admin/covid19application/decessions/edit/{id}','QuestionController@decessionupdate')->name('covid19questions.decessionedit');
Route::get('admin/covid19application/fetch_data','QuestionController@fetch_data');
Route::get('admin/covid19application/fetch_trash_data','QuestionController@fetch_trash_data')->name('covid19questions.deletedquestionsfetch');

Route::resource('covid19applications','QuestionController');
Route::view('Home','frontend.pages.home');
Route::view('About','frontend.pages.about_us');
Route::view('Contact','frontend.pages.contact');