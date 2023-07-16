@extends('pages.home')

@section('category')
    <div class="flex flex-col justify-center items-center mb-6">
        @foreach($blogs as $blog)
            <div class="bg-white drop-shadow-lg mb-5 pb-3">
                <div>
                    <figure>
                        <img src={{$blog->img_url}} class='w-full h-full'/>
                    </figure>
                </div>
                <div class="mt-3 p-3">
                    <p class="text-[rgb(74,87,163)] font-semibold uppercase">
                        {{$blog->category}}
                    </p>
                    <h1 class="text-2xl font-semibold my-4">
                        {{$blog->title}}
                    </h1>
                    <p class="text-sm mb-4">
                        by 
                        <span class="font-semibold">
                            {{$blog->author_name}}
                        </span>
                    </p>
                    <p class="mb-10">
                        {{Str::limit($blog->body,200,'...')}}
                    </p>

                    <a href="{{ url('blog', ['id' => $blog->id]) }}" class="uppercase bg-[rgb(74,87,163)] text-white p-3 drop-shadow-md text-sm">Continue Reading</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection