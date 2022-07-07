<!DOCTYPE html>
<html lang="en">

@include('Little.Detach.Head')
<body>
    <div class="container">
        @include('Little.Detach.Nav')

          {{-- display  Interface --}}
          <div class="bg">
          </div>
          <div class="bg1">
            <div class="bg2">
            </div>
            <div class="bg3">
            </div>
            <div class="bg4">
                <div class="bg5">
                </div>
                <div class="bg6">
                </div>
            </div>
        </div>
    <div class="body">
      @yield('body')
    </div>
    </div>

    </body>
</html>
