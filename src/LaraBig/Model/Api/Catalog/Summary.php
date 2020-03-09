<?php


namespace Smartosc\LaraBig\Model\Api\Catalog;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Summary as SummaryInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Summary extends AbstractModel implements SummaryInterface
{
    protected $resource = "summary/{id}";
    /**
     * @inheritDoc
     */
    public function get()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }
}
