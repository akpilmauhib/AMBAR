<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 11px;
        }

        th {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 14px;
        }
    </style>
</head>


<body>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Laporan Kondisi Sungai.xls");
    $table = '
    <table border="1">
    <tr>
            <th>No</th>
            <th>Waktu</th>
            <th>Curah Hujan</th>
            <th>Aliran Air</th>
        </tr>';
    $no = 1;
    foreach ($riwayat as $data) {
        $table .= '
         <tr>
                <td>' . $no++ . '</td>
                <td>' . $data->created_at . '</td>
                <td>' . $data->suhu . '</td>
                <td>' . $data->kelembaban . '</td> 
            </tr>';
    }
    $table .= '</table>';
    echo $table;

    ?>
</body>

</html>