<?php

class LoginController extends Controller
{
    public function index()
    {
        $this->loginView('Fill in the Email and Password','');
    }

    public function authorize()
    {
        if(!isset($_POST['email']) || !isset($_POST['password'])){
            $this->index();
            return; //short curcuiting
        }

        if(strlen(trim($_POST['email']))===0){
           $this->loginView('Email required','');
           return;
        }

        if(strlen(trim($_POST['password']))===0){
            $this->loginView('Password required',$_POST['email']);
            return;
        }
    }


    private function loginView($message,$email)
    {
        $this->view->render('login',[
            'message'=>$message,
            'email'=>$email
        ]);
    }
}