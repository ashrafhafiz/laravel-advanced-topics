<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function getActiveCustomers();

    public function getCustomerById($customerId);
}
