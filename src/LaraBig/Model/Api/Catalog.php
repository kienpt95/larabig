<?php

namespace Smartosc\LaraBig\Model\Api;

class Catalog extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Catalog
{
    protected $resource = 'catalog/{catalog_id}';

    /** @inheritDoc */
    public function getSummary()
    {
        $result = $this->service()
            ->call(
                'GET',
                $this->getResource(
                    [
                        'catalog_id' => 'summary'
                    ])
            );
        return $result;
    }
}
