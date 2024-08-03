<x-app>
    <x-slot:heading>
        Jobs Detail Page
    </x-slot:heading>
    {{-- <p>Job</p> --}}

    <h2 class="font-bold text-lg">{{$job['title']}}</h2>

    <p>This job pays {{$job['salary']}} per year.</p>
@can('edit-job',$job)
<p class="mt-5">
    <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
</p>

@endcan
</x-app>
