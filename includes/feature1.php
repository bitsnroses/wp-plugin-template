<?php

/**
* This file implements the feature 1.
*
* Brief description for this feature.
*/

namespace WpPluginTemplate\Feature1;


/**
* The core class for feature 1.
*
* Brief description for this class
*/
class Main {

  /**
  * Static property to hold our singleton instance.
  */
  static $instance = false;

  /**
  * The constructor.
  *
  * @return void.
  */
  private function __construct() {

  }

  /**
  * If an instance exists, this returns it.  If not, it creates one and
  * retuns it.
  *
  * @return Feature1
  */
  public static function getInstance() {
    if ( !self::$instance ) {
      self::$instance = new self;
    }
    return self::$instance;
  }

}
$main = Main::getInstance();

?>
