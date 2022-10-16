<x-master>

    <x-card
                    class=" max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Add New Book
                        </h2>
                    </header>
                    <form action="/books" method="POST">
                        @csrf
                         {{-- //securety resons --}}
                        <div class="mb-6">
                            <label
                                for="title"
                                class="inline-block text-lg mb-2"
                                >Book Title</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                            />
                            @error('book_title')
                              <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="author" class="inline-block text-lg mb-2"
                                >Author Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="author"
                            />
                            @error('book_author')
                              <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>  
                            @enderror
                        </div>

                        
                        {{-- <div class="mb-6">
                            <label for="logo" class="inline-block text-lg mb-2">
                                Company Logo
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="logo"
                            />
                        </div> --}}

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2"
                            >
                                Book Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                rows="10"
                            ></textarea>
                            @error('book_description')
                              <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit"
                                class="bg-black text-white rounded py-2 px-4 hover:bg-black"
                            >
                               Add Book
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form>
                
    </x-card>
</x-master>