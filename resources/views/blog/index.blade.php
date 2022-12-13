@extends('layout')
@section('content')
<section id="blog">
    <div class="container mt-[50px]">
        <div class="box-title text-center mb-[30px]">
            <h1>Blog</h1>
            <img src="{{URL::asset('images/Active Indicator.png')}}"alt=""class="mx-auto pb-[40px]"/>
            <h4 class="pb-[10px]">
                Vestibulum sit amet tortor sit amet libero lobortis semper at et odio.
            </h4>
        </div>
    </div>
    <div class="flex items-center justify-center ">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
    <a
                    href="/blog/add"
                    class="bg-[#E91E63] px-5 py-2 rounded-[39px] text-white font-[600] text-[16px]"
                    >Add Blog</a
                  >
                  @if (Session::has('status'))
                  {{Session::get('message')}}
              @endif
			<table class="table text-gray-400 border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-gray-500">
					<tr>
            <th class="p-3">Cover</th>
						<th class="p-3">Title</th>
						<th class="p-3 text-left">Content</th>
						<th class="p-3 text-left">Author</th>
						<th class="p-3 text-left">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($blogList as $blog)
					<tr class="bg-gray-800">
          				<td class="p-3">
          					<div class="flex align-items-center">
								<img class="rounded-full h-12 w-12  object-cover" src="{{asset('storage/blog/'.$blog->cover)}}" alt="unsplash image">
							</div>
						</td>
						<td class="p-3">
								{{$blog->title}}
						</td>
						<td class="p-3">
								{{$blog->content}}
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">{{$blog->author}}</span>
						</td>
						<td class="p-3">
							<div class="flex">
							<a href="/blog/detail/{{$blog->id}}" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">detail</i>
							</a>
							<a href="/blog/edit/{{$blog->id}}" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<form action="/blog/delete/{{$blog->id}}" method="post" onsubmit="return confirm('Yakin untuk menghapus data produk ?')">
							@method('delete')
							@csrf
							<button class="text-gray-400 hover:text-gray-100  ml-2" type="submit">
								<i class="material-icons-round text-base">delete</i>
							</button>
							</form>
							</div>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</section>
@endsection
