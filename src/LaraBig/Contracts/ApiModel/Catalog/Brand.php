<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;


interface Brand
{
    const PREFIX = "brands";
    const VERSION = "v3";

    public function all();

    public function create($data);

    public function update($brand_id, $data);

    public function delete($brand_id);

    public function createBrandImage($brand_id, $data);

    public function deleteBrandImage($brand_id);

    public function allMetaFields();

    public function getMetafield($brand_id, $metafield_id);

    public function createBrandMEtaField($brand_id, $data);

    public function updateBrandMEtaField($brand_id, $metafield_id);

    public function deleteBrandMEtaField($brand_id, $metafield_id);
}