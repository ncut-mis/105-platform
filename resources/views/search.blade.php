



<head>
    <style>


        /*.body {*/
        /*!* background-image: url("https://unsplash.com/photos/gFyy2Po7T-k") ; *!*/
        /*background-color: #FF3333;*/
        /*}*/
    </style>
</head>

<form method="get"  action="{{ route('restaurant.search') }}" >
    <div class="form-group">
        <label for="task-name" class="col-sm-3 control-label">輸入欲查詢餐廳</label>

        <div class="col-sm-6">
            <input type="text" name="booksearch" id="task-name" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> 查詢
        </button>
    </div>


</form>
<div class="container">
    <div class="row">
        <div class="page-header">

        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>

                    <th width="200" style="text-align: center">網頁</th>
                    <th width="200" style="text-align: center">name</th>
                    <th width="200" style="text-align: center">logo</th>


                </tr>
                </thead>
                <tbody>
@if (count($restaurants) > 0)

    @foreach($restaurants as $restaurant)
        <div class="col-md-4">
            <div class="card" style="border-style: none;background-color:transparent;">
                <div class="card-body" style="padding-top:1px;">
                    <tr>
                    <form method="POST" action="{{route('restaurant{id}.home',$restaurant->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('get') }}
                        <td style="text-align: center"> <button type="submit" class="btn btn-primary col-md-11 " style="font-family: 微軟正黑體; font-weight: bold;">
                                {{ __('前往') }}
                            </button></td>

                            <td style="text-align: center">{{$restaurant->name }}</td>


                            <td style="text-align: center"><img   src="{{url('img/logo/'. $restaurant->logo)}}" width="80" height="40" class="center-block " alt="boy"></td>


                    </form>
                    </tr>
                </div>
            </div>
        </div>
    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endif



