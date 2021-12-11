<?php

require(dirname(__FILE__)).'/../database/db_connection.php';

// user class
class User extends Database{

    public function add_user($name, $email, $password, $contact){
        return $this->run("insert into userregisteration (r_name, r_email, r_password, phone_number) values ('$name', '$email', '$password', '$contact')");
    }

    public function check_email($email){
        return $this->fetch("select * from userregisteration where r_email='$email'");
    }

    public function user_login($email, $password){
        return $this->fetch("select * from userregisteration where r_email='$email' and r_password='$password'");
    }

    public function user_form($name, $investor, $location, $type, $project, $description, $start, $end){
        return $this->run("insert into investment_form (name, investor, location, type, project, description, start_date, end_date) values ('$name', '$investor', '$location', '$type','$project', '$description', '$start', '$end')");
    }

    public function select_all_users(){
        return $this->fetchAll("select * from userregisteration");
    }

    // public function select_investments(){
    //     return $this->fetchAll("select * ");
    // }

    public function edit_investments($id, $user, $investor, $investment_type){
        return $this->run("update investment_form set name='$user', investor='$investor', type='$investment_type' where id");
    }

    public function user_admin_company($company, $location, $number){
        return $this->run("insert into company (name, location, number) values('$company','$location','$number')");
    }

    public function user_admin_investments($investor, $itype){
        return $this->run("insert into investments (investor_type, investment_type) values('$investor','$itype')");
    }

    public function user_admin_project($pname, $description, $image){
        return $this->run("insert into Projects (name, description, image) values('$pname','$description','$image')");
    }


    public function select_submission(){
        return $this->fetchAll("select * from investment_form");
    }

    public function delete_submission($id){
        return $this->run("delete from investment_form where name_id='$id'");
    }

    
    public function select_projects(){
        return $this->fetchAll("select * from Projects");
    }

    
    public function select_one_project($id){
        return $this->fetch("select * from Projects where id='$id'");
    }



    
    public function select_company(){
        return $this->fetchAll("select * from company");
    }

    
    public function select_investment(){
        return $this->fetchAll("select * from investments");
    }

    
    public function track_project($pname, $description, $image, $investor, $itype, $cname, $location, $number){
        return $this->run("insert into tracking (project_name, description, image, investor, investment_type, company_name, location, number) values ('$pname', '$description', '$image', '$investor', '$itype', '$cname', '$location', '$number')");
    }

    public function update_track_project($id, $pname, $description, $image, $investor, $itype, $cname, $location, $number){
        return $this->run("update tracking set project_name = '$pname', description = '$description', image = '$image', investor = '$investor', investment_type = '$itype', company_name = ' $cname', location = '$location', number = '$number' where t_id = '$id'");
    }

    public function select_tracking(){
        return $this->fetchAll("select * from tracking");
    }
    
    public function select_one_tracking($id){
        return $this->fetchAll("select * from tracking where t_id='$id'");
    }

    public function delete_one_track($id){
        return $this->run("delete from tracking where t_id='$id'");
    }

    


}