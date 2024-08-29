<x-layout>
    <h1>Hello from Jobs page</h1>
    <x-slot name='heading'>
        About jobs
    </x-slot>
    @foreach ($jobs as $job)
    <ul>
        <li style="color:blue;"><a href='/job/{{$job['id']}}'>
            Job: <strong>{{$job['title']}}</strong>, Salary: {{$job['salary']}}</li>
        </a>
    </ul>
@endforeach

</x-layout>



