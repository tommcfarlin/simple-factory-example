<?php

/**
 * Includes the Simple Factory class which is the single dependency for this class.
 */
include_once( 'simple-factory.php' );

/**
 * A simple class used to represent a WordPress plugin that takes advantage of
 * the Simple Factory Pattern.
 *
 * This particular project has been created for a series of articles on Envato's
 * WPTuts+ site specifically focusing on design patterns. It's mean to provide
 * a simple, concise, and clear example of how to use the Simple Factory Pattern.
 *
 * @package    lib
 * @author     Tom McFarlin <tom@tommcfarlin.com>
 * @copyright  2013 Tom McFarlin
 * @license    http://opensource.org/licenses/MIT
 * @version    1.0.0
 * @link       http://github.com/tommcfarlin/simple-factory-example/
 */
class Plugin {
    
    /**
     * A reference to the Simple Factory.
     *
     * The value should always be that of Simple_Factory
     *
     * @var Simple_Factory
     */
    private $factory;
    
    public function __construct() {
        $this->factory = new Simple_Factory();
    }
    
    /**
     * Returns the type of user requested based on the specified type.
     *
     * Uses the instance of the Simple Factory to generate a user based on the incoming
     * type to return the instance of a user that corresponds to the incoming type.
     *
     * @param	string	$permission 	The type of permissions the user is able to request. Possible
     *									values include 'read-write', 'read', 'help'.
     * @return	User					A subclass of the abstract User base class.
     * @since 	1.0.0
     */
    public function get_user( $permission ) {
        return $this->factory->get_user( $permission );
    }
    
}