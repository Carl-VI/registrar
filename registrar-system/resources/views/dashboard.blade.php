<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('🏠 Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Message Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    👋 Welcome to dashboard!<br>
                    This is where you can manage registrar activities, documents, approvals, and more.
                </div>
            </div>

            <!-- Example Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="bg-indigo-600 text-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold">📄 Pending Requests</h3>
                    <p class="mt-2 text-3xl font-extrabold">14</p>
                </div>

                <div class="bg-yellow-500 text-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-bold">⏳ Waiting for Review</h3>
                    <p class="mt-2 text-3xl font-extrabold">5</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
