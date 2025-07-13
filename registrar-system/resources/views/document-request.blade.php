<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            📄 Document Request
        </h2>
    </x-slot>

    <div class="p-6 max-w-2xl mx-auto">
        <!-- Success/Error messages -->
        @if (session('error'))
            <div class="mb-4 text-red-600 bg-red-100 border border-red-300 rounded p-3">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="mb-4 text-green-600 bg-green-100 border border-green-300 rounded p-3">
                {{ session('success') }}
            </div>
        @endif

        <!-- Request Form -->
        <form method="POST" action="{{ route('document.request.submit') }}" class="bg-white shadow-sm rounded-lg p-6">
            @csrf

            <div class="mb-4">
                <label for="student_number" class="block font-medium text-sm text-gray-700">Student Number</label>
                <input type="text" name="student_number" id="student_number" required pattern="\d{4}-\d{5}"
                    placeholder="e.g., 2022-00123"
                    class="form-input w-full mt-1 rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="name" class="block font-medium text-sm text-gray-700">Full Name</label>
                <input type="text" name="name" id="name" required
                    class="form-input w-full mt-1 rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="course" class="block font-medium text-sm text-gray-700">Course</label>
                <input type="text" name="course" id="course" required
                    class="form-input w-full mt-1 rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="year_level" class="block font-medium text-sm text-gray-700">Year Level</label>
                <input type="text" name="year_level" id="year_level" required
                    class="form-input w-full mt-1 rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-6">
                <label for="document_request" class="block font-medium text-sm text-gray-700">Document Type</label>
                <select name="document_request" id="document_request" required
                    class="form-select w-full mt-1 rounded border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-- Select Document --</option>
                    <option value="COG">📚 Copy of Grades (COG)</option>
                    <option value="COR">📝 Certificate of Registration (COR)</option>
                    <option value="COE">📄 Certificate of Enrollment (COE)</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition">
                Submit Request
            </button>
        </form>
    </div>
</x-app-layout>
