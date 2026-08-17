@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page heading --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                Dashboard
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Welcome back! Here's what's happening today.
            </p>
        </div>


        {{-- Statistics --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">

            <div class="rounded-xl bg-white p-6 shadow-sm">
                <p class="text-sm text-gray-500">
                    Total Products
                </p>

                <h3 class="mt-2 text-3xl font-bold text-gray-800">
                    120
                </h3>
            </div>

            <div class="rounded-xl bg-white p-6 shadow-sm">
                <p class="text-sm text-gray-500">
                    Total Customers
                </p>

                <h3 class="mt-2 text-3xl font-bold text-gray-800">
                    85
                </h3>
            </div>

            <div class="rounded-xl bg-white p-6 shadow-sm">
                <p class="text-sm text-gray-500">
                    Total Sales
                </p>

                <h3 class="mt-2 text-3xl font-bold text-gray-800">
                    245
                </h3>
            </div>

            <div class="rounded-xl bg-white p-6 shadow-sm">
                <p class="text-sm text-gray-500">
                    Revenue
                </p>

                <h3 class="mt-2 text-3xl font-bold text-gray-800">
                    $12,450
                </h3>
            </div>

        </div>


        {{-- Recent sales --}}
        <div class="rounded-xl bg-white shadow-sm">

            <div class="border-b border-gray-200 px-6 py-4">
                <h2 class="font-semibold text-gray-800">
                    Recent Sales
                </h2>
            </div>

            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="bg-gray-50 text-gray-500">
                        <tr>
                            <th class="px-6 py-3 font-medium">Customer</th>
                            <th class="px-6 py-3 font-medium">Product</th>
                            <th class="px-6 py-3 font-medium">Amount</th>
                            <th class="px-6 py-3 font-medium">Status</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        <tr>
                            <td class="px-6 py-4">John Doe</td>
                            <td class="px-6 py-4">iPhone 15</td>
                            <td class="px-6 py-4">$999</td>
                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-600">
                                    Paid
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4">David Smith</td>
                            <td class="px-6 py-4">Wireless Mouse</td>
                            <td class="px-6 py-4">$25</td>
                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-600">
                                    Paid
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
@endsection
