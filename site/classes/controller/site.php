<?php

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */
class Controller_Site extends Controller
{

	/**
	 * The basic welcome message
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		//echo "Bienvenue sur Wizia";
		$full_url = explode(".",sprintf($_SERVER['HTTP_HOST']));
		//echo $full_url[0];
		$data['template'] = 'tpl2';
		$data['name'] = 'WiziaName X2';
		return View::forge('site/index', $data);
	}

	public function action_page()
	{
		//echo "Bienvenue sur Wizia";
		$full_url = explode(".",sprintf($_SERVER['HTTP_HOST']));
		//echo $full_url[0];
		$data['template'] = 'tpl2';
		$data['name'] = 'WiziaName X2 page';
		return View::forge('site/index', $data);
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		echo "dede";
		// return Response::forge(ViewModel::forge('site/index'));
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{               $data['title'] = 'tpl2';
		return View::forge('site/404',$data);
	}
}
