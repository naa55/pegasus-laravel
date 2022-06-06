<x-admin>
    <div>
    <h3>Messgages</h3>
    <div class="w-8/12  p-6  mb-6 items-center mx-auto justify-center">
    <div>
        <form action="" method="get">
        <input type="text" name="search" id="date" placeholder="yyyy-mm-dd" value="{{request('search')}}">

        <button>Search</button>
        </form>
    </div>
    </div>


    @if($messages->count())
        @foreach($messages as $message)
        <!-- <a href="https://tailwindcss.com/docs/theme" class="bg-blue-600 visited:text-purple-600">
            {{$message->firstname}}

        </a> -->

        <div class="w-8/12 bg-gray-200  p-6 rounded-lg mb-6 items-center mx-auto justify-center">
            <div class="float-right">
              <span class="text-gray-600 text-sm">{{ $message->created_at->diffForHumans() }}</span>
              <span class="text-gray-600 text-sm">{{ $message->created_at }}</span>
            </div>
            <div class="mt-4">
            <ul role="list" class="list-disc pl-5 space-y-3">
                <li>{{$message->firstname}}</li>
                <li>{{$message->lastname}}</li>
                <li>{{$message->email}}</li>
            </ul>
            <p class="pt-2 mb-4">{{$message->message}}...</p>
            </div>
            <div class="flex">
              <a href="/messages/{{$message->id}}" class="bg-secondColor visited:bg-black visited:text-white mt-4 mr-4 p-2 rounded">Read More</a>
              <form action="/messages/{{$message->id}}" method="post" class="bg-black text-white mt-4 p-2  rounded">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="">Delete</button>
              </form>
            </div>
        </div>



        @endforeach
         <div class="mb-32">
           {{$messages->links()}}
         </div>
        @else
            <p>There are not post</p>
      @endif
    </div>

</x-admin>
