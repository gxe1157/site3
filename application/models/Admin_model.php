<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends My_Model
{
	public $user_tables    = array();
	public $user_flds      = array();

	
	function __construct()
	{
		parent::__construct();
		
	}

	
    // This gets all field metadata information including extented
    public function field_meta_data( $use_table = null )
	{ 
		$sql = "SHOW FULL COLUMNS from {$use_table}";		
		$meta_data = $this->db->query($sql)->result_array();
        return $meta_data;
	}
	
	// update_form_data from forms
	public function update_form_data($id = null, $data = array(), $table = array() )
	{
       // dump_exit($data);
	
		$_tables = null;
		$_tables = $this->array_to_string( $table, false );
		
        // search in array for macth fields
		$select_flds = array();
        $update_data = array();
		
		foreach( $table as $key=>$tbl_name)
		{
			$select_flds = $this->field_meta_data($tbl_name);
            foreach($select_flds as $key =>$value )
			{
				if(array_key_exists( $select_flds[$key]["Field"], $data))
						$update_data[$tbl_name][$select_flds[$key]["Field"]] = $data[$select_flds[$key]["Field"]];
			}	
		}
		
		$this->db->trans_start();
		foreach($update_data as $key =>$value ){
			$process = $key;
			$$process = $value;
			$this->db->update($process, $$process, "id = {$id}");
		}
		$success = $this->db->trans_complete();
        
		return $success;
		
	}


    // Get data from tables - use join as needed
	public function get_form_data( $table = array(), $id = null, $action = array())
	{
		$_select = null;
		$_select = $this->array_to_string( $action, true );  // use keys = true
		
		if( count($table) == 1 ){
			$this->db->select($_select);
			$data = $this->db->get($table[0])->row();
		} elseif( count($table) > 1 ){
			$this->db->select($_select);
			$this->db->from($table[0]);

			for( $i=1; $i<count($table); $i++){
				$this->db->join($table[$i], $table[$i].'.id = '.$table[0].'.id','LEFT');
			}
			$this->db->where( $table[0].'.id', $id );   //$query = $this->db->get_compiled_select(); //$query = $this->db->get();
			$data = $this->db->get()->row();
			
        } else {
			return "Error: Table not provided";
        }

		return $data;
		
	}
	
    //  array_to_string() 
    public function array_to_string( $arr = array(), $use_key = false){
		$str = null;
		foreach($arr as $key => $value) {
		    $str .= $use_key ? $key.", " : $value.", " ;
		}
		
        return rtrim($str,', ');
	}

}
