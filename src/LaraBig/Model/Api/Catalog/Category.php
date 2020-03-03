<?php


namespace Smartosc\LaraBig\Model\Api\Catalog;
 use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category as CategoryInterface;
 use Smartosc\LaraBig\Model\Api\AbstractModel;

 class Category extends AbstractModel implements CategoryInterface
{
    protected $resource = "categories";

     /**
      * @inheritDoc
      */
     public function all()
     {
         $result = $this->service()->call('GET',$this->getResource());
         return $result;
     }

     /**
      * @inheritDoc
      */
     public function get($category_id)
     {
         $result = $this->service()->call('GET', $this->getResource(['category_id'=>$category_id]));
         return $result;
     }

     /**
      * @inheritDoc
      */
     public function create($data)
     {
         $result = $this->service()->call('POST',$this->getResource(),$data);
         return $result;
     }

     /**
      * @inheritDoc
      */
     public function update($category_id, $data)
     {
         $result = $this->service()->call('PUT', $this->getResource(['category_id'=>$category_id]), $data);
         return $data;
     }

     /**
      * @inheritDoc
      */
     public function delete($category_id)
     {
         $result = $this->service()->call('DELETE', $this->getResource(['category_id'=>$category_id]));
         return $result;
     }
 }
