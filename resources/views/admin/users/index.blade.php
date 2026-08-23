@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Users
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Manage system users and their access.
            </p>
        </div>

        {{-- Search & Add --}}
        <div class="flex justify-between">

            <div>
                <input
                    type="search"
                    class="w-75 rounded-lg border border-gray-600 px-4 py-2 focus:border-indigo-600 focus:outline-none"
                    placeholder="Search User..."
                >
            </div>

            <div>
                <button
                    class="cursor-pointer rounded-lg bg-indigo-600 px-4 py-2 text-md font-semibold text-white hover:bg-indigo-700">
                    Add New User
                </button>
            </div>

        </div>

        {{-- User List --}}
        <div class="overflow-hidden rounded-xl border border-gray-100 bg-white shadow-sm">

            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="bg-gray-50">

                        <tr class="text-gray-500">

                            <th class="px-6 py-3 font-medium">
                                #
                            </th>

                            <th class="px-6 py-3 font-medium">
                                User
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Email
                            </th>

                            <th class="px-6 py-3 font-medium">
                                Role
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

                        {{-- User 1 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                1
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">

                                    <img
                                        src="/assets/images/users/fouy.jpg"
                                        alt="John Doe"
                                        class="h-10 w-10 rounded-full object-cover"
                                    >

                                    <div>
                                        <p class="font-medium text-gray-900">
                                            Mann Yivfouy
                                        </p>
                                    </div>

                                </div>
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                mannyivfouy@gmail.com
                            </td>

                            <td class="px-6 py-4">
                                <span class="rounded-full bg-indigo-100 px-3 py-1 text-xs font-medium text-indigo-700">
                                    Administrator
                                </span>
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


                        {{-- User 2 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                2
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex items-center gap-3">

                                    <img
                                        src="/assets/images/users/panha.jpg"
                                        alt="Sarah Wilson"
                                        class="h-10 w-10 rounded-full object-cover"
                                    >

                                    <div>
                                        <p class="font-medium text-gray-900">
                                            Sorn Sopanha
                                        </p>
                                    </div>

                                </div>

                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                sornsopanha@gmail.com
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                    Manager
                                </span>

                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 08, 2026
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


                        {{-- User 3 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                3
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex items-center gap-3">

                                    <img
                                        src="/assets/images/users/nara.jpg"
                                        alt="David Smith"
                                        class="h-10 w-10 rounded-full object-cover"
                                    >

                                    <div>
                                        <p class="font-medium text-gray-900">
                                            Hong Sovannara
                                        </p>
                                    </div>

                                </div>

                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                hongsovannara@gmail.com
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                    Cashier
                                </span>

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


                        {{-- User 4 --}}
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-900">
                                4
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex items-center gap-3">

                                    <img
                                        src="/assets/images/users/tola.jpg"
                                        alt="Michael Brown"
                                        class="h-10 w-10 rounded-full object-cover"
                                    >

                                    <div>
                                        <p class="font-medium text-gray-900">
                                            Vath Tola
                                        </p>
                                    </div>

                                </div>

                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                vathtola@gmail.com
                            </td>

                            <td class="px-6 py-4">

                                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                                    Manager
                                </span>

                            </td>

                            <td class="px-6 py-4 text-gray-500">
                                Aug 03, 2026
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
