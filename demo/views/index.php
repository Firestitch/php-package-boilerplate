<?
	use Firestitch\Sample;

	if(isset($_POST["example1"])) {	
		$pdf = new Sample();
		$pdf->doSomething();
	}

?>

<button type="submit" name="example1" class="btn btn-primary">Example 1</button>
