<x-app>
    <x-slot:heading>
        Register
    </x-slot:heading>
    {{-- <p>Job</p> --}}
<form method="post" action="/register">
    @csrf
    <div class="space-y-12">


      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create user</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">We Just need a handful of details from you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
                <x-form-label for='name'>Name</x-form-label>
               <x-form-input type='text' name="name" id="name" placeholder="Enter Name" autocomplete="given-name" required />
                <x-form-error name="name"/>
            </x-form-field>
         <x-form-field>
            <x-form-label for='email'>User Email</x-form-label>
           <x-form-input type='email' name="email" id="email" placeholder="Enter Email" autocomplete="given-name" required />
            <x-form-error name="email"/>
        </x-form-field>

          <x-form-field>
            <x-form-label for='password'>Password</x-form-label>
            <x-form-input type='password' name="password" id="password" placeholder="Enter Password" autocomplete="family-name" required />
            <x-form-error name="password"/>
          </x-form-field>
        </div>
      </div>


    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
    </div>
  </form>


</x-app>
