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

    public function delete($id)
    {
        Developers::delete($id);
        header('location:' . App::config('url').'developers/index');
    }
}
