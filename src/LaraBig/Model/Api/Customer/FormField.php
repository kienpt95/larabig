<?php


namespace Smartosc\LaraBig\Model\Api\Customer;

use Smartosc\LaraBig\Model\Api\AbstractModel;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\FormField as IFormField;

class FormField extends AbstractModel implements IFormField
{
    protected $resource = "form-field-values";

    /**
     * @inheritDoc
     */
    public function get()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function upsert($data)
    {
        $result = $this->service()->call('PUT', $this->getResource(), $data);
        return $result;
    }
}
