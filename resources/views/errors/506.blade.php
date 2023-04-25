@extends('client.layouts.master')
@section('body-class', 'extra-page')

@section('content')
    <div class="ghost"> <span class="text"></span>
        <div class="eye"></div>
        <div class="eye two"></div>
        <div class="mouth"></div>
        <div class="corner"></div>
        <div class="corner two"></div>
        <div class="corner three"></div>
        <div class="corner four"></div>
        <div class="over"></div>
        <div class="over two"></div>
        <div class="over three"></div>
        <div class="over four"></div>
        <div class="shadow"></div>
    </div>
    <div class="main">
        <div class="error">error</div>
        <h2>Thiết bị không được hỗ trợ</h2>
      <h6 class="text-custom-white">Thiết bị này không được hỗ trợ <br> Vui lòng sử dụng thiết bị di động để truy cập</h6>
    </div>
@endsection
