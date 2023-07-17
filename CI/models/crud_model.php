
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
            if($value == "am" || $value == "is" || $value == "are" || $value == "on" || $value == "the" || $value == "in" || $value == "was"){
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

    // public function search($keyVal){
        
    //     $this->db->select('*');
    //     $this->db->from('datas');
    //     $this->db->group_start();
    //     foreach ($keyVal as $value) {
    //         if($value == "am" || $value == "is" || $value == "are" || $value == "on" || $value == "the" || $value == "in" || $value == "was"){
    //             continue;
    //         }
    //         else{
    //             $this->db->or_like('LOWER(name)', $value);
    //         }
    //     }
    //     $this->db->group_end();
    //     $query = $this->db->get();
    //     // print_r($this->db->get());

    //     if($this->db->get()){
    //         // $query = $this->db->get();
    //         return $this->db->get()->result_array(); 
    //     }
    //     else{
    //         print_r("Err");
    //         return "";
             
    //     }

    // }

    public function getEnumVal($enumVal){

    }

}

?>