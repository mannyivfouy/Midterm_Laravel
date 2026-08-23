<aside class="w-64 shrink-0 bg-white border-r border-gray-200">

    {{-- Logo --}}
    <div class="flex h-16 items-center border-b border-gray-200 px-6">
        <h1 class="text-xl font-bold text-indigo-600">
            Administrator Panel
        </h1>
    </div>

    {{-- Navigation --}}
    <nav class="p-4">

        <a href="/admin/dashboard"
            class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-100
            {{ request()->is('admin/dashboard') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
            Dashboard
        </a>

        <a href="/admin/products"
            class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-100
            {{ request()->is('admin/products*') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
            Products
        </a>

        <a href="/admin/categories"
            class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-100
            {{ request()->is('admin/categories*') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
            Categories
        </a>

        <a href="/admin/users"
            class="mb-1 flex items-center rounded-lg px-3 py-2.5 text-sm font-medium text-gray-600 hover:bg-gray-100
            {{ request()->is('admin/users*') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-600 hover:bg-gray-100' }}">
            Users
        </a>
    </nav>

</aside>
