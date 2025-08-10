@extends('layouts.app')

@section('style')
<!-- Add any additional styles here if needed -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')

<!-- Banner section -->
@include('layouts._header')


<script>
    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            timer: 3000,
            showConfirmButton: false
        });
    @endif

    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            timer: 4000,
            showConfirmButton: true
        });
    @endif

    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: '{!! implode("<br>", $errors->all()) !!}',
            showConfirmButton: true
        });
    @endif
</script>

<!-- Dashboard menu section -->
<section>
  <div class="container-fluid-2">
    @include('layouts._sidebar')

    <!-- Dashboard content -->
    <div class="lg:col-start-4 lg:col-span-9">
      <div class="p-[10px] md:px-10 md:py-[50px] mb-[30px] bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-[5px]">

        <!-- Welcome Title -->
        <div class="mb-6 py-10 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
          <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
           Add Files
          </h2>
        </div>

        <!-- File Upload Form -->
        <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <!-- File Input (Styled) -->
          <label for="file-upload" class="block cursor-pointer">
            <div class="w-full p-10 bg-white dark:bg-whiteColor-dark border-2 border-dashed border-gray-300 rounded-lg hover:border-primary transition">
              <div class="flex flex-col items-center justify-center text-center space-y-3">
                <div class="text-5xl text-gray-500 font-bold">+</div>
                <p class="text-lg text-gray-700 font-medium">Add files</p>
                <p class="text-sm text-gray-400">Click to select or drag files to upload</p>
              </div>
            </div>
          </label>

          <!-- Hidden File Input -->
          <input id="file-upload" name="files[]" type="file" class="hidden" multiple>

          <!-- Selected Files Preview -->
          <div id="selected-files" class="mt-5 space-y-2">
            <!-- Selected file names will appear here -->
          </div>

          <!-- Submit Button -->
          <div class="mt-5">
            <button type="submit" class="px-6 py-2 bg-primaryColor mb-6 text-white font-semibold rounded hover:bg-secondaryColor">
              Upload Files
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

<!-- JS: Show selected file names -->
<script>
  document.getElementById('file-upload').addEventListener('change', function(event) {
    const files = event.target.files;
    const fileList = document.getElementById('selected-files');
    fileList.innerHTML = '';

    if (files.length > 0) {
      for (let i = 0; i < files.length; i++) {
        const fileItem = document.createElement('div');
        fileItem.className = 'text-sm text-gray-700 dark:text-gray-300 bg-gray-100 dark:bg-gray-800 p-2 rounded';
        fileItem.textContent = files[i].name;
        fileList.appendChild(fileItem);
      }
    }
  });
</script>

@endsection
