<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream away</title>
</head>
<body>

    <form action="" method="get">
        <input type="radio" id="US" name="destination" value="US">
        <label for="US">US</label><br>
        <input type="radio" id="Sweden" name="destination" value="Sweden">
        <label for="Sweden">Sweden</label><br>
        <input type="radio" id="Japan" name="destination" value="Japan">
        <label for="Japan">Japan</label><br>
        <input type="radio" id="South-Korea" name="destination" value="South-Korea">
        <label for="South-Korea">South-Korea</label><br>
        <input type="radio" id="Vietnam" name="destination" value="Vietnam">
        <label for="Vietnam">Vietnam</label><br>
        <input type="radio" id="Malawi" name="destination" value="Malawi">
        <label for="Malawi">Malawi</label><br>
        <input type="radio" id="Laos" name="destination" value="Laos">
        <label for="Laos">Laos</label><br>
        <label for="money">How much did you bring?</label><br>
        <input id="money" name="money"><br>
        <input type="submit" name="Normal" class="button" value="Normal" />
        <input type="submit" name="Switch" class="button" value="Switch" />
    </form>
    
    <?php
        $valuta = array(
            array("USD", "US",1.14),
            array("S Krona", "Sweden", 10.55),
            array("YEN","Japan",131.59),
            array("WON", "South-Korea", 1362.75),
            array("DONG", "Vietnam", 25884.95),
            array("KWACHA", "Malawi", 913.42),
            array("KIP", "Laos", 13012.44));

        $int = 1;
        $double = 1.1;
        $destination = $_GET["destination"];
        $money = $_GET["money"];
        
        if (!empty($destination)){
                echo ($destination);
        } 
        echo nl2br("\n");
            
        if (!empty($money)) {
                echo($money);
        } 
        if (!empty($destination) && !empty($money)) {
            if (array_key_exists('Normal', $_GET)) {
                for ($i = 0; $i<count($valuta);$i++) {
                    if ($valuta[$i][1] === $destination) {
                        $foreignMoney = $money * $valuta[$i][2];
                        echo nl2br("\n");
                        echo "You are going to ". $valuta[$i][1]. ", you brought ". $money. "€ and that is ". $foreignMoney. " ". $valuta[$i][0]. ".";
                    } 
                }
            } elseif (array_key_exists('Switch', $_GET)) {
                for ($i = 0; $i<count($valuta);$i++) {
                    if ($valuta[$i][1] === $destination) {
                        echo $foreignMoney = $money / $valuta[$i][2]; 
                        echo nl2br("\n");
                        echo "You are coming back from ". $valuta[$i][1]. ", you still have ". $money. $valuta[$i][0]. " it will be worth ". $foreignMoney. "€ in Belgium.";
                }
            }
        }
    }
        

    ?>
</body>
</html>