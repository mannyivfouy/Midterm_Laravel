@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="min-h-screen bg-gray-50">
    <div class="flex min-h-screen">

        {{-- Left Side --}}
        <div class="hidden w-1/2 bg-indigo-600 p-12 lg:flex lg:flex-col lg:justify-between">

            {{-- Logo --}}
            <div class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white">
                    <i data-lucide="store" class="h-5 w-5 text-indigo-600"></i>
                </div>

                <span class="text-xl font-bold text-white">
                    POS System
                </span>
            </div>


            {{-- Description --}}
            <div class="max-w-lg">
                <h1 class="text-4xl font-bold leading-tight text-white">
                    Manage your business
                    <span class="text-indigo-200">
                        with confidence.
                    </span>
                </h1>

                <p class="mt-5 text-base leading-7 text-indigo-100">
                    Manage your products, inventory, purchases, sales,
                    and users from one simple dashboard.
                </p>
            </div>


            {{-- Copyright --}}
            <p class="text-sm text-indigo-200">
                © {{ date('Y') }} POS System. All rights reserved.
            </p>

        </div>


        {{-- Right Side --}}
        <div class="flex w-full items-center justify-center px-6 py-12 lg:w-1/2">

            <div class="w-full max-w-md">

                {{-- Mobile Logo --}}
                <div class="mb-10 flex items-center justify-center gap-3 lg:hidden">

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600">
                        <i data-lucide="store" class="h-5 w-5 text-white"></i>
                    </div>

                    <span class="text-xl font-bold text-gray-900">
                        POS System
                    </span>

                </div>


                {{-- Header --}}
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">
                        Welcome back
                    </h2>

                    <p class="mt-2 text-sm text-gray-500">
                        Sign in to your admin account to continue.
                    </p>
                </div>


                {{-- Login Form UI --}}
                <form class="space-y-5">

                    {{-- Email --}}
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                            Email address
                        </label>

                        <input id="email" type="email" placeholder="admin@example.com"
                            class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-sm text-gray-900 placeholder-gray-400 outline-none transition
                                focus:border-indigo-600 focus:ring-1 focus:ring-indigo-600">
                    </div>


                    {{-- Password --}}
                    <div>

                        <div class="mb-2 flex items-center justify-between">

                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>

                            <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-700">
                                Forgot password?
                            </a>

                        </div>


                        <div class="relative">

                            <input id="password" type="password" placeholder="Enter your password"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 pr-11 text-sm text-gray-900 placeholder-gray-400 outline-none transition
                                    focus:border-indigo-600 focus:ring-1 focus:ring-indigo-600 cursor-pointer">

                            <button type="button" id="togglePassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 transition hover:text-gray-600 cursor-pointer"
                                aria-label="Show password">
                                <i id="eyeIcon" data-lucide="eye" class="h-5 w-5 cursor-pointer"></i>
                            </button>

                        </div>

                    </div>


                    {{-- Remember Me --}}
                    <div class="flex items-center">

                        <label class="flex cursor-pointer items-center gap-2">

                            <input type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 cursor-pointer">

                            <span class="text-sm text-gray-600">
                                Remember me
                            </span>

                        </label>

                    </div>


                    {{-- Login Button --}}

                    <a href="/admin/dashboard"
                      type="button" href="/admin/dashboard"
                      class="w-full rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-indigo-700 block text-center
                      focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 cursor-pointer"
                    >
                        Sign in
                    </a>
                </form>
            </div>

        </div>

    </div>

</div>
