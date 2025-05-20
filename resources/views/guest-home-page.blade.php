<x-guest-layout>
    <div class="min-h-screen bg-gray-50 dark:bg-gray-900 flex flex-col">
        <!-- Navigation -->
        <nav class="bg-white dark:bg-gray-800 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <x-application-logo class="block h-10 w-auto fill-current text-gray-600 dark:text-gray-300" />
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-4">
                        <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-700 transition duration-150 ease-in-out">
                            Log in
                        </a>
                        <a href="{{ route('register') }}" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700 transition duration-150 ease-in-out">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="text-center">
                    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                        Welcome to Our Platform
                    </h1>
                    <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500 dark:text-gray-400">
                        Discover amazing features that will help you achieve your goals.
                    </p>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Get Started
                        </a>
                        <a href="#features" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 dark:text-indigo-300 bg-indigo-100 dark:bg-indigo-900 hover:bg-indigo-200 dark:hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <div id="features" class="bg-white dark:bg-gray-800 py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h2 class="text-base text-indigo-600 dark:text-indigo-400 font-semibold tracking-wide uppercase">Features</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                            Everything you need to succeed
                        </p>
                    </div>
                    <section class="relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
                <div class="relative z-10 text-center">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white leading-tight">
                        Transform Your Business With <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Modern ERP Solutions</span>
                    </h1>
                    <p class="mt-6 text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                        Streamline operations, boost productivity, and gain real-time insights with our comprehensive ERP platform designed for growing businesses.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                        <a href="{{ route('register') }}" class="px-8 py-4 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1">
                            Start Free Trial
                        </a>
                        <a href="#demo" class="px-8 py-4 rounded-xl border-2 border-indigo-600 text-indigo-600 dark:text-indigo-400 dark:border-indigo-400 font-semibold hover:bg-indigo-50 dark:hover:bg-gray-700 transition-colors">
                            Request Demo
                        </a>
                    </div>
                    <div class="mt-12 flex items-center justify-center space-x-6 text-gray-500 dark:text-gray-400">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2">No credit card required</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2">14-day free trial</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Image/Illustration -->
                <div class="mt-16 relative max-w-4xl mx-auto">
                    <div class="relative rounded-2xl shadow-2xl overflow-hidden border border-gray-200 dark:border-gray-700">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                             alt="ERP Dashboard"
                             class="w-full h-auto object-cover">
                        <div class="absolute inset-0 bg-indigo-600/10 dark:bg-indigo-400/5"></div>
                    </div>
                    <div class="absolute -top-10 -left-10 w-32 h-32 bg-purple-200 dark:bg-purple-900 rounded-full opacity-30 mix-blend-multiply filter blur-xl"></div>
                    <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-indigo-200 dark:bg-indigo-900 rounded-full opacity-30 mix-blend-multiply filter blur-xl"></div>
                </div>
            </div>
        </section>


                    <div class="mt-10">
                        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Feature 1 -->
                            <div class="pt-6">
                                <div class="flow-root bg-gray-50 dark:bg-gray-700 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                            <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                <!-- Heroicon name: outline/globe-alt -->
                                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                </svg>
                                            </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-900 dark:text-white tracking-tight">Global Access</h3>
                                        <p class="mt-5 text-base text-gray-500 dark:text-gray-400">
                                            Access your account from anywhere in the world with our secure platform.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Feature 2 -->
                            <div class="pt-6">
                                <div class="flow-root bg-gray-50 dark:bg-gray-700 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                            <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                <!-- Heroicon name: outline/shield-check -->
                                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-900 dark:text-white tracking-tight">Secure Platform</h3>
                                        <p class="mt-5 text-base text-gray-500 dark:text-gray-400">
                                            Your data is protected with industry-leading security measures.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Feature 3 -->
                            <div class="pt-6">
                                <div class="flow-root bg-gray-50 dark:bg-gray-700 rounded-lg px-6 pb-8">
                                    <div class="-mt-6">
                                        <div>
                                            <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                                <!-- Heroicon name: outline/lightning-bolt -->
                                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <h3 class="mt-8 text-lg font-medium text-gray-900 dark:text-white tracking-tight">Lightning Fast</h3>
                                        <p class="mt-5 text-base text-gray-500 dark:text-gray-400">
                                            Experience blazing fast performance with our optimized platform.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-indigo-700 dark:bg-indigo-800">
                <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        <span class="block">Ready to get started?</span>
                        <span class="block">Create your account today.</span>
                    </h2>
                    <div class="mt-8 flex justify-center">
                        <div class="inline-flex rounded-md shadow">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                                Sign up for free
                            </a>
                        </div>
                        <div class="ml-3 inline-flex">
                            <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-200 bg-indigo-600 hover:bg-indigo-500">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-guest-layout>
