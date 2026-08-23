@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Categories
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Manage product categories and organize your inventory.
            </p>
        </div>

        {{-- Search & Add --}}
        <div class="flex justify-between">

            <div>
                <input
                    type="search"
                    class="w-75 rounded-lg border border-gray-600 px-4 py-2 focus:border-indigo-600 focus:outline-none"
                    placeholder="Search Category..."
                >
            </div>

            <div>
                <button
                    class="cursor-pointer rounded-lg bg-indigo-600 px-4 py-2 text-md font-semibold text-white hover:bg-indigo-700">
                    Add New Category
                </button>
            </div>

        </div>

        {{-- Category List --}}
        <div class="overflow-hidden rounded-xl border border-gray-100 bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="bg-gray-50">

                        <tr class="text-gray-500">

                            <th class="px-6 py-3 font-medium">
                                #
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

                        {{-- Category 1 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                1
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">

                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-50">
                                        <i
                                            data-lucide="mouse"
                                            class="h-4 w-4 text-indigo-600">
                                        </i>
                                    </div>

                                    <span class="font-medium text-gray-900">
                                        Accessories
                                    </span>

                                </div>
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Computer and mobile accessories.
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
                                        <i
                                            data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i
                                            data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Category 2 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                2
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">

                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-50">
                                        <i
                                            data-lucide="cable"
                                            class="h-4 w-4 text-indigo-600">
                                        </i>
                                    </div>

                                    <span class="font-medium text-gray-900">
                                        Cables
                                    </span>

                                </div>
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                USB, HDMI and other connection cables.
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
                                        <i
                                            data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i
                                            data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Category 3 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                3
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">

                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-50">
                                        <i
                                            data-lucide="briefcase-business"
                                            class="h-4 w-4 text-indigo-600">
                                        </i>
                                    </div>

                                    <span class="font-medium text-gray-900">
                                        Office Equipment
                                    </span>

                                </div>
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Equipment and supplies for office use.
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
                                        <i
                                            data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i
                                            data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Category 4 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                4
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">

                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-50">
                                        <i
                                            data-lucide="monitor"
                                            class="h-4 w-4 text-indigo-600">
                                        </i>
                                    </div>

                                    <span class="font-medium text-gray-900">
                                        Monitors
                                    </span>

                                </div>
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Computer monitors and display devices.
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 05, 2026
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                    Active
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex gap-4">

                                    <div class="cursor-pointer">
                                        <i
                                            data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i
                                            data-lucide="trash2"
                                            class="h-4 w-4 text-gray-600 transition hover:text-red-600">
                                        </i>
                                    </div>

                                </div>
                            </td>

                        </tr>

                        {{-- Category 5 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                5
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">

                                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-50">
                                        <i
                                            data-lucide="router"
                                            class="h-4 w-4 text-indigo-600">
                                        </i>
                                    </div>

                                    <span class="font-medium text-gray-900">
                                        Networking
                                    </span>

                                </div>
                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Routers, switches and networking equipment.
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
                                        <i
                                            data-lucide="pencil"
                                            class="h-4 w-4 text-gray-600 transition hover:text-indigo-600">
                                        </i>
                                    </div>

                                    <div class="cursor-pointer">
                                        <i
                                            data-lucide="trash2"
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
