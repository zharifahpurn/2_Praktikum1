<?php
$ns1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$ns2 = ["id" => 2, "nim" => "01121", "uts" => 70, "uas" => 50, "tugas" => 68];
$ns3 = ["id" => 3, "nim" => "01130", "uts" => 60, "uas" => 86, "tugas" => 70];
$ns4 = ["id" => 4, "nim" => "01134", "uts" => 90, "uas" => 91, "tugas" => 82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Daftar Nilai Siswa</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="icon" href="icon.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 10px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		padding-bottom: 15px;
		background: #07688A;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 10px 10px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 20px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
        text-align: center;
    }
	table.table tr th:first-child {
		width: 150px;
	}
	table.table tr th:last-child {
		width: 150px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.settings {
        color: #2196F3;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
    .hint-text {
        float: right;
        margin-top: 10px;
        font-size: 13px;
    }
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>
                            <b>
                                Daftar Nilai Siswa
                            </b>
                        </h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            NIM
                        </th>						
                        <th>
                            UTS
                        </th>
                        <th>
                            UAS
                        </th>
                        <th>
                            Tugas
                        </th>
                        <th>
                            Nilai Akhir
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($ar_nilai as $ns){
                        echo "<tr><td>" . $nomor;
                        echo "<td>" . $ns["nim"];
                        echo "<td>" . $ns["uts"];
                        echo "<td>" . $ns["uas"];
                        echo "<td>" . $ns["tugas"];
                        $nilai_akhir = ($ns ["uts"] + $ns ["uas"] + $ns ["tugas"])/3;
                        echo "<td>" . number_format ($nilai_akhir, 2,',','.');
                        echo "<tr/>";
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Author : <b>Zharifah Dzikra Purnomo</b></div>
            </div>
        </div>
    </div>        
</div>     
</body>
</html>