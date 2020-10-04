<?php

namespace Magezil\Company\Api;

use Magezil\Company\Api\Data\CompanyInterface;

interface CompanyRepositoryInterface
{
    public function save(CompanyInterface $customer): ?CompanyInterface;

    public function get(int $companyId): ?CompanyInterface;

    public function getByTaxvat(string $taxvat): ?CompanyInterface;

    public function getByEmail(string $email): ?CompanyInterface;

    public function delete(CompanyInterface $customer): bool;

    public function deleteById(int $companyId): bool;
}
