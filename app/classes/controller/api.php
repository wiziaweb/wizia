<?php

/**
 * Wizia API Controller.
 *
 * A basic Rest controller example.
 * 
 * @package  app
 * @extends  Controller_Rest
 */
class Controller_Api extends Controller_Rest
{

	/**
	 * get List
	 * 
	 * @access  public
	 * @return  Response
	 */

        public function get_list()
        {
            $this->response(array(
                'foo' => Input::get('foo'),
                'baz' => array(
                    1, 50, 219
                ),
                'empty' => null
            ));
        }   

}
