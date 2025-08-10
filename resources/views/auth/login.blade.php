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
              <button
                class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard"
              >
                <span
                  class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"
                ></span>

                Login
              </button>
              <button
                class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard"
              >
                <span
                  class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"
                ></span>

                Register now
              </button>
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
                  <form action="" method="post" class="pt-25px" data-aos="fade-up">
                    {{ csrf_field() }}

                    @include('admin.layouts._message')
                    <div class="mb-25px">
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block"
                        >Email</label
                      >
                      <input
                        type="email"name="email" required=""
                        placeholder="Enter Your Email"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                      >
                    </div>

                    <div class="mb-25px">
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block"
                        >Password</label
                      >
                      <input
                        type="password"name="password" required=""
                        placeholder="Password"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                      >
                    </div>

                    <div
                      class="text-contentColor dark:text-contentColor-dark flex items-center justify-between"
                    >
                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          id="remember"
                          class="w-18px h-18px mr-2 block box-content"
                        >
                        <label for="remember"> Remember me</label>
                      </div>
                      <div>
                        <a
                          href="{{url('password/forgot')}}"
                          class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full"
                          >Forgot your password?
                        </a>
                      </div>
                    </div>
                    <div class="my-25px text-center">
                      <button
                        type="submit"
                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                      >
                        Log in
                      </button>
                    </div>
                    <!-- other login -->
                  </form>

                </div>
                <!-- sign up form-->
                <div
                  class="hidden opacity-0 transition-opacity duration-150 ease-linear"
                >
                  <!-- heading   -->
                  <form method="POST" action="{{url('user/store')}}" class="pt-25px" data-aos="fade-up">
                    @csrf
                    <div
                      class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px"
                    >
                      <div>
                        <label
                          class="text-contentColor dark:text-contentColor-dark mb-10px block"
                          >Username</label
                        >
                        <input
                          type="text" name="name"
                          placeholder="Username"
                          class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                        >
                      </div>
                      <div>
                        <label
                          class="text-contentColor dark:text-contentColor-dark mb-10px block"
                          >Email</label
                        >
                        <input
                          type="email" name="email"
                          placeholder="Your Email"
                          class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                        >
                      </div>
                    </div>
                    <div
                      class="grid grid-cols-1 lg:grid-cols-1 lg:gap-x-30px gap-y-25px mb-25px"
                    >
                      <div>
                        <label
                          class="text-contentColor dark:text-contentColor-dark mb-10px block"
                          >Password</label
                        >
                        <input
                          type="password" name="password"
                          placeholder="Password"
                          class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded"
                        >
                      </div>
  
                    </div>

                    <div
                      class="text-contentColor dark:text-contentColor-dark flex items-center"
                    >
                      <input
                        type="checkbox" checked
                        id="accept-pp"
                        class="w-18px h-18px mr-2 block box-content"
                      >
                      <label for="accept-pp">
                        Accept the Terms and Privacy Policy</label
                      >
                    </div>
                    <div class="mt-25px text-center">
                      <button
                        type="submit"
                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                      >
                        Register
                      </button>
                    </div>
                  </form>
                </div>
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