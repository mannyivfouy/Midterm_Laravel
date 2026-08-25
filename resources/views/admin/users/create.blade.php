@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Create User
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Add a new user and assign their system access.
            </p>
        </div>


        {{-- User Form --}}
        <div class="rounded-xl border border-gray-100 bg-white shadow-sm">

            <form action="/admin/users" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="p-6">

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                        {{-- Profile Image --}}
                        <div class="md:col-span-2">

                            <label for="image" class="mb-2 block text-sm font-medium text-gray-700">
                                Profile Image
                            </label>

                            <div class="flex items-center gap-5">

                                {{-- Image Preview --}}
                                <div
                                    class="flex h-24 w-24 items-center justify-center overflow-hidden rounded-full border border-dashed border-gray-300 bg-gray-50">
                                    <i data-lucide="user" class="h-8 w-8 text-gray-400"></i>
                                </div>

                                <div>

                                    <input id="image" name="image" type="file" accept="image/*"
                                        class="block w-full text-sm text-gray-500
                                        file:mr-4 file:rounded-lg file:border-0
                                        file:bg-indigo-50 file:px-4 file:py-2
                                        file:text-sm file:font-medium
                                        file:text-indigo-600
                                        hover:file:bg-indigo-100">

                                    <p class="mt-1 text-xs text-gray-500">
                                        PNG, JPG or WEBP. Maximum 2MB.
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- Full Name --}}
                        <div>

                            <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                                Full Name
                                <span class="text-red-500">*</span>
                            </label>

                            <input id="name" name="name" type="text" placeholder="Enter full name"
                                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm
                                text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                required>

                        </div>


                        {{-- Email --}}
                        <div>

                            <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                                Email
                                <span class="text-red-500">*</span>
                            </label>

                            <input id="email" name="email" type="email" placeholder="Enter email address"
                                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm
                                text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                required>

                        </div>


                        {{-- Password --}}
                        <div>

                            <label for="password" class="mb-2 block text-sm font-medium text-gray-700">
                                Password
                                <span class="text-red-500">*</span>
                            </label>

                            <input id="password" name="password" type="password" placeholder="Enter password"
                                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm
                                text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                required>

                        </div>


                        {{-- Confirm Password --}}
                        <div>

                            <label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-700">
                                Confirm Password
                                <span class="text-red-500">*</span>
                            </label>

                            <input id="password_confirmation" name="password_confirmation" type="password"
                                placeholder="Confirm password"
                                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm
                                text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                required>

                        </div>


                        {{-- Role --}}
                        <div>

                            <label for="role" class="mb-2 block text-sm font-medium text-gray-700">
                                Role
                                <span class="text-red-500">*</span>
                            </label>

                            <div class="relative">

                                <select id="role" name="role"
                                    class="w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-2.5 pr-10 text-sm text-gray-900
                                    focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                    required>

                                    <option value="" disabled selected>
                                        Select role
                                    </option>

                                    <option value="administrator">
                                        Administrator
                                    </option>

                                    <option value="manager">
                                        Manager
                                    </option>

                                    <option value="cashier">
                                        Cashier
                                    </option>

                                </select>

                                <i data-lucide="chevron-down"
                                    class="pointer-events-none absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-500">
                                </i>

                            </div>

                        </div>


                        {{-- Status --}}
                        <div>

                            <label for="status" class="mb-2 block text-sm font-medium text-gray-700">
                                Status
                                <span class="text-red-500">*</span>
                            </label>

                            <div class="relative">

                                <select id="status" name="status"
                                    class="w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-2.5 pr-10 text-sm text-gray-900
                                    focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                    required>

                                    <option value="active">
                                        Active
                                    </option>

                                    <option value="inactive">
                                        Inactive
                                    </option>

                                </select>

                                <i data-lucide="chevron-down"
                                    class="pointer-events-none absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-500">
                                </i>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Form Footer --}}
                <div class="flex items-center justify-end gap-3 rounded-b-xl border-t border-gray-100 bg-gray-50 px-6 py-4">

                    <a href="/admin/users"
                        class="rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700
                        hover:bg-gray-100">
                        Cancel
                    </a>

                    <button type="submit"
                        class="flex cursor-pointer items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white
                        hover:bg-indigo-700">
                        Create User
                    </button>

                </div>

            </form>

        </div>

    </div>
@endsection
