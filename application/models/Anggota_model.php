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

class Anggota_model extends CI_Model {

        public $title;
        public $content;
        public $tbale='anggota';

        public function Attribute()
        {
                $attr=[ 'id', 'nama_anggota', 'alamat', 'no_telepon', 'foto', 'status', 'created_ip', 'created_by', 'updated_ip', 'updated_by'];
                return $attr;
        }

        

}