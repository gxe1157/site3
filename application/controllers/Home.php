<?php
/**
 * Typical usage: Display all static front page
 * Home extends Frontend_Controller which extends My_Controller which extends CI_Controller
 * 
 * @param 
 * @return void
 * @author Evelio Velez Jr.
 * Modified from Joost van Veen Nettuts
*/

class Home extends Frontend_Controller {
	
    public $data = array();

	public function __construct()
	{
		parent:: __construct();
		$this->data['success'] = '';
		$this->data['fail'] = '';
		$this->data['title'] = '';		
		//$this->load->library(array('ion_auth','form_validation'));		
		//$this->load->helper(array('language'));
		//$this->lang->load('auth');
		//dump($this->config);exit("hello");
	}
	
	
	public function sendemail()
	{			
		$this->load->library(array('email','form_validation'));

		$action = array(
			'first' 	=> array('First Name', 'trim|required|max_length[30]','value'),				
			'last'  	=> array('Last Name', 'trim|required|max_length[30]', 'value'),
			'email'	 	=> array('Email','trim|valid_email','value'),
			'message'	=> array('Message','trim|required','value'),
		);		
		
        $this->set_rules($action);
		if ($this->form_validation->run() === true)
		{	
			$first = $this->input->post('first');
			$last = $this->input->post('last');
			$email = $this->input->post('email'); 
			$subject = "Message from website"; 
			$message = $this->input->post('message'); 
		
			$this->email->from($email, $first." ".$last);
			$this->email->to('info@mailers.com','Sales');
			$this->email->cc('evelio@mailers.com','Evelio Velez');
			//$this->email->bcc('them@their-example.com');

			$this->email->subject($subject);
			$this->email->message($message);

			$this->email->send();
			$this->data['success'] = "<strong>Your email has been reeived. A representative will contact you as soon as possible.</strong>";					
		} else{
			$this->data['fail'] = "<strong>Email Error:!</strong><br />We are not able to send your email at this time.<br />Please try again later.";
		}
		
		$this->data['contents'] = "partials/contact-us";
		$this->_render_page('html_template/html_master_view', $this->data);	
		
    }		

	public function index()
	{
		//$this->build_data_array($content, rawurldecode($title) );
		$this->date['year'] = date('Y');
		$this->date['month'] = date('m');
		
		// Set fields allowed to be used and set segment, if null then default to form_user1;		
		$content =  $this->uri->segment(3, 0) ? :'main';
		$page_title = $this->uri->segment(4, 0) ? :'Full Service Mailers, Inc.';
		//dump($this->uri->segment(3, 0));
		
		$this->data['contents'] = "partials/".$content;
		$this->data['title'] = rawurldecode($page_title);

		$this->_render_page('html_template/html_master_view', $this->data);			
	}
	
	
	protected function set_rules($action)
	{
		/**	validate form input:
		*	The above method takes three parameters as input:
		*   The field name,  A “human” name for this field, validation rules for this form field, (optional) Set custom error messages on any rules given for current field. If not provided will use the default one.
		*/
		foreach( $action as $fld =>$val_rule)
		{
			//echo "rules: ".$fld." -- ".$val_rule[0]." -- ".$val_rule[1]."<br />";
			$this->form_validation->set_rules( $fld, $val_rule[0], $val_rule[1]);				
		}
	}
	
	protected function _render_page($view, $data=null, $render=false)
	{
		//dump($data);
		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}	
}	

