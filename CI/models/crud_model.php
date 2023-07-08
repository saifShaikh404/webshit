
<?php 

class Crud_model extends CI_model{

    public function addData(){
        $data;
        $data["name"] = "random";
        $data["description"] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam laboriosam beatae iure fuga quia aliquid illo quam";
    }

    public function get(){
        return $this->db->get("datas")->result_array();
    }

    public function search($keyVal){
        // $this->db->like('name', $key);
        // $query = $this->db->get('datas');
        // return $query->result_array();


        // $this->db->select('*');
        // $this->db->from('datas');
        // $this->db->like('LOWER(name)', strtolower($key));
        // $query = $this->db->get();
        // return $query->result_array();


        // $this->db->select('*');
        // $this->db->from('datas');
        // // $this->db->like("LOWER(REPLACE(name, ' ', ''))",$keyVal);
        // $this->db->where("REPLACE(name, ' ', '') LIKE", '%' . $keyVal . '%');
        // $query = $this->db->get();
        // return $query->result_array();


        // $this->db->select('*');
        // $this->db->from('datas');
        // $this->db->where_in('LOWER(name)', $keyVal);
        // $query = $this->db->get();
        // return $query->result_array();


        $this->db->select('*');
        $this->db->from('datas');
        $this->db->group_start();
        foreach ($keyVal as $value) {
            $this->db->or_like('LOWER(name)', $value);
        }
        $this->db->group_end();
        $query = $this->db->get();
        return $query->result_array();


        // $this->db->select('*');
        // $this->db->from('datas');
        // $this->db->like('name', $key);
        // $query = $this->db->get();
        // return $query->result_array();
    }

}

?>