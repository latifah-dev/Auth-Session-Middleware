@extends('layout')
@section('content')
<!--Product-->
<section id="product">
      <div class="container mt-[50px]">
        <div class="box-title text-center mb-[30px]">
          <h1>Product</h1>
          <img
            src="{{URL::asset('images/Active Indicator.png')}}"
            alt=""
            class="mx-auto pb-[40px]"
          />
          <h4 class="pb-[10px]">
            Vestibulum sit amet tortor sit amet libero lobortis semper at et
            odio.
          </h4>
        </div>
      </div>
      <link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
<div class="flex items-center justify-center ">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
    <a
                    href="/product/add"
                    class="bg-[#E91E63] px-5 py-2 rounded-[39px] text-white font-[600] text-[16px]"
                    >Add Product</a
                  >
                  @if (Session::has('status'))
                  {{Session::get('message')}}
              @endif
			<table class="table text-gray-400 border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-gray-500">
					<tr>
            <th class="p-3">Image</th>
						<th class="p-3">Name</th>
						<th class="p-3 text-left">Description</th>
						<th class="p-3 text-left">Price</th>
						<th class="p-3 text-left">Stock</th>
						<th class="p-3 text-left">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productList as $product)
					<tr class="bg-gray-800">
          				<td class="p-3">
          					<div class="flex align-items-center">
								<img class="rounded-full h-12 w-12  object-cover" src="{{asset('storage/product/'.$product->image)}}" alt="unsplash image">
							</div>
						</td>
						<td class="p-3">
								{{$product->title}}
						</td>
						<td class="p-3">
								{{$product->description}}
						</td>
						<td class="p-3 font-bold">
								{{$product->price}}
						</td>
						<td class="p-3">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">{{$product->stock}}</span>
						</td>
						<td class="p-3">
							<div class="flex">
							<a href="/product/detail/{{$product->id}}" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="/product/edit/{{$product->id}}" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<form action="/product/delete/{{$product->id}}" method="post" onsubmit="return confirm('Yakin untuk menghapus data produk ?')">
							@method('delete')
							@csrf
							<button class="text-gray-400 hover:text-gray-100  ml-2" type="submit">
								<i class="material-icons-round text-base">delete_outline</i>
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
