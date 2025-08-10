<section>
  <div class="container-fluid-2">
    <div class="bg-primaryColor p-5 md:p-10 rounded-5 flex justify-center md:justify-between items-center flex-wrap gap-2">
      <div class="flex items-center flex-wrap justify-center sm:justify-start">
        <div class="mr-5">
          <img src="{{ url('client/images/dashbord/dashbord__2.jpg')}}" alt=""
            class="w-27 h-27 md:w-22 md:h-22 lg:w-27 lg:h-27 rounded-full p-1 border-2 border-darkdeep7 box-content">
        </div>
        <div class="text-whiteColor font-bold text-center sm:text-start">
          <h5 class="text-xl leading-1.2 mb-5px">Welcome</h5>
            @auth
              <h2 class="text-2xl leading-1.24">{{ Auth::user()->name }}</h2>
            @else
              <h2 class="text-2xl leading-1.24">Guest</h2>
            @endauth
        </div>
      </div>
      <div>
        <a href="#" class="text-size-15 px-25px py-10px border border-whiteColor text-primaryColor bg-whiteColor rounded group text-nowrap flex gap-1 items-center">
          {{ number_format($used / (1024*1024), 2) }} MB of 25,600 MB
        </a>
      </div>
    </div>
  </div>
</section>