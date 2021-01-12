<?php

namespace Omitsis\MediaStorage\Model;

use Magento\Framework\Api\Filter;
use Magento\Ui\DataProvider\AbstractDataProvider;

/**
 * Class DataProvider
 * @package Omitsis\MediaStorage\Model
 */
class DataProvider extends AbstractDataProvider
{
    /**
    * @return array
    */
    public function getData(): array
    {
         return [];
    }

    /**
     * @param Filter $filter
     * @return null
     */
    public function addFilter(Filter $filter)
    {
        return null;
    }
}
