@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Create Product
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Add a new product to your inventory.
            </p>
        </div>


        {{-- Product Form --}}
        <div class="rounded-xl border border-gray-100 bg-white shadow-sm">

            <form action="/admin/products" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="p-6">

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                        {{-- Product Image --}}
                        <div class="md:col-span-2">

                            <label for="image" class="mb-2 block text-sm font-medium text-gray-700">
                                Product Image
                            </label>

                            <div class="flex items-center gap-5">

                                {{-- Image Preview --}}
                                <div
                                    class="flex h-24 w-24 items-center justify-center overflow-hidden rounded-xl border border-dashed border-gray-300 bg-gray-50">
                                    <i data-lucide="image" class="h-8 w-8 text-gray-400"></i>
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


                        {{-- Product Name --}}
                        <div>

                            <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                                Product Name
                                <span class="text-red-500">*</span>
                            </label>

                            <input id="name" name="name" type="text" placeholder="Enter product name"
                                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm
                                text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                required>

                        </div>


                        {{-- Price --}}
                        <div>

                            <label for="price" class="mb-2 block text-sm font-medium text-gray-700">
                                Price
                                <span class="text-red-500">*</span>
                            </label>

                            <div class="relative">

                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-500">
                                    $
                                </span>

                                <input id="price" name="price" type="number" step="0.01" min="0"
                                    placeholder="0.00"
                                    class="w-full rounded-lg border border-gray-300 py-2.5 pl-8 pr-4 text-sm
                                    text-gray-900 placeholder-gray-400
                                    focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                    required>

                            </div>

                        </div>


                        {{-- Category --}}
                        <div>

                            <label for="category" class="mb-2 block text-sm font-medium text-gray-700">
                                Category
                                <span class="text-red-500">*</span>
                            </label>

                            <div class="relative">
                                <select
                                    class="w-full appearance-none rounded-lg border border-gray-300 bg-white px-4 py-2.5 pr-10 text-sm
                                    focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600">
                                    <option value="">Select category</option>
                                    <option value="1">Accessories</option>
                                    <option value="2">Cables</option>
                                </select>

                                <i data-lucide="chevron-down"
                                    class="pointer-events-none absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-500"></i>
                            </div>

                        </div>


                        {{-- Stock Quantity --}}
                        <div>

                            <label for="stock_quantity" class="mb-2 block text-sm font-medium text-gray-700">
                                Stock Quantity
                                <span class="text-red-500">*</span>
                            </label>

                            <input id="stock_quantity" name="stock_quantity" type="number" min="0"
                                placeholder="Enter stock quantity"
                                class="w-full rounded-lg border border-gray-300 px-4 py-2.5 text-sm
                                text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                required>

                        </div>


                        {{-- Description --}}
                        <div class="md:col-span-2">

                            <label for="description" class="mb-2 block text-sm font-medium text-gray-700">
                                Description
                            </label>

                            <textarea id="description" name="description" rows="4" placeholder="Enter product description..."
                                class="w-full resize-none rounded-lg border border-gray-300 px-4 py-2.5 text-sm
                                text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"></textarea>

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
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>

                                <i data-lucide="chevron-down"
                                    class="pointer-events-none absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-500"></i>
                            </div>

                        </div>

                    </div>

                </div>


                {{-- Form Footer --}}
                <div class="flex items-center justify-end gap-3 border-t border-gray-100 bg-gray-50 px-6 py-4 rounded-b-xl">

                    <a href="/admin/products"
                        class="rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm font-medium text-gray-700
                        hover:bg-gray-100">
                        Cancel
                    </a>

                    <button type="submit"
                        class="flex cursor-pointer items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white
                        hover:bg-indigo-700">
                        Create Product
                    </button>

                </div>

            </form>

        </div>

    </div>
@endsection
