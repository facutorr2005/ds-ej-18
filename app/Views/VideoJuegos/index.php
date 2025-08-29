<h1> Catálogo de Videojuegos </h1>
<ul>
    <?php foreach ($videoJuegos as $v):?>
        <li>
            <?= $v->Id;?> - <?= $v->Nombre;?> - <?= $v->Desarrollador;?> - <?= $v->AnioLanzamiento;?> - <?= $v->Plataforma;?> - <?= $v->Precio;?> - <?= $v->Clasificacion;?>
        </li>
        <?php endforeach; ?>
</ul>