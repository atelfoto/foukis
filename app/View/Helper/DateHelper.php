<?php
class DateHelper extends AppHelper{
	public  $jours 	= array( 'Lun' , 'Mar' , 'Mer' , 'Jeu' , 'Ven' , 'Sam' , 'Dim' );
	public  $mois = array( 'Jan' , 'Fev' , 'Mar' ,'Avr' , 'Mai' , 'Jui' , 'Juil' , 'Aou' , 'Sep' , 'Oct' ,'Nov' , 'Dec');

	function french($datetime){
		$tmstamp = strtotime($datetime);
		$date = $this->jours[date('N',$tmstamp)-1] ." ". date('d',$tmstamp) .' '. $this->mois[date('n',$tmstamp)-1].' '.date('y',$tmstamp);
		//$date .= " à ".date('H:i',$tmstamp);
		return $date;
	}

	// public  $days 	= array( 'Lundi' , 'Mardi' , 'Mercredi' , 'Jeudi' , 'Vendredi' , 'Samedi' , 'Dimanche' );
	// public  $months = array ( 'Janvier' , 'Fevrier' , 'Mars' ,'Avril' , 'Mai' , 'Juin' , 'Juillet' , 'Aout' , 'Septembre' , 'Oct' ,'Novembre' , 'Decembre');

	function english($datetime){
		$tmstamp = strtotime($datetime);
		$date = $this->days[date('N',$tmstamp)-1] ." ". date('d',$tmstamp) .' '. $this->month[date('n',$tmstamp)-1].' '.date('y',$tmstamp);
		//$date .= " à ".date('H:i',$tmstamp);
		return $date;
	}



}
