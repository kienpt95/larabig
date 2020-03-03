<?php


namespace Smartosc\LaraBig\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 *
 * @package Smartosc\LaraBig\Model
 */
class Admin extends Model
{
    protected $table = 'store_admins';

    protected $fillable = ['store_hash', 'admin_id', 'admin_email', 'role_id'];

}
