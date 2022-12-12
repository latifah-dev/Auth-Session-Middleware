@extends('layout')
@section('content')
<!-- component -->
<section id="blog">
      <div class="container mt-[50px]">
        <div class="box-title text-center mb-[30px]">
          <h1>Login</h1>
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
                @if($errors->any())
                {{$errors->first()}}
                @endif
                <form action="/auth/login" method="post">
                    @csrf
					<div class="mb-3 space-y-2 w-full text-xs">
						<label class="text-xl font-semibold text-gray-600 py-2">Email<abbr title="required">*</abbr></label>
						<input placeholder="masukkan email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="email" id="email">
						<p class="text-red text-xs hidden">Please fill out this field.</p>
					</div>
					<div class="mb-3 space-y-2 w-full text-xs">
						<div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                <div class="w-full flex flex-col mb-3">
                                    <label class="text-xl font-semibold text-gray-600 py-2">Password<abbr title="required">*</abbr></label>
                                    <input placeholder="masukkan password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="text" name="password" id="password">
                                </div>
						</div>
                    </div>
					<p class="text-xs text-red-500 text-right my-3">Required fields are marked with anasterisk <abbr title="Required field">*</abbr></p>
					<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
						<a href="/"class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </a>
						<button type="submit" class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Login</button>
					</div>
                </form>
		    </div>
		</div>
	</div>
</section>
@endsection
