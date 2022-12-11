@extends('layout')
@section('content')
<!-- component -->
<section id="product">
      <div class="container mt-[50px]">
        <div class="box-title text-center mb-[30px]">
          <h1>Edit Product</h1>
          <img
            src="{{URL::asset('images/Active Indicator.png')}}"
            alt=""
            class="mx-auto"
          />
        </div>
      </div>
<div class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 relative items-center">
<div class="max-w-md w-full space-y-8 p-10 bg-[#E91E63]/10 rounded-xl shadow-lg z-10">
<div class="grid  gap-8 grid-cols-1">
	<div class="flex flex-col ">
			<div class="mt-5">
                <form action="/product/update/{{$product->id}}" method="post" enctype="multipart/form-data">
                    @csrf
					@method('put')
					<div class="md:space-y-2 mb-3">
						<label class="text-xl font-semibold text-gray-600 py-2">Product Image<abbr class="hidden" title="required">*</abbr></label>
						<div class="flex items-center py-6">
							<div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
								<img id="output" src="{{asset('storage/product/'.$product->image)}}">
                            </div>
                            <label class="cursor-pointer ">
                                <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
								@if($product->image!="")
                                <input type="file" class="hidden" :multiple="multiple" :accept="accept" name="photo" id="photo" onchange="loadFile(event)">
								@else
								<input type="text" value="{{$product->image}}" class="hidden" name="photo" id="photo">
								@endif
                            </label>
						</div>
					</div>
					<div class="mb-3 space-y-2 w-full text-xs">
						<label class="text-xl font-semibold text-gray-600 py-2">Product Name <abbr title="required">*</abbr></label>
						<input placeholder="Product Name" value="{{$product->title}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="title" id="title">
						<p class="text-red text-xs hidden">Please fill out this field.</p>
					</div>
					<div class="mb-3 space-y-2 w-full text-xs">
						<div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="text-xl font-semibold text-gray-600 py-2">Price<abbr title="required">*</abbr></label>
                                    <input placeholder="Price ex:200000" value="{{$product->price}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="text" name="price" id="price">
                                </div>
								<div class="w-full flex flex-col mb-3">
									<label class="text-xl font-semibold text-gray-600 py-2">Stock<abbr title="required">*</abbr></label>
									<input placeholder="Stock ex:200" value="{{$product->stock}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="text" name="stock" id="stock">
									<p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this field.</p>
								</div>
						</div>
                    </div>
					<div class="flex-auto w-full mb-1 text-xs space-y-2">
						<label class="text-xl font-semibold text-gray-600 py-2">Description</label>
						<textarea required="" name="description" id="description" class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter description your product" spellcheck="false">{{$product->description}}</textarea>
						<p class="text-xs text-gray-400 text-left my-3">You inserted 0 characters</p>
					</div>
					<p class="text-xs text-red-500 text-right my-3">Required fields are marked with anasterisk <abbr title="Required field">*</abbr></p>
					<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
						<a href="/product/"class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </a>
						<button type="submit" class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Update</button>
					</div>
                </form>
		    </div>		
		</div>
	</div>
</section>
<script>
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection