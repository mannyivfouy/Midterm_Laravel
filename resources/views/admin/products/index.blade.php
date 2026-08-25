@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Products
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Manage all products inventory.
            </p>
        </div>

        {{-- Search & Add --}}
        <div class="flex justify-between">

            <div>
                <input
                    type="search"
                    class="w-75 rounded-lg border border-gray-600 px-4 py-2 focus:border-indigo-600 focus:outline-none"
                    placeholder="Search Product..."
                >
            </div>

            <div>
                <a type="button" href="/admin/products/create"
                    class="cursor-pointer rounded-lg bg-indigo-600 px-4 py-2 text-md font-semibold text-white hover:bg-indigo-700">
                    Add New Product
                </a>
            </div>

        </div>

        {{-- Product List --}}
        <div class="overflow-hidden rounded-xl border border-gray-100 bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="bg-gray-50">

                        <tr class="text-gray-500">

                            <th class="px-6 py-3 font-medium">
                                #
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Image
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Product Name
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Price
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Category
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Description
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Created At
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Status
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Actions
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        {{-- Product 1 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                1
                            </td>

                            <td class="px-6 py-4">
                                <img
                                    src="/assets/images/products/wireless_mouse.avif"
                                    alt="Wireless Mouse"
                                    class="h-10 w-10 rounded-lg object-cover"
                                >
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                Wireless Mouse
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                $15.00
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Accessories
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Ergonomic wireless mouse with USB receiver.
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 10, 2026
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                    Active
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex gap-4">

                                    <div class="cursor-pointer">
                                        <i data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Product 2 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                2
                            </td>

                            <td class="px-6 py-4">
                                <img
                                    src="/assets/images/products/mechanical_keyboard.avif"
                                    alt="Mechanical Keyboard"
                                    class="h-10 w-10 rounded-lg object-cover"
                                >
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                Mechanical Keyboard
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                $45.00
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Accessories
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                RGB mechanical keyboard with blue switches.
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 09, 2026
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                    Active
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex gap-4">

                                    <div class="cursor-pointer">
                                        <i data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Product 3 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                3
                            </td>

                            <td class="px-6 py-4">
                                <img
                                    src="/assets/images/products/usb-c_cable.avif"
                                    alt="USB-C Cable"
                                    class="h-10 w-10 rounded-lg object-cover"
                                >
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                USB-C Cable
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                $8.50
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Cables
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                1-meter fast charging USB-C cable.
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 07, 2026
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                    Active
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex gap-4">

                                    <div class="cursor-pointer">
                                        <i data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Product 4 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                4
                            </td>

                            <td class="px-6 py-4">
                                <img
                                    src="/assets/images/products/laptop_stand.avif"
                                    alt="Laptop Stand"
                                    class="h-10 w-10 rounded-lg object-cover"
                                >
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                Laptop Stand
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                $29.99
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Office Equipment
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Adjustable aluminum laptop stand.
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 05, 2026
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                    Low Stock
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex gap-4">

                                    <div class="cursor-pointer">
                                        <i data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Product 5 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                5
                            </td>

                            <td class="px-6 py-4">
                                <img
                                    src="/assets/images/products/hdmi_cable.avif"
                                    alt="HDMI Cable"
                                    class="h-10 w-10 rounded-lg object-cover"
                                >
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900">
                                HDMI Cable
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                $12.00
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Cables
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                High-speed HDMI cable supporting 4K resolution.
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 02, 2026
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">
                                    Inactive
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex gap-4">

                                    <div class="cursor-pointer">
                                        <i data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
@endsection
