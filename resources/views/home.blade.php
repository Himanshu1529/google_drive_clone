@extends('layouts.app')
@section('style')
@endsection
@section('content')
	<section>
        <!-- bannaer section -->
        <div
          class="container2-xl bg-darkdeep1 pt-50px md:pt-20 pb-205px md:pb-35 rounded-2xl relative overflow-hidden shadow-brand"
        >
          <div class="container grid grid-cols-1 lg:grid-cols-2 items-center">
            <!-- banner Left -->
            <div data-aos="fade-up">
              <h3
                class="uppercase text-secondaryColor text-size-15 mb-5px md:mb-15px font-inter tracking-5px"
              >
                SkyVault Storage
              </h3>
              <h1
                class="text-3xl text-whiteColor md:text-6xl lg:text-size-50 2xl:text-6xl leading-10 md:leading-18 lg:leading-62px 2xl:leading-18 md:tracking-half lg:tracking-normal 2xl:tracking-half font-bold mb-15px">
                Welcome to SkyVault Storage 
              </h1>
              <p class="text-size-15md:text-lg text-white font-medium mb-45px">
                Ready to store smarter? [Sign Up Now] and claim your free 25GB today!
              </p>

              <div>
                <a
                  href="{{url('login')}}"
                  class="text-sm md:text-size-15 font-semibold text-darkdeep2 bg-whiteColor border border-whiteColor px-5 md:px-30px py-3 md:py-4 hover:text-whiteColor hover:bg-darkblack rounded inline-block mr-6px md:mr-30px shadow-hero-action dark:bg-whiteColor-dark dark:hover:bg-whiteColor dark:text-whiteColor dark:hover:text-whiteColor-dark dark:border-none"
                >
                  Start now
                </a>
                <a
                  href="#"
                  class="text-sm md:text-size-15 font-semibold text-whiteColor py-3 md:py-4 hover:text-secondaryColor inline-block"
                >
                  Find out more <i class="icofont-long-arrow-right"></i>
                </a>
              </div>
            </div>
            <!-- banner right -->
            <div data-aos="fade-up">
              <div class="tilt relative">
                <img
                  class="w-full"
                  src="{{ url('client/images/about/about_8.png') }}"
                  alt=""
                ><img
                  class="absolute left-0 top-0 lg:top-4 right-0 mx-auto"
                  src="{{ url('client/images/about/about_1.png') }}"
                  alt=""
                >
              </div>
            </div>
          </div>

          <div>
            <img
              class="absolute left-1/2 bottom-[15%] animate-spin-slow"
              src="{{ url('client/images/register/register__2.png') }}"
              alt=""
            ><img
              class="absolute left-[42%] sm:left-[65%] md:left-[42%] lg:left-[5%] top-[4%] sm:top-[1%] md:top-[4%] lg:top-[10%] animate-move-hor"
              src="{{ url('client/images/herobanner/herobanner__6.png') }}"
              alt=""
            ><img
              class="absolute right-[5%] bottom-[15%]"
              src="{{ url('client/images/herobanner/herobanner__7.png') }}"
              alt=""
            ><img
              class="absolute top-[5%] left-[45%]"
              src="{{ url('client/images/herobanner/herobanner__7.png') }}"
              alt=""
            >
          </div>
        </div>
    </section>


     <!--  brand section -->
    <div data-aos="fade-up">
        <div
          class="container2-md flex flex-wrap items-center justify-center bg-white dark:bg-whiteColor-dark rounded-md mx-auto md:-translate-y-1/2 w-full shadow-brand"
        >
          <div
            class="basis-1/2 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px"
          >
            <a href="#"
              ><img src="{{url('client/images/brand/brand_1.png') }}" alt=""
            ></a>
          </div>
          <div
            class="basis-1/2 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px"
          >
            <a href="#">
              <img src="{{url('client/images/brand/brand_2.png') }}" alt=""
            ></a>
          </div>
          <div
            class="basis-1/2 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px"
          >
            <a href="#">
              <img src="{{url('client/images/brand/brand_3.png') }}" alt=""
            ></a>
          </div>
          <div
            class="basis-1/2 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px"
          >
            <a href="#">
              <img src="{{url('client/images/brand/brand_4.png') }}" alt=""
            ></a>
          </div>
          <div
            class="basis-1/2 md:basis-1/4 lg:basis-1/5 flex justify-center py-5 lg:py-35px 2xl:py-45px"
          >
            <a href="#">
              <img src="{{url('client/images/brand/brand_5.png') }}" alt=""
            ></a>
          </div>
        </div>
    </div>
   


   <!-- about and counter section -->
    <section>
        <div class="container">
          <!-- about section  -->
          <div class="grid grid-cols-1 lg:grid-cols-2 pt-30px gap-x-30px">
            <!-- about left -->
            <div
              class="relative z-0 mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0 overflow-visible"
              data-aos="fade-up"
            >
              <div class="tilt">
                <img
                  class="md:ml-[70px]"
                  src="{{ url('client/images/about/about_2.png') }}"
                  alt=""
                >
                <img
                  class="absolute right-0 sm:right-[-17px] md:right-36 lg:right-4 bottom-[91px] md:bottom-0"
                  src="{{ url('client/images/about/about_3.png') }}"
                  alt=""
                >
                <img
                  class="absolute top-[-18px] left-[30px] animate-move-hor z-[-1]"
                  src="{{ url('client/images/about/about_4.png') }}"
                  alt=""
                >
                <img
                  class="absolute top-[30%] left-0 z-[-1]"
                  src="{{ url('client/images/about/about_11.png') }}"
                  alt=""
                >
              </div>
              <!-- experience -->
            </div>
            <!-- about right -->
            <div data-aos="fade-up">
              <h3
                class="text-3xl md:text-size-45 leading-10 md:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px"
              >
                Why Choose  
                <span
                  class="relative after:w-full after:h-[7px] after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5"
                  >SkyVault</span
                >
                for Your Storage Needs?
              </h3>
              <p
                class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark mb-6 pl-3 border-l-2 border-primaryColor"
              >
                Discover reliable free cloud storage with 25GB per user, perfect for safeguarding photos, documents, and files. At SkyVault Storage, we make online file sharing simple, secure, and accessible from any device
              </p>
              <ul class="space-y-5">
                <li class="flex items-center group">
                  <i
                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                  ></i>
                  <p
                    class="text-sm md:text-base font-medium text-blackColor dark:text-blackColor-dark"
                  >
                    Get 25GB free upon signup – no hidden fees, just ample space for your essentials.
                  </p>
                </li>
                <li class="flex items-center group">
                  <i
                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                  ></i>
                  <p
                    class="text-sm md:text-base font-medium text-blackColor dark:text-blackColor-dark"
                  >
                    Advanced encryption protects your data, ensuring privacy in the cloud.
                  </p>
                </li>
                <li class="flex items-center group">
                  <i
                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                  ></i>
                  <p
                    class="text-sm md:text-base font-medium text-blackColor dark:text-blackColor-dark"
                  >
                    Sync files across devices with our user-friendly app and web interface.
                  </p>
                </li>
                <li class="flex items-center group">
                  <i
                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"
                  ></i>
                  <p
                    class="text-sm md:text-base font-medium text-blackColor dark:text-blackColor-dark"
                  >
                    Experience seamless performance for all your <strong>secure online storage</strong> requirements.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <!-- about counter -->
          
        </div>
    </section>



   	 <!-- Popular Subject Sectoion-->
      <section id="about" class="bg-lightGrey10 dark:bg-lightGrey10-dark pt-50px pb-110px">
        <div class="container">
          <!-- about section  -->
          <div class="grid grid-cols-1 lg:grid-cols-2 pt-30px gap-x-30px">
            <!-- about left -->
            <div
              class="mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0"
              data-aos="fade-up"
            >
              <div class="relative">
                <div>
                  <img
                    class="absolute bottom-9 lg:bottom-[-50px] right-[50px] animate-move-hor"
                    src="{{ url('client/images/service/service__shape__1.png') }}"
                    alt=""
                  >
                </div>
                <span
                  class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
                >
                  About us
                </span>
                <h3
                  class="text-3xl md:text-size-35 2xl:text-size-38 3xl:text-size-42 leading-10 md:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark pb-25px"
                >
                  Provide User Friendly Interface For You
                </h3>
                <p
                  class="text-sm md:text-base text-contentColor dark:text-contentColor-dark mb-10px 2xl:mb-50px"
                >
                  At SkyVault Storage, we're passionate about empowering users with secure cloud storage solutions. Founded in 2025, our journey began with a simple goal: to provide generous, free storage without compromising on security or ease of use.
                </p>
                <p
                  class="text-sm md:text-base leading-7 text-contentColor dark:text-contentColor-dark mb-10 pl-3 border-l-[3px] border-secondaryColor"
                >
                  Our team of tech enthusiasts recognized the growing need for reliable online data storage in a digital world. We offer 25GB free to every user, helping individuals and small teams store files safely in the cloud. Whether you're backing up family photos or collaborating on projects, SkyVault is your trusted partner.
                </p>
                <div>
                  <a
                    class="text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor"
                    href="#"
                    >Explore More <i class="icofont-long-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- sbject right -->
            <div class="relative z-0 overflow-visible">
              <!-- animted area -->
              <div data-aos="fade-up">
                <img
                  class="absolute sm:block xl:left-1/4 z-[-1] top-6 animate-move-var"
                  src="{{ url('client/images/service/service__shape__bg__1.png') }}"
                  alt=""
                >
              </div>
              <!-- subject card -->
              <div class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                <!-- card 1 -->
                <div data-aos="fade-up">
                  <div
                    class="p-35px group bg-whiteColor rounded-xl transition-all duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor"
                  >
                    <!-- card svg -->
                    <div
                      class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                    >
                      <div class="relative w-20 h-[60px]">
                        <svg
                          class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M6.30281 28.9536H8.45394C9.05625 28.9536 9.48648 29.5426 9.48648 30.2495V36.8465C9.48648 37.6711 9.05625 38.2602 8.45394 38.2602H6.30281C5.78654 38.2602 5.27026 37.6711 5.27026 36.8465V30.2495C5.27026 29.5426 5.78654 28.9536 6.30281 28.9536Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M13.7027 23.7833H15.8987C16.4257 23.7833 16.8649 24.4239 16.8649 25.3207V36.7228C16.8649 37.6196 16.4257 38.2602 15.8987 38.2602H13.7027C13.0879 38.2602 12.6487 37.6196 12.6487 36.7228V25.3207C12.6487 24.4239 13.0879 23.7833 13.7027 23.7833Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M21.0596 19.6471H23.2108C23.727 19.6471 24.2433 20.412 24.2433 21.1769V36.7303C24.2433 37.6227 23.727 38.2602 23.2108 38.2602H21.0596C20.4573 38.2602 20.0271 37.6227 20.0271 36.7303V21.1769C20.0271 20.412 20.4573 19.6471 21.0596 19.6471Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M28.4381 15.5109H30.5892C31.1055 15.5109 31.6217 16.1499 31.6217 17.0445V36.7265C31.6217 37.6212 31.1055 38.2602 30.5892 38.2602H28.4381C27.8357 38.2602 27.4055 37.6212 27.4055 36.7265V17.0445C27.4055 16.1499 27.8357 15.5109 28.4381 15.5109Z"
                            fill="#5F2DED"
                          ></path>
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M26.9989 7.6293L23.05 18.137L20.3744 15.4678C15.622 19.6266 9.96272 22.5976 3.63238 24.2568C1.36694 24.9297 0.353173 21.6176 2.74495 21.0505C8.47735 19.533 13.5443 16.8156 17.8363 13.1279L15.5453 10.8879L26.9989 7.6293Z"
                            fill="#FFB31F"
                          ></path>
                        </svg>

                        <div class="service__bg__img w-20 h-[60px]">
                          <svg
                            class="w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                              fill="#5F2DED"
                              fill-opacity="0.05"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <div class="service__small__img w-7 h-[60px]">
                        <svg
                          class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                            stroke="#FFB31F"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <!-- card content -->
                    <div>
                      <a
                        href="#"
                        class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                      >
                        Innovation
                      </a>
                      <p
                        class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                      >
                        Constantly improving our platform for faster, more secure storage.
                      </p>
                      <div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card 2 -->
                <div data-aos="fade-up">
                  <div class="md:translate-y-[30px]">
                    <div
                      class="p-35px group bg-whiteColor rounded-xl transition-all duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor "
                    >
                      <!-- card svg -->
                      <div
                        class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                      >
                        <div class="relative w-20 h-[60px]">
                          <svg
                            class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M28.525 44.0499H20.4753C18.7037 44.0499 17.2625 42.7046 17.2625 41.0509C17.2625 36.723 15.7895 32.4935 13.115 29.1417C11.2743 26.835 10.3045 24.0912 10.3103 21.2067C10.3172 17.7711 11.7888 14.4906 14.4541 11.9697C17.1201 9.44796 20.6146 8.03229 24.2939 7.98346C28.1232 7.9323 31.7312 9.28502 34.4566 11.7915C37.1864 14.302 38.6898 17.6547 38.6898 21.2322C38.6898 24.0423 37.7594 26.7272 35.9993 28.9965C33.2113 32.5912 31.7377 36.7597 31.7377 41.0511C31.7377 42.7046 30.2964 44.0499 28.525 44.0499ZM24.5008 10.6603C24.4454 10.6603 24.3904 10.6607 24.3349 10.6614C18.3004 10.7416 13.1927 15.5731 13.1814 21.2117C13.1767 23.5138 13.9501 25.7029 15.418 27.5424C18.4589 31.3533 20.1335 36.1507 20.1335 41.0509C20.1335 41.2278 20.2869 41.3716 20.4752 41.3716H28.5249C28.7133 41.3716 28.8665 41.2278 28.8665 41.051C28.8665 36.1921 30.5286 31.4809 33.6733 27.4265C35.0768 25.6168 35.8187 23.4749 35.8187 21.2321C35.8187 18.3773 34.6191 15.7019 32.4409 13.6987C30.3067 11.7359 27.4925 10.6603 24.5008 10.6603Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M34.5884 35.3186H14.4117V37.9969H34.5884V35.3186Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M23.8501 30.4466L21.4301 29.0054L24.8268 24.0417H21.5536C21.0311 24.0417 20.5498 23.7768 20.297 23.3501C20.0444 22.9235 20.0602 22.4024 20.3384 21.9897L25.0805 14.9543L27.5109 16.38L24.1519 21.3634H27.4464C27.9708 21.3634 28.4533 21.63 28.7053 22.059C28.9573 22.4879 28.9385 23.0109 28.6564 23.4232L23.8501 30.4466Z"
                              fill="#FFB31F"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M25.9355 2.17908H23.0645V6.19654H25.9355V2.17908Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M10.6816 6.93133L8.65027 8.8241L11.6922 11.6649L13.7235 9.77218L10.6816 6.93133Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              d="M38.3173 6.93027L35.2754 9.77112L37.3067 11.6639L40.3486 8.82304L38.3173 6.93027Z"
                              fill="#5F2DED"
                            ></path>
                          </svg>

                          <div class="service__bg__img w-20 h-[60px]">
                            <svg
                              class="w-20 h-[60px]"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                fill="#5F2DED"
                                fill-opacity="0.05"
                              ></path>
                            </svg>
                          </div>
                        </div>
                        <div class="service__small__img w-7 h-[60px]">
                          <svg
                            class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                              stroke="#FFB31F"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- card content -->
                      <div>
                        <a
                          href="#"
                          class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                        >
                          User-Centric
                        </a>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                        >
                          Prioritizing privacy and simplicity in every feature.
                        </p>
                        <div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card 3 -->
                <div data-aos="fade-up">
                  <div
                    class="p-35px group bg-whiteColor rounded-xl transition-all duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor"
                  >
                    <!-- card svg -->
                    <div
                      class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                    >
                      <div class="relative w-20 h-[60px]">
                        <svg
                          class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                            d="M45.8483 26.6935C45.3965 26.2639 44.7953 26.0262 44.1558 26.0262C43.5164 26.0262 42.9166 26.2639 42.4634 26.6935L33.7409 34.9886C33.7306 34.9886 33.7183 34.9867 33.708 34.9867H25.1438C25.1438 34.9541 25.1458 34.9229 25.1458 34.8898C25.1458 34.2537 25.0301 33.6443 24.8165 33.0772H29.4735C29.7924 33.6951 30.4593 34.1214 31.2316 34.1214C32.314 34.1214 33.193 33.2873 33.193 32.258C33.193 31.2287 32.314 30.3946 31.2316 30.3946C30.4593 30.3946 29.7924 30.821 29.4735 31.4389H23.8321C22.7928 30.2507 21.2243 29.4949 19.4716 29.4949C17.9393 29.4949 16.5502 30.0736 15.53 31.0111L15.5281 31.0092L2.44995 43.5669H15.5486L19.0217 40.2842H33.708C34.1956 40.2842 34.6542 40.1645 35.0526 39.9548C35.325 39.8434 35.5749 39.6827 35.79 39.4776L45.8488 29.9124C46.3015 29.4832 46.5499 28.911 46.5499 28.3029C46.5499 27.6949 46.3015 27.1231 45.8483 26.6935ZM19.4716 37.1422C18.1633 37.1422 17.1034 36.1325 17.1034 34.8902C17.1034 33.6461 18.1633 32.6369 19.4716 32.6369C20.7799 32.6369 21.8397 33.6466 21.8397 34.8902C21.8397 36.1325 20.7799 37.1422 19.4716 37.1422ZM33.6664 38.9106C32.9255 38.9106 32.3253 38.3402 32.3253 37.6352C32.3253 36.9321 32.925 36.3599 33.6664 36.3599C34.4077 36.3599 35.0075 36.9321 35.0075 37.6352C35.0075 38.3402 34.4077 38.9106 33.6664 38.9106ZM36.3001 36.6749C36.133 36.2634 35.8606 35.9028 35.5127 35.6209L42.0537 29.4026C42.2727 29.7814 42.602 30.096 43.0019 30.3024L36.3001 36.6749ZM36.231 9.4762H28.4753V8.49301H36.231V9.4762ZM36.231 12.0986H28.4753V11.1155H36.231V12.0986ZM23.3048 9.4762H15.5486V8.49301H23.3044L23.3048 9.4762ZM23.3048 12.0986H15.5486V11.1155H23.3044L23.3048 12.0986ZM41.057 5.87011H39.3308V4.23132H28.589C27.7295 4.23132 26.9215 4.55004 26.3139 5.1283C26.1517 5.28253 26.0106 5.45121 25.8886 5.63014C25.7666 5.45121 25.6255 5.28253 25.4633 5.1283C24.8557 4.55004 24.0477 4.23132 23.1882 4.23132H12.4464V5.87011H10.7231V23.8991H24.0217C24.2677 24.6582 25.011 25.2103 25.8901 25.2103C26.7691 25.2103 27.5125 24.6586 27.7585 23.8991H41.057V5.87011ZM27.0455 5.82305C27.4576 5.43071 28.0059 5.2145 28.589 5.2145H38.2964L38.2797 20.6211H30.4471C29.0344 20.6211 27.6364 20.9873 26.4237 21.6644L26.407 7.29176C26.4065 6.73727 26.6329 6.21586 27.0455 5.82305ZM13.4803 5.21497H23.1877C23.7708 5.21497 24.3191 5.43118 24.7312 5.82352C25.1433 6.21586 25.3702 6.73773 25.3697 7.29223L25.353 21.6653C24.1388 20.9878 22.7413 20.6215 21.3296 20.6215H13.4803V5.21497Z"
                            fill="#5F2DED"
                          ></path>
                          <rect
                            x="15"
                            y="8.54175"
                            width="8"
                            height="0.993317"
                            fill="#FFB31F"
                          ></rect>
                          <rect
                            x="28"
                            y="8.54175"
                            width="8"
                            height="0.993317"
                            fill="#FFB31F"
                          ></rect>
                          <rect
                            x="15"
                            y="11.5198"
                            width="8"
                            height="0.993319"
                            fill="#FFB31F"
                          ></rect>
                          <rect
                            x="28"
                            y="11.5198"
                            width="8"
                            height="0.993319"
                            fill="#FFB31F"
                          ></rect>
                        </svg>

                        <div class="service__bg__img w-20 h-[60px]">
                          <svg
                            class="w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                              fill="#5F2DED"
                              fill-opacity="0.05"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <div class="service__small__img w-7 h-[60px]">
                        <svg
                          class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                            stroke="#FFB31F"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <!-- card content -->
                    <div>
                      <a
                        href="#"
                        class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                      >
                        Reliability
                      </a>
                      <p
                        class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                      >
                        Built on robust technology to keep your data accessible 24/7.
                      </p>
                      <div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card 4 -->
                <div data-aos="fade-up">
                  <div class="md:translate-y-[30px]">
                    <div
                      class="p-35px group bg-whiteColor rounded-xl transition-all  duration-300 shadow-dropdown-secodary hover:bg-primaryColor hover:-translate-y-5px hover:text-whiteColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor "
                    >
                      <!-- card svg -->
                      <div
                        class="-translate-y-2 flex justify-between overflow-hidden mb-10px"
                      >
                        <div class="relative w-20 h-[60px]">
                          <svg
                            class="absolute inline-block translate-y-3 translate-x-2 w-20 h-[60px]"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M6.30281 28.9536H8.45394C9.05625 28.9536 9.48648 29.5426 9.48648 30.2495V36.8465C9.48648 37.6711 9.05625 38.2602 8.45394 38.2602H6.30281C5.78654 38.2602 5.27026 37.6711 5.27026 36.8465V30.2495C5.27026 29.5426 5.78654 28.9536 6.30281 28.9536Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M13.7027 23.7833H15.8987C16.4257 23.7833 16.8649 24.4239 16.8649 25.3207V36.7228C16.8649 37.6196 16.4257 38.2602 15.8987 38.2602H13.7027C13.0879 38.2602 12.6487 37.6196 12.6487 36.7228V25.3207C12.6487 24.4239 13.0879 23.7833 13.7027 23.7833Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M21.0596 19.6471H23.2108C23.727 19.6471 24.2433 20.412 24.2433 21.1769V36.7303C24.2433 37.6227 23.727 38.2602 23.2108 38.2602H21.0596C20.4573 38.2602 20.0271 37.6227 20.0271 36.7303V21.1769C20.0271 20.412 20.4573 19.6471 21.0596 19.6471Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M28.4381 15.5109H30.5892C31.1055 15.5109 31.6217 16.1499 31.6217 17.0445V36.7265C31.6217 37.6212 31.1055 38.2602 30.5892 38.2602H28.4381C27.8357 38.2602 27.4055 37.6212 27.4055 36.7265V17.0445C27.4055 16.1499 27.8357 15.5109 28.4381 15.5109Z"
                              fill="#5F2DED"
                            ></path>
                             <path
                            class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M26.9989 7.6293L23.05 18.137L20.3744 15.4678C15.622 19.6266 9.96272 22.5976 3.63238 24.2568C1.36694 24.9297 0.353173 21.6176 2.74495 21.0505C8.47735 19.533 13.5443 16.8156 17.8363 13.1279L15.5453 10.8879L26.9989 7.6293Z"
                              fill="#FFB31F"
                            ></path>
                          </svg>

                          <div class="service__bg__img w-20 h-[60px]">
                            <svg
                              class="w-20 h-[60px]"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                class="group-hover:fill-whiteColor dark:group-hover:fill-whiteColor-dark"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M63.3775 44.4535C54.8582 58.717 39.1005 53.2202 23.1736 47.5697C7.2467 41.9192 -5.18037 32.7111 3.33895 18.4477C11.8583 4.18418 31.6595 -2.79441 47.5803 2.85105C63.5011 8.49652 71.8609 30.2313 63.3488 44.4865L63.3775 44.4535Z"
                                fill="#5F2DED"
                                fill-opacity="0.05"
                              ></path>
                            </svg>
                          </div>
                        </div>
                        <div class="service__small__img w-7 h-[60px]">
                          <svg
                            class="icon__hover__img w-7 h-[60px] opacity-0 group-hover:opacity-100"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M16.5961 10.265L19 1.33069L10.0022 3.73285L1 6.1306L7.59393 12.6627L14.1879 19.1992L16.5961 10.265Z"
                              stroke="#FFB31F"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </svg>
                        </div>
                      </div>
                      <!-- card content -->
                      <div>
                        <a
                          href="#"
                          class="text-2xl lg:text-lg 2xl:text-2xl font-semibold mb-15px md:mb-0 2xl:mb-15px hover:text-secondaryColor font-hind  dark:text-whiteColor dark:hover:text-secondaryColor dark:transition-all dark:duration-300"
                        >
                          Ironclad Protection
                        </a>
                        <p
                          class="text-sm lg:text-xs 2xl:text-sm text-contentColor group-hover:text-whiteColor mb-15px lg:mb-2 2xl:mb-15px transition-all duration-300"
                        >
                          With state-of-the-art encryption, your data stays private, no matter where you access it.
                        </p>
                        <div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- pricing plan section -->
      <section id="price">
        <div class="container pt-90px pb-100px">
          <!-- heading -->

          <div class="mb-5 md:mb-10">
            <div class="relative" data-aos="fade-up">
              <div>
                <div class="text-center">
                  <span
                    class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
                  >
                    Pricing Plan
                  </span>
                </div>
              </div>
              <h3
                class="text-3xl md:text-size-35 2xl:text-size-38 3xl:text-size-42 md:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark text-center"
              >
                SkyVault Storage Pricing Simple  <br >
                 & Transparent
              </h3>
            </div>
          </div>

          <!-- plans -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-30px">
            <!-- plan 1 -->
            <div
              class="p-10 pt-50px bg-lightGrey10 hover:bg-whiteColor hover:shadow-plan transition-all duration-300 rounded-lg dark:bg-lightGrey10-dark dark:hover:bg-whiteColor-dark"
              data-aos="fade-up"
            >
              <!-- plan pricing -->
              <div class="relative mb-55px">
                <h3
                  class="text-size-28 font-semibold text-blackColor leading-45px mb-15px uppercase dark:text-blackColor-dark"
                >
                  Basic
                </h3>
                <h6
                  class="text-5xl text-blackColor font-medium mb-15px dark:text-blackColor-dark"
                >
                  <span class="text-size-58 pr-1">₹</span>49
                  <span
                    class="text-size-22 text-contentColor dark:text-contentColor-dark"
                    >/ year</span
                  >
                </h6>
                <img
                  class="absolute top-0 right-0 -translate-y-30px"
                  src="{{ url('client/images/icon/price__1.png') }}"
                  alt=""
                >
              </div>
              <!-- plan feature -->

              <div>
                <ul class="flex flex-col gap-y-30px">
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >25GB Storage</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Basic uploads</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >
                      Easily Sharing</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Encryption and Security</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-close text-whiteColor bg-lightGrey6 px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >
                      Priority support</span
                    >
                  </li>
                </ul>
              </div>
              <!-- plan bottom -->
              <div>
                <a
                  href="{{ route('manual-payment.form', ['plan' => 'Basic', 'amount' => 49]) }}"
                  class="w-full py-10px px-25px text-size-15 text-center text-whiteColor bg-primaryColor border border-primaryColor hover:bg-whiteColor hover:text-primaryColor mb-25px mt-30px rounded dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                  >Get Started</a
                >
                <p
                  class="text-size-15 text-contentColor dark:text-contentColor-dark"
                >
                  No creadit card required
                </p>
              </div>
            </div>
            <!-- plan 2 -->
            <div
              class="p-10 pt-50px bg-lightGrey10 hover:bg-whiteColor hover:shadow-plan transition-all duration-300 rounded-lg dark:bg-lightGrey10-dark dark:hover:bg-whiteColor-dark"
              data-aos="fade-up"
            >
              <!-- plan pricing -->
              <div class="relative mb-55px">
                <h3
                  class="text-size-28 font-semibold text-blackColor leading-45px mb-15px uppercase dark:text-blackColor-dark"
                >
                  Pro
                </h3>
                <h6
                  class="text-5xl text-blackColor font-medium mb-15px dark:text-blackColor-dark"
                >
                  <span class="text-size-58 pr-1">₹</span>199
                  <span
                    class="text-size-22 text-contentColor dark:text-contentColor-dark"
                    >/ year</span
                  >
                </h6>
                <img
                  class="absolute top-0 right-0 -translate-y-30px"
                  src="{{ url('client/images/icon/price__2.png') }}"
                  alt=""
                >
              </div>
              <!-- plan feature -->

              <div>
                <ul class="flex flex-col gap-y-30px">
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >75GB Storage</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Basic uploads</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >Easily Sharing</span>
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Encryption and Security</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Priority support</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Advanced Sharing</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-close text-whiteColor bg-lightGrey6 px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >
                      Team collaboration</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-close text-whiteColor bg-lightGrey6 px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >
                      Audit Logs</span
                    >
                  </li>
                </ul>
              </div>
              <!-- plan bottom -->
              <div>
                <a
                  href="{{ route('manual-payment.form', ['plan' => 'Pro', 'amount' => 199]) }}"
                  class="w-full py-10px px-25px text-size-15 text-center text-whiteColor bg-secondaryColor border border-secondaryColor hover:bg-whiteColor hover:text-secondaryColor mb-25px mt-30px rounded dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                  >Get Started</a
                >
                <p
                  class="text-size-15 text-contentColor dark:text-contentColor-dark"
                >
                  No creadit card required
                </p>
              </div>
            </div>
            <!-- plan 3 -->
            <div
              class="p-10 pt-50px bg-lightGrey10 hover:bg-whiteColor hover:shadow-plan transition-all duration-300 rounded-lg dark:bg-lightGrey10-dark dark:hover:bg-whiteColor-dark"
              data-aos="fade-up"
            >
              <!-- plan pricing -->
              <div class="relative mb-55px">
                <h3
                  class="text-size-28 font-semibold text-blackColor leading-45px mb-15px uppercase dark:text-blackColor-dark"
                >
                  Business
                </h3>
                <h6
                  class="text-5xl text-blackColor font-medium mb-15px dark:text-blackColor-dark"
                >
                  <span class="text-size-58 pr-1">₹</span>299
                  <span
                    class="text-size-22 text-contentColor dark:text-contentColor-dark"
                    >/ month</span
                  >
                </h6>
                <img
                  class="absolute top-0 right-0 -translate-y-30px"
                  src="{{ url('client/images/icon/price__3.png') }}"
                  alt=""
                >
              </div>
              <!-- plan feature -->

              <div>
                <ul class="flex flex-col gap-y-30px">
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >1TB Storage</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Basic uploads</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >Easily Sharing</span>
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Encryption and Security</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Priority support</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                      >Advanced Sharing</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >
                      Team collaboration</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >
                      Audit Logs</span
                    >
                  </li>
                  <li>
                    <i
                      class="icofont-check text-whiteColor bg-secondaryColor px-1 py-3px mr-15px rounded-full text-xs"
                    ></i
                    ><span
                      class="text-lg text-deepblue font-medium dark:text-deepblue-dark"
                    >
                      API access</span
                    >
                  </li>
                </ul>
              </div>
              <!-- plan bottom -->
              <div>
                <a
                  href="{{ route('manual-payment.form', ['plan' => 'Business', 'amount' => 299]) }}"
                  class="w-full py-10px px-25px text-size-15 text-center text-whiteColor bg-primaryColor border border-primaryColor hover:bg-whiteColor hover:text-primaryColor mb-25px mt-30px rounded dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                  >Get Started</a
                >
                <p
                  class="text-size-15 text-contentColor dark:text-contentColor-dark"
                >
                  No creadit card required
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Registration Sectoion-->
      <section id="contact" class="bg-register bg-cover bg-center bg-no-repeat lg:mb-150px">
        <!-- registration overlay -->
        <div
          class="overlay bg-blueDark bg-opacity-90 py-20 lg:pt-[90px] lg:pb-0 relative z-0"
        >
          <!-- animate icons -->
          <div class="container">
            <!-- about section  -->
            <div class="grid grid-cols-1 lg:grid-cols-12 pt-30px gap-x-30px">
              <!-- about left -->
              <div
                class="mb-30px lg:mb-0 pb-0 md:pb-30px xl:pb-0 lg:col-start-1 lg:col-span-7"
                data-aos="fade-up"
              >
                <div class="relative">
                  <span
                    class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block"
                  >
                    Contact us
                  </span>
                  <h3
                    class="text-3xl md:text-[35px] 2xl:text-size-42 leading-[45px] 2xl:leading-2xl font-bold text-whiteColor pb-25px"
                  >
                    Contact Us at SkyVault Storage
                  </h3>
                  <div class="flex gap-x-5 items-center">
                    <div>
                      
                        <span
                          class="animate-buble absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"
                        ></span
                        ><span
                          class="animate-buble2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"
                        ></span>
                        <img src="./assets/images/icon/video.png" alt="" >
                      </button>
                    </div>

                    <div>
                      <p
                        class="text-size-15 md:text-[22px] lg:text-lg 2xl:text-[22px] leading-6 md:leading-9 lg:leading-8 2xl:leading-9 font-semibold text-white"
                      >
                        We're here to help with all your cloud storage needs! Whether you have questions about our 25GB free storage, need support with file uploads, or want to share feedback, our team is ready to assist. Reach out via the methods below for quick and reliable responses.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- sbject right -->
              <div
                class="overflow-visible lg:col-start-8 lg:col-span-5 relative z-1 lg:-mb-150px"
              >
                <form
                  class="p-35px pt-10 bg-lightGrey10 dark:bg-lightGrey10-dark rounded shadow-experience"
                  data-aos="fade-up"
                >
                  <h3
                    class="text-xl text-blackColor dark:text-blackColor-dark font-semibold mb-5 font-inter"
                  >
                    Fill Your Details
                  </h3>

                  <input
                    type="text"
                    placeholder="Your Name"
                    class="w-full px-15px py-3 bg-lightGrey8 text-base mb-25px focus:outline-none"
                  >

                  <div class="grid grid-cols-1 xl:grid-cols-2 xl:gap-x-30px">
                    <input
                      type="email"
                      placeholder="Email Address"
                      class="w-full px-15px py-3 bg-lightGrey8 text-base mb-25px focus:outline-none"
                    >

                    <input
                      type="text"
                      placeholder="Phone"
                      class="w-full px-15px py-3 bg-lightGrey8 text-base mb-25px focus:outline-none"
                    >
                  </div>
                  <input
                    type="text"
                    placeholder="Address"
                    class="w-full px-15px py-3 bg-lightGrey8 text-base mb-25px focus:outline-none"
                  >

                  <textarea
                   
                    placeholder="Comment"
                    class="w-full px-15px pb-3 pt-5 bg-lightGrey8 text-base mb-25px h-[155px] placeholder:text-blackColor"
                    
                    cols="30"
                    rows="10"
                  ></textarea>
                  <div>
                    <button
                      type="submit"
                      class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                    >
                      Sign Up
                      <i
                        class="icofont-long-arrow-right group-hover:text-primaryColor"
                      ></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection