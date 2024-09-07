<x-mail::message>

<h2>Job Title: {{$job->title}}</h2>

<h6>Congrats your job is on website</h6>


<x-mail::button :url="url('/job/' . $job->id)">
    View Job
</x-mail::button>



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
