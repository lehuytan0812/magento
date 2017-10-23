<?php

class Basetut_Salestaff_Model_Staff extends Mage_Core_Model_Abstract
{
    const ENABLED_STATUS = 1;
    const DISABLED_STATUS = 2;

    public function _construct(){
        parent::_construct();
        $this->_init('salestaff/staff');
    }
    
    public function getStatusArray(){
        return array(
            self::ENABLED_STATUS    =>  Mage::helper('salestaff')->__('Enabled'),
            self::DISABLED_STATUS   =>  Mage::helper('salestaff')->__('Disable'),
        );
    }
}
