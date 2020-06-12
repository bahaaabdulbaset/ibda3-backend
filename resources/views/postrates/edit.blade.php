@extends('app')
@inject('model','App\Models\Post')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            إنشاء مقاله جديدة

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

         <div class="box-body">


             {{--errors--}}
          @include('partials.validation_errors')


             {{--create form--}}

             {{--model name & controller name  in array --}}
                          {{--الاى دى بتاع الصف  & اسم الكنترولرر & المودل--}}
             {!! Form::model($model,[

             'action' => ['ArticleController@update',$model->id],
             'method' => 'put'

             ])  !!}

             @include('postrates.form')


             {!! Form::close() !!}
             {{-- form exit --}}


         </div>


        </section>

        <!-- /.content -->
    </section>




@endsection


