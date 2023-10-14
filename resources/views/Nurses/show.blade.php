@extends('include.master')
@section('content')
<section id="data-list-view" class="data-list-view-header">
    <div class="table-responsive">
        <table class="table data-list-view">
            <thead>
                <tr>
                    <th></th>
                    <th class="black">الاسم</th>
                    <th class="product-name">السكن</th>
                    <th class="product-name">المستشفى</th>
                    <th class="product-name">الجنسية</th>
                    <th class="product-name">الهاتف</th>
                    <th class="black">خيارات</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($nurses) && $nurses->count() >0)
                @endif
                @foreach ($nurses as $index=>$nurse)
                <tr>
                  <td></td>
                  <td class="black">{{$nurse->name}}</td>
                  <td class="product-name">{{$nurse->title}}</td>
                  <td>
                    <div class="black">
                        <h6>
                            <b>{{$nurse->hospitals->dis}}</b>
                        </h6>
                    </div>
                </td>
                  <td class="product-name">
                    {{$nurse->national->name}}
                </td>
                <td class="product-name">{{$nurse->phone}}</td>
                  <td>
                    <a href="{{'/Nurses/update/'.$nurse->id}}" class="btn bg-gradient-info" data-toggle="tooltip" data-placement="top" title="تعديل"><i class="fa fa-pencil"></i></a>
                    <a href="{{'/Nurses/delete/'.$nurse->id}}" class=" btn bg-gradient-danger" data-toggle="tooltip" data-placement="top" title="حذف"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
<head>
    <title>
      | الممرضين
    </title>

</head>
