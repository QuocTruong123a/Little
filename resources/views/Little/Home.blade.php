@extends('Little.Main')
@section('body')

<div>
    <img src="Little/image/18451 [Converted]-06 1.png" class="Converted">
    <img src="Little/image/18451 [Converted]-03 1.png" class="image2">
    <img src="Little/image/18451 [Converted]-03 1.png" class="image3">
    <img src="Little/image/18451 [Converted]-04 1.png" class="image4">
    <img src="Little/image/18451 [Converted]-02 1.png" class="image5">
    <img src="Little/image/18451 [Converted]-05 1.png" class="image6">
    <img src="Little/image/render fix hair 1.png" class="image7">
    <img src="Little/image/image 2.png" class="image1">
    <div class="text8">ĐẦM SEN</div>
    <div class="text9">PARK</div>
  </div>
  {{-- <div class="group1">
    <div class="group2">
            <div class="vector3">
                <div class="vector2">
                    <p class="text3">VÉ CỦA BẠN</p>
                </div>
            </div>
      </div>
  </div> --}}
  <div class="frame1">
        <div class="group3">

          <div class="group4">
            <div class="vector4">
             <p class="text4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. </p>
             <p class="text5">Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.</p>
             <div class="group4_1">
                <img src="Little/image/Vector.png" class="">
                <p class="text6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
             <div class="group4_2">
                <img src="Little/image/Vector.png" class="">
                <p class="text6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
             <div class="group4_3">
                <img src="Little/image/Vector.png" class="">
                <p class="text6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
             <div class="group4_4">
                <img src="Little/image/Vector.png" class="">
                <p class="text6">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
            </div>
          </div>
          <div class="group5">
            <div class="vector5">
                <form>
                    {{-- select js --}} 
                    <select class="input" id="sel1" name="">
                        <option value="0">Chọn gói dịch vụ</option>
                        @foreach ($select as  $value )
                        <option value="{{ $value -> id }}">  {!! $value -> name !!}</option>
                        @endforeach
                      </select>
                    {{-- <input class="input" placeholder="    Chọn gói gia đình"> --}}
                    <div class="select3"></div>
                    <div class="select1"></div>
                    <div class="select2"></div>
                    <div class="select"></div>
                    {{-- end select js --}}
                    <img  src="Little/image/Arrow - Down 2.png" class="down_f2">
                    <input class="input1" placeholder=" số lượng vé">
                    <input class="input2" type="date" id="today" >
                    <div class="select7"></div>
                    <div class="select5"></div>
                    <div class="select6"></div>
                    <div class="select4"></div>
                    <img src="Little/image/Vector2.png" class="vector2_f2">
                    <input class="input3" placeholder="    Họ và tên">
                    <input class="input4" placeholder="    Số điện thoại">
                    <input class="input5" placeholder="    Địa chỉ Email">
                    <div class="buttoncenter"></div>
                    <div class="buttonleft"></div>
                    <div class="buttonright"></div>
                    <div class="">
                        <button type="submit" class="button"><p class="text7">Đặt vé</p></button>
                    </div>

                </form>
            </div>
          </div>

          <img src="Little/image/Lisa_Arnold_Lay_Do_F2 3.png" class="Do_F2">
          <img src="Little/image/Vector1.png" class="vector_F2">
        </div>
        <div class="group1">
            <img src="Little/image/Vector 5.png" class="image8">
            <img src="Little/image/Vector6.png" class="image8">
            <div class="">

                    <div class="">
                        <div class="">
                            <p class="text3">VÉ CỦA BẠN</p>
                        </div>
                    </div>
              </div>
          </div>
        <div class="">
          <div class="">
            <div class="">

            </div>
          </div>
        </div>

  </div>
@endsection
