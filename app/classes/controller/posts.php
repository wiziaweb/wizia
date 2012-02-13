<?php

class Controller_Posts extends Controller {

	public function action_action1()
	{
    $data = array(); //stores variables going to views

    $data['username'] = 'Joe14';
    $data['title'] = 'Home';

    //assign the view to browser output
    return View::forge('posts/action1', $data);
	}

	public function action_action2()
	{
		$this->template->title = 'Posts &raquo; Action2';
		$this->template->content = View::forge('posts/action2');
	}

}
