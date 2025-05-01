<x-layout>
    <x-slot:heading> Job page</x-slot:heading>
    <h1> Welcome to job page</h1>
    This job {{$jobs['title']}} pays you {{$jobs['salary']}}
    
    <p class="mt-6"><a href="/jobs/{{$jobs['id']}}/edit">Edit Job</a></p>
</x-layout>