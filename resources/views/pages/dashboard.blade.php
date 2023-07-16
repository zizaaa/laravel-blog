<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="bg-[rgb(74,87,163)] text-white">
        <div class="container mx-auto flex items-center justify-between py-5">
            <div class="left-side flex items-center gap-3 uppercase font-semibold">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/dashboard">Dashboard</a>
            </div>
            <div class="right-side flex items-center gap-3">
                <a href="/dashboard/form" class="uppercase font-semibold">
                    <i class="fa-solid fa-pen-fancy"></i>
                    Add Blog
                </a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto my-5">
        @yield('dashboardContent')
    </div>
</body>
</html>