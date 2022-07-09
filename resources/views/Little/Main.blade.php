<!DOCTYPE html>
<html lang="en">

@include('Little.Detach.Head')
<body>
    <div class="container">
        <div class="bg">
            <img src="Little/image/bg (1).png" class="imagebg">
          </div>
        @include('Little.Detach.Nav')

          {{-- display  Interface --}}


    <div class="">
      @yield('body')
    </div>
    </div>

    </body>
</html>
