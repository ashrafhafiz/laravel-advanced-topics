<?php


namespace App\Repositories;


use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function getActiveCustomers()
    {
//        return Customer::orderBy('name')
//            ->where('active', 1)
//            ->with('user')
//            ->get()
//            ->map(function ($customer){
//                return $this->formatCustomer($customer);
//            });

        return Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map->format();
    }

    public function getCustomerById($customerId)
    {
        return Customer::where('id', $customerId)
//            ->where('active', 1)
            ->with('user')
            ->firstOrFail()
            ->format();

        // return $this->formatCustomer($customer);
        // return $customer->format();
    }

    protected function formatCustomer($customer)
    {
        return [
            'customer_id' => $customer->id,
            'name' => $customer->name,
            'created_by' => $customer->user->email,
            'last_updated' => $customer->updated_at->diffForHumans()
        ];
    }

}
