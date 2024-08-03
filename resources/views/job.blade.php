<x-app>
    <x-slot:heading>
        Jobs Listing Page
    </x-slot:heading>
    {{-- <p>Job</p> --}}
    @if(!empty(session('success')))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{session('success')}}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="space-y-4">
        @foreach ($jobs as $item)

               <a style="text-decoration: none"  href="{{url('jobs/'.$item['id'])}}" class="text-decoration-none block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{$item->employer['name']}}</div>
                <div>
                    <strong>{{$item['title']}}: </strong> Pays {{$item['salary']}} per year.
                </div>
                </a>

        @endforeach
        <div>
           <a href="">{{$jobs->links()}}</a>
        </div>
    </div>

</x-app>
