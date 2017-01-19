<?php
	include('Controller.php');

	class StatController extends Controller{

		public function index(){
			$new = new Database();
			$new->table='mecz_statystyki';
			include('statystyki/statystykii.php');
		}
		public function tabela(){
			$db = new Database();
			$pokaz = $db->zap_get('SELECT * FROM mecz_statystyki st JOIN zawodnicy stat ON ( st.id_zawodnika = stat.id ) ');
                 

			$tabela = [];

			foreach($pokaz as $pok)
			{
				
				if(array_key_exists($pok['id_zawodnika'], $tabela))
				{
					$min = (int)explode(':', $pok['MIN'])[0]*60;
					$sek = (int)explode(':', $pok['MIN'])[1];

					$suma = ceil(($min + $sek)/60);

					$ilosc_meczow = $tabela[$pok['id_zawodnika']]['ilosc_meczow'] += 1;
					$tabela[$pok['id_zawodnika']] = [
						'imie' => $pok['imie'],
						'nazwisko' => $pok['nazwisko'],
						'punkty' => ($tabela[$pok['id_zawodnika']]['punkty'] += $pok['PTS']),
						'asysty' => ($tabela[$pok['id_zawodnika']]['asysty'] += $pok['AST']),
						'zbiorki' => ($tabela[$pok['id_zawodnika']]['zbiorki'] += $pok['REB']),
						'odebrania_pilki' => ($tabela[$pok['id_zawodnika']]['odebrania_pilki'] += $pok['STL']),
						'bloki' => ($tabela[$pok['id_zawodnika']]['bloki'] += $pok['BLK']),
						'faule' => ($tabela[$pok['id_zawodnika']]['faule'] += $pok['F']),
						'ilosc_minut' => $tabela[$pok['id_zawodnika']]['ilosc_minut'] += $suma ,
						'ilosc_meczow' => $ilosc_meczow
					];
				}
				else
				{
					$ilosc_meczow = 1;
					$min = (int)explode(':', $pok['MIN'])[0]*60;
					$sek = (int)explode(':', $pok['MIN'])[1];

					$suma = ceil(($min + $sek)/60);
					$tabela[$pok['id_zawodnika']] = [
						'imie' => $pok['imie'],
						'nazwisko' => $pok['nazwisko'],
						'punkty' => $pok['PTS'],
						'asysty' => $pok['AST'],
						'zbiorki' => $pok['REB'],
						'odebrania_pilki' => $pok['STL'],
						'bloki' => $pok['BLK'],
						'faule' => $pok['F'],
						'ilosc_minut' => $suma ,
						'ilosc_meczow' => $ilosc_meczow
					];
				}
				
			}

			return $tabela;
		}
	}
