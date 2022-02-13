<style>
    table {
        width: 100%;
    }

    th {
        text-align: left;
        width: 10rem;
        text-transform: capitalize;
    }

    td {
        width: 10rem;
    }
</style>

<h1>Mi primer proyecto MVC</h1>
<table>
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>color</th>
            <th>Propietario</th>
        </tr>
    </thead>
    <tbody>

    </tbody>

    <?php foreach ($rowset as $row) : ?>
        <tr>
            <td> <?php echo $row->marca ?> </td>
            <td> <?php echo $row->modelo ?> </td>
            <td> <?php echo $row->color ?> </td>
            <td> <?php echo $row->propietario ?> </td>
        </tr>
    <?php endforeach; ?>
</table>