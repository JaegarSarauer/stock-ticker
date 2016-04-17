<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * controllers/Welcome.php
 *
 * Welcome controller
 *
 * @author				Carson Roscoe, Jaegar Sarauer
 * @copyright			2016-, Special Characters
 * ------------------------------------------------------------------------
 */

class Welcome extends Application {
	/**
	 * Index Page for this controller.
	 */
	public function index() { 
		$this->data['pagebody'] = 'twotablepage';//setting pagebody to be the two table view
		$this->data['navigation'] = $this->createNavigation(1);//create navigation bar - MY_CONTROLLER.php
		$this->data['dropdowndata'] = ''; //create drop down - MY_CONTROLLER.php
		
                $this->data['pageheader'] = '<div class="jumbotron"><h1>W E L C O M E</h1>';
                
		//set left table with data from query            
		$this->data['leftTableColumns'] = $this->createTableColumns(['Name', 'Code', 'Value']);
		$this->data['leftTableQuery'] = $this->parseQueryClickable($this->stocks->getStocks(), 'stock', 1);
		
		//set right table with data from query
		$this->data['rightTableColumns'] = $this->createTableColumns(['Name', 'Equity', 'Cash']);
		$this->data['rightTableQuery'] = $this->parseQueryClickable($this->players->getPlayers(), 'profile', 1);
		
		$this->render();
	}        
}
