<?php
class Ltgroups_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout(); // Dùng để load layout, block, template từ file layout ra
        $this->renderLayout(); // Render giao diện từ những block, template theo thứ tự đã được định sẵn trong file layout
    }
}
?>