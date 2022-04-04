<?php

class LoginController extends Controller
{
    public function index()
    {
        $this->loginView('Fill in the Email and Password','');
    }


    private function loginView($message,$email)
    {
        $this->view->render('login',[
            'message'=>$message,
            'email'=>$email
        ]);
    }
}