<?php
$ini_string='
[игрушка мягкая мишка белый]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';
    
[одежда детская куртка синяя синтепон]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';
    
[игрушка детская велосипед]
цена = '.  mt_rand(1, 10).';
количество заказано = '.  mt_rand(1, 10).';
осталось на складе = '.  mt_rand(0, 10).';
diskont = diskont'.  mt_rand(0, 2).';

';
$bd=  parse_ini_string($ini_string, true);
//print_r($bd);
echo '<table>'
. '<tr> <td>Товар </td><td>Цена </td><td>Количество </td><td>На складе </td> </tr>';
foreach ($bd as $key => $value){
    echo '<tr>'.'<td>'.$key.'</td>'.'<td>'.$value['цена'].'</td>'
     . '<td>'.$value['количество заказано'].'</td>'
     . '<td>'.$value['осталось на складе'].'</td>'.'</tr>';
}

function trade(){
    global $val,$kol,$itog, $aler;
    global $bd;
    static $i;
    foreach ($bd as $key => $value){
        if ($key=='игрушка детская велосипед'&&$value['количество заказано']>=3&&
                $value['осталось на складе']>=3){
            $value['diskont']='diskont3';
            
        }
        switch ($value['diskont']){
            case 'diskont0':
                $value['цена']*=1;
                break;
            case 'diskont1':
                $value['цена']*=0.9;
                break;
            case 'diskont2':
                $value['цена']*=0.8;
                break;
            case 'diskont3':
                $value['цена']*=0.7;
                break;
        }
        if ($value['количество заказано']){
            $i++;
        }
        if ($value['осталось на складе']>=$value['количество заказано']){
        $kol += $value['количество заказано'];
        $itog += $value['количество заказано']*$value['цена'];
        }else{
        $kol += $value['осталось на складе'];
        $itog += $value['осталось на складе']*$value['цена'];
        $aler.=' |'.$key.'| ';
        }
    }
    $val = $i;
    return $val;
}

trade();
echo '</table>';
if ($aler){
    echo '<h3>Отсутствует нужное количество на складе: '.$aler.'</h3>';
}
echo '<h3>Наименований: '.$val.'</h3>';
echo '<h3>Кол-во товаров :'.$kol.'</h3>';
echo '<h2>Итого: '.$itog.'</h2>';
