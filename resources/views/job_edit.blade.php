<x-app>
    <x-slot:heading>
        Edit Job:{{$job->title}}
    </x-slot:heading>
    {{-- <p>Job</p> --}}

    <form method="post" action="/jobs/{{$job['id']}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">


          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Edit the Job</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">We Just need a handful of details from you.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="job-title" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
                <div class="mt-2">
                  <input type="text" name="job_title"  value="{{$job['title']}}" id="job-title" autocomplete="given-name" placeholder="Job Title" class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('job_title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                @enderror
              </div>

              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                <div class="mt-2">
                  <input type="text" name="salary" value="{{$job['salary']}}" id="salary" autocomplete="family-name" placeholder="$50,000 USD" class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                @enderror
              </div>
            </div>
          </div>


        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                    Delete
                </button>
            </div>
            <div class="flex items-center gap-x-6">
                <button form="clear-form" type="submit" class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Cancel</button>
                {{-- @can('update',$job) --}}
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Job</button>
                {{-- @endcan --}}
            </div>
          {{-- <x-button type='submit' href="/jobs/{{$jobs->id}}">Update Job</x-button> --}}
        </div>
      </form>

<form method="post" action="/jobs/{{$job->id}}" class="hidden" id="delete-form">
@csrf
@method('DELETE')
</form>
<form method="get" action="/jobs/{{$job->id}}" class="hidden" id="clear-form">
    @csrf
  @method('GET')
    </form>

</x-app>
