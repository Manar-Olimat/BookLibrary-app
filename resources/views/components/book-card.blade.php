
{{-- the book from index foreach --}}
@props(['item'])
 
<x-card>
   <div class="flex">
       {{-- <img
           class="hidden w-48 mr-6 md:block"
           src="{{asset('images/no-image.png')}}"
           alt=""
       /> --}}
       <div>
           <h3 class="text-2xl">
               <a href="/books/{{$item->id}}">{{$item->book_title}}</a>
           </h3>
           <div class="text-xl font-bold mb-4">{{$item->book_author}}</div>
           {{-- <x-listing-tags :tagsCsv="$item->tags"/> --}}
           <div class="text-lg mt-4">
                {{$item->book_description}}
           </div>
       </div>
   </div>
</x-card>