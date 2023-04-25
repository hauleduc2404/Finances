<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content=" Lotte finance ">
  <meta name="Keywords" content=" Lotte finance ">
  <link rel="stylesheet" type="text/css" href="/finances-cn/home/css/mui.min.css">
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
    .mui-input-group .mui-input-row, .mui-input-row{
      height: 45px;
      white-space: nowrap;
    }
    .marea{padding-right: 15px;}
    .regfrm label {
      padding: 14px 15px;
    }
    .marea label {
      padding: 14px 0;
    }
    .mui-input-row label~input, .mui-input-row label~select, .mui-input-row label~textarea {
      height: 45px;
      text-align: right;
    }
    .mui-input-row:last-child:after{
      height: 0;
    }
    @media screen and (max-width: 321px){
      .marea label {
        font-size: 14px;
        width: 24%;
        padding-top: 15px;
      }
      .marea label~input {
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
    @media screen and (max-width: 350px){
      .marea label~input {
        font-size: 13px;
      }
    }
    .seltarr {
      display: block;
      position: absolute;
      top: 20px;
      right: 10px;
    }

    .hnav{
      background-image: linear-gradient(to right, #313ae5 , #141ed2);
    }
    .hnav .mui-action-back, .hnav .mui-title{
      color: #fff;
    }
    .tipinfo{
      display: flex;
      justify-content: center;
    }
    .tipinfo {
      text-align: center;
      padding-top: 10px;
      padding-bottom: 10px;
      font-size: 13px;
      background: #f2f2f2;
      line-height: 18px;
    }
    .mui-input-group .mui-input-row:after, .mui-input-group:after, .mui-input-group:before{
      background: none;
    }
    .mui-input-group .mui-input-row:after, .mui-input-group:after, .mui-input-group:after{
      background: none;
    }
    .mui-input-row{
      width: 96%;
      margin-left: 2%;
      background: #f9f9f9;
    }
    .mui-input-group .mui-input-row{
      width: 96%;
      margin-left: 2%;
      background: #f9f9f9;
      border-radius: 50px;
    }
    .sfzwrap{
      width: 96%;
      margin-left: 2%;
      border: 0;
      margin-left: 2%;
      /*background: #f9f9f9;*/
      background: #fdf2e3;
      margin-top: 20px;
      overflow: hidden;
    }
    .ioioioioioi{
      width: 100%;
      height: 190px;
      display: flex;
      align-items: center;
    }
    .jijiji{
      width: 80px;
      height: 80px;
      flex: none;
      /*width: 62%;*/
    }
    .jijiji img{
      width: 100%;
    }
    .opopo{
      margin-left: 4%;
      flex: auto;
      display: flex;
      font-size: 12px;
      flex-direction: column;
      justify-content: space-between;

    }
    .opopo button{
      width:70%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 3px 5px;
      background: #FCCA30;
      color: #5D1ADC;
      border: 0;
      border-radius: 100px;
    }
    .RichScanbtn {
      display: flex;
      justify-content: flex-end;
    }
    .RichScanbtn button {
      background: linear-gradient(90deg, #313ae5 0%, #141ed2 100%);
      border-radius: 50px;
      height: 32px;
      line-height: 1;
      font-size: 12px;
      color: #ffffff;
      width: 120px;
      border: 0;
      margin-right: 10px;
    }
    .mui-input-group {
      position: relative;
      border: 0;
      background-color: #fff;
      padding: 20px 0;
      margin: 0 12px;
      border-radius: 10px;
    }
    .jac {
      display: flex;
      justify-content: center;
      align-items: center;
    }

  </style>
</head>
<body class="newbg" style="background: white;">
<!-- header -->
<header class="mui-bar mui-bar-nav hnav">
  <!--<a class="back" href="/index.php?m=Info&a=index"></a>-->
  <a href="{{route('finances.info')}}" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="padding-top:10px;"></a>
  <h1 class="mui-title">Thông tin cơ bản</h1>
</header>
<!-- header end-->
<div class="mui-content">
  <!-- paymoney -->
  <article class="tipinfo">
    <img class="left" src="/finances-cn/home/imgs/ic_zuodian.png" alt="" style="width:12px; height:12px; margin: 0 5px;" />
    Điền thông tin thật và hợp lệ, bài đánh giá sẽ thông qua                <img class="right" src="/finances-cn/home/imgs/ic_youdian.png" alt="" style="width:12px; height:12px; margin: 0 5px;" />
  </article>
  <div class="mui-input-group regfrm">
    <div class="mui-input-row">
      <label style="color:#141ed2;"><span style="color: #FF0000">*</span>Họ và Tên</label>
      <input type="text" id="usr" name="truename" class="mui-input-clear mui-input nofocus" value="{{isset($identity->full_name) ? $identity->full_name: ''}}" placeholder="Vui lòng nhập tên thật của bạn" data-input-clear="2">
    </div>
    <div class="mui-input-row" style="margin-top: 10px;">
      <label style="color:#141ed2;"><span style="color: #FF0000">*</span>Số CMND/CCCD</label>
      <input id="percard" value="{{isset($identity->identify_number) ? $identity->identify_number: ''}}" name="sfzhaoma" type="text" class="mui-input-clear mui-input nofocus" placeholder="Vui lòng nhập số ID thực" data-input-clear="2">
    </div>
  </div>
  <article class="fdc" >
    <div class="jac">
      <img class="left" src="/finances-cn/home/imgs/ic_zuodian.png" alt="" style="width:12px; height:12px; margin: 0 5px;" />
      <p style="color:#333333;">*Chứng minh thư là bắt buộc, nội dung rõ ràng</p>
      <img class="right" src="/finances-cn/home/imgs/ic_youdian.png" alt="" style="width:12px; height:12px; margin: 0 5px;" />
    </div>
    <p style="color:#333333;text-align:center;">*Vui lòng xác nhận rằng quyền máy ảnh đã được bật</p>

  </article>
  <div class="mui-input-group regfrm" style="background:white;">
    <section  style="background:white;">
      <!-- 证件 -->
      <!-- pho -->
      <div class="sfzwrap prel" style="margin-top:0px">
        <div class="phoes" id="mode1" class="uploader-list">
          <input type="hidden" id="sfz_zm" />
          <div class="sfzp" id="sfz_zm_div"  onClick="Selfile('sfz_zm_input');">
            @if(isset($identity->identify_back_side_path))
              <img src="{{$identity->identify_back_side_path}}" alt="">
            @endif
          </div>
          <div style="display:none;">
            <input type="file" class='photo_input' accept="image/*" id="sfz_zm_input"  />
          </div>
          <div class="ioioioioioi">
            <div class="jijiji"  onClick="Selfile('sfz_zm_input');">
              <img src="/finances-cn/home/imgs/img_sfz_zhenmian.png" alt="">
            </div>

            <div class="opopo">
              <!--<button>121212</button>-->
              Chụp và tải ảnh mặt trước của chứng minh nhân dân lên                                    <div class="RichScanbtn">
                <button type="submit">Nhấn để chụp</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- pho -->
      <!-- pho -->
      <div class="sfzwrap prel">
        <div class="phoes" id="mode2" class="uploader-list">
          <input type="hidden" id="sfz_fm" />
          <div class="sfzp" id="sfz_fm_div"  onClick="Selfile('sfz_fm_input');">
            @if(isset($identity->identify_front_side_path))
              <img src="{{$identity->identify_front_side_path}}" alt="">
            @endif
          </div>
          <div style="display:none;">
            <!-- <input type="file" id="sfz_fm_input" onChange="uploadImg('sfz_fm','sfz_fm_div',this);" /> -->
            <input type="file" class='photo_input' accept="image/*" id="sfz_fm_input" />
          </div>
          <div class="ioioioioioi">
            <div class="jijiji" onClick="Selfile('sfz_fm_input');">
              <img src="/finances-cn/home/imgs/img_fsz_fanmian.png" alt="">
            </div>
            <div class="opopo">
              <!--<button>121212</button>-->
              Chụp và tải ảnh mặt sau của chứng minh nhân dân lên                                     <div class="RichScanbtn">
                <button type="submit">Nhấn để chụp</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- pho -->
      <!-- 证件 end-->
      <!-- 证件 -->
      <!-- pho -->
      <div class="sfzwrap prel h130">
        <div class="phoes" id="mode3" class="uploader-list">
          <input type="hidden" id="sfz_sc" />
          <div class="sfzp"  id="sfz_sc_div"  onClick="Selfile('sfz_sc_input');">
            @if(isset($identity->identify_portrait_path))
              <img src="{{$identity->identify_portrait_path}}" alt="">
            @endif
          </div>
          <div style="display:none;">
            <!-- <input type="file" id="sfz_sc_input" onChange="uploadImg('sfz_sc','sfz_sc_div',this);" /> -->
            <input type="file" class='photo_input' accept="image/*" id="sfz_sc_input"  />
          </div>
          <div class="ioioioioioi">
            <div class="jijiji" onClick="Selfile('sfz_sc_input');">
              <img src="/finances-cn/home/imgs/img_souchi_sfz.png" alt="">
            </div>
            <div class="opopo">
              <!--<button>121212</button>-->
              Chụp và tải ảnh cầm chứng minh nhân dân trên tay                                <div class="RichScanbtn">
                <button type="submit">Nhấn để chụp</button>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- pho -->
      <!-- 证件 end-->
  </div>
  </article>
  </section>
</div>
<section class="msub" style="position: relative;">
  <button type="button" class="mui-btn mui-btn-danger mui-button-pay mui-button-gry" onClick="saveInfo();">Gửi đi</button>
  <!-- 提示 -->
  <div style="display: none;position: absolute;" class="errdeo" id="messageBox">
  </div>
</section>
</div>
<script src="/finances-cn/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>
<script src="/finances-cn/home/js/stuCheck-ae09551939.js"></script>
<script src="/finances-cn/home/js/geihuaCom-1088667498.js"></script>
<script src="/finances-cn/home/js/mui.min.js"></script>
<script src="/finances-cn/home/js/lrz.all.bundle.js"></script>
<script src="/finances-cn/home/js/mui-bd98b45634.picker.js"></script>
<script src="/finances-cn/home/js/mui-9fb36284ae.poppicker.js"></script>
<script src="/finances-cn/home/js/city-564994092a.data.js" type="text/javascript" charset="utf-8"></script>
<script src="/finances-cn/home/js/city-67f8c196d0.data-3.js" type="text/javascript" charset="utf-8"></script>
<script>
  var isupload = false;
  //判断如果已经上传了图片就显示
  var sfz_zm = "{{isset($identity->identify_back_side_path) ? $identity->identify_back_side_path : ''}}";
  var sfz_fm = "{{isset($identity->identify_front_side_path) ? $identity->identify_front_side_path : ''}}";
  var sfz_sc = "{{isset($identity->identify_portrait_path) ? $identity->identify_portrait_path : ''}}";
  if (sfz_zm != '') {
    $("#sfz_zm").val(sfz_zm);
    $("#sfz_zm_div").html('<img src="' + sfz_zm + '">');
  }
  if (sfz_fm != '') {
    $("#sfz_fm").val(sfz_fm);
    $("#sfz_fm_div").html('<img src="' + sfz_fm + '">');
  }
  if (sfz_sc != '') {
    $("#sfz_sc").val(sfz_sc);
    $("#sfz_sc_div").html('<img src="' + sfz_sc + '">');
  }

  $('#sel').change(function () {
    change('sel', 'sela')
  });
  $('.inputblur').click(function () {
    $(this).blur();
    $('.nofocus').blur();
  });

  function showalert(msg) {
    $("#messageBox").html(msg);
    $("#messageBox").show();
    setTimeout(function () {
      $("#messageBox").hide();
    }, 2000);
  }
  function Selfile(inputid) {
    console.log("inputid,inputid=====",inputid);
    if (isupload != false) {
      showalert("Các tệp khác đang tải lên, vui lòng đợi");
    } else {
      $("#" + inputid).click();
    }
  }
  function base(base64) {
    console.log(base64);
  }

  $(".photo_input").each(function () {
    var that = this;
    $(this).change(function () {
      lrz(this.files[0])
        .then(function (rst) {
          $.ajax({
            url: "{{route('finances.kyc.upload')}}",
            type: "post",
            dataType: 'json',
            data: rst.formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
              console.log(data);
              if (data && data.error == '0') {
                showalert("Tải lên thành công");
                var imgurl = data.url;
                $(that).parent().prev().html('<img src="' + imgurl + '">');
                $(that).parent().siblings('input').val(imgurl);
              } else {
                showalert(data.error);
              }
            },
            error: function (data) {
              showalert(data.error);
            }
          });
        })
        .catch(function (err) {
          // 处理失败会执行
          alert(err);
        })
        .always(function () {
          // 不管是成功失败，都会执行
        });
    });
  });

  function checkval(val_) {
    if (val_ == '' || val_ == null) {
      return false;
    } else {
      return true;
    }
  }

  //保存资料
  function saveInfo() {
    var name = $("#usr").val();
    var card = $("#percard").val();
    var cardphoto_1 = $("#sfz_zm").val();
    var cardphoto_2 = $("#sfz_fm").val();
    var cardphoto_3 = $("#sfz_sc").val();

    // if(checkval(name) && checkval(card) && checkval(cardphoto_1) && checkval(cardphoto_2) && checkval(cardphoto_3))
    if (checkval(name) && checkval(card) && checkval(cardphoto_1) && checkval(cardphoto_2) && checkval(cardphoto_3)) {
      $.post(
        "{{route('finances.kyc.identity.submit')}}",
        {
          full_name: name,
          identify_number: card,
          identify_back_side_path: cardphoto_1,
          identify_front_side_path: cardphoto_2,
          identify_portrait_path: cardphoto_3,
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
