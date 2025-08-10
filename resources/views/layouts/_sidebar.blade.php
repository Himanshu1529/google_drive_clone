@php
    $activePlan = auth()->user()->manualPayments()->where('status', 'approved')->latest()->first();
@endphp
<div
    class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
            <div class="lg:col-start-1 lg:col-span-3">
              <!-- navigation menu -->
              <div
                class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-lg2 shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark"
              >
                <ul>
                  <li class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center">
                    <a
                      href="{{ url('dashboard') }}"
                      class="flex items-center gap-3 text-sm font-medium leading-6 text-nowrap hover:text-primaryColor dark:hover:text-primaryColor {{ Request::is('dashboard') ? 'text-primaryColor font-semibold' : 'text-contentColor dark:text-contentColor-dark' }}"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-home"
                      >
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                      </svg>
                      Dashboard
                    </a>
                  </li>

                  <li class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center">
                     <a
                      href="{{ url('upload-file') }}"
                      class="flex items-center gap-3 text-sm font-medium leading-6 text-nowrap hover:text-primaryColor dark:hover:text-primaryColor {{ Request::is('upload-file') ? 'text-primaryColor font-semibold' : 'text-contentColor dark:text-contentColor-dark' }}"
                    >
                      <i class="icofont-plus text-xl"></i>
                      <span>Add Files</span>
                    </a>
                  </li>


                  <li class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center">
                    <a
                      href="{{ url('all-files') }}"
                      class="flex items-center gap-3 text-sm font-medium leading-6 text-nowrap hover:text-primaryColor dark:hover:text-primaryColor {{ Request::is('all-files') ? 'text-primaryColor font-semibold' : 'text-contentColor dark:text-contentColor-dark' }}"
                    >
                      <i class="icofont-file-image text-xl"></i>
                      <span>All Files</span>
                    </a>   
                  </li> 
                  @if($activePlan)
                  <li class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center">
                    <a
                      href="{{ url('recent-delete') }}"
                      class="flex items-center gap-3 text-sm font-medium leading-6 text-nowrap hover:text-primaryColor dark:hover:text-primaryColor {{ Request::is('recent-delete') ? 'text-primaryColor font-semibold' : 'text-contentColor dark:text-contentColor-dark' }}"
                    >
                      <i class="icofont-ui-delete text-xl"></i>
                      <span>Recently Deleted</span>
                    </a>   
                  </li>  
                  @else
                  <li class="cursor-not-allowed py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center">
                    <a
                     href="{{ url('/') }}#price" title="Payment Required"
                      class="cursor-not-allowed  flex items-center gap-3 text-sm font-medium leading-6 text-nowrap hover:text-primaryColor dark:hover:text-primaryColor {{ Request::is('recent-delete') ? 'text-primaryColor font-semibold' : 'text-contentColor dark:text-contentColor-dark' }}"
                    >
                      <i class="icofont-ui-delete text-xl"></i>
                      <span>Recently Deleted</span>
                    </a>   
                  </li>  
                  @endif              
                </ul>
                <!-- user -->
                <h5
                  class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px"
                >
                  USER
                </h5>
                <ul>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="{{url('logout')}}"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-volume-1"
                      >
                        <polygon
                          points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"
                        ></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                      </svg>
                      Logout</a
                    >
                  </li>
                </ul>
              </div>
            </div>
