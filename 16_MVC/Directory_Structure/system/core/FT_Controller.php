<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
/**
 * @package     FT_Framework
 * @author      Tqhung04
 * @email       tqhung04@gmail.com
 * @copyright   Copyright (c) 2017
 * @since       Version 1.0
 * @filesource  system/core/FT_Controller.php
 */
class FT_Controller {
    // Đối tượng view
    protected $view     = NULL;
     
    // Đối tượng model
    protected $model    = NULL;
     
    // Đối tượng library
    protected $library  = NULL;
     
    // Đối tượng helper
    protected $helper   = NULL;
     
    // Đối tượng config
    protected $config   = NULL;
     
    /**
     * Hàm khởi tạo
     * 
     * @desc    Load các thư viện cần thiết
     */
    public function __construct() {
    }
}