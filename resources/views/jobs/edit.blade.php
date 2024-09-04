<x-layout>
    <x-slot name='heading'>
       Edit job
    </x-slot>

    <form action="/job/{{$job->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <input type="text" name="title" id="title" autocomplete="title" value="{{$job->title}}"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm
                                          ring-1 ring-inset ring-gray-300 placeholder:text-gray-400
                                          focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <!-- Prikaz greške za title -->
                            @error('title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <input type="text" name="salary" id="salary" autocomplete="salary" value="{{$job->salary}}"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm
                                          ring-1 ring-inset ring-gray-300 placeholder:text-gray-400
                                          focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <!-- Prikaz greške za salary -->
                            @error('salary')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <button type="submit" form="delete" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
            hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
            focus-visible:outline-red-600">Delete</button>


            <div class="flex items-center gap-x-6">
                <a href="/job/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
                        hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
                        focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </form>
    <form action="/job/{{$job->id}}" method="POST" id="delete" class="flex items-center">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
