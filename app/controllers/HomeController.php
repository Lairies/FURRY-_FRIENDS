<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class HomeController extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        // Load the home view
        $this->call->view('home');
    }
}
?>
?>
