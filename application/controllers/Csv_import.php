<?php
class Csv_import extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('csv_import_model');
        $this->load->library('csvimport');
    }

    function index() 
    {
        $data['emplist'] = $this->csv_import_model->get_emplist();
        $this->load->view('csvindex', $data);
    }

    function importcsv() 
    {
        $data['emplist'] = $this->csv_import_model->get_emplist();
        $data['error'] = '';    //initialize image upload error array to empty
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);

        // If upload failed, display error
        if (!$this->upload->do_upload()) 
        {
            $data['error'] = $this->upload->display_errors();
            $this->load->view('csvindex', $data);
        } 
        else 
        {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
            
            if ($this->csvimport->get_array($file_path)) 
            {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) 
                {
                    $insert_data = array(
                        'emp_code'=>$row['Employee code'],
                        'emp_name'=>$row['Employee Name'],
                        'department'=>$row['Department'],
                        'emp_dob'=>$row['Date of Birth'],
                        'joining_date'=>$row['Joining Date'],
                    );
                    $this->csv_import_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'csv_import');
            } 
            else 
                $data['error'] = "Error occured";
            $this->load->view('csvindex', $data);
        }
            
    } 

}
/*END OF FILE*/
