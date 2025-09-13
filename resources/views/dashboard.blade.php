<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Excercises
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" underline p-6 text-gray-600 hover:text-gray-900">
                    <a href="/students">Student List</a>
                </div>
                <div class=" underline p-6 text-gray-600 hover:text-gray-900">
                    <a href="/studentform">Add Student</a>
                </div>
                <div class=" underline p-6 text-gray-600 hover:text-gray-900">
                    <a href="/actlog">Activity Logs</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
