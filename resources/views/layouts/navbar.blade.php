
    <header>
      <!-- header top start -->
      <div class="bg-blackColor2 dark:bg-lightGrey10-dark hidden lg:block">
        <div
          class="container 3xl:container-secondary-lg 4xl:container mx-auto text-whiteColor text-size-12 xl:text-sm py-5px xl:py-9px"
        >
          <div class="flex justify-between items-center">
            <div>
              <p>Call Us: + 91 935 0579 660 - Mail Us: info@intinstitute.com</p>
            </div>
            <div class="flex gap-37px items-center">
              <div>
                <p>
                  <i
                    class="icofont-location-pin text-primaryColor text-size-15 mr-5px"
                  ></i>
                  <span>VijayRaj Complex, Opp HDFC Bank, Subhash Chowk, Sonipat, Haryana-131001</span>
                </p>
              </div>
              <div>
                <!-- header social list -->
                <ul class="flex gap-13px text-size-15">
                  <li>
                    <a class="hover:text-primaryColor" href="https://www.facebook.com/intinstitutesonipat" target="blank"
                      ><i class="icofont-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a class="hover:text-primaryColor" href="https://x.com/intinstitute1" target="blank"
                      ><i class="icofont-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a class="hover:text-primaryColor" href="https://www.instagram.com/intcomputerinstitute?igsh=bXI3MDl3NnVxdWd6" target="blank"
                      ><i class="icofont-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a class="hover:text-primaryColor"  href="https://www.youtube.com/channel/UCnVfavvWrWSzt_Zw5T4ZqrQ?view_as=subscriber" target="blank"
                      ><i class="icofont-youtube-play"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top end -->

      <!-- navbar start -->
      <div
        class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark"
      >
        <nav>
          <div
            class="py-15px lg:py-0 px-15px lg:container 3xl:container-secondary-lg 4xl:container mx-auto relative"
          >
            <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
              <!-- navbar left -->
              <div class="lg:col-start-1 lg:col-span-2">
                <a href="{{url('/')}}" class="block"
                  ><img
                    src="{{url('client/images/logo/logo_1.png')}}"
                    alt="log"
                    class="w-logo-sm lg:w-auto py-2"
                ></a>
              </div>
              <!-- Main menu -->
              <div class="hidden lg:block lg:col-start-3 lg:col-span-7">
                <ul class="nav-list flex justify-center">
                  <li class="nav-item group relative">
                    <a
                      href="{{url('/')}}"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                      Home
                    </a>
                  </li>

                  <li class="nav-item group relative">
                    <a
                      href="{{ url('/') }}#about"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                      About us
                    </a>
                  </li>
                  <li class="nav-item group relative">
                    <a
                      href="{{ url('/') }}#price"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor"
                    >
                      Pricing
                      <!-- <i class="icofont-rounded-down"></i> -->
                    </a>
                  </li>
                  <li class="nav-item group relative">
                    <a
                      href="{{ url('/') }}#contact"
                      class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                      Contact
                    </a>
                  </li>
                </ul>
              </div>
              <!-- navbar right -->
              <div class="lg:col-start-10 lg:col-span-3">
                <ul class="relative nav-list flex justify-end items-center">
                  <li class="hidden lg:block">
                      @auth
                      <a href="{{ url('logout') }}"
                             class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"
                             title="Login">
                              <i class="icofont-logout"></i>
                          </a>     
                      @else
                          <!-- Show Login Icon -->
                          <a href="{{ url('login') }}"
                             class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"
                             title="Login">
                              <i class="icofont-user-alt-5"></i>
                          </a>
                      @endauth
                  </li>
                  <li class="hidden lg:block">
                      @auth                              <!-- Show Login Icon -->
                        <a href="{{ url('dashboard') }}"
                          class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"
                          title="Login">
                          <i class="icofont-user-alt-5"></i>
                        </a>
                      @endauth
                  </li>
                  <li class="block lg:hidden">
                    <button
                      class="open-mobile-menu text-3xl text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    >
                      <i class="icofont-navigation-menu"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- navbar end -->

      <!-- mobile menu -->
      <div
        class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg fixed top-0 -right-[280px] md:-right-[330px] transition-all duration-500 w-mobile-menu h-full shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high block lg:hidden"
      >
        <button
          class="close-mobile-menu text-lg bg-darkdeep1 hover:bg-secondaryColor text-white px-[11px] py-[6px] absolute top-0 right-full hidden"
        >
          <i class="icofont icofont-close-line"></i>
        </button>
        <!-- mobile menu wrapper -->
        <div
          class="px-5 md:px-30px pt-5 md:pt-10 pb-50px h-full overflow-y-auto"
        >
          <!-- search input  -->
          <div
            class="pb-10 border-b border-borderColor dark:border-borderColor-dark"
          >
            <form
              class="flex justify-between items-center w-full bg-whitegrey2 dark:bg-whitegrey2-dark px-15px py-[11px]"
            >
              <input
                type="text"
                placeholder="Search entire store..."
                class="bg-transparent w-4/5 focus:outline-none text-sm text-darkdeep1 dark:text-blackColor-dark"
              >
              <button
                class="block text-lg text-darkdeep1 hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-secondaryColor"
              >
                <i class="icofont icofont-search-2"></i>
              </button>
            </form>
          </div>

          <!-- mobile menu accordions -->
          <div
            class="pt-8 pb-6 border-b border-borderColor dark:border-borderColor-dark"
          >
            <ul class="accordion-container">
              <li class="accordion">
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="{{url('/')}}"
                    >Home</a>
                </div>
              </li>
              <li class="accordion">
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="{{ url('/') }}#about"
                    >About Us</a>
                </div>
              </li>
              <li class="accordion">
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="{{ url('/') }}#price"
                    >Pricing</a>
                </div>
              </li>
              <li class="accordion">
                <div class="flex items-center justify-between">
                  <a
                    class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="{{ url('/') }}#contact"
                    >Contact</a>
                </div>
              </li>
            </ul>
          </div>

          <!-- my account accordion -->
          <div>
            <ul
              class="accordion-container mt-9 mb-30px pb-9 border-b border-borderColor dark:border-borderColor-dark"
            >
              <li class="accordion group">
                <!-- accordion header -->
                <div
                  class="accordion-controller flex items-center justify-between"
                >
                  <a
                    class="leading-1 text-darkdeep1 font-medium group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    href="#"
                    >My Account</a
                  >
                  <button class="px-3 py-1">
                    <i
                      class="icofont-thin-down text-size-15 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                    ></i>
                  </button>
                </div>
                <!-- accordion content -->
                <div
                  class="accordion-content h-0 overflow-hidden transition-all duration-500 shadow-standard"
                >
                  <div class="content-wrapper">
                    <ul>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center gap-1">
                          <a
                            href="{{url('login')}}"
                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-7 pb-3 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Login
                          </a>

                          <a
                            href="{{url('login')}}"
                            class="leading-1 text-darkdeep1 text-sm pr-30px pt-7 pb-4 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                          >
                            <span>/</span> Create Account
                          </a>
                        </div>
                      </li>
                      <li>
                        <!-- accordion header -->
                        <div class="flex items-center justify-between">
                          <a
                            href="{{url('logout')}}"
                            class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                            >Logout</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- Mobile menu social area -->
          <div>
            <ul class="flex gap-6 items-center mb-5">
              <li>
                <a class="facebook" href="#"
                  ><i
                    class="icofont icofont-facebook text-fb-color dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="twitter" href="#"
                  ><i
                    class="icofont icofont-twitter text-twiter-color dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="pinterest" href="#"
                  ><i
                    class="icofont icofont-pinterest dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="instagram" href="#"
                  ><i
                    class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
              <li>
                <a class="google" href="#"
                  ><i
                    class="icofont icofont-youtube-play dark:text-whiteColor dark:hover:text-secondaryColor"
                  ></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>