<h1>Aplicacion de pedidos de comida (Delivery)</h1>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Direccion</th>
            <th>Celular</th>
            <th>Latitud</th>
            <th>Longitud</th>
        </tr>

        <?php foreach ($datos as $row):?>
        <tr>
            <td> <?php echo $row->titulo ?> </td>
            <td> <?php echo $row->descripcion ?> </td>
            <td> <?php echo $row->direccion ?> </td>
            <td> <?php echo $row->celular ?> </td>
            <td> <?php echo $row->latitud ?> </td>
            <td> <?php echo $row->longitud ?> </td>
        </tr>
        <?php endforeach; ?>
    <table>

    <style>
        th{
            text-align: left;
            width: 50rem;
        }

        td{
            width: 50rem;
        }
    </style>