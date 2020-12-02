<?php
$serverName = "mssql-15738-0.cloudclusters.net,15746"; //serverName\instanceName
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"proyectolunes", "UID"=>"proyectolunes", "PWD"=>"KB(ooLDTTlULlkzj0");
$con = sqlsrv_connect( $serverName, $connectionInfo);

if($con) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
 }
/*
$sql21 = "exec listarnotasusuario 'ruby@gmail.com'";
	$listarnotas = sqlsrv_query($con, $sql21);

	while ($row21 = sqlsrv_fetch_array($listarnotas, SQLSRV_FETCH_ASSOC)){
	echo $row21['notaid'].", ".$row21['titulo'].", ".$row21['contenido'].", ".$row21['fecha'].", ".$row21['url_imagen'].", ".$row21['documento']."<br />";
	}


$sql22 = "exec listarnotasadmin";
	$listarnotas1 = sqlsrv_query($con, $sql22);

	while ($row22 = sqlsrv_fetch_array($listarnotas1, SQLSRV_FETCH_ASSOC)){
	echo $row22['notaid'].", ".$row22['titulo'].", ".$row22['contenido'].", ".$row22['fecha'].", ".$row22['url_imagen'].", ".$row22['documento']."<br />";
	}

	$sql23 = "exec listargastosusuario'jose@gmail.com'";
	$listargastos = sqlsrv_query($con, $sql23);

	while ($row23 = sqlsrv_fetch_array($listargastos, SQLSRV_FETCH_ASSOC)){
	echo $row23['gastoid'].", ".$row23['descripcion'].", ".$row23['costo'].", ".$row23['documento']."<br />";
	}


$sql5 = "declare @mensajeout varchar(50)
declare @cedula varchar(100)
set @cedula = (select documento_usuario from usuarios where correo='ruby@gmail.com')
exec insertargasto 'para el arriendo', @cedula, 1000, @mensajeout output
select @mensajeout as mensajito";

$insertargasto = sqlsrv_query($con, $sql5);
while ($row5 = sqlsrv_fetch_array($insertargasto, SQLSRV_FETCH_ASSOC)){
	echo $row5['mensajito']."<br />";
}
$sql19 = "declare @mensajeout varchar(100)
exec borrargastos 1, @mensajeout output
select @mensajeout as mensajito";
$borrargastos = sqlsrv_query($con, $sql19);
while ($row19 = sqlsrv_fetch_array($borrargastos, SQLSRV_FETCH_ASSOC)){
	echo $row19['mensajito']."<br />";
}

$sql13 = "declare @mensajeout varchar(50)
declare @cedula varchar(100)
set @cedula = (select documento_usuario from usuarios where correo='ruby@gmail.com')
exec actualizargastos 1, 'para el arriendo de la casa', @cedula, 50001, @mensajeout output
select @mensajeout as mensajito";

$actualizargastos = sqlsrv_query($con, $sql13);
while ($row13 = sqlsrv_fetch_array($actualizargastos, SQLSRV_FETCH_ASSOC)){
	echo $row13['mensajito']."<br />";
}
*/

$sql30 = "exec listargastoespecifico 2";
	$listargastoespecifico = sqlsrv_query($con, $sql30);

	while ($row30 = sqlsrv_fetch_array($listargastoespecifico, SQLSRV_FETCH_ASSOC)){
	echo $row30['gastoid'].", ".$row30['descripcion'].", ".$row30['costo'].", ".$row30['documento']."<br />";
	}
/*
	$sql31 = "declare @mensajeout varchar(50)
declare @cedula varchar(100)
set @cedula = (select documento_usuario from usuarios where correo='ruby@gmail.com')
exec actualizargastos 1, 'para el arriendo de la casa', @cedula, 50001, @mensajeout output
select @mensajeout as mensajito"
$actualizargastos = sqlsrv_query($con, $sql31);
while ($row31 = sqlsrv_fetch_array($actualizargastos, SQLSRV_FETCH_ASSOC)){
	echo $row31['mensajito']."<br />";
}
*/
/*

$sql32 = "declare @mensajeout varchar(100)
DECLARE @date DATETIME, @time DATETIME
declare @cedula varchar(100)
set @cedula = (select documento_usuario from usuarios where correo='ruby@gmail.com')
SET @date='2020-12-10'
SET @time='15:00:11'
SET @date=@date+@time
exec actualizarnotas 1, 'notica de prueba 100', 'notachan para el día 5', @date, 'http://localhost/chafa/conexionchafa%20-%20copia.php',
@cedula, @mensajeout output
select @mensajeout as mensajito";
$actualizarnotas = sqlsrv_query($con, $sql32);
while ($row32 = sqlsrv_fetch_array($actualizarnotas, SQLSRV_FETCH_ASSOC)){
	echo $row32['mensajito']."<br />";
}

$sql33 = " exec listarnotaespecifica 2";
$listarnotaespecifica = sqlsrv_query($con, $sql33);

	while ($row33 = sqlsrv_fetch_array($listarnotaespecifica, SQLSRV_FETCH_ASSOC)){
	echo $row33['notaid'].", ".$row33['titulo'].", ".$row33['contenido'].", ".$row33['fecha'].", ".$row33['url_imagen'].", ".$row33['documento']."<br />";
	}

$sql34 = "declare @mensajeout varchar(100)
exec borrarnotas 1, @mensajeout output
select @mensajeout as mensajito";
$borrarnotas = sqlsrv_query($con, $sql34)

while ($row34 = sqlsrv_fetch_array($borrarnotas, SQLSRV_FETCH_ASSOC)){
	echo $row34['mensajito']."<br />";
}

$sql35 = "exec listartop10 'jose@gmail.com'";

$top10 = sqlsrv_query($con, $sql35);
while ($row35 = sqlsrv_fetch_array($top10, SQLSRV_FETCH_ASSOC)){
	echo $row35['costos'].", ".$row35['gastoid'].", ".$row35['descripcion'].", ".$row35['documento']."<br />";
}

$sql36 = "declare @calculo int
declare @totalgasto int
declare @presupuesto int
exec calcularcosto 'jose@gmail.com', @calculo output, @totalgasto output, @presupuesto output
select @calculo as calculito, @totalgasto as gastos_totales, @presupuesto as presupuesto_del_usuario";
$calcularcosto = sqlsrv_query($con, $sql36);
while ($row36 = sqlsrv_fetch_array($calcularcosto, SQLSRV_FETCH_ASSOC)){
	echo $row36['calculo'].", ".$row36['gastos_totales'].", ".$row36['presupuesto_del_usuario']."<br />";
}
*/

?>