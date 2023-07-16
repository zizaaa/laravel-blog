@extends('pages.home')

@section('category')
    <div class="flex flex-col justify-center items-center mb-6">
        @foreach($paginatedItems as $blog)
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

    <div class="flex items-center justify-center my-5 gap-3">
        <?php
            $itemsPerPage = 2;
            $totalItems = $paginatedItems->count();
            $totalPages = ceil($totalItems / $itemsPerPage);
            $currentPage = request()->input('page', 1);
            $hasNextPage = ($currentPage < $totalPages);
        ?>

            @if ($currentPage > 1)
                <a href="{{ url('?page=' . ($currentPage - 1)) }}">Previous</a>
            @endif

            @for ($i = 1; $i <= $totalPages; $i++)
                <a href="{{ url('?page=' . $i) }}" class='bg-[rgb(74,87,163)] px-2 py-1 text-white'>{{ $i }}</a>
            @endfor

            @if ($hasNextPage)
                <a href="{{ url('?page=' . ($currentPage + 1)) }}">Next</a>
            @endif
    </div>

    </div>
@endsection