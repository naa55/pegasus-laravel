<x-app>
<div class="flex justify-center mb-14">
        <div class="w-4/12 bg-secondColor p-6 rounded-lg">
            <h3 class="mb-4">Contact us</h3>
                <form action="/contact" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="firstname" class="sr-only">FirstName</label>
                        <input type="firstname" name="firstname" id="firstname" placeholder="firstname"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('firstname') border-red-500 @enderror"   value="{{old('firstname')}}">
                        @error('firstname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="lastname" class="sr-only">LastName</label>
                        <input type="lastname" name="lastname" id="lastname" placeholder="lastname"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('lastname') border-red-500 @enderror" value="{{old('lastname')}}">
                        @error('lastname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" placeholder="email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="message" class="sr-only">Messgae</label>
                        <textarea type="message" name="message" id="message" placeholder="message"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('message') border-red-500 @enderror">{{old('message')}}</textarea>
                        @error('message')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button id="send" type="submit" class="bg-backColor text-secondColor px-4 py-3 rounded font-medium" value="">Send</button>
                    </div>
                </form>
        </div>
    </div>
</x-app>
