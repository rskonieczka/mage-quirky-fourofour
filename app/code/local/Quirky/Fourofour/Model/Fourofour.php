<?php
class Quirky_Fourofour_Model_Fourofour extends Mage_Core_Model_Abstract {
  public function getRecentProducts() {
    $products = Mage::getModel("catalog/product")
                ->getCollection()
                ->addAttributeToSelect('*')
                ->setOrder('entity_id', 'DESC')
                ->setPageSize(5);

    return $products;
  }
}

