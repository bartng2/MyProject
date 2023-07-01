<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Trang chủ
$routes->get('home', 'Home::index', ['as' => 'home']);

//Danh sách sinh viên
$routes->get('st', 'StudentController::list_student', ['as' => 'list_student']);
//tìm kiếm sinh viên
$routes->get('search', 'StudentController::search_student', ['as' => 'search_student']);
//Thêm sinh viên
$routes->get('add_st', 'Action\AddstudentController::add_student', ['as' => 'add_student']);
$routes->post('add_st', 'Action\AddstudentController::store', ['as' => 'store_student']);
//show dữ liệu
$routes->get('see/(:num)', 'Action\AddstudentController::show/$1', ['as' => 'show_studentid']);
//Xóa dữ liệu
$routes->get('delete/(:num)', 'Action\AddstudentController::delete/$1', ['as' => 'delete_student']);
//Cập nhật dữ liệu
$routes->get('edit/(:num)', 'Action\AddstudentController::edit/$1', ['as' => 'edit_student']);
$routes->post('update', 'Action\AddstudentController::update', ['as' => 'update_student']);



//quản lí tài khoản
$routes->get('acc', 'AccController::list_acc', ['as' => 'list_acc']);
//show acc
$routes->get('show/(:num)', 'Action\AddAccController::show/$1', ['as' => 'show_acc']);
//Thêm tài khoản
$routes->get('add_acc', 'Action\AddAccController::add_acc', ['as' => 'add_acc']);
$routes->post('store_acc', 'Action\AddAccController::store', ['as' => 'store_acc']);
$routes->get('delete_acc/(:num)', 'Action\AddAccController::delete/$1', ['as' => 'delete_acc']);
//Sửa tài khoản
$routes->get('edit_acc/(:num)', 'Action\AddAccController::edit/$1', ['as' => 'edit_acc']);
$routes->post('update_acc', 'Action\AddAccController::update', ['as' => 'update_acc']);



//Kiểm soát truy cập
$routes->get('tc', 'AccessController::list_access', ['as' => 'list_access']);


//Thông tin bên cạnh thông tin sinh viên
$routes->get('info', 'inforController::view_contact', ['as' => 'view_contact']);
$routes->get('inf', 'StudentController::index_contact', ['as' => 'index_infor']);
$routes->get('search_contact', 'inforController::search_contact', ['as' => 'search_contact']);
$routes->get('edit_contact/(:num)', 'inforController::edit/$1', ['as' => 'edit_contact']);
$routes->post('update_contact', 'inforController::update', ['as' => 'update_contact']);

//thông tin tốt nghiệp
$routes->get('info_tn', 'TotnghiepController::view_totnghiep', ['as' => 'view_totnghiep']);
$routes->get('search_totnghiep', 'TotnghiepController::search_totnghiep', ['as' => 'search_totnghiep']);
$routes->get('edit_totnghiep/(:num)', 'TotnghiepController::edit/$1', ['as' => 'edit_totnghiep']);
$routes->post('update_totnghiep', 'TotnghiepController::update', ['as' => 'update_totnghiep']);

//Thống kê
$routes->get('tk' ,'Export\RController::index', ['as' => 'tk_view']);
$routes->get('tk_view' ,'Export\RController::list', ['as' => 'list_view']);
$routes->get('tk_show/(:num)', 'Export\RController::show/$1', ['as' => 'show_view']);
$routes->get('search_if', 'Export\ExportController::search_if', ['as' => 'search_if']);

$routes->get('exp', 'Export\ExportController::exportReport', ['as' => 'export_v']);



//Thống kê tốt nghiệp
$routes->get('tn', 'Export\RController::list_tn', ['as' => 'list_tn']);
$routes->get('search_tn', 'Export\ExportController::search_tn', ['as' => 'search_tn']);
$routes->get('exp_2', 'Export\ExportController::exportReport2', ['as' => 'export_v2']);



//thống kê chế độ ưu tiên
$routes->get('ut', 'Export\RController::list_ut', ['as' => 'list_ut']);
$routes->get('search_ut', 'Export\ExportController::search_ut', ['as' => 'search_ut']);
$routes->get('exp_3', 'Export\ExportController::exportReport3', ['as' => 'export_v3']);



//Đăng nhập
$routes->get('/', 'Auth\loginController::index', ['as' => 'login']);
$routes->post('login_post', 'Auth\loginController::login_post', ['as' => 'login_post']);
$routes->get('logout', 'Auth\loginController::logout', ['as' => 'logout']);

//Thông tin ưu tiên
$routes->get('info_ut', 'UuTienController::view_uutien', ['as' => 'view_uutien']);
$routes->get('search_uutien', 'UuTienController::search_uutien', ['as' => 'search_uutien']);
$routes->get('edit_uutien/(:num)', 'UuTienController::edit/$1', ['as' => 'edit_uutien']);
$routes->post('update_uutien', 'UuTienController::update', ['as' => 'update_uutien']);

//Thông tin tifnnh trạng học tập
$routes->get('info_ht', 'HoctapController::view_ht', ['as' => 'view_ht']);
$routes->get('search_ht', 'HoctapController::search_ht', ['as' => 'search_ht']);
$routes->get('edit_ht/(:num)', 'HoctapController::edit/$1', ['as' => 'edit_ht']);
$routes->post('update_ht', 'HoctapController::update', ['as' => 'update_ht']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
