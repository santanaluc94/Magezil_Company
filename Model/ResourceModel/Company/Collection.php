<?php

namespace Magezil\Company\Model\ResourceModel\Company;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magezil\Company\Model\ResourceModel\Company as CompanyResourceModel;
use Magezil\Company\Model\Company as CompanyModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected $_eventPrefix = 'company_entity';
    protected $_eventObject = 'company_collection';

    protected function _construct(): void
    {
        $this->_init(CompanyModel::class, CompanyResourceModel::class);
    }
}
