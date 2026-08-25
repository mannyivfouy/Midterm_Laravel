@extends('layouts.admin-layout')

@section('content')
    <div class="space-y-6">

        {{-- Page Header --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Create Category
            </h1>

            <p class="mt-1 text-sm text-gray-500">
                Add a new product category to organize your inventory.
            </p>
        </div>

        {{-- Category Form --}}
        <div class="rounded-xl border border-gray-100 bg-white shadow-sm">

            <form class="p-6">

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">

                    {{-- Category Name --}}
                    <div>
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                            Category Name
                        </label>

                        <input type="text" id="name" name="name" placeholder="e.g. Accessories"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400
                            focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                            required>
                    </div>

                    {{-- Icon --}}
                    <div>
                        <label for="icon" class="mb-2 block text-sm font-medium text-gray-700">
                            Icon
                        </label>

                        <div class="relative">

                            <i data-lucide="mouse"
                                class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-500">
                            </i>

                            <input type="text" id="icon" name="icon" placeholder="e.g. mouse"
                                class="w-full rounded-lg border border-gray-300 bg-white py-2.5 pl-10 pr-4 text-sm text-gray-900 placeholder-gray-400
                                focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                                required>

                        </div>

                        <p class="mt-1.5 text-xs text-gray-500">
                            Use a Lucide icon name such as mouse, cable, monitor, or router.
                        </p>
                    </div>

                    {{-- Description --}}
                    <div class="md:col-span-2">
                        <label for="description" class="mb-2 block text-sm font-medium text-gray-700">
                            Description
                        </label>

                        <textarea id="description" name="description" rows="4"
                            placeholder="Describe what products belong to this category..."
                            class="w-full resize-none rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-sm text-gray-900 placeholder-gray-400
                            focus:border-indigo-600 focus:outline-none focus:ring-1 focus:ring-indigo-600"
                            required></textarea>

                        <p class="mt-1.5 text-xs text-gray-500">
                            Keep the description short and clear.
                        </p>
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

                {{-- Form Actions --}}
                <div class="mt-8 flex items-center justify-end gap-3 border-t border-gray-100 pt-6">

                    <a href="/admin/categories"
                        class="rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-semibold text-gray-700
                        transition hover:bg-gray-50">
                        Cancel
                    </a>

                    <a type="submit" href="/admin/categories"
                        class="cursor-pointer rounded-lg bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white
                        transition hover:bg-indigo-700">
                        Create Category
                    </a>

                </div>

            </form>

        </div>

    </div>
@endsection
