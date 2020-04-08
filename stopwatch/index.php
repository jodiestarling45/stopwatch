<?php
include "stopwatch.php";

function selection_sort($data)
{
    for($i=0; $i<count($data)-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<count($data); $j++) {
            if ($data[$j]<$data[$min]) {
                $min = $j;
            }
        }
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}
function swap_positions($data1, $left, $right) {
    $backup_old_data_right_value = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}
$arr=[];
for ($i=0;$i<20000;$i++){
    $arr[]=$i*rand(1,100000);
}

$stopTime=new stopwatch();
$stopTime->set_start_time();
echo "start time is ".$stopTime->get_startime();
selection_sort($arr);
$stopTime->set_end_time();
echo "end time is :".$stopTime->get_endtime();
echo 'elapse time is :'.$stopTime->getTimeLapse().'ms';