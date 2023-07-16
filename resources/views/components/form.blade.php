@extends('pages.dashboard')

@section('dashboardContent')
    <div class="container mx-auto flex items-center justify-between rounded-md drop-shadow-md bg-[rgba(186,202,255,0.69)]">
        <form action="/blog/api" method="post" class="flex flex-col w-1/2 px-3 gap-3">
            @csrf
            <h1 class="text-3xl py-3 font-semibold">
                <i class="fa-solid fa-pen-fancy"></i>
                Publish your blog
            </h1>
            <input type="text" class="p-2 outline-none rounded-md" placeholder="Title" name="title">

            <input type="text" class="p-2 outline-none rounded-md" placeholder="Author Name" name="author_name">

            <textarea type="text" class="p-2 outline-none rounded-md max-w-full max-h-32" placeholder="Body" name="body"></textarea>

            <select name="category" class="p-2 rounded-md outline-none">
                <option value="Javascript">Javascript</option>
                <option value="NodeJs">NodeJs</option>
                <option value="ReactJs">ReactJs</option>
                <option value="Laravel">Laravel</option>
            </select>

            <input type="text" class="p-2 outline-none rounded-md" placeholder="Img Url" name="img_url">

            <button type="submit" class="bg-[rgb(74,87,163)] py-2 text-white mb-5 rounded-md drop-shadow-md">Publish</button>
        </form>
        <div>
            <img src="https://img.freepik.com/free-vector/laptop-computer-isometrics-icons_24877-20838.jpg?size=626&ext=jpg"/>
        </div>
    </div>
@endsection