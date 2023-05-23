<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

	function kelulusan($kelulusaan){
		if ($kelulusaan >= 55) {
            return 'Lulus';
        } 
		elseif ($kelulusaan <= 55){
            return 'Tidak Lulus';
    }
	}
	function grade($kelulusaan) {
		if ($kelulusaan <= 100) {
            return 'A';
        } 
		if ($kelulusaan <= 84) {
            return 'B';
        } 
		if ($kelulusaan <= 69) {
            return 'C';
        } 
		if ($kelulusaan <= 55) {
            return 'D';
        } 
		if ($kelulusaan <= 35) {
            return 'E';
        } 
		elseif ($kelulusaan <= 30){
            return 'I';
	}
	}
	
	function predikat(){
		switch (grade($kelulusaan)) {
            case "A":
                return 'Sangat memuaskan';
                break;
            case "B":
                return 'Memuaskan';
                break;
            case "C":
                return 'Cukup';
                break;
			case "D":
                return 'Kurang';
                break;
			case "E":
                return 'Sangat Kurang';
                break;
            default:
                return 'Tidak Ada';
                break;
            }
		
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/ 
	}
?>