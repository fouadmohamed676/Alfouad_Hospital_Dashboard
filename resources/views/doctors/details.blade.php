@extends('include.data')
@section('data')
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">التفاصيل </h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="feather icon-chevron-left"></i></a></li>
                            <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                            <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                            <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Icon</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="black">
                                                <td class="font-weight-bold">الاسم</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                                <td>{{$doctor->name}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">تاريخ الميلاد</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                                <td>{{$doctor->barth_date}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">العنوان</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                                <td>{{$doctor->title}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">الهاتف</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                                <td>{{$doctor->phone}}</td>
                                            </tr>


                                            <tr>
                                                <td class="font-weight-bold">النوع</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                                <td>{{$doctor->gender->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">الايميل</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                                <td>{{$doctor->email}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">الجنسية</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                                <td> {{$doctor->national->name}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">العيادة</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>

                                          <td>{{$doctor->clink->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">التخصص</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                          <td>{{$doctor->specialization->name}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <td class="font-weight-bold">المستشفى</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                          <td> {{$doctor->hospital->dis}}</td>
                                            </tr> --}}

                                            <tr>
                                                <td class="font-weight-bold">المحلية</td>
                                                <td>
                                                    <i class="feather icon-chevron-left"></i>
                                                </td>
                                          <td>{{$doctor->locals->name}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- END: Content-->


@endsection

