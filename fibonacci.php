<?php
class fibonacci
{
	function get_fibo($n)
	{
		$n1=0;
		$n2=1;
		$result = 0;
		for ($i=0; $i < $n; $i++) {
			if($i==0) $n1 = 0;
			else if($i==1) { $n2 = 1; $result = 1; }
			else $result = $n1+$n2;
			echo "i : ".$i." => ".$n1." ".$n2." ".$result."<br/>";
			$n1 = $n2;
			$n2 = $result;
		}
		// $result = $n1 + $n2;
		
		echo "fibonacci(".$n.") : ".$result;
	}
}

//beginning
$cheer = new fibonacci;
$cheer->get_fibo(9);

?>