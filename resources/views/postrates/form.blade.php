

<div class="form-group">
    <lable for="name">عنوان المقالة </lable>
    {{-- ياخد شكل الحقل بتاع البوتستراب & الديفولت بتاعه فاضى & نوع الحقل--}}
    {{--The field you need &  The default is empty & Class Bootstrap for field--}}
    {!! Form::text('title',null,['class' => 'form-control']) !!}


    <lable for="name">عدد المشاهدة </lable>
    {{-- ياخد شكل الحقل بتاع البوتستراب & الديفولت بتاعه فاضى & نوع الحقل--}}
    {{--The field you need &  The default is empty & Class Bootstrap for field--}}
    {!! Form::number('view',null,['class' => 'form-control']) !!}

</div>


<div class="form-group">
    <lable for="name">الصورة </lable>
    {{--The field you need &  The default is empty & Class Bootstrap for field--}}
    {!! Form::file('image',null,['class' => 'form-control']) !!}
</div>




<div class="form-group ">
    <button class="btn btn-primary" type="submit">
        انشاء
    </button>
</div>
