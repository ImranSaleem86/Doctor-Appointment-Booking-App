<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ClinicCare') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="{{ url('/') }}" class="flex items-center">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                            <span class="ml-3 text-xl font-semibold text-gray-900">ClinicCare</span>
                        </a>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="flex space-x-6">
                            <a href="{{ route('patient.login') }}" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 px-4">Patient Login</a>
                            <a href="{{ url('/doctor') }}" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 px-4">Doctor Portal</a>
                            <a href="{{ url('/admin') }}" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 px-4">Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-16 lg:px-8 xl:mt-20">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block">Healthcare</span>
                                <span class="block text-indigo-600">Made Simple</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                Book appointments, manage your health records, and connect with healthcare providers — all in one place.
                            </p>
                            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-6">
                                <div class="w-full sm:w-auto">
                                    <a href="{{ route('patient.register') }}" class="inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition-colors duration-200 md:py-3 md:text-base">
                                        Get Started
                                    </a>
                                </div>
                                <div class="w-full sm:w-auto">
                                    <a href="#features" class="w-full flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 transition-colors duration-200 md:py-4 md:text-lg md:px-10">
                                        Learn more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551076805-e1869033e561?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Healthcare professionals">
            </div>
        </div>

        <!-- Features Section -->
        <div id="features" class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Features</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        A better way to manage healthcare
                    </p>
                </div>

                <div class="mt-10">
                    <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="w-12 h-12 rounded-md bg-indigo-500 text-white flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Easy Appointment Booking</h3>
                            <p class="mt-2 text-gray-600">Book appointments with your preferred doctors in just a few clicks.</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="w-12 h-12 rounded-md bg-green-500 text-white flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Medical Records</h3>
                            <p class="mt-2 text-gray-600">Access your medical history and prescriptions in one secure place.</p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="w-12 h-12 rounded-md bg-blue-500 text-white flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Mobile Friendly</h3>
                            <p class="mt-2 text-gray-600">Access your healthcare information anytime, anywhere, on any device.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-indigo-700">
            <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Ready to get started?</span>
                    <span class="block">Create your account today.</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">
                    Join thousands of patients and healthcare providers already using ClinicCare.
                </p>
                <a href="{{ route('patient.register') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                    Sign up for free
                </a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">About</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Blog</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Contact</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Privacy</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900">Terms</a>
                    </div>
                </nav>
                <p class="mt-8 text-center text-base text-gray-400">
                    &copy; {{ date('Y') }} ClinicCare. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
