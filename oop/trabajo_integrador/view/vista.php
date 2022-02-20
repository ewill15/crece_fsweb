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
    <tr>
        <td> <?php echo $row->titulo ?> </td>
        <td> <?php echo $row->descripcion ?> </td>
        <td> <?php echo $row->direccion ?> </td>
        <td> <?php echo $row->celular ?> </td>
        <td> <?php echo $row->latitud ?> </td>
        <td> <?php echo $row->longitud ?> </td>
    </tr>
    <table>


        <style>
            table {
                width: 100%;
            }

            th {
                text-align: left;
                width: 10rem;
            }

            td {
                width: 10rem;
            }
        </style>