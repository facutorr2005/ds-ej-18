<?php
namespace App\Controllers;
use App\Models\VideoJuegoModel;

class VideoJuegosController {
    private $model;

    public function __construct() {
        $this->model = new VideoJuegoModel();
    }

    public function index() {
        $videoJuegos = $this->model->obtenerTodos();
        $title = 'Catálogo de Videojuegos';
        $css_specific = 'videojuego';
        $content = '../app/Views/VideoJuegos/index.php';
        require '../app/Views/layout.php';
    }
}