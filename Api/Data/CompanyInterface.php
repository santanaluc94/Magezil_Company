<?php

namespace Magezil\Company\Api\Data;

interface CompanyInterface
{
    const CUSTOMER_ID = 'entity_id';
    const STORE_ID = 'store_id';
    const ADDRESS_ID = 'address_id';
    const NAME = 'name';
    const TAXVAT = 'taxvat';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function getId(): ?int;

    public function getStoreId(): ?int;

    public function setStoreId(int $storeId): self;

    public function getAddressId(): ?int;

    public function setAddressId(int $addressId): self;

    public function getName(): ?string;

    public function setName(string $name): self;

    public function getTaxvat(): ?string;

    public function setTaxvat(string $taxvat): self;

    public function getCreatedAt(): string;

    public function setCreatedAt(string $createdAt): self;

    public function getUpdatedAt(): string;

    public function setUpdatedAt(int $updatedAt): self;
}
