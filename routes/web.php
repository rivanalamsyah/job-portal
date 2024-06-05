<?php

use Illuminate\Support\Facades\Route;

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

// STUDENT //

// Main Page
Route::get('/main', function () {
    return view('.student/onboarding_user', [
        "title" => "Onboarding User"
    ]);
});

// login
Route::get('/login', function () {
    return view('.student/login', [
        "title" => "Login"
    ]);
});

// Register
Route::get('/register', function () {
    return view('.student/register', [
        "title" => "Register"
    ]);
});

// Student Login
Route::get('/student-login', function () {
    return view('.student/student_login', [
        "title" => "Student Login"
    ]);
});

// Portal Category
Route::get('/portal-category', function () {
    return view('.student/portal_category', [
        "title" => "Portal Category"
    ]);
});

// Detail Company
Route::get('/detail-company', function () {
    return view('.student/detail_company', [
        "title" => "Detail Company"
    ]);
});

// Forgot Password
Route::get('/forgot-password', function () {
    return view('.student/forgot_password', [
        "title" => "Forgot Password"
    ]);
});

// Profile Company
Route::get('/profile', function () {
    return view('.student/profile_company', [
        "title" => "Profile Company"
    ]);
});

// Search User
Route::get('/search-user', function () {
    return view('.student/search_user', [
        "title" => "Search User"
    ]);
});

// Dashboard
Route::get('/dashboard-student', function () {
    return view('.student/dashboard_student', [
        "title" => "Dashboard Student"
    ]);
});

// Blog
Route::get('/blog', function () {
    return view('.student/blog_user', [
        "title" => "Blog"
    ]);
});


// END STUDENT

// ADMIN //

// END ADMIN //


// COMPANY //

Route::get('/dashboard-company', function () {
    return view('.dashboard_company.pages.dashboard_company', [
        "title" => "Dashboard Company"
    ]);
});

Route::get('/job-management', function () {
    return view('.dashboard_company.pages.job_management', [
        "title" => "Job Management"
    ]);
});

Route::get('/applicant-company', function () {
    return view('.dashboard_company.pages.applicant_company', [
        "title" => "Applicant Company"
    ]);
});

Route::get('/profile-company', function () {
    return view('.dashboard_company.pages.profile_company', [
        "title" => "Profile Company"
    ]);
});

Route::get('/logout-company', function () {
    return view('.dashboard_company.pages.signin_company', [
        "title" => "Log Out"
    ]);
});

Route::get('/signin-company', function () {
    return view('.dashboard_company.pages.signin_company', [
        "title" => "Sign In"
    ]);
});

Route::get('/signup-company', function () {
    return view('.dashboard_company.pages.signup_company', [
        "title" => "Sign Up"
    ]);
});

Route::get('/new-job', function () {
    return view('.dashboard_company.pages.new_job', [
        "title" => "New Job"
    ]);
});



// END COMPANY //