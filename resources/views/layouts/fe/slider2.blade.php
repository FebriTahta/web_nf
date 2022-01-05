<!--image slider start-->
<div class="sliderx">
    <div class="slidesx">
      <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slidex first">
            <img src="{{asset('13.jpg')}}" alt="">
        </div>
        <div class="slidex">
            <img src="{{asset('12.jpg')}}" alt="">
        </div>
        <div class="slidex">
            <img src="{{asset('14.jpg')}}" alt="">
        </div>
        <div class="slidex">
            <img src="{{asset('11.jpg')}}" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual" >
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
        </div>
    <!--manual navigation end-->
</div>
    <!--image slider end-->
{{-- <div class="card blog">
    <div class="card-body blog-body" style="background-image: linear-gradient(147deg, #30ee6f 0%, #90ff95 74%); height: 50px;">
        aa
    </div>
</div> --}}