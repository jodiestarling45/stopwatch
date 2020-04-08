<?php
class stopwatch{
    private $start;
    private $end;
    function get_startime(){
        return $this->start;
    }
    function get_endtime(){
        return $this->end;
    }
    function _construct(){
        $this->start=date('H:i:s');
    }
    function set_start_time(){
        $this->start=date('H:i:s');
    }
    function set_end_time(){
        $this->end=date('H:i:s');
    }
    function getTimeLapse(){
        return (strtotime($this->end)-strtotime($this->start)*1000);
    }
}