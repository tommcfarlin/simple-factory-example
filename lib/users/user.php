<?php

/**
 * The abstract class definition for the User.
 *
 * This class serves as the base class for all other user types. When
 * instantiated, it will set the role but relies on its subclasses
 * to implement the abstract 'get_role' function.
 *
 * @package    	lib
 * @subpackage	users
 * @author     	Tom McFarlin <tom@tommcfarlin.com>
 * @copyright  	2013 Tom McFarlin
 * @license    	http://opensource.org/licenses/MIT
 * @version    	1.0.0
 * @link       	http://github.com/tommcfarlin/simple-factory-example/
 */
abstract class User {
	
    /**
     * A reference to the User's role.
     *
     * The value should always be that of a string.
     *
     * @var string
     */
	private $role;
	
	/**
     * Initializes the plugin class.
     *
     * Sets the user role based on the incoming role.
     *
     * @param	string	$role	The role of this user.
     * @since 	1.0.0
     */
	public function __construct( $role ) {
		$this->role = $role;
	}
	
	/**
     * Returns the formal name of the user based on the role.
     *
     * This abstract function is meant to be implemented by the subclasses
     * of this abstract User class.
     *
     * @since 	1.0.0
     */
	abstract public function get_role();
	
}