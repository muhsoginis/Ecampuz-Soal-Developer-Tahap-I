<!DOCTYPE html>
<html>
<body>

<?php
function bagi($a, $b){
	$answer = 0;
	while ($a >= $b){
    	$a -= $b;
        $answer += 1;
    }
    return $answer;
}
?>

</body>
</html>