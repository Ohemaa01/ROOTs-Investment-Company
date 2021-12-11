<?php

require(dirname(__FILE__)).'/../models/user_class.php';

//add user controller
function add_user_controller($name, $email, $password, $contact){
    // create an instance of the user class
    $user = new User();
    // return query
    return $user->add_user($name, $email, $password, $contact);
}

// chaeck email duplicates in database
function check_email_controller($email){
    // create an instance of the user class
    $user = new User();
    // return query
    return $user->check_email($email);
}

//user login controller
function user_login_controller($email, $password){
    // create an instance of the user class
    $user = new User();
    // return query
    return $user->user_login($email, $password);
}

//user investment form controller
function user_form_controller($name, $investor, $location, $type, $project, $description, $start, $end){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->user_form($name, $investor, $location, $type, $project, $description, $start, $end);
}

function select_all_users_controller(){
    // create an instance of the user class
    $user = new User();
    // return query
    return $user->select_all_users();
}

function user_admin_company_controller($company, $location, $number){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->user_admin_company($company, $location, $number);
}

function user_admin_investments_controller($investor, $itype){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->user_admin_investments($investor, $itype);
}

function user_admin_project_controller($pname, $description, $image){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->user_admin_project($pname, $description, $image);
}

function delete_submission_controller($id){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->delete_submission($id);
}

function select_projects_controller(){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->select_projects();
}

function select_one_project_controller($id){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->select_one_project($id);
}

function select_company_controller(){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->select_company();
}

function select_investments_controller(){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->select_investment();
}

//user track project controller
function track_project_controller($pname, $description, $image, $investor, $itype, $cname, $location, $number){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->track_project($pname, $description, $image, $investor, $itype, $cname, $location, $number);
}
function update_track_project_controller($id, $pname, $description, $image, $investor, $itype, $cname, $location, $number){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->update_track_project($id, $pname, $description, $image, $investor, $itype, $cname, $location, $number);
}

function select_track_project_controller(){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->select_tracking();
}

function select_one_track_project_controller($id){
    //create an instance of the user class
    $user = new User();
    //return query
    return $user->select_one_tracking($id);
}

function delete_one_track($id){
    //create an instance of the user class
    $user = new User();
    //return querys
    return $user->delete_one_track($id);
}

function select_submission_controller(){
    //create an instance of the user class
    $user = new User();
    //return querys
    return $user->select_submission();
}


