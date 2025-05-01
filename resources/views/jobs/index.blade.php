<x-layout>
    <x-slot:heading> Jobs page</x-slot:heading>
    <h1> Welcome to jobs page</h1>
    <ul>
        <div class="space-y-4">
            @foreach ($jobs as $job)
            <li> 
                <a class="block px-4 py-6 border border-gray-200" href="/jobs/{{$job['id']}}" > 
                    <div class="font-bold text-blue-600"> {{$job->employer->name}}</div>                    
                    <div>
                        <strong>{{ $job['title'] }}</strong> pays you {{ $job['salary']}}
                    </div>
                </a>
            </li>
            @endforeach
            <div>
                {{$jobs->links()}}
            </div>
        </div>
    </ul>
</x-layout>