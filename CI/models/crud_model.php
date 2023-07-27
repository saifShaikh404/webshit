
<?php 

class Crud_model extends CI_model{

    public function addData(){
        $data;
        $data["name"] = "random";
        $data["description"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam beatae iure fuga quia aliquid illo quam";
    }

    public function get(){
        return $this->db->query("SELECT * FROM datas ORDER BY RAND();")->result_array();
        // return $this->db->get("datas")->result_array();
    }

    public function search($keyVal){
        
        $check = "";
        $this->db->select('*');
        $this->db->from('datas');
        $this->db->group_start();
        foreach ($keyVal as $value) {
            // All preposition , all helping verb
            // $ignoredWords = array("and", "the", "is", "are", "was", "were", "in", "on", "at", "with", "for", "to", "from");
            if($value == "am" || $value == "from" || $value == "with" || $value == "to" || $value == "for" || $value == "is" || $value == "are" || $value == "and" || $value == "at" || $value == "on" || $value == "the" || $value == "in" || $value == "was"){
                continue;
            }
            else{
                $this->db->or_like('LOWER(name)', $value);
                $check = $check . $value;
            }
        }
        $this->db->group_end();

        if(empty($check)){
            return "";
        }
        else{
            $query = $this->db->get();
            return $query->result_array(); 
        }

    }

    public function getSearch($keyVal){
        $check = "";
        $this->db->select('*');
        $this->db->from('test');
        $this->db->group_start();
        foreach ($keyVal as $value) {
            if($value == "am" || $value == "from" || $value == "with" || $value == "to" || $value == "for" || $value == "is" || $value == "are" || $value == "and" || $value == "at" || $value == "on" || $value == "the" || $value == "in" || $value == "was"){
                continue;
            }
            else{
                $this->db->or_like('LOWER(name)', $value);
                $check = $check . $value;
            }
        }
        $this->db->group_end();

        if(empty($check)){
            $query1 = "";
        }
        else{
            $query1 = $this->db->get();
        }

        // table 2
        $check2 = "";
        $this->db->select('*');
        $this->db->from('test2');
        $this->db->group_start();
        foreach ($keyVal as $value) {
            if($value == "am" || $value == "from" || $value == "with" || $value == "to" || $value == "for" || $value == "is" || $value == "are" || $value == "and" || $value == "at" || $value == "on" || $value == "the" || $value == "in" || $value == "was"){
                continue;
            }
            else{
                $this->db->or_like('LOWER(name)', $value);
                $check2 = $check2 . $value;
            }
        }
        $this->db->group_end();

        if(empty($check2)){
            $query2 = "";
        }
        else{
            $query2 = $this->db->get();
        }
        
        // table 3
        $check3 = "";
        $this->db->select('*');
        $this->db->from('test3');
        $this->db->group_start();
        foreach ($keyVal as $value) {
            if($value == "am" || $value == "from" || $value == "with" || $value == "to" || $value == "for" || $value == "is" || $value == "are" || $value == "and" || $value == "at" || $value == "on" || $value == "the" || $value == "in" || $value == "was"){
                continue;
            }
            else{
                $this->db->or_like('LOWER(name)', $value);
                $check3 = $check3 . $value;
            }
        }
        $this->db->group_end();

        if(empty($check3)){
            $query3 = "";
        }
        else{
            $query3 = $this->db->get();
        }

        if($query1 == "" && $query2 == "" && $query3 == ""){
            return "";
        }else if($query1 == "" && $query2 != "" && $query3 != ""){
            $resultArray = array_merge($query2->result_array(), $query3->result_array());
            return $resultArray;
        }
        else if($query1 != "" && $query2 == "" && $query3 != ""){
            $resultArray = array_merge($query1->result_array(), $query3->result_array());
            return $resultArray;
        }
        else if($query1 != "" && $query2 != "" && $query3 == ""){
            $resultArray = array_merge($query1->result_array(), $query2->result_array());
            return $resultArray;
        }
        else if($query1 == "" && $query2 == "" && $query3 != ""){
            return $query3->result_array();
        }
        else if($query1 == "" && $query2 != "" && $query3 == ""){
            return $query2->result_array();
        }
        else if($query1 != "" && $query2 == "" && $query3 == ""){
            return $query1->result_array();
        }
        else{
            $resultArray = array_merge($query1->result_array(), $query2->result_array(), $query3->result_array());
            return $resultArray;
        }
    }

}

?>