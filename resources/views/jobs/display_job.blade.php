<x-layout>
    <x-slot name='heading'>
        Heding for {{$job['title']}}
    </x-slot>

    <h1>Hello im the {{$job['title']}}</h1><br>
    @can('edit',$job)
    <x-button href='/job/{{$job->id}}/edit'>Edit</x-button>

    @endcan

</x-layout>
