@extends('pages.dashboard')

@section('dashboardContent')
    <div class="container mx-auto flex items-center justify-center">
     @foreach ($blog as $item)
        <form action="{{ url('/api/update', ['id' => $item->id]) }}" method="post" class="flex flex-col w-1/2 p-5 gap-3 bg-[rgba(186,202,255,0.69)] drop-shadow-md rounded-md">
            @csrf
            @method('PUT')
            <h1 class="text-3xl py-3 font-semibold">
                <i class="fa-solid fa-pen-fancy"></i>
                Edit your blog
            </h1>
            <input type="text" class="p-2 outline-none rounded-md" value="{{$item->title}}" placeholder="Title" name="title">

            <input type="text" value="{{$item->author_name}} "class="p-2 outline-none rounded-md" placeholder="Author Name" name="author_name">

            <input type="text" value="{{$item->body}}" class="p-2 outline-none rounded-md" placeholder="Body" name="body">

            <select name="category" class="p-2 rounded-md outline-none">
                <option value="Javascript" {{ $item->category === 'Javascript' ? 'selected' : '' }}>Javascript</option>
                <option value="NodeJs" {{ $item->category === 'NodeJs' ? 'selected' : '' }}>NodeJs</option>
                <option value="ReactJs" {{ $item->category === 'ReactJs' ? 'selected' : '' }}>ReactJs</option>
                <option value="Laravel" {{ $item->category === 'Laravel' ? 'selected' : '' }}>Laravel</option>
            </select>

            <input type="text" value="{{$item->img_url}}" class="p-2 outline-none rounded-md" placeholder="Img Url" name="img_url">

            <button type="submit" class="bg-[rgb(74,87,163)] py-2 text-white mb-5 rounded-md drop-shadow-md">Publish</button>
        </form>
     @endforeach
    </div>
@endsection