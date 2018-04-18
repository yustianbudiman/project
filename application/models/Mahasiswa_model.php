<?php
/**
 * CodeIgniter
 *
 *
 * @package     CodeIgniter
 * @author      EllisLab Dev Team
 * @copyright   Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright   Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license     http://opensource.org/licenses/MIT      MIT License
 * @link        https://codeigniter.com
 * @since       Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

        public $title;
        public $content;
        public $tbale='mahasiswa';

        public function Attribute()
        {
        		// $attr = new ArrayAndObjectAccess();
                $attr=[ '_id','firstName','lastName','email','mobileNumber','status'];
                return $attr;
        }

        

}