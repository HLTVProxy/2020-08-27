<h2>Break</h2>
<?php
    for($i = 0; $i < 10 ; $i++){
        if ($i == 7) break; //當i是7時，會跳出這個迴圈，7、8、9都不會輸出
        echo $i . "<br>"; //只會輸出0~6
    }
?>
<hr>
<h2>Continue</h2>
<?php
    for($i = 0; $i < 10 ; $i++){
        if ($i%2 == 1) continue;
        echo $i . "<br>";        
    }
?>

