<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Core;

abstract class Controller
{

	/**
	 * @var  Request  The current Request object
	 */
	public $request;

	/**
	 * @var  Response  The current Response object
	 */
	public $response;

	/**
	 * Sets the controller request object.
	 *
	 * @param   Request   The current request object
	 * @param   Response  The current response object
	 */
	public function __construct(\Request $request, \Response $response)
	{
		$this->request = $request;
		$this->response = $response;
	}

	/**
	 * This method gets called before the action is called
	 */
	public function before() {}

	/**
	 * This method gets called after the action is called
	 */
	public function after($response)
	{
		return $response;
	}

	/**
	 * This method returns the named parameter requested, or all of them
	 * if no parameter is given.
	 *
	 * @param   string  $param    The name of the parameter
	 * @param   mixed   $default  Default value
	 * @return  mixed
	 */
	public function param($param, $default = null)
	{
		return $this->request->param($param, $default);
	}

	/**
	 * This method returns all of the named parameters.
	 *
	 * @return  array
	 */
	public function params()
	{
		return $this->request->params();
	}

	/**
	 * Render a view and add it to the body
	 *
	 * @param   string     path to the view
	 * @param   array      variables for the view
	 * @param   bool|null  whether to use output encoding
	 */
	public function render($view, $data = array(), $auto_encode = null)
	{
		$this->response->body .= \View::forge($view, $data, $auto_encode);
	}
}

