<x-master>
    
    <a href="/" class="inline-block text-black ml-4 mb-4"
                    ><i class="fa-solid fa-arrow-left"></i> Back
                </a>
                <div class="mx-4">
    <x-card class="p-10">
                  <div
                            class="flex flex-col items-center justify-center text-center"
                        >
                            {{-- <img
                                class="w-48 mr-6 mb-6"
                                src="{{asset('images/no-image.png')}}"
                                alt=""
                            /> --}}
    
                            <h3 class="text-2xl mb-2">{{$book->book_title}}</h3>
                            <div class="text-xl font-bold mb-4">{{$book->author}}</div>
                            {{-- <x-listing-tags :tagsCsv="$listing->tags"/> --}}
    
                           
                            <div class="border border-gray-200 w-full mb-6"></div>
                            <div>
                                <h3 class="text-3xl font-bold mb-4">
                                    Book Description
                                </h3>
                                <div class="text-lg space-y-6">
                                  {{$book->book_description}}
    
                         
                                </div>
                            </div>
                        </div>
    </x-card>
                </div>
    </x-master>