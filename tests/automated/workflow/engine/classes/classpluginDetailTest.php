<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.pluginRegistry.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:18.
  */ 

  class classpluginDetailTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers pluginDetail::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct() 
    { 
        if (class_exists('pluginDetail')) {
             $methods = get_class_methods( 'pluginDetail');
            $this->assertTrue( in_array( '__construct', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 