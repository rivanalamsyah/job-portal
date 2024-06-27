<?php

use Illuminate\Support\Facades\Route;

// STUDENT //

// Main Page
Route::get('/main', function () {
    return view('.student/onboarding_user', [
        "title" => "Onboarding Student"
    ]);
});

// login

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
Route::get('/blog-student', function () {
    return view('.student/blog_user', [
        "title" => "Blog"
    ]);
});

// END STUDENT

// COMPANY //

Route::get('/dashboard-company', function () {
    return view('.dashboard_company.dashboard_company', [
        "title" => "Dashboard Company"
    ]);
});

Route::get('/job-management', function () {
    return view('.dashboard_company.job_management', [
        "title" => "Job Management",
        "h6" => "position"
    ]);
});

Route::get('/edit-job', function () {
    return view('.dashboard_company.edit_job', [
        "title" => "Edit Job"
    ]);
});

Route::get('/job-management-position', function () {
    return view('.dashboard_company.job_management_position', [
        "title" => "Job Management  Position"
    ]);
});

Route::get('/applicant-company', function () {
    return view('.dashboard_company.applicant_company', [
        "title" => "Applicant Company"
    ]);
});

Route::get('/profile-company', function () {
    return view('.dashboard_company.profile_company', [
        "title" => "Profile Company"
    ]);
});

Route::get('/logout-company', function () {
    return view('.dashboard_company.signin_company', [
        "title" => "Log Out"
    ]);
});

Route::get('/signin-company', function () {
    return view('.dashboard_company.signin_company', [
        "title" => "Sign In Company"
    ]);
});

Route::get('/signup-company', function () {
    return view('.dashboard_company.signup_company', [
        "title" => "Sign Up Company"
    ]);
});

Route::get('/new-job', function () {
    return view('.dashboard_company.new_job', [
        "title" => "New Job"
    ]);
});
// END COMPANY //

// ADMIN //

Route::get('/signin-admin', function () {
    return view('.dashboard_admin.signin_admin', [
        "title" => "Sign In Admin"
    ]);
});

Route::get('/signup-admin', function () {
    return view('.dashboard_admin.signup_admin', [
        "title" => "Sign Up Admin"
    ]);
});

Route::get('/dashboard-admin', function () {
    return view('.dashboard_admin.dashboard_admin', [
        "title" => "Dashboard Admin"
    ]);
});

Route::get('/ads-management', function () {
    return view('.dashboard_admin.ads_management', [
        "title" => "Ads Management"
    ]);
});

Route::get('/billing', function () {
    return view('.dashboard_admin.billing', [
        "title" => "Billing"
    ]);
});

Route::get('/packages', function () {
    return view('.dashboard_admin.packages', [
        "title" => "Packages"
    ]);
});

Route::get('/campaign', function () {
    return view('.dashboard_admin.campaign', [
        "title" => "Campaign"
    ]);
});

Route::get('/profile-admin', function () {
    return view('.dashboard_admin.profile_admin', [
        "title" => "Profile Admin"
    ]);
});

Route::get('/maxy-blog', function () {
    return view('.dashboard_admin.maxy_blog', [
        "title" => "Blog"
    ]);
});

Route::get('/new-blog', function () {
    return view('.dashboard_admin.new_blog', [
        "title" => "New Blog"
    ]);
});

Route::get('/edit-blog', function () {
    return view('.dashboard_admin.edit_blog', [
        "title" => "Edit Blog"
    ]);
});

// END ADMIN //




// START JOB PORTAL //

Route::get('/signin-student', function () {
    return view('.job_portal/signin_student', [
        "title" => "Sign In Student"
    ]);
});

// Register
Route::get('/signup-student', function () {
    return view('.job_portal/signup_student', [
        "title" => "Sign Up Student"
    ]);
});

Route::get('/index', function () {
    return view('.job_portal.guest.index', [
        "title" => "Job Portal"
    ]);
});

Route::get('/blog-user', function () {
    return view('.job_portal.guest.blog_user', [
        "title" => "Blog"
    ]);
});

Route::get('/job-details-user', function () {
    return view('.job_portal.guest.job_details_user', [
        "title" => "Job Details"
    ]);
});

Route::get('/job-listing-user', function () {
    return view('.job_portal.guest.job_listing_user', [
        "title" => "Job Listing"
    ]);
});

Route::get('/blog-details-user', function () {
    return view('.job_portal.guest.blog_details_user', [
        "title" => "Blog Details"
    ]);
});


// START DONE LOGIN JOB PORTAL //

Route::get('/main-page', function () {
    return view('.job_portal.auth.main_page', [
        "title" => "Main Page"
    ]);
});

Route::get('/blog-student', function () {
    return view('.job_portal.auth.blog_student', [
        "title" => "Blog Student"
    ]);
});

Route::get('/job-details-student', function () {
    return view('.job_portal.auth.job_details_student', [
        "title" => "Job Details"
    ]);
});

Route::get('/job-listing-student', function () {
    return view('.job_portal.auth.job_listing_student', [
        "title" => "Job Listing"
    ]);
});

Route::get('/blog-details-student', function () {
    return view('.job_portal.auth.blog_details_student', [
        "title" => "Blog Details"
    ]);
});

Route::get('/company-profile-details', function () {
    return view('.job_portal.auth.company_profile_details', [
        "title" => "Company Profile"
    ]);
});

Route::get('/profile-student', function () {
    return view('.job_portal.auth.profile_student', [
        "title" => "Student Profile"
    ]);
});

// END DONE LOGIN JOB PORTAL //

// END JOB PORTAL //