<?php

class MainControllerV1 extends BaseControllerV1{
	
    public function test(){
        die("test");
    }

    public function test2($p1, $p2){
        die($p1 . $p2);
    }

    public function get_users(){

        $db = $this->db_connect("candidate");

        $sql = "select * from candidate.users";

        $results = $db->query($sql);

        echo "<pre>";
        print_r($results);
        die();

    }
  
}
