



<head>
    <style>
        .pic {
            position:relative;
            width: 180px;
            height: 180px;
            overflow: hidden;
            border-radius:50%;
        }
        .pic img {
            width: 100%;
            height: auto;

        }

        .pic2 {
            position:relative;
            width: 180px;
            height: 180px;
            overflow: hidden;
            border-radius:50%;
        }
        .pic2 img {
            width: auto;
            height: 100%;

        }

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
            <h1>訂位紀錄</h1>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>

                    <th>網頁</th>
                    <th>name</th>
                    <th>logo</th>


                </tr>
                </thead>
                <tbody>
@if (count($restaurants) > 0)
    @foreach($restaurants as $restaurant)
        <div class="col-md-4">
            <div class="card" style="border-style: none;background-color:transparent;">
                <div class="card-body" style="padding-top:1px;">

                    <form method="POST" action="{{route('restaurant{id}.home',$restaurant->id)}}">
                        {{ csrf_field() }}
                        {{ method_field('get') }}
                        <td> <button type="submit" class="btn btn-primary col-md-11 " style="font-family: 微軟正黑體; font-weight: bold;">
                                {{ __('前往') }}
                            </button></td>

                            <td>{{$restaurant->name }}</td>

                        <div class="pic">
                            <td><img  src="{{$restaurant->logo}}"  class="center-block " alt="boy"></td>
                        </div>

                    </form>
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



