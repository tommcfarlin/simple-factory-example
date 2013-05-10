<?php

/**
 * The class definition for the Reader user type.
 *
 * @package    	lib
 * @subpackage	users
 * @author     	Tom McFarlin <tom@tommcfarlin.com>
 * @copyright  	2013 Tom McFarlin
 * @license    	http://opensource.org/licenses/MIT
 * @version    	1.0.0
 * @link       	http://github.com/tommcfarlin/simple-factory-example/
 */
class Reader extends User {
    
    /**
     * Initializes the plugin class by setting the formal role
     * definition of this class.
     *
     * Note that because this class extends the User class, the reference to the
     * role property is referring to the property defined in User.
     *
     * @since 	1.0.0
     */
    public function __construct() {
        $this->role = "Reader";
    }
    
    /**
     * Returns the role of this User type.
     *
     * @returns	string	The role for this particular user type.
     * @since 	1.0.0
     */
    public function get_role() {
        return $this->role;
    }
    
}