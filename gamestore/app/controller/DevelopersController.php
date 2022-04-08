<?php

class DevelopersController extends AuthorizationController
{

    private $viewDir =
    'private' . DIRECTORY_SEPARATOR .
        'developers' . DIRECTORY_SEPARATOR;

    public function index()
    {
        $developers = Developers::read();

        $this->view->render($this->viewDir . 'index', [
            'developers' => $developers,
            'css' => '<link rel="stylesheet" href="' . App::config('url') . 'public/css/developersindex.css">'
        ]);
    }


    public function new()
    {
        $this->view->render($this->viewDir . 'new');
    }

    public function addNew()
    {
        Developers::create($_POST);
        $this->index();
    }

    public function delete($id)
    {
        Developers::delete($id);
        $this->index();
    }
}
