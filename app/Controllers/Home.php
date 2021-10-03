<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct()
    {
		$this->EmployModel = model('App\Models\EmployModel');
        
    }
    public function index()
    {
        return view('welcome_message');
    }
	public function get_list()
    {		
		$Employs = $this->EmployModel->findAll();		
        return json_encode($Employs); exit;
    }
    public function insert_employ()
    {	
        error_reporting(0);
        $_POST = json_decode(file_get_contents('php://input'), true);
        $data = [
            'Name'       => $_POST['employ']['Name'],
            'date_of_join' => $_POST['employ']['d_o_j'],
            'dob'    => $_POST['employ']['dob'],
            'salary' => $_POST['employ']['Salary'],
            'email' => $_POST['employ']['Email'],
        ];
        if($this->EmployModel->save($data))
            echo 'success';
        else 
            echo 'faild';
		
        //return json_encode($Employs); 
    }
    public function update_employ($id)
    {	
        error_reporting(0);
        $_POST = json_decode(file_get_contents('php://input'), true);
        print_r($_POST);
        $data = [
            'Name'       => $_POST['employ']['Name'],
            'date_of_join' => $_POST['employ']['d_o_j'],
            'dob'    => $_POST['employ']['dob'],
            'salary' => $_POST['employ']['Salary'],
            'email' => $_POST['employ']['Email'],
        ];
        $result = $this->EmployModel->where('id', $id)->set($data)->update();
        print_r( $result);
        if( $result)
            echo 'success';
        else 
            echo 'faild';
		
        //return json_encode($Employs); 
    }
    public function delete_employ($id){
        echo $id;
        if($this->EmployModel->where('id', $id)->delete())
            echo 'success';
        else 
            echo 'faild';
    }

}
