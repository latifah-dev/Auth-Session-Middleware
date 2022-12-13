@extends('layout')
@section('content')
<div class="px-2 md:px-6 my-3 w-full text-slate-700 dark:text-white flex flex-col items-center">
    <div class="max-w-xl text-left flex flex-col w-full items-center justify-center md:p-4 md:border border-slate-300 dark:border-slate-600 rounded-xl">
        <div
            class="w-full rounded-xl flex-col xl:flex-row bg-white dark:bg-slate-900 shadow-md"
        >
            <div
                class="rounded-t-xl w-full h-64 shadow-sm bg-cover"
                style='background-image: url("{{asset('storage/blog/'.$blog->cover)}}");'
            ></div>

            <div class="w-full p-3 flex flex-col justify-between h-auto overflow-auto lg:h-auto">
                <h1 class="text-left text-sm md:text-lg font-bold leading-normal">
                    {{$blog->title}}
                </h1>
                <p class="text-sm">{{$blog->content}}</p>

                <div class="flex mt-4">
                    <a href="/"
                        class="transition-all duration-100 text-center p-2 rounded-md text-white w-1/2 bg-gradient-to-r from-blue-700 to-blue-500 hover:shadow-md hover:from-blue-800 hover:to-blue-600"
                    >
                        Back
                </a>
                    <div class="flex flex-col ml-4 w-1/2">
                        <h2 class="text-center text-xs mt-1 mb-2 text-blue-600 dark:text-blue-400 font-bold uppercase">
                            {{$blog->author}}
                        </h2>

                        <span class="self-center text-xs text-blue-700 dark:text-blue-300 -mt-2">
                            {{$blog->updated_at}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
