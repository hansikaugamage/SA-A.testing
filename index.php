<?php

function get Data($data)
{
    $data_json = file_get_contents( filename 'data.json');

    $decode_file = json_decode($data_json,associative true);

    $currency_data = $decode_file['money'];

    foreach ($currency_data as $value)
    {
         $target_money = $value['target_currency'];

         $money_value = $value['value'];

         if($target_money == $data)
         {
             return $money_value;
         }
    }

}


$return_val = get_data(data'LKR');

echo $return_val;
