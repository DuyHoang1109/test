<div>
    <h1>Danh sách sản phẩm</h1>
    <ul>
        @foreach($products as $p)
            <li>{{$p['name']}}  ---  {{$p['price']}}</li>
        @endforeach
    </ul>
</div>
