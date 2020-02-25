<?php

namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog;

interface Product
{
    const PREFIX = 'products';
    const VERSION = 'v3';

    public function all();

    public function get($id);

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
