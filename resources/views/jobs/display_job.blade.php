<x-layout>
    <x-slot name='heading'>
        Heding for {{$job['title']}}
    </x-slot>

    <h1>Hello im the {{$job['title']}}</h1><br>
    <x-button href='/job/{{$job->id}}/edit'>Button</x-button>

</x-layout>
