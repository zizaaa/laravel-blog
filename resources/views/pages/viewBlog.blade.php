@extends('pages.home')

@section('category')
    <div class="flex flex-col justify-center items-center mb-6">
        @foreach($blog as $blog)
            <div class="bg-white drop-shadow-lg mb-5">
                <div>
                    <figure>
                        <img src={{$blog->img_url}} class='w-full h-full'/>
                    </figure>
                </div>
                <div class="mt-3 p-3">
                    <p class="text-[rgb(30,64,175)] font-semibold uppercase">
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
                    <p>
                        {{$blog->body}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection