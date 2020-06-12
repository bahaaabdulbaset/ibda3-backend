@extends('app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            المقالات

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>

            <li class="active">المقالات</li>

            <li><a href="#"><i class="fa fa-dashboard"></i> احصائيات التطبيق</a></li>

        </ol>
    </section>



    <!-- Main content -->
    <section class="content">

        <!-- Main content -->
        <section class="content">

            <div class="row m-0">
              <div class="col-12 ">
                  <div class="">
                      <a href="{{url(route('article.create'))}}">
                          <button  type="button" class="btn btn-primary">اضافه مقال +</button>
                      </a>
                  </div>
              </div>
            </div>

            <br/>

            @include('flash::message')  {{--الرسالة بعد ما ندخل البيانات وتتحفظ--}}


            <div class="row">

                @php

                    $records = \App\Models\Post::all();

                @endphp

                @if(count($records))

                    <div class="table-responsive"style="background-color: white;">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الصورة</th>
                                <th>العنوان</th>
                                <th>عدد المشاهدات</th>
                                <th>تعديل</th>
                                <th>حذف</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($records as $record)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$record->image}}</td>
                                    <td>{{$record->title}}</td>
                                    <td>{{$record->views}}</td>
                                    <td>
                                        <a href="{{url(route('article.edit',$record->id))}}">
                                            <button  type="button" class="btn btn-primary">تعديل</button>
                                        </a>
                                    </td>
                                    <td>-</td>


                                </tr>

                            @endforeach
                            </tbody>

                        </table>

                    </div>

                @else
                    <div class="alert alert-danger" role="alert">
                        no data
                    </div>  {{--if no record in posts table alert message!--}}

                @endif



            </div><!-- /.row -->



        </section>

        <!-- /.content -->
    </section>




@endsection


