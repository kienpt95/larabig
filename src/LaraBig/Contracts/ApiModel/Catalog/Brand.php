<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;


interface Brand
{
    const PREFIX = "brands";
    const VERSION = "v3";

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function update($brand_id, $data);

    /**
     * @param $brand_id
     * @return mixed
     */
    public function delete($brand_id);

    /**
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function createBrandImage($brand_id, $data);

    /**
     * @param $brand_id
     * @return mixed
     */
    public function deleteBrandImage($brand_id);

    /**
     * @return mixed
     */
    public function allMetaFields();

    /**
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function getMetafield($brand_id, $metafield_id);

    /**
     * @param $brand_id
     * @param $data
     * @return mixed
     */
    public function createBrandMEtaField($brand_id, $data);

    /**
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function updateBrandMEtaField($brand_id, $metafield_id);

    /**
     * @param $brand_id
     * @param $metafield_id
     * @return mixed
     */
    public function deleteBrandMEtaField($brand_id, $metafield_id);
}