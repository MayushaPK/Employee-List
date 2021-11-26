
<?php
class Csv_import_model extends CI_Model 
{    
    function __construct() 
    {
        parent::__construct();       
    }
    
    function get_emplist() 
    {     
        $query = $this->db->get('emp_list');
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        } 
        else 
        {
            return FALSE;
        }
    }
    
    function insert_csv($data)
    {
        $this->db->insert('emp_list', $data);
    }
}
/*END OF FILE*/
?>

