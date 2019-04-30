
<div>餐點內容：
    @foreach($items as $is)
        <div>
            {{$is->name}}
        </div>
    @endforeach
</div>
