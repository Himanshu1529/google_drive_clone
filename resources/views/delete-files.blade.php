@extends('layouts.app')
@section('style')
@endsection
@section('content')


 <!-- banner section -->
@include('layouts._header')

      <!--dashbord menu section -->
      <section>
        <div class="container-fluid-2">
          @include('layouts._sidebar')
            <!-- dashboard content -->
            <div class="lg:col-start-4 lg:col-span-9">
              <!-- counter -->
              <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5"
              >@if($files->count())
                <div
                  class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark"
                >
                  <h2
                    class="text-2xl font-bold text-blackColor dark:text-blackColor-dark"
                  >
                    All Files
                  </h2>
                  
                </div>
                @endif
                <!-- counter area -->
                @if($files->count())
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                      @foreach($files as $file)
                        @php
                            $filePath = 'storage/app/public/' . $file->filename;
                            $extension = strtolower(pathinfo($file->original_name, PATHINFO_EXTENSION));
                            $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                            $pdfExtensions = ['pdf'];
                            $excelExtensions = ['csv', 'xls', 'xlsx'];
                        @endphp

                        <div class="p-5 bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark transition hover:shadow-lg">
                          <div class="flex items-start gap-4">
                            <!-- File Preview or Icon -->
                            <div class="flex-shrink-0 w-16 h-16">
                              @if(in_array($extension, $imageExtensions) && file_exists(public_path($filePath)))
                                <img src="{{ asset($filePath) }}" style="aspect-ratio:3/2" alt="{{ $file->original_name }}" class="w-12 h-12 object-cover rounded" />
                              @elseif(in_array($extension, $pdfExtensions))
                                  <!-- PDF icon -->
                                  <img src="{{ asset('client/images/logo/pdf.jpg') }}" alt="PDF Icon" class="w-12 h-12" />
                              @elseif(in_array($extension, $excelExtensions))
                                  <!-- Excel icon -->
                                  <img src="{{ asset('client/images/logo/excel.jpg') }}" alt="Excel Icon" class="w-12 h-12" />
                              @else
                                  <!-- Generic file icon -->
                                  <img src="{{ asset('client/images/logo/image.jpg') }}" alt="File Icon" class="w-12 h-12" />
                              @endif
                            </div>

                            <!-- File Info -->
                            <div class="flex-1">
                              <p class="text-md font-bold text-blackColor dark:text-blackColor-dark truncate">
                                {{ implode(' ', array_slice(explode(' ', $file->original_name), 0, 3)) }}
                              </p>
                              <p class="text-sm text-gray-500 dark:text-gray-400">
                                {{ number_format($file->size / 1024, 2) }} KB
                              </p>

                              <div class="mt-3 flex gap-3 text-sm">
                                <form action="{{ route('file.restore', $file->id) }}" method="POST">
                                  @csrf
                                  @method('post')
                                  <button type="submit" class="text-red-600 hover:underline">Restore</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                @else
                  <div class="grid grid-cols-1 gap-x-[30px] gap-y-5 pb-5">
                      <div class="w-full p-5 md:px-10 md:py-[50px] bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <div class="flex flex-col items-center justify-center text-center space-y-2">
                          <p class="text-sm text-gray-400">You have no deleted any files</p>
                        </div>
                      </div>
                    </div>

                @endif
              </div>
            </div>
          </div>
        </div>
    </section>




@endsection