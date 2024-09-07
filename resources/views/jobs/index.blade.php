<x-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Hello from Jobs page</h1>

        <x-slot name='heading'>
            <h2 class="text-xl font-semibold mb-4">About jobs</h2>
            <form action="/jobs/create" method="get"  class="flex items-center">
                @csrf
                <x-button>CreateJob</x-button>

            </form>
        </x-slot>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($jobs as $job)
                <a href="/job/{{$job['id']}}" class="block p-4 border border-gray-200 rounded-lg shadow hover:bg-gray-100 transition-colors duration-300">
                    <h3 class="text-lg font-semibold mb-2 text-blue-800">{{$job->employer->name}}</h3>
                    <h3 class="text-lg font-semibold mb-2">{{$job['title']}}</h3>
                    <p class="text-gray-700">Salary: <strong>${{$job['salary']}}</strong></p>
                </a>
            @endforeach

        </div>
    </div>
    <div class="mx-5">{{$jobs->links();}}</div>

</x-layout>




