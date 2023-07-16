@extends('pages.dashboard')

@section('dashboardContent')
    <div class="overflow-auto flex items-center justify-center">
        <table class="border-2 border-white bg-[rgba(186,202,255,0.69)] drop-shadow-md">
            <tr class="py-5 px-3 border-2 border-white">
                <th class="py-5 px-3 border-2 border-white">Id</th>
                <th class="py-5 px-3 border-2 border-white">Title</th>
                <th class="py-5 px-3 border-2 border-white">Author</th>
                <th class="py-5 px-3 border-2 border-white">Body</th>
                <th class="py-5 px-3 border-2 border-white">Category</th>
                <th class="py-5 px-3 border-2 border-white">Action</th>
            </tr>
            @foreach ($blogs as $blog)
                    <tr class="border-2 border-white">
                        <td class="px-3 py-5 border-2 border-white">
                            {{$blog->id}}
                        </td>
                        <td class="px-3 py-5 border-2 border-white">
                            {{$blog->title}}
                        </td>
                        <td class="px-3 py-5 border-2 border-white">
                            {{$blog->author_name}}
                        </td>
                        <td class="px-3 py-5 border-2 border-white">
                            {{Str::limit($blog->body,100,'...')}}
                        </td>
                        <td class="px-3 py-5 border-2 border-white">
                            {{$blog->category}}
                        </td>
                        <td class="px-3 py-5 border-2 border-white">
                            <div class="flex items-center gap-3">
                                <a href="{{ url('/dashboard/editBlogForm', ['id' => $blog->id]) }}">Edit</a>

                                <form action="{{ url('/api/delete', ['id' => $blog->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 rounded-md drop-shadow-md text-white py-1 px-2">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
            @endforeach
        </table>
    </div>
@endsection