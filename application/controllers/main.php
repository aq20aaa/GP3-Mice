<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	 
	 function __construct()
	{
		parent::__construct();	 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}
	
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('home');
	}
	
	public function cinema()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		//table name exact from database
		$crud->set_table('cinema');
		
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Cinema');
		
		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('cinemaID', 'cinemaName', 'location', 'address', 'manager');
	
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('cinemaID', 'cinemaName', 'location', 'address', 'manager');
		
		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		//$crud->set_relation('custID','customers','custID');
		
		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		//$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');
		
		//form validation (could match database columns set to "not null")
		$crud->required_fields('cinemaID', 'cinemaName', 'location', 'address', 'manager');
		
		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		$crud->display_as('cinemaID', 'Cinema ID');
		
		$output = $crud->render();
		$this->cinema_output($output);
	}
	
	function cinema_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('cinema_view.php', $output);
	}

	public function booking()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('booking');
		$crud->set_subject('booking');
		$crud->columns('bookingID', 'memberID', 'filmTitle', 'performanceID', 'date', 'noScreens');
		$crud->fields('bookingID', 'memberID', 'filmTitle', 'performanceID', 'date', 'noScreens');
		$crud->required_fields('bookingID', 'memberID', 'filmTitle', 'performanceID', 'date', 'noScreens');
		$crud->set_relation('filmTitle', 'film', 'title');
		$crud->set_relation('performanceID', 'performance', '{performanceID} - {filmTitle}');
		$crud->display_as('bookingID', 'Booking ID');
		$crud->display_as('memberID', 'Member ID');
		$crud->display_as('filmTitle', 'Film Title');
		$crud->display_as('performanceID', 'Performance ID');
		$crud->display_as('date', 'Date');
		$crud->display_as('noScreens', 'No of Seats');
		
		$output = $crud->render();
		$this->booking_output($output);
	}
	
	function booking_output($output = null)
	{
		$this->load->view('booking_view.php', $output);
	}
	
	public function member()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('member');
		$crud->set_subject('member');
		$crud->fields('memberID', 'title', 'memberName', 'joined', 'status');
		$crud->required_fields('memberID', 'title', 'memberName', 'joined', 'status');
		$crud->display_as('memberID', 'Member ID');
		$crud->display_as('title', 'Title');
		$crud->display_as('memberName', 'Name');
		$crud->display_as('joined', 'Joined');
		$crud->display_as('status', 'Status');
		
		$output = $crud->render();
		$this->member_output($output);
	}
	
	function member_output($output = null)
	{
		$this->load->view('member_view.php', $output);
	}
	
	public function film()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('film');
		$crud->set_subject('film');
		$crud->fields('filmID', 'released', 'title', 'director');
		//$crud->set_relation('item_id','items','{itemID} - {itemDesc}');
		$crud->required_fields('filmID', 'released', 'title', 'director');
		$crud->display_as('filmID', 'Film ID');
		$crud->display_as('released', 'Released');
		$crud->display_as('title', 'Title');
		$crud->display_as('director', 'Director');
		
		$output = $crud->render();
		$this->film_output($output);
	}
	
	function film_output($output = null)
	{
		$this->load->view('film_view.php', $output);
	}

    public function screen()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('screen');
		$crud->set_subject('screen');
		$crud->fields('cinema', 'screenNo', 'seats', 'seatPrices');
		$crud->set_relation('cinema','cinema','cinemaName');
		$crud->required_fields('cinema', 'screenNo', 'seats', 'seatPrices');
		$crud->display_as('cinema', 'Cinema');
		$crud->display_as('screenNo', 'Screen No');
		$crud->display_as('seats', 'Seats');
		$crud->display_as('seatPrices', 'Seat Prices');
		
		$output = $crud->render();
		$this->screen_output($output);
	}
	
	function screen_output($output = null)
	{
		$this->load->view('screen_view.php', $output);
	}
	
	  public function performance()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('performance');
		$crud->set_subject('performance');
		$crud->fields('performanceID', 'cinemaName', 'screenNo', 'filmTitle', 'date', 'time', 'seatsLeft');
		$crud->set_relation('cinemaName','cinema','cinemaName');
		$crud->set_relation('filmTitle','film','title');
		$crud->required_fields('performanceID', 'cinemaName', 'screenNo', 'filmTitle', 'date', 'time', 'seatsLeft');
		$crud->display_as('performanceID', 'Performance ID');
		$crud->display_as('cinemaName', 'Cinema');
		$crud->display_as('screenNo', 'Screen No');
		$crud->display_as('filmTitle', 'Film');
		$crud->display_as('date', 'Date');
		$crud->display_as('time', 'Time');
		$crud->display_as('seatsLeft', 'Seats Available');
		
		$output = $crud->render();
		$this->performance_output($output);
	}
	
	function performance_output($output = null)
	{
		$this->load->view('performance_view.php', $output);
	}


	
	








	public function querynav()
	{	
		$this->load->view('header');
		$this->load->view('querynav_view');
	}
		
	public function query1()
	{	
		$this->load->view('header');
		$this->load->view('query1_view');
	}
	
	public function query2()
	{	
		$this->load->view('header');
		$this->load->view('query2_view');
	}
	
	public function blank()
	{	
		$this->load->view('header');
		$this->load->view('blank_view');
	}
}
