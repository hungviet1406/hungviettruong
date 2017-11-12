<?php
	include 'connect.php';
    if (isset($_POST['submit_form'])) {
        $firtName = $_POST['first'];
        $lastName = $_POST['last'];
        $sum = array(0,0,0,0,0,0,0,0,0,0);
        
        for ($i =0 ; $i < 81; $i++) {
            $arr = intval($_POST['gender'.$i]);
            switch ($i) {
                case 6:
                case 13:
                case 18:
                case 22:
                case 47:
                case 51:
                case 61:
                case 71:
                case 76:
                    $sum[2]+= $arr;
                    break;
                case 15:
                case 29:
                case 31:
                case 38:
                case 44:
                case 49:
                case 65:
                case 70:
                case 77:
                    $sum[3]+= $arr;
                    break;
                case 4:
                case 12:
                case 16:
                case 36:
                case 40:
                case 42:
                case 63:
                case 73:
                case 79:
                    $sum[4]+= $arr;
                    break;
                case 0:
                case 7:
                case 10:
                case 28:
                case 37:
                case 45:
                case 55:
                case 67:
                case 74:
                    $sum[5]+= $arr;
                    break;
                case 21:
                case 25:
                case 33:
                case 39:
                case 48:
                case 58:
                case 68:
                case 75:
                case 80:
                    $sum[6]+= $arr;
                    break;
                case 5:
                case 14:
                case 17:
                case 27:
                case 30:
                case 56:
                case 62:
                case 66:
                case 78:
                    $sum[7]+= $arr;
                    break;
                case 3:
                case 8:
                case 23:
                case 35:
                case 41:
                case 43:
                case 46:
                case 52:
                case 57:
                    $sum[8]+= $arr;
                    break;
                case 1:
                case 9:
                case 11:
                case 19:
                case 26:
                case 51:
                case 54:
                case 60:
                case 69:
                    $sum[9]+= $arr;
                    break;
                case 2:
                case 20:
                case 24:
                case 32:
                case 34:
                case 53:
                case 59:
                case 64:
                case 72:
                    $sum[1]+= $arr;
                    break;
            }
        }
        $max = max($sum);
        $array_index = array();
        $index = 0;
		$sumStr = "";
        for ($i = 1; $i < count($sum); $i++) {
			$sumStr .= $sum[$i].',';
            if ($max == $sum[$i]) {
                $array_index[$index++] = $i;
            }
        }
        $str = '';
        $max1 = '';
        for ($i = 0; $i < $index; $i++) {
             $str.=$array_index[$i];
             if ($i < $index - 1) {
                 $str .=',';
             }
             $max1 = $array_index[$i];
        }
		
		// luu csdl
		$res = $conn->query("INSERT INTO user(firstname, lastname) VALUES (\"".$firtName."\", \"".$lastName."\")");
		if ($res) {
			$idd = "";
			$maxId = $conn->query("SELECT id FROM user ORDER BY ID DESC LIMIT 1");
			if ($maxId->num_rows > 0) 
			{
				while($values = $maxId->fetch_assoc()) {
					$idd = $values['id'];
				}
			}
			$sql = "INSERT INTO result(result, type, iduser) VALUES (\"".$sumStr."\", \"".$str."\" , \"".$idd."\")";
			//echo '</br>'.$idd."---". $sql;
			$res = $conn->query($sql);
		}
		
        header("Location: result.php?id=$max1&name=$firtName&type=$str");
    }
?>