<?php

namespace Smartosc\LaraBig\Repository;
use Smartosc\LaraBig\Contracts\Repository\AdminRepositoryInterface;
use Smartosc\LaraBig\Model\Admin;

class AdminRepository implements AdminRepositoryInterface
{
    /** @inheritDoc */
    public function create($data)
    {
        /** @var Admin $admin */
        $admin = Admin::firstOrNew([
            'store_hash' => $data['store_hash'],
            'email' => $data['email'],
        ]);

        $admin->fill($data)
            ->saveOrFail();

        return $admin;
    }
}
