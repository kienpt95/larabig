<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


interface Currency
{
    const PREFIX = "currencies";
    const VERSION = "v3";

    public function all();

    public function getCurrency($id);

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}