<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Last extends Application {
    function index() {
        $this->data['pagebody'] = 'justone';	// this is the view we want shown
	// build the list of authors, to pass on to our view
	$source = $this->quotes->last();
	$this->data = array_merge($this->data, $source);
	$this->render();
    }
}