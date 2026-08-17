@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Dashboard
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Welcome back! Here's an overview of your store.
            </p>
        </div>


        {{-- Statistics --}}
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4">

            {{-- Total Revenue --}}
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm font-medium text-gray-500">
                            Total Revenue
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-gray-900">
                            $24,680
                        </h3>
                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-indigo-100">
                        <i data-lucide="banknote" class="text-indigo-600"></i>
                    </div>

                </div>

                <div class="mt-4 flex items-center gap-1 text-sm">
                    <span class="font-medium text-green-600">
                        +12.5%
                    </span>

                    <span class="text-gray-400">
                        from last month
                    </span>
                </div>

            </div>


            {{-- Total Orders --}}
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm font-medium text-gray-500">
                            Total Orders
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-gray-900">
                            1,248
                        </h3>
                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-blue-100">
                        <i data-lucide="shopping-cart" class="text-blue-600"></i>
                    </div>

                </div>

                <div class="mt-4 flex items-center gap-1 text-sm">
                    <span class="font-medium text-green-600">
                        +8.2%
                    </span>

                    <span class="text-gray-400">
                        from last month
                    </span>
                </div>

            </div>


            {{-- Customers --}}
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm font-medium text-gray-500">
                            Customers
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-gray-900">
                            856
                        </h3>
                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-purple-100">
                        <i data-lucide="users" class="text-purple-600"></i>
                    </div>

                </div>

                <div class="mt-4 flex items-center gap-1 text-sm">
                    <span class="font-medium text-green-600">
                        +5.4%
                    </span>

                    <span class="text-gray-400">
                        from last month
                    </span>
                </div>

            </div>


            {{-- Products --}}
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm font-medium text-gray-500">
                            Total Products
                        </p>

                        <h3 class="mt-2 text-2xl font-bold text-gray-900">
                            324
                        </h3>
                    </div>

                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-orange-100">
                        <i data-lucide="package" class="text-orange-600"></i>
                    </div>

                </div>

                <div class="mt-4 flex items-center gap-1 text-sm">
                    <span class="font-medium text-gray-600">
                        18
                    </span>

                    <span class="text-gray-400">
                        low stock
                    </span>
                </div>

            </div>

        </div>


        {{-- Second Statistics Row --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">

            {{-- Today's Sales --}}
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">

                <p class="text-sm font-medium text-gray-500">
                    Today's Sales
                </p>

                <div class="mt-2 flex items-end justify-between">

                    <h3 class="text-2xl font-bold text-gray-900">
                        $1,840
                    </h3>

                    <span class="text-sm font-medium text-green-600">
                        +18.2%
                    </span>

                </div>

                <div class="mt-4 h-2 overflow-hidden rounded-full bg-gray-100">
                    <div class="h-full w-[72%] rounded-full bg-indigo-600"></div>
                </div>

            </div>


            {{-- Pending Orders --}}
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">

                <p class="text-sm font-medium text-gray-500">
                    Pending Orders
                </p>

                <div class="mt-2 flex items-end justify-between">

                    <h3 class="text-2xl font-bold text-gray-900">
                        32
                    </h3>

                    <span class="text-sm font-medium text-orange-600">
                        Need attention
                    </span>

                </div>

                <div class="mt-4 h-2 overflow-hidden rounded-full bg-gray-100">
                    <div class="h-full w-[38%] rounded-full bg-orange-500"></div>
                </div>

            </div>


            {{-- Low Stock --}}
            <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm">

                <p class="text-sm font-medium text-gray-500">
                    Low Stock Products
                </p>

                <div class="mt-2 flex items-end justify-between">

                    <h3 class="text-2xl font-bold text-gray-900">
                        18
                    </h3>

                    <span class="text-sm font-medium text-red-600">
                        Restock soon
                    </span>

                </div>

                <div class="mt-4 h-2 overflow-hidden rounded-full bg-gray-100">
                    <div class="h-full w-[24%] rounded-full bg-red-500"></div>
                </div>

            </div>

        </div>


        {{-- Recent Orders --}}
        <div class="overflow-hidden rounded-xl border border-gray-100 bg-white shadow-sm">

            {{-- Header --}}
            <div class="flex items-center justify-between border-b border-gray-100 px-6 py-4">

                <div>
                    <h2 class="font-semibold text-gray-900">
                        Recent Orders
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Latest orders from your store.
                    </p>
                </div>

                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-700">
                    View all
                </a>

            </div>


            {{-- Table --}}
            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="bg-gray-50">

                        <tr class="text-gray-500">

                            <th class="px-6 py-3 font-medium">
                                Order
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Customer
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Date
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Amount
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Status
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                #ORD-1001
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                John Doe
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 17, 2026
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                $1,240.00
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                    Completed
                                </span>
                            </td>

                        </tr>


                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                #ORD-1002
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Sarah Wilson
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 17, 2026
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                $580.00
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                    Pending
                                </span>
                            </td>

                        </tr>


                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                #ORD-1003
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                David Smith
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 16, 2026
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                $325.00
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                    Processing
                                </span>
                            </td>

                        </tr>


                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                #ORD-1004
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Michael Brown
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 16, 2026
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                $890.00
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">
                                    Cancelled
                                </span>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
@endsection
