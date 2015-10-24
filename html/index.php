<?php
// CONFIG START
$funkcje=array(
	'uczestnik' => 'green',
	'organizator' => 'navy',
	'microsoft' => 'blue',
	'media' => 'orange',
	'prelegent' => 'red'
);
// CONFIG END

function wyswietlCzlowieka($czlowiek){
	echo "<div class='czlowiek'>";
	echo "<div class='iks'>⊗</div>";
	echo "<div class='tlo $czlowiek[2]'><img src='top.png' class='top' /></div>";
	echo "<div class='funkcja'>$czlowiek[2]</div>";
	echo "<div class='imie'>$czlowiek[0]</div>";
	echo "<div class='nazwisko'>$czlowiek[1]</div>";
	echo "<img src='bottom.png' class='bottom' />";
	echo "</div>";
}

$ludzie = array_map('str_getcsv', file('ludzie.csv'));

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ITAD Badge Generator</title>
<style>
html,body{
    height:297mm;
    width:210mm;
}
.czlowiek{
	position: relative;
	border: 1px dashed black;
	display: inline-block;
	width: 	49%;	/* o tu jest definiowane ile wejdzie na a4 */
	height: 49%;	/* o tu jest definiowane ile wejdzie na a4 */
}
.czlowiek:nth-of-type(2n){
	border-left: none;
}
.czlowiek:nth-of-type(2n+3),.czlowiek:nth-of-type(2n+4){
	/*border-top: none;*//*bo na druku to chcemy duplikaty krawędzi!*/
}
img.top{
	width: 100%;
	height: 60%;
}
img.bottom{
	width: 100%;
	height: 10%;
	bottom: 0px;
	position: absolute;
}
.iks{
	position: absolute;
	top: 0px;
	width: 100%;
	color: white;
	font-weight: 700;
	font-size: 36px;
	text-align: center;
}
.funkcja{
	position: absolute;
	top: 45%;
	width: 100%;
	color: white;
	font-weight: 700;
	font-size: 42px;
}
.imie{
	margin-top: 10px;
	font-size: 42px;
}
.nazwisko{
	font-size: 34px;
}
.funkcja, .imie, .nazwisko{
	text-align: center;
	text-transform: uppercase;
	font-family: Segoe UI,Frutiger,Frutiger Linotype,Dejavu Sans,Helvetica Neue,Arial,sans-serif;
}
<?php  foreach($funkcje as $k=>$v){ echo ".tlo.$k{background-color: $v;}"; } ?>
</style>
</head>
<body>
<?php
foreach($ludzie as $czlowiek){
	wyswietlCzlowieka($czlowiek);
}