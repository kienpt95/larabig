<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Geography;


interface Country
{
    const PREFIX = 'countries';
    const VERSION = 'v3';

    public function all();

    public function getCountry($id);

    public function countAllCountry();

    public function allState();

    public function allStatesOfCountry($country_id);

    public function StateOfCountry($country_id, $id);

    /**
     * Returns a count of all states.
     */
    public function countState();

    /**
     * Returns a count of a country’s states.
     */

    public function countStateOfCountry();
}