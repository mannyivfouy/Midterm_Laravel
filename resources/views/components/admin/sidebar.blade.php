<aside class="w-64 shrink-0 border-r border-gray-200 bg-white flex h-screen flex-col">

    {{-- Logo --}}
    <div class="flex h-16 items-center border-b border-gray-200 px-6">
        <h1 class="text-xl font-bold text-indigo-600">
            Administrator Panel
        </h1>
    </div>

    {{-- Navigation --}}
    <nav class="flex flex-1 flex-col p-4">

        {{-- Dashboard --}}
        <a href="/admin/dashboard"
            class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium
            {{ request()->is('admin/dashboard') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
            Dashboard
        </a>


        {{-- Products Dropdown --}}
        <details class="mb-1 group" {{ request()->is('admin/products*') ? 'open' : '' }}>

            {{-- Products --}}
            <summary
                class="flex cursor-pointer list-none items-center justify-between rounded-lg px-3 py-2.5 text-sm font-medium
                {{ request()->is('admin/products*') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
                <div class="flex items-center gap-3">
                    <span>Products</span>
                </div>

                <i data-lucide="chevron-down"
                    class="h-4 w-4 transition-transform duration-200 group-open:rotate-180"></i>
            </summary>

            {{-- Product Children --}}
            <div class="mt-1 space-y-1 pl-4">

                {{-- Product List --}}
                <a href="/admin/products"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm
                  {{ request()->is('admin/products') && !request()->is('admin/products/create')
                      ? 'bg-indigo-50 font-medium text-indigo-600'
                      : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }}">
                    <span>Product List</span>
                </a>

                {{-- Create Product --}}
                <a href="/admin/products/create"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm
                  {{ request()->is('admin/products/create')
                      ? 'bg-indigo-50 font-medium text-indigo-600'
                      : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }}">
                    <span>Create Product</span>
                </a>
            </div>
        </details>


        {{-- Categories Dropdown --}}
        <details class="mb-1 group" {{ request()->is('admin/categories*') ? 'open' : '' }}>

            {{-- Categories --}}
            <summary
                class="flex cursor-pointer list-none items-center justify-between rounded-lg px-3 py-2.5 text-sm font-medium
                {{ request()->is('admin/categories*') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
                <div class="flex items-center gap-3">
                    <span>Categories</span>
                </div>

                <i data-lucide="chevron-down"
                    class="h-4 w-4 transition-transform duration-200 group-open:rotate-180"></i>
            </summary>

            {{-- Category Children --}}
            <div class="mt-1 space-y-1 pl-4">

                {{-- Category List --}}
                <a href="/admin/categories"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm
            {{ request()->is('admin/categories') && !request()->is('admin/categories/create')
                ? 'bg-indigo-50 font-medium text-indigo-600'
                : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }}">
                    <span>Category List</span>
                </a>

                {{-- Create Category --}}
                <a href="/admin/categories/create"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm
            {{ request()->is('admin/categories/create')
                ? 'bg-indigo-50 font-medium text-indigo-600'
                : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }}">
                    <span>Create Category</span>
                </a>

            </div>
        </details>


        {{-- Users Dropdown --}}
        <details class="mb-1 group" {{ request()->is('admin/users*') ? 'open' : '' }}>

            {{-- Users --}}
            <summary
                class="flex cursor-pointer list-none items-center justify-between rounded-lg px-3 py-2.5 text-sm font-medium
                {{ request()->is('admin/users*') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
                <div class="flex items-center gap-3">
                    <span>Users</span>
                </div>

                <i data-lucide="chevron-down"
                    class="h-4 w-4 transition-transform duration-200 group-open:rotate-180"></i>
            </summary>

            {{-- User Children --}}
            <div class="mt-1 space-y-1 pl-4">

                {{-- User List --}}
                <a href="/admin/users"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm
            {{ request()->is('admin/users') && !request()->is('admin/users/create')
                ? 'bg-indigo-50 font-medium text-indigo-600'
                : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }}">
                    <span>User List</span>
                </a>

                {{-- Create User --}}
                <a href="/admin/users/create"
                    class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm
            {{ request()->is('admin/users/create')
                ? 'bg-indigo-50 font-medium text-indigo-600'
                : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }}">
                    <span>Create User</span>
                </a>

            </div>

        </details>


        <div class="mt-auto">
            <a href="/"
                class="flex items-center justify-center gap-3 rounded-lg bg-pink-600 px-3 py-2 text-sm font-medium text-white transition hover:bg-pink-700">
                <span>Logout</span>
            </a>
        </div>
    </nav>

</aside>
