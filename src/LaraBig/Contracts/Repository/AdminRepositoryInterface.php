<?php


namespace Smartosc\LaraBig\Contracts\Repository;

use Smartosc\LaraBig\Model\Admin;

interface AdminRepositoryInterface
{
    /**
     * @param array $data
     * @return Admin
     */
    public function create($data);
}
