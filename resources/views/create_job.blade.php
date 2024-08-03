<x-app>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    {{-- <p>Job</p> --}}
<form method="post" action="/jobs/create">
    @csrf
    <div class="space-y-12">


      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">We Just need a handful of details from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
            <x-form-label for='job-title'>Job Title</x-form-label>
           <x-form-input name="job_title" id="job-title" placeholder="Job Title" autocomplete="given-name"/>
            <x-form-error name="job_title"/>
        </x-form-field>

          <x-form-field>
            <x-form-label for='salary'>Salary</x-form-label>
            <x-form-input name="salary" id="salary-title" placeholder="$50,000 USD" autocomplete="family-name"/>
            <x-form-error name="salary"/>
          </x-form-field>
        </div>
      </div>


    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>


</x-app>
