<?php defined('SYSPATH') or die('No direct access allowed.');
 
class Model_User extends ORM {
 
    public function rules()
    {
        return array(
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array(array($this, 'username_available')),
            ),
            'password' => array(
                array('not_empty'),
            ),
            'email' => array()
        );
    }
 
    public function username_available($username)
    {
        // There are simpler ways to do this, but I will use ORM for the sake of the example
        return ORM::factory('user', array('username' => $username))->loaded();
    }
}
?>