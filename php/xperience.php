<!--Blinter Xperience Core-->
<?php
include "conexion.php";
// Selección del a base de datos a utilizar
$consulta = "SELECT * FROM user";
$resultado = mysqli_query( $con, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$columna = mysqli_fetch_array( $resultado );

//Declaracion de variables:
$Nombre = $columna['firtsname'];
$Apellido = $columna['lastname'];
$username = $columna['username'];
$email = $columna['email'];
$Leadership = $columna['Leadership'];
$Innovation = $columna['Innovation']; 
$Teamwork = $columna['Teamwork'];
$Management = $columna['Management'];
$Design = $columna['Design'];
$Development = $columna['Development'];
$ProblemResolution = $columna['ProblemResolution'];
$Sales = $columna['Sales'];
$Communication = $columna['Communication'];
$Community = $columna['Community'];
$level = $columna['level'];
$experience = $columna['experience'];

//Variables Xperience
$Stats_total = $Leadership+$Innovation+$Teamwork+$Management+$Design+$Development+$ProblemResolution+$Sales+$Communication+$Community;
$Stats_Prom = $Stats_total/10;
/*
//Niveles
Nivel 	Puntos			Nombre
1		0				bit
2		500				Byte
3		1000			Kilo
4		2000			Mega
5		4000			Giga
6		6000			Tera
7		9000			Peta
8		12000			Exa
9		15000			Zetta
10		20000			Yotta
11		30000			Ultra
12		50000			Campeón
13		70000			Oráculo
14		100000			Señor de Guerra
15		200000			Leyenda
*/
if ($experience <= 499)
{
	$idrango=1;
	$rango = 'bit';
}
else{
	if ($experience <= 500) {
		$idrango=2;
		$rango = 'Byte';
	}
	else{
		if ($experience <= 1000) {
			$idrango=3;
			$rango = 'Kilo';
		}
		else{
			if ($experience <= 2000) {
				$idrango = 4;
				$rango = 'Mega';
			}
			else{
				if ($experience <= 4000) {
					$idrango = 5;
					$rango = 'Giga';
				}
				else{
					if ($experience <= 6000) {
						$idrango =6;
						$rango = 'Tera';
					}
					else{
						if ($experience <= 9000) {
							$idrango = 7;
							$rango = 'Peta';
						}
						else{
							if ($experience <= 12000) {
								$idrango = 8;
								$rango = 'Exa';
							}
							else{
								if ($experience <= 15000) {
									$idrango = 9;
									$rango = 'Zetta';
								}
								else{
									if ($experience <= 20000) {
										$idrango = 10;
										$rango = 'Yotta';
									}
									else{
										if ($experience <= 30000) {
											$idrango = 11;
											$rango = 'Ultra';
										}
										else{
											if ($experience <= 50000) {
												$idrango = 12;
												$rango = 'Campeon';
											}
											else{
												if ($experience <= 70000) {
													$idrango = 13;
													$rango = 'Oraculo';
												}
												else{
													if ($experience <= 100000) {
														$idrango = 14;
														$rango = 'Warlord';
													}
													else{
														if ($experience <= 200000) {
															$idrango = 15;
															$rango = 'Leyenda';
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
mysqli_close( $con );
?>