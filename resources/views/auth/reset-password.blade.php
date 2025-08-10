@extends('layouts.app')
@section('style')
@endsection
@section('content')

      <section class="relative">
        <div class="container py-100px">
          <div class="tab md:w-2/3 mx-auto">
            <!-- tab controller -->

            <div
              class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0"
            >
            </div>

            <!--  tab contents -->
            <div
              class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px"
            >
              <div class="tab-contents">
                <!-- login form-->
                <div
                  class="block opacity-100 transition-opacity duration-150 ease-linear"
                >
                  <!-- heading   -->
                  <form action="{{ route('password.update') }}" method="post" class="pt-25px" data-aos="fade-up">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <input type="hidden" name="email" value="{{ request()->email }}">

                    @include('admin.layouts._message')
                    <div class="mb-25px">
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block"
                        >New Password</label
                      >
                      <input
                        type="password" name="password"required=""
                        placeholder="Enter Your Email"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                      >
                    </div>

                    <div class="mb-25px">
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block"
                        >Confirm Password</label
                      >
                      <input
                        type="password" name="password_confirmation" required=""
                        placeholder="Password"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                      >
                    </div>
                    <div class="my-25px text-center">
                      <button
                        type="submit"
                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                      >
                        Chanage Password
                      </button>
                    </div>
                    <!-- other login -->
                  </form>

                </div>
                <!-- sign up form-->
              </div>
            </div>
          </div>
        </div>
        <!-- animated icons -->
        <div>
          <img
            loading="lazy"
            class="absolute right-[14%] top-[30%] animate-move-var"
            src="{{url('client/images/education/hero_shape2.png')}}"
            alt="Shape"
          >
          <img
            loading="lazy"
            class="absolute left-[5%] top-1/2 animate-move-hor"
            src="{{url('client/images/education/hero_shape3.png')}}"
            alt="Shape"
          >
          <img
            loading="lazy"
            class="absolute left-1/2 bottom-[60px] animate-spin-slow"
            src="{{url('client/images/education/hero_shape4.png')}}"
            alt="Shape"
          >
          <img
            loading="lazy"
            class="absolute left-1/2 top-10 animate-spin-slow"
            src="{{url('client/images/education/hero_shape5.png')}}"
            alt="Shape"
          >
        </div>
      </section>


@endsection
@section('script')
@endsection