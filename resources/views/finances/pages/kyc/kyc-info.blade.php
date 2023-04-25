<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content=" Lotte finance ">
  <meta name="Keywords" content=" Lotte finance ">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/custom.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.picker.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.poppicker.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/newpay-bb7fcb5546.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/feiqi-ee5401a8e6.css">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/pay-2b02ca7987.css">
  {{--    Google Fonts--}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

  <style>
    .mui-input-group .mui-input-row, .mui-input-row {
      height: 45px;
    }

    .marea {
      padding-right: 15px;
    }

    .regfrm label {
      padding: 14px 15px;
    }

    .marea label {
      padding: 14px 0;
    }

    .mui-input-row label ~ input, .mui-input-row label ~ select, .mui-input-row label ~ textarea {
      height: 45px;
      text-align: right;
    }

    .mui-input-row:last-child:after {
      height: 0;
    }

    @media screen and (max-width: 321px) {
      .marea label {
        font-size: 14px;
        width: 24%;
        padding-top: 15px;
      }

      .marea label ~ input {
        width: 76%;
      }

      .regfrm .mui-input-row label {
        width: 24%;
        white-space: nowrap;
        font-size: 14px;
        padding: 15px 15px;
      }

      .regfrm .mui-input-row input {
        font-size: 14px;
        width: 74%;
      }
    }

    @media screen and (max-width: 350px) {
      .marea label ~ input {
        font-size: 13px;
      }
    }

    .seltarr {
      display: block;
      position: absolute;
      top: 20px;
      right: 10px;
    }

    .info_span {
      float: right;
      position: absolute;
      right: 2px;
      top: 12px;
    }

    .pr {
      padding-right: 10px !important;
    }

    .regfrm .mui-input-row label {
      width: 55% !important;
      text-align: initial !important;
    }

    .regfrm .mui-input-row input {
      width: 43% !important;
      text-align: right;
      padding-right: 10px;
    }

    .hnav {
      /*background-image: linear-gradient(to right, #3C42CA , #5983F8);*/
      background: linear-gradient(90deg, #313ae5 0%, #141ed2 100%);
    }

    .hnav .mui-action-back, .hnav .mui-title {
      color: #ffffff;
    }

    .tipinfo {
      display: flex;
      /*margin: 10px;*/
      align-items: center;
      background: none;
      justify-content: center;
      align-content: center;
      font-size: 0.75rem;
    }

    .regfrm .mui-input-row label {
      /*color: #406DEE;*/
      color: #141ed2;
      white-space: nowrap;
    }

    .mui-input-row {
      width: 96%;
      margin-left: 2%;
      background: #EEEEEE;
      margin-top: 10px;
      border-radius: 50px;
    }

    .mui-input-group .mui-input-row:after, .mui-input-group:after, .mui-input-group:before {
      background: none;
    }

    .mui-content {
      background: #f5f5f5;
    }

    .mui-input-group {
      position: relative;
      margin: 0 12px;
      padding: 10px 0;
      border-radius: 10px;
      border: 0;
      background-color: #fff;
    }

    .mui-input-row .mui-btn + input, .mui-input-row label + input, .mui-input-row:last-child {
      background: #EEEEEE;
    }

    .mui-button-gry {
      border-radius: 50px;
    }
  </style>
</head>
<body class="newbg">
<!-- header -->
<header class="mui-bar mui-bar-nav hnav">
  <!--<a class="back" href="/index.php?m=Info&a=index"></a>-->
  <a href="{{route('finances.info')}}" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"
     style="padding-top:10px;"></a>
  <h1 class="mui-title">Thông tin cá nhân cơ bản</h1>
</header>
<!-- header end-->
<div class="mui-content">
  <!-- paymoney -->
  <article class="tipinfo">
    <img class="left" src="/finances-cn/home/imgs/ic_zuodian.png" alt="" style="width:12px; height:12px; margin: 0 5px;"/>
    Điền thông tin thật và hợp lệ, bài đánh giá sẽ thông qua
    <img class="right" src="/finances-cn/home/imgs/ic_youdian.png" alt="" style="width:12px; height:12px; margin: 0 5px;"/>
  </article>
  <div class="mui-input-group regfrm" style="text-align:center;vertical-align:middel;">

    <div class="mui-input-row">
      <label>Trình độ học vấn</label>
      <input type="text" id="dwname" class="mui-input-clear mui-input nofocus" value="{{$info->trinh_do_hoc_van ?? ''}}" placeholder="Bấm để điền vào"
             data-input-clear="2">
    </div>
    <div class="mui-input-row">
      <label>Thu nhập cá nhân</label>
      <input id="position" value="{{$info->thu_nhap_ca_nhan ?? ''}}" type="text" class="mui-input-clear mui-input nofocus" placeholder="Bấm để điền vào"
             data-input-clear="2">
    </div>
    <div class="mui-input-row">
      <label>Mục đích vay </label>
      <input type="text" id="dwphone" class="mui-input-clear mui-input nofocus" value="{{$info->muc_dich_vay ?? ''}}" placeholder="Bấm để điền vào"
             data-input-clear="2">

    </div>
    <div class="mui-input-row">
      <label>Có nhà cửa không</label>
      <input id="workyears" value="{{$info->co_nha_cua_khong ?? ''}}" type="text" class="mui-input-clear mui-input nofocus" placeholder="Bấm để điền vào"
             data-input-clear="2">
    </div>

    <div class="mui-input-row">
      <label>Có xe cộ không</label>
      <input id="dwaddess_more" type="text" value="{{$info->co_xe_co_khong ?? ''}}" class="mui-input-clear mui-input nofocus"
             placeholder="Bấm để điền vào" data-input-clear="2">
    </div>

    <div class="mui-input-row">
      <label>Tiền lương hàng tháng</label>
      <input id="borrow_month" value="{{$info->tien_luong_hang_thang ?? ''}}" type="text" class="pr mui-input-clear mui-input nofocus"
             placeholder="Bấm để điền vào" data-input-clear="2">
    </div>

    <div class="mui-input-row">
      <label>Địa chỉ chi tiết</label>
      <input id="addess_more" type="text" value="{{$info->dia_chi_chi_tiet ?? ''}}" class="mui-input-clear mui-input nofocus"
             placeholder="Bấm để điền vào" data-input-clear="2">
    </div>

    <!--div class="mui-input-row">
        <label >是否有房 </label>
        <input id="zxqsfang1" value="" name="personfang1" type="text" class="pr mui-input-clear mui-input nofocus" placeholder="请选择房产情况" data-input-clear="2">


    </div>

    <div class="mui-input-row">
        <label>是否有车</label>
        <input id="zxqsche1" value="" name="personche1" type="text" class="pr mui-input-clear mui-input nofocus" placeholder="请选择车辆情况" data-input-clear="2">
    </div>


    <div class="mui-input-row">
        <label>是否有公积金</label>
        <input id="zxqsjj1" value="" name="personjj1" type="text" class="pr mui-input-clear mui-input nofocus" placeholder="请选择公积金情况" data-input-clear="2">
    </div>

    <div class="mui-input-row">

        <label >是否有保单 </label>
        <input id="zxqsbd1" value="" name="personbd1" type="text" class="pr mui-input-clear mui-input nofocus" placeholder="请选择保单情况" data-input-clear="2">
    </div>

    <div class="mui-input-row">
        <label >是否有信用卡 </label>
        <input id="zxqsxyk1" value="" name="personxyk1" type="text" class="pr mui-input-clear mui-input nofocus" placeholder="请选择信用卡情况" data-input-clear="2">
    </div>

    <div class="mui-input-row">
        <label >是否有社保 </label>
        <input id="zxqssb1" value="" name="personsb1" type="text" class="pr mui-input-clear mui-input nofocus" placeholder="请选择社保情况" data-input-clear="2">
    </div>

    <div class="mui-input-row">
        <label >芝麻分 </label>
        <input id="zxqszmf1" value="" name="personzmf1" type="text" class="pr mui-input-clear mui-input nofocus" placeholder="请选择芝麻分情况" data-input-clear="2">

    </div-->
  </div>


  <article class="tipinfo">

    <img class="left" src="/finances-cn/home/imgs/ic_zuodian.png" alt="" style="width:10px; height:10px; margin: 0 5px;"/>
    Liên hệ ngay với gia đình <img class="right" src="/finances-cn/home/imgs/ic_youdian.png" alt=""
                                   style="width:10px; height:10px; margin: 0 5px;"/>
  </article>

  <div class="mui-input-group regfrm" style="text-align:center;vertical-align:middel;">
    <div class="mui-input-row">
      <label>Họ và Tên</label>
      <input id="z_name" value="{{$info->gia_dinh_ho_ten ?? ''}}" type="text" class="mui-input-clear mui-input nofocus" placeholder="Bấm để điền vào"
             data-input-clear="2">
    </div>
    <div class="mui-input-row">
      <label>Số điện thoại</label>
      <input id="z_phone" value="{{$info->gia_dinh_ho_ten ?? ''}}" type="text" class="mui-input-clear mui-input nofocus" placeholder="Bấm để điền vào"
             data-input-clear="2">
    </div>
    <div class="mui-input-row">
      <label>mối quan hệ</label>
      <input id="zxqsname1" value="{{$info->gia_dinh_moi_quan_he ?? ''}}" name="personname1" type="text" class="pr mui-input-clear mui-input nofocus"
             placeholder="Bấm để điền vào" data-input-clear="2">
    </div>
  </div>

  <article class="tipinfo">

    <img class="left" src="/finances-cn/home/imgs/ic_zuodian.png" alt="" style="width:10px; height:10px; margin: 0 5px;"/>
    Các liên hệ khác <img class="right" src="/finances-cn/home/imgs/ic_youdian.png" alt=""
                          style="width:10px; height:10px; margin: 0 5px;"/>
  </article>

  <div class="mui-input-group regfrm" style="text-align:center;vertical-align:middel;">
    <div class="mui-input-row">
      <label>Họ và Tên</label>
      <input id="borrow_colleague" value="{{$info->gia_dinh_2_ho_ten ?? ''}}" type="text" class="pr mui-input-clear mui-input nofocus"
             placeholder="Bấm để điền vào" data-input-clear="2">
    </div>
    <div class="mui-input-row">
      <label>Số điện thoại</label>
      <input id="borrow_colleaguetel" value="{{$info->gia_dinh_2_sdt ?? ''}}" type="text" class="pr mui-input-clear mui-input nofocus"
             placeholder="Bấm để điền vào" data-input-clear="2">
    </div>
    <div class="mui-input-row">
      <label>mối quan hệ</label>
      <input id="zxqsname2" value="{{$info->gia_dinh_2_moi_quan_he ?? ''}}" name="personname2" type="text" class="pr mui-input-clear mui-input nofocus"
             placeholder="Bấm để điền vào" data-input-clear="2">
    </div>

  </div>
  <section class="msub" style="position: relative;">
    <button type="button" class="mui-btn mui-btn-danger mui-button-pay mui-button-gry text-upper text-bold" onClick="saveInfo();">Gửi đi
    </button>
    <!-- 提示 -->
    <div style="display: none;position: absolute;" class="errdeo" id="messageBox">
    </div>
  </section>
</div>
<script src="/finances-cn/home/js/jquery.js"></script>
<script src="/finances-cn/home/js/stuCheck-ae09551939.js"></script>
<script src="/finances-cn/home/js/geihuaCom-1088667498.js"></script>
<script src="/finances-cn/home/js/mui.min.js"></script>
<script src="/finances-cn/home/js/mui-bd98b45634.picker.js"></script>
<script src="/finances-cn/home/js/mui-9fb36284ae.poppicker.js"></script>
<script src="/finances-cn/home/js/city-564994092a.data.js" type="text/javascript" charset="utf-8"></script>
<script src="/finances-cn/home/js/city-67f8c196d0.data-3.js" type="text/javascript" charset="utf-8"></script>
<script>
  $('#sel').change(function () {
    change('sel', 'sela')
  });
  $('.inputblur').click(function () {
    $(this).blur();
    $('.nofocus').blur();
  });
  (function ($, doc) {
    $.init();
    $.ready(function () {
      var cityPicker2 = new $.PopPicker({
        layer: 3
      });
      cityPicker2.setData(cityData3);
      var showCityPickerButton2 = doc.getElementById('showCityPicker2');
      var showCityPickerButton1 = doc.getElementById('showCityPicker1');

      var cityResult2 = doc.getElementById('cityResult2');
      showCityPickerButton2.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        cityPicker2.show(function (items) {
          if (typeof (items[2].text) == "undefined") {
            showCityPickerButton2.value = (items[0] || {}).text + " " + (items[1] || {}).text;
          } else {
            showCityPickerButton2.value = (items[0] || {}).text + " " + (items[1] || {}).text + " " + (items[2] || {}).text;
          }
        });
      }, false);
      showCityPickerButton1.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        cityPicker2.show(function (items) {
          if (typeof (items[2].text) == "undefined") {
            showCityPickerButton1.value = (items[0] || {}).text + " " + (items[1] || {}).text;
          } else {
            showCityPickerButton1.value = (items[0] || {}).text + " " + (items[1] || {}).text + " " + (items[2] || {}).text;
          }
        });
      }, false);
      var person = new $.PopPicker({
        layer: 3
      });

      var fang = new $.PopPicker({
        layer: 3
      });


      var che = new $.PopPicker({
        layer: 3
      });


      var shebao = new $.PopPicker({
        layer: 3
      });


      var gongjijin = new $.PopPicker({
        layer: 3
      });

      var baodan = new $.PopPicker({
        layer: 3
      });
      var xinyongka = new $.PopPicker({
        layer: 3
      });

      var shebao = new $.PopPicker({
        layer: 3
      });

      var zhimafen = new $.PopPicker({
        layer: 3
      });

      zhimafen.setData([{value: "{$Think.lang.350到550}", text: "350 đến 550"}, {
        value: "{$Think.lang.550到650}",
        text: "550 đến 650"
      }, {value: "{$Think.lang.650以上}", text: "ở trên 650"}, {value: "{$Think.lang.其他}", text: "khác"}]);

      shebao.setData([{value: "{$Think.lang.有}", text: "Có"}, {value: "{$Think.lang.无}", text: "Không"}]);

      xinyongka.setData([{value: "{$Think.lang.有}", text: "Có"}, {value: "{$Think.lang.无}", text: "Không"}]);

      baodan.setData([{value: "{$Think.lang.有}", text: "Có"}, {value: "{$Think.lang.无}", text: "Không"}]);

      gongjijin.setData([{value: "{$Think.lang.有}", text: "Có"}, {value: "{$Think.lang.无}", text: "Không"}]);

      che.setData([{value: "{$Think.lang.全款车}", text: "Xe đầy đủ"}, {
        value: "{$Think.lang.贷款车}",
        text: "Xe cho vay"
      }, {value: "{$Think.lang.无}", text: "Không"}]);

      fang.setData([{value: "{$Think.lang.全款房}", text: "全款房"}, {
        value: "{$Think.lang.贷款房}",
        text: "贷款房"
      }, {value: "{$Think.lang.无}", text: "Không"}]);


      var showCityPickerButton4 = doc.getElementById('zxqsfang1');

      var showCityPickerButton5 = doc.getElementById('zxqsche1');

      var showCityPickerButton6 = doc.getElementById('zxqsjj1');

      var showCityPickerButton7 = doc.getElementById('zxqsxyk1');

      var showCityPickerButton8 = doc.getElementById('zxqsbd1');

      var showCityPickerButton9 = doc.getElementById('zxqssb1');

      var showCityPickerButton10 = doc.getElementById('zxqszmf1');


      person.setData([{value: "{$Think.lang.父母}", text: "cha mẹ"}, {
        value: "{$Think.lang.同事}",
        text: "đồng nghiệp"
      }, {value: "{$Think.lang.兄妹}", text: "Anh và chị"}, {value: "{$Think.lang.朋友}", text: "bạn bè"}]);


      var showCityPickerButton = doc.getElementById('zxqsname1');
      var showCityPickerButton3 = doc.getElementById('zxqsname2');

      var personResult = doc.getElementById('cityResult2');


      showCityPickerButton.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        person.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personname1", tmpval);
        });
      }, false);


      showCityPickerButton3.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        person.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personname2", tmpval);
        });
      }, false);

      showCityPickerButton4.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        fang.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personfang1", tmpval);
        });
      }, false);


      showCityPickerButton5.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        che.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personche1", tmpval);
        });
      }, false);


      showCityPickerButton6.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        gongjijin.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personjj1", tmpval);
        });
      }, false);


      showCityPickerButton7.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        xinyongka.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personxyk1", tmpval);
        });
      }, false);


      showCityPickerButton8.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        baodan.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personbd1", tmpval);
        });
      }, false);


      showCityPickerButton9.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        shebao.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personsb1", tmpval);
        });
      }, false);


      showCityPickerButton10.addEventListener('tap', function (event) {
        var input = document.getElementsByClassName('nofocus');
        for (var i = 0; i < input.length; i++) {
          var _input = input[i];
          _input.blur();
        }
        zhimafen.show(function (items) {
          var tmpval = (items[0] || {}).text;
          setPerson("personzmf1", tmpval);
        });
      }, false);


    });
  })(mui, document);

  function setPerson(spanid, valname) {
    $("input[name='" + spanid + "']").val(valname);
  }


  function showalert(msg) {
    $("#messageBox").html(msg);
    $("#messageBox").show();
    setTimeout(function () {
      $("#messageBox").hide();
    }, 2000);
  }

  function checkval(val_) {
    if (val_ == '' || val_ == null) {
      return false;
    } else {
      return true;
    }
  }

  //保存资料
  function saveInfo() {

    var z_name = $("#z_name").val();
    var z_phone = $("#z_phone").val();
    var borrow_colleague = $("#borrow_colleague").val();
    var borrow_colleaguetel = $("#borrow_colleaguetel").val();

    var dwname = $("#dwname").val();
    var dwaddess_ssq = $("#showCityPicker2").val();
    var dwaddess_more = $("#dwaddess_more").val();
    var dwposition = $("#position").val();
    var workyears = $("#workyears").val();
    var dwphone = $("#dwphone").val();
    var dwysr = $("#dwysr").val();
    var addess_ssq = $("#showCityPicker1").val();
    var addess_more = $("#addess_more").val();
    var persongx_1 = $("#zxqsname1").val();
    var persongx_2 = $("#zxqsname2").val();
    var borrow_month = $("#borrow_month").val();

    var personfang_1 = $("#zxqsfang1").val();
    var personche_1 = $("#zxqsche1").val();
    var personjj_1 = $("#zxqsjj1").val();
    var personxyk_1 = $("#zxqsxyk1").val();
    var personsb_1 = $("#zxqssb1").val();
    var personzmf_1 = $("#zxqszmf1").val();
    var personbd_1 = $("#zxqsbd1").val();


    //if(checkval(shenghuofei)&& checkval(f_phone) && checkval(m_phone) && checkval(pengyou_phone))
    if (checkval(z_phone) && checkval(borrow_colleaguetel) && checkval(borrow_colleague)) {
      $.post(
        "{{route('finances.kyc.information.submit')}}",
        {

          gia_dinh_ho_ten: z_name,
          gia_dinh_sdt: z_phone,
          gia_dinh_2_ho_ten: borrow_colleague,
          gia_dinh_2_sdt: borrow_colleaguetel,

          trinh_do_hoc_van: dwname,
          dwaddess_ssq: dwaddess_ssq,
          co_xe_co_khong: dwaddess_more,
          thu_nhap_ca_nhan: dwposition,
          co_nha_cua_khong: workyears,
          muc_dich_vay: dwphone,
          tien_luong_hang_thang: borrow_month,
          dwysr: dwysr,
          addess_ssq: addess_ssq,
          dia_chi_chi_tiet: addess_more,
          gia_dinh_moi_quan_he: persongx_1,
          gia_dinh_2_moi_quan_he: persongx_2,

          personzmf_1: personzmf_1,
          personfang_1: personfang_1,
          personche_1: personche_1,
          personjj_1: personjj_1,
          personxyk_1: personxyk_1,
          personsb_1: personsb_1,
          personbd_1: personbd_1,
          _token: '{{csrf_token()}}',
        },
        function (data, state) {
          if (state != "success") {
            showalert("Yêu cầu dữ liệu thất bại, hãy thử lại!");
          } else if (data.status == 1) {
            showalert("Đã lưu thành công!");
            window.location.href = "{{route('finances.profile')}}";
          } else {
            showalert(data.msg);
          }
        }
      );
    } else {
      showalert("Thông tin không đầy đủ, vui lòng kiểm tra!!");
    }
  }

</script>
</body>
</html>
