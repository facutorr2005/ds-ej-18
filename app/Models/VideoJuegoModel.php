<?php
namespace App\Models;

class VideoJuegoModel {

    public $Id;
    public $Nombre;
    public $Desarrollador;
    public $AnioLanzamiento;
    public $Plataforma;
    public $Precio;
    public $Clasificacion;

    public function obtenerTodos() {
        $v1 = new VideoJuegoModel;
        $v1 -> Id = 1;
        $v1 -> Nombre = 'Age Of Empires II';
        $v1 -> Desarrollador = 'Ensemble Studios';
        $v1 -> AnioLanzamiento = 1999;
        $v1 -> Plataforma = 'PC / PS2 / XBOX ONE';
        $v1 -> Precio = '50 Usd';
        $v1 -> Clasificacion = 'T';

        $v2 = new VideoJuegoModel;
        $v2 -> Id = 2;
        $v2 -> Nombre = 'Counter Strike 1.6';
        $v2 -> Desarrollador = 'Valve Corporation';
        $v2 -> AnioLanzamiento = 2000;
        $v2 -> Plataforma = 'PC';
        $v2 -> Precio = '10 Usd';
        $v2 -> Clasificacion = 'M';

        $v3 = new VideoJuegoModel;
        $v3 -> Id = 3;
        $v3 -> Nombre = 'Minecraft';
        $v3 -> Desarrollador = 'Mojang';
        $v3 -> AnioLanzamiento = 2011;
        $v3 -> Plataforma = 'PC / PS5 / XBOX SERIES X';
        $v3 -> Precio = '30 Usd';
        $v3 -> Clasificacion = 'E10+';

        $v4 = new VideoJuegoModel;
        $v4 -> Id = 4;
        $v4 -> Nombre = 'GTA San Andreas';
        $v4 -> Desarrollador = 'Rockstar North';
        $v4 -> AnioLanzamiento = 2004;
        $v4 -> Plataforma = 'PC / PS2 / XBOX ONE';
        $v4 -> Precio = '50 Usd';
        $v4 -> Clasificacion = 'M';

        $vJuegos = [$v1, $v2, $v3, $v4];
        return $vJuegos;
    }
}