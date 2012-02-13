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
class Controller_Front extends Controller
{

	/**
	 * The basic welcome message
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		//return View::forge('front/index');
        action_hello();
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
	    $data['name'] = "Wizia";
        echo "***".Uri::segment(1);
        $page = DB::select('*')->from('wiziaweb_pages')->where("name",Uri::segment(1))->execute();
        $widgets = DB::select('*')->from('wiziaweb_widgets')->where("page_id", $page[0]["id"])->execute();
        //print_r($page->as_array());

        $data['widgets'] = $widgets->as_array();
		return View::forge('front/hello',$data);
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{

        return View::forge('front/404');
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
    public function before()
    {

    }
	public function action_contact()
	{
        $data['name'] = 'Toto';
        return View::forge('front/contact',$data);
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_mobile()
	{
	    $data['name'] = "Wizia";
        $page = DB::select('*')->from('wiziaweb_pages')->where("name",Uri::segment(2))->execute();
        $widgets = DB::select('*')->from('wiziaweb_widgets')->where("page_id", $page[0]["id"])->execute();
        $data['widgets'] = $widgets->as_array();
        return View::forge('front/mobile',$data);
    }

}
