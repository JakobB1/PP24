<?php

class PublishersController extends AuthorizationController
{

    private $viewDir =
    'private' . DIRECTORY_SEPARATOR .
        'publishers' . DIRECTORY_SEPARATOR;

    public function index()
    {
        $publishers = Publishers::read();

        $this->view->render($this->viewDir . 'index', [
            'publishers' => $publishers,
            'css' => '<link rel="stylesheet" href="' . App::config('url') . 'public/css/publishersindex.css">'
        ]);
    }


    public function new()
    {
        $this->view->render($this->viewDir . 'new');
    }

    public function addNew()
    {
        Publishers::create($_POST);
        $this->index();
    }

    public function delete($id)
    {
        Publishers::delete($id);
        $this->index();
    }
}