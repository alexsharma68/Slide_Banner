<?php
class Slide_Banner_Model_Mysql4_Bannersetting_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
 {
     public function _construct()
     {
         parent::_construct();
         $this->_init('banner/bannersetting');
     }
}
?>