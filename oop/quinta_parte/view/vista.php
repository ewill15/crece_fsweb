<h1>Mi primer proyecto MVC</h1>
    <table>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>color</th>
                <th>Propietario</th>
            </tr>


            <tr>
                <td> <?php echo $row->marca ?> </td>
                <td> <?php echo $row->modelo ?> </td>
                <td> <?php echo $row->color ?> </td>
                <td> <?php echo $row->propietario ?> </td>
            </tr>

    <table>


    <style>
        th{
            text-align: left;
            width: 10rem;

        }

        td{
            width: 10rem;
        }
    </style>