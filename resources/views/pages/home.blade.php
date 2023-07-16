@extends('layouts.app')

@section('content')
    <div>
        <div class="container mx-auto text-center py-12">
            <h1 class="font-semibold text-5xl">
                ZizaTheProgrammer
            </h1>
            <p class="text-2xl mt-2 text-[rgb(156,161,172)]">The Lazy Dev</p>
        </div>
        <div class="text-center flex text-[rgb(156,161,172)] items-center justify-center gap-5 text-md font-semibold bg-[rgb(243,244,246)] py-5 border-y-2 border-[rgb(229,231,235)] uppercase">
            <a href="/javascript" class="hover:bg-slate-400 hover:text-white hover:drop-shadow-xl p-3 rounded-lg">Javascript</a>
            <a href="/node" class="hover:bg-slate-400 hover:text-white hover:drop-shadow-xl p-3 rounded-lg">NodeJs</a>
            <a href="/reactjs" class="hover:bg-slate-400 hover:text-white hover:drop-shadow-xl p-3 rounded-lg">ReactJs</a>
            <a href="/laravel" class="hover:bg-slate-400 hover:text-white hover:drop-shadow-xl p-3 rounded-lg">Laravel</a>
        </div>

        <div class="container mx-auto mt-3 flex flex-wrap justify-evenly gap-3">
            <div class="flex-1">
                @yield('category', View::make('components.categories.allCategory'))
            </div>
            <div class="w-1/3 px-3">
                <div class="flex flex-col bg-white drop-shadow-md p-3 mb-7">
                    <h1 class="font-semibold mb-5 text-lg">
                        About Us
                    </h1>
                    <p class="text-sm">
                        Our blog website is a hub of information and inspiration, designed to engage and captivate readers with its rich content and user-friendly interface. With a sleek and modern design, our website provides a seamless browsing experience, allowing visitors to easily navigate through various blog categories and discover insightful articles on a wide range of topics. From technology and lifestyle to travel and health, our blog covers diverse subjects, ensuring there's something for everyone.
                    </p>
                    <a href="/about" class="bg-[rgb(74,87,163)] uppercase flex items-center justify-center py-2 text-white mt-5 rounded-md drop-shadow-md">Get to know us</a>
                </div>
                <div class="flex flex-col bg-white drop-shadow-md p-3">
                    <h1 class="font-semibold mb-5 text-lg">
                        Instagram
                    </h1>
                    <div class="grid grid-cols-2 gap-3">
                        <img src="https://www.techyv.com/sites/default/users/superuser/depositphotos_43853639-stock-photo-word-cloud-programming-languages-or.jpg" class="w-[10rem] h-[10rem]"/>
                        
                        <img src="https://www.makemyassignments.com/blog/wp-content/uploads/2020/12/Programming-Language-Popularity.jpg" class="w-[10rem] h-[10rem]"/>
                        
                        <img src="https://th.bing.com/th/id/OIP.pLuuTU7pu1cbzin1Mov3bgHaE5?pid=ImgDet&rs=1" class="w-[10rem] h-[10rem]"/>
                        
                        <img src="https://th.bing.com/th/id/OIP.92vweUWkCToYtzKpyJmNPgHaGI?pid=ImgDet&rs=1" class="w-[10rem] h-[10rem]"/>
                        
                        <img src="https://www.technotification.com/wp-content/uploads/2018/08/Best-Programming-languages-for-app-development.jpg" class="w-[10rem] h-[10rem]"/>
                        
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/000/138/587/small/free-flat-digital-media-concept-vector.jpg" class="w-[10rem] h-[10rem]"/>
                    </div>
                    <a href="" class="bg-[rgb(74,87,163)] flex items-center justify-center py-2 text-white mt-5 rounded-md drop-shadow-md gap-2 uppercase text-sm">
                        <i class="fa-brands fa-instagram"></i>
                        Follow <span>@ziza</span>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="grid grid-cols-6 mb-3">
            <img src="https://th.bing.com/th/id/OIP.TBlGf2MMZtvKxORI-qIfwQHaE8?pid=ImgDet&rs=1" class=" h-[10rem]"/>
            <img src="https://res.cloudinary.com/djhbhy16x/image/upload/v1602771893/08-07___Inline_v7ix1l.png" class=" h-[10rem]"/>
            <img src="https://th.bing.com/th/id/OIP.sE0v9WWY3ni_XWZC0DhvRAHaEK?pid=ImgDet&rs=1" class=" h-[10rem]"/>
            <img src="https://i.pinimg.com/originals/28/e0/18/28e0184c5802f700ea82575f4424f65f.jpg" class=" h-[10rem]"/>
            <img src="https://image.slidesharecdn.com/weblogmcr-22-1-17-get-your-blog-seen-170211200752/95/weblogmcr-get-your-blog-seen-8-638.jpg?cb=1486843867" class=" h-[10rem]"/>
            <img src="https://th.bing.com/th/id/R.5dce4fd0baf309cbd808056e8c6a11fd?rik=wX7O6gKi%2f%2fpyGg&riu=http%3a%2f%2fwww.creativeedgemag.com%2fassets%2fcontent%2fGettyImages-873330508-300x225.jpg&ehk=Ldbkd7JAgChDkKTiniak5QLTwdrGoY3N1SzwqwR0kxQ%3d&risl=&pid=ImgRaw&r=0" class=" h-[10rem]"/>
        </div> --}}
    </div>
@endsection