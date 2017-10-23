
<?php
class Basetut_Salestaff_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction(){

    $this->loadLayout();
    $this->renderLayout();
    }
    public function staffAction()
    {
        $staff = Mage::getModel('salestaff/staff')
            ->getCollection()
            ->setOrder('staff_id','ASC')// DESC lấy id từ trên xuống(n,n-1,...,1), ASC lấy id từ dưới lên(1,2,3,...,n)
            ->setPageSize(100);
        $arr_staff = array();
        foreach ($staff as $ob)
        {
            $arr_staff[] = $ob
                ->toArray(array());
        }
        return $this->getResponse()
            ->setHeader('Content-type','application/json')
            ->setHeader('Access-Control-Allow-Origin','*')
            ->setBody(json_encode($arr_staff));

    }

//    //
//    public function productAction()
//    {
//        $product = Mage::getModel('catalog/product')
//            ->getCollection()
//            ->setOrder('rule_product_id','ASC')// DESC lấy id từ trên xuống(n,n-1,...,1), ASC lấy id từ dưới lên(1,2,3,...,n)
//            ->setPageSize(100);
//        $arr_product = array();
//        foreach ($product as $ob)
//        {
//            $arr_product[] = $ob
//                ->toArray(array());
//        }
//        return $this->getResponse()
//            ->setHeader('Content-type','application/json')
//            ->setHeader('Access-Control-Allow-Origin','*')
//            ->setBody(json_encode($arr_product));
//
//    }
//    //
    public function customerAction()
    {
        $customer = Mage::getModel('customer/customer')
            ->getCollection()
            ->setOrder('entity_id','DESC')// DESC lấy id từ trên xuống(n,n-1,...,1), ASC lấy id từ dưới lên(1,2,3,...,n)
            ->setPageSize(100);
        $arr_customer = array();
        foreach ($customer as $ob)
        {
            $arr_customer[] = $ob
                ->toArray(array());
        }
        $data = array(
            "data" => $arr_customer,
        );
        return $this->getResponse()
            ->setHeader('Content-type','application/json')
            ->setHeader('Access-Control-Allow-Origin','*')
            ->setBody(json_encode($data));
    }
    public function productAction()
    {
        $product = Mage::getModel('catalog/product')
            ->getCollection()
            ->setOrder('id','DESC')// DESC lấy id từ trên xuống(n,n-1,...,1), ASC lấy id từ dưới lên(1,2,3,...,n)
            ->setPageSize(100);
        $arr_product = array();
        foreach ($product as $ob)
        {
            $arr_product[] = $ob
                ->toArray(array());
        }
        $data = array(
            "data" => $arr_product,
        );
        return $this->getResponse()
            ->setHeader('Content-type','application/json')
            ->setHeader('Access-Control-Allow-Origin','*')
            ->setBody(json_encode($data));

    }
}
?>