<?php

class Home
{

    public function index()
    {
        $videos = VideosManager::getAll();

        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

}
