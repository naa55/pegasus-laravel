<x-admin>
        <div class="w-8/12 bg-gray-200  p-6 rounded-lg mb-6 items-center mx-auto justify-center">
            <div class="mt-4">
                <p>{{$message->firstname}}</p>
                <p>{{$message->lastname}}</p>
                <p>{{$message->email}}</p>
            <p class="pt-2 mb-4">{{$message->message}}...</p>
            </div>
        </div>
</x-admin>
