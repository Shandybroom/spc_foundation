@extends('layouts/master')

@section('container')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Welcome to SCP Foundation
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Secure. Contain. Protect</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <p>SCP-Foundation merupakan salah satu organisasi pemerintah yang melakukan sebuah pengujian terhadap salah satu eksperimen yang sengaja diciptakan maupun yang ditemukan oleh pihak SCP itu sendiri.</p>
          <p> Dalam perkembangannya organisasi ini diwajibkan untuk mengurus semua benda atau mahkluk hidup yang mereka ciptakan atau ditemukan demi mencegah kepanikan global.</p>
          <p>Letak markas cabang SCP-Foundation tersebar diseluruh negara dengan hak akses prosedur bebas melakukan penelitian pada negara tempat markas yang digunakan.</p>
          <br>
          
          <div id="tes-carousel" class="carousel slide" data-ride="carousel">
          <!-- indikator -->
          <ol class="carousel-indicators">
            <li data-target="#tes-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#tes-carousel" data-slide-to="1"></li>
            <li data-target="#tes-carousel" data-slide-to="2"></li>
          </ol>
            
          <div class="carousel-inner">
            <!-- slide 1 -->
            <div class="item active">
              <img src="{{url('image/scp1.jpg')}}" alt="Demo 1">
            </div>
            <!-- slide 2 -->
            <div class="item">
              <img src="{{url('image/scp3.png')}}" alt="Demo 2">
            </div>
            <!-- slide 3 -->
            <div class="item">
              <img src="{{url('image/scp44.jpg')}}" alt="Demo 3">
            </div>
            
          </div>
          
          <!-- kontrol-->
          <a class="carousel-control left" href="#tes-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control right" href="#tes-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
          
        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Semua SCP sudah diidentifikasi tetapi belum semua diamankan. dan beberapa masih ada diluar sana. mari amankan mereka sebelum mereka punah. 
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
</style>