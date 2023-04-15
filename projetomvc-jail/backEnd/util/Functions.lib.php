<?php

function treatCharacter ($q) {
	$q = strtolower($q);
	$q = str_replace('á', 'a', $q);$q = str_replace('Á', 'A', $q);$q = str_replace('â', 'a', $q);$q = str_replace('Â', 'A', $q);
	$q = str_replace('é', 'e', $q);$q = str_replace('É', 'E', $q);$q = str_replace('ê', 'e', $q);$q = str_replace('Ê', 'E', $q);
	$q = str_replace('í', 'i', $q);$q = str_replace('Í', 'I', $q);$q = str_replace('î', 'i', $q);$q = str_replace('Î', 'I', $q);
	$q = str_replace('ó', 'o', $q);$q = str_replace('Ó', 'O', $q);$q = str_replace('ô', 'o', $q);$q = str_replace('Ô', 'O', $q);
	$q = str_replace('ú', 'u', $q);$q = str_replace('Ú', 'U', $q);$q = str_replace('û', 'u', $q);$q = str_replace('Û', 'U', $q);

	$q = str_replace('ç', 'c', $q);$q = str_replace('Ç', 'C', $q);
	$q = str_replace('ã', 'a', $q);$q = str_replace('Ã', 'A', $q);//37 9911 3795
	$q = str_replace('õ', 'o', $q);$q = str_replace('Õ', 'O', $q);
	$q = str_replace('à', 'a', $q);$q = str_replace('À', 'A', $q);
	
	$q = str_replace("'", '', $q);
	$q = str_replace('º', 'o', $q);
	$q = str_replace('°', 'o', $q);
	
	$q = str_replace('§', 'SS', $q);
	$q = str_replace('–', '-', $q);
	$q = str_replace('“', '', $q);
	$q = str_replace('”', '', $q);
	
	$q = strtolower($q);
	return $q;
}

function treatName ($q) {
	$q = str_replace('á', 'a', $q);$q = str_replace('Á', 'A', $q);$q = str_replace('â', 'a', $q);$q = str_replace('Â', 'A', $q);
	$q = str_replace('é', 'e', $q);$q = str_replace('É', 'E', $q);$q = str_replace('ê', 'e', $q);$q = str_replace('Ê', 'E', $q);
	$q = str_replace('í', 'i', $q);$q = str_replace('Í', 'I', $q);$q = str_replace('î', 'i', $q);$q = str_replace('Î', 'I', $q);
	$q = str_replace('ó', 'o', $q);$q = str_replace('Ó', 'O', $q);$q = str_replace('ô', 'o', $q);$q = str_replace('Ô', 'O', $q);
	$q = str_replace('ú', 'u', $q);$q = str_replace('Ú', 'U', $q);$q = str_replace('û', 'u', $q);$q = str_replace('Û', 'U', $q);
	
	$q = str_replace('ã', 'a', $q);$q = str_replace('Ã', 'A', $q);//37 9911 3795
	$q = str_replace('õ', 'o', $q);$q = str_replace('Õ', 'O', $q);
	$q = str_replace('à', 'a', $q);$q = str_replace('À', 'A', $q);
	return $q;
}

function treatDateYMDHMS_HMSDMY ($d) {
	$d = explode(' ', $d);
	$h = explode(':', $d[1]);
	$d = explode('-', $d[0]);
	return $h[0].':'.$h[1].' | '.$d[2].'/'.$d[1].'/'.$d[0];
}

function treatDateYMDHMS_DMYHM ($d) {
	$d = explode(' ', $d);
	$h = explode(':', $d[1]);
	$d = explode('-', $d[0]);
	return $d[2].'/'.$d[1].'/'.$d[0].' | '.$h[0].':'.$h[1];
}

function treatDateYMDHMS_DMY ($d) {
	$d = explode(' ', $d);
	$h = explode(':', $d[1]);
	$d = explode('-', $d[0]);
	return $d[2].'/'.$d[1].'/'.$d[0];
}

function subAccentPerAnsi ($q) {
	$q = str_replace('á', '&aacute;', $q);$q = str_replace('Á', '&Aacute;', $q);$q = str_replace('â', '&acirc;', $q);$q = str_replace('Â', '&Acirc;', $q);
	$q = str_replace('é', '&eacute;', $q);$q = str_replace('É', '&Eacute;', $q);$q = str_replace('ê', '&ecirc;', $q);$q = str_replace('Ê', '&Ecirc;', $q);
	$q = str_replace('í', '&iacute;', $q);$q = str_replace('Í', '&Iacute;', $q);$q = str_replace('î', '&icirc;', $q);$q = str_replace('Î', '&Icirc;', $q);
	$q = str_replace('ó', '&oacute;', $q);$q = str_replace('Ó', '&Oacute;', $q);$q = str_replace('ô', '&ocirc;', $q);$q = str_replace('Ô', '&Ocirc;', $q);
	$q = str_replace('ú', '&uacute;', $q);$q = str_replace('Ú', '&Uacute;', $q);$q = str_replace('û', '&ucirc;', $q);$q = str_replace('Û', '&Ucirc;', $q);
	
	$q = str_replace('ç', '&ccedil;', $q);$q = str_replace('Ç', '&Ccedil;', $q);
	$q = str_replace('ã', '&atilde;', $q);$q = str_replace('Ã', '&Atilde;', $q);//37 9911 3795
	$q = str_replace('õ', '&otilde;', $q);$q = str_replace('Õ', '&Otilde;', $q);
	$q = str_replace('à', '&agrave;', $q);$q = str_replace('À', '&Agrave;', $q);
	$q = str_replace("'", '&#39;', $q);
	$q = str_replace('º', '&#176;', $q);
	$q = str_replace('°', '&deg;', $q);
	$q = str_replace('§', '&sect;', $q);
	$q = str_replace('–', '&#151;', $q);
	$q = str_replace('“', '&quot;', $q);
	
	$q = str_replace('“', '&ldquo;', $q);
	$q = str_replace('”', '&rdquo;', $q);
	
	return $q;
}

function subAnsiPerAccent ($q) {
	$q = str_replace('&aacute;', 'á', $q);$q = str_replace('&Aacute;', 'Á', $q);$q = str_replace('&acirc;', 'â', $q);$q = str_replace('&Acirc;', 'Â', $q);
	$q = str_replace('&eacute;', 'é', $q);$q = str_replace('&Eacute;', 'É', $q);$q = str_replace('&ecirc;', 'ê', $q);$q = str_replace('&Ecirc;', 'Ê', $q);
	$q = str_replace('&iacute;', 'í', $q);$q = str_replace('&Iacute;', 'Í', $q);$q = str_replace('&icirc;', 'î', $q);$q = str_replace('&Icirc;', 'Î', $q);
	$q = str_replace('&oacute;', 'ó', $q);$q = str_replace('&Oacute;', 'Ó', $q);$q = str_replace('&ocirc;', 'ô', $q);$q = str_replace('&Ocirc;', 'Ô', $q);
	$q = str_replace('&uacute;', 'ú', $q);$q = str_replace('&Uacute;', 'Ú', $q);$q = str_replace('&ucirc;', 'û', $q);$q = str_replace('&Ucirc;', 'Û', $q);

	$q = str_replace('&ccedil;', 'ç', $q);$q = str_replace('&Ccedil;', 'Ç', $q);
	$q = str_replace('&atilde;', 'ã', $q);$q = str_replace('&Atilde;', 'Ã', $q);//37 9911 3795
	$q = str_replace('&otilde;', 'õ', $q);$q = str_replace('&Otilde;', 'Õ', $q);
	$q = str_replace('&agrave;', 'à', $q);$q = str_replace('&Agrave;', 'À', $q);
	$q = str_replace('&#39;', "'", $q);
	$q = str_replace('&#176;', 'º', $q);
	$q = str_replace('&deg;', '°', $q);
	$q = str_replace('&sect;', '§', $q);
	$q = str_replace('&#151;', '–', $q);
	$q = str_replace('&quot;', '“', $q);
	$q = str_replace('&ldquo;', '“', $q);
	$q = str_replace('&rdquo;', '”', $q);
	
	return $q;
}

function adjusItemGrid($item, $c) {
	$t_s = 23;
	$l_item = strlen($item);
	$c_item = substr_count($item, ';');
	if ($c_item != 0) for ($i = 0;$c_item > $i; $i++)	$l_item = $l_item-7;

	if ($l_item > $t_s) $c = $c-2;
	if ($l_item <= $t_s) $c = $c-1;

	$v_item = '';
	if ($l_item > $t_s) {
		$ar = split(' ', $item);
		$tmp = '';
		foreach ($ar as $it) {
			if (strlen($tmp.' '.$it) > $t_s) {
				echo $tmp.'<br>';
				$tmp = '';
				$tmp = $it;
			} else {
				$tmp = $tmp.' '.$it;
			}
		}
		echo $tmp.'<br>';
	} else {
		echo $item.'<br>';
	}
	return $c;;
}

/*
function MostreSemanas() {
	$semanas = "DSTQQSS";
	for( $i = 0; $i < 7; $i++ ) {
		echo "<td>".$semanas{$i}."</td>";
	}
}
*/

function GetNumeroDias($mes) {
	$numero_dias = array(
			'01' => 31, '02' => 28, '03' => 31, '04' =>30, '05' => 31, '06' => 30,
			'07' => 31, '08' =>31, '09' => 30, '10' => 31, '11' => 30, '12' => 31
	);
	if (((date('Y') % 4) == 0 and (date('Y') % 100)!=0) or (date('Y') % 400)==0) {
		$numero_dias['02'] = 29;
	}
	return $numero_dias[$mes];
}

function GetNomeMes( $mes ) {
	$meses = array( '01' => "Janeiro", '02' => "Fevereiro", '03' => "Março",
			'04' => "Abril",   '05' => "Maio",      '06' => "Junho",
			'07' => "Julho",   '08' => "Agosto",    '09' => "Setembro",
			'10' => "Outubro", '11' => "Novembro",  '12' => "Dezembro"
	);
	if( $mes >= 01 && $mes <= 12) {
		return $meses[$mes];
	}
	return "Mês deconhecido";	 
}

function MostreCalendario($mes) {
	$numero_dias = GetNumeroDias($mes);
	$nome_mes = GetNomeMes($mes);
	$diacorrente = 0;
	$diasemana = jddayofweek(cal_to_jd(CAL_GREGORIAN, $mes,"01",date('Y')), 0);
	echo "<table border = 0 cellspacing = '0' align = 'center'>";
	echo "<tr>";
	echo "<td colspan = 7><h3>".$nome_mes."</h3></td>";
	echo "</tr>";
	echo "<tr>";
	MostreSemanas();
	echo "</tr>";
	for($linha = 0; $linha < 6; $linha++) {
		echo "<tr>";
		for($coluna = 0; $coluna < 7; $coluna++) {
			echo "<td width = 30 height = 30 ";
			if(($diacorrente == ( date('d') - 1) && date('m') == $mes)) {
				echo " id = 'dia_atual' ";
			} else {
				if(($diacorrente + 1) <= $numero_dias) {
					if($coluna < $diasemana && $linha == 0) {
						echo " id = 'dia_branco' ";
					} else {
						echo " id = 'dia_comum' ";
					}
				} else {
					echo " ";
				}
			}
			echo " align='center' valign='center'>";
			if($diacorrente + 1 <= $numero_dias) {
				if($coluna < $diasemana && $linha == 0) {
					echo " ";
				} else {
					echo "<a href = ".$_SERVER["PHP_SELF"]."?mes=$mes&dia=".($diacorrente+1).">".++$diacorrente . "</a>";
				}
			} else {
				break;
			}
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
 
function MostreCalendarioCompleto() {
	echo "<table align='center'>";
	$cont = 1;
	for($j = 0; $j < 4; $j++)
	{
		echo "<tr>";
		for($i = 0; $i < 3; $i++)
		{
			echo "<td>";
			MostreCalendario(($cont < 10 ) ? "0".$cont : $cont);
			$cont++;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

function nextDay_DMY($d_date) {
	$d_date = explode('/', $d_date);
	return date('d/m/Y', mktime(0, 0, 0, $d_date[1], $d_date[0]+1, $d_date[2]));
}

function nextPast_YMD($d_date) {
	$d_date = explode('-', $d_date);
	return date('Y-m-d', mktime(0, 0, 0, $d_date[1]+1, $d_date[2], $d_date[0]));
}

//	MostreCalendario('05');
//	echo "<br/>"
//	MostreCalendarioCompleto();

function getWeekDay($d_date) {  // Traz o dia da semana para qualquer data informada
	$d_day =  substr($d_date, 0, 2);
	$m_month =  substr($d_date, 3, 2);
	$y_year =  substr($d_date, 6, 9);
	$dayweek = date("w", mktime(0, 0, 0, $m_month, $d_day, $y_year));
	switch($dayweek) {
		case"0": $dayweek = "Domingo"; break;
		case"1": $dayweek = "Segunda"; break;
		case"2": $dayweek = "Ter&ccedil;a"; break;
		case"3": $dayweek = "Quarta"; break;
		case"4": $dayweek = "Quinta"; break;
		case"5": $dayweek = "Sexta"; break;
		case"6": $dayweek = "S&aacute;bado"; break;
	}
	return $dayweek;
}

?>