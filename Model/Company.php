<?php

namespace Magezil\Company\Model;

use Magento\Framework\Model\AbstractModel;
use Magezil\Company\Api\Data\CompanyInterface;
use Magezil\Company\Model\ResourceModel\Company as CompanyResourceModel;

class Company extends AbstractModel implements CompanyInterface
{
    const COMPANY_ENTITY_TABLE = 'company_entity';

    protected $_cacheTag = 'company_entity';

    protected $_eventPrefix = 'company_entity';

    protected function _construct()
    {
        $this->_init(CompanyResourceModel::class);
    }

    public function getId(): ?int
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    public function getStoreId(): ?int
    {
        return $this->getData(self::STORE_ID);
    }

    public function setStoreId(int $storeId): CompanyInterface
    {
        return $this->setData(self::STORE_ID, $storeId);
    }

    public function getAddressId(): ?int
    {
        return $this->getData(self::ADDRESS_ID);
    }

    public function setAddressId(int $addressId): CompanyInterface
    {
        return $this->setData(self::ADDRESS_ID, $addressId);
    }

    public function getName(): ?string
    {
        return $this->getData(self::NAME);
    }

    public function setName(string $name): CompanyInterface
    {
        return $this->setData(self::NAME, $name);
    }

    public function getTaxvat(): ?string
    {
        return $this->getData(self::TAXVAT);
    }

    public function setTaxvat(string $taxvat): CompanyInterface
    {
        return $this->setData(self::TAXVAT, $taxvat);
    }

    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt(string $createdAt): CompanyInterface
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt(): string
    {
        return $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt(int $updatedAt): CompanyInterface
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
