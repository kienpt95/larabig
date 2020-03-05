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
    protected $fillable = ['store_hash', 'bc_id', 'email'];
}
