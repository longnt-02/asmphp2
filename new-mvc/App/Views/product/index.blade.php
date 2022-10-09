
  @section('title','Danh sách sản phẩm')
  @section('content-title','Danh sách sản phẩm')
  
  
  <!-- dành cho phần content yield(ten ) ~ session(ten,) noi dung endsection -->
  @section('content')
  @extends('layouts.master')
  <table class="table" border="1">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Image URL</th>
        <th scope="col">Category ID</th>
        <th scope="col">Status</th>
        <th scope="col">
            <a href="{{BASE_URL}}products/create"><button class="add">Add</button></a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($array as $item )
            <tr>
              <td tabindex="0">{{$item['id']}}</td>
              <td>{{$item['name']}}</td>
              <td>{{$item['price']}} </td>
              <td>{{$item['image_url']}} </td>
              <td>{{$item['category_id']}} </td>
              <td>{{$item['status']}} </td>
              <td>
                <a href="{{BASE_URL}}products/detail{{$item['id']}}" class="btn btn-success">Chi tiết</a>
                <a href="" class="btn btn-danger">Xóa</a>
              </td>
            </tr>
          @endforeach
        <tr>
            <th scope="col">1</th>
            <th scope="col">Váy dài</th>
            <th scope="col">2000000</th>
            <th scope="col">23123ddd</th>
            <th scope="col">2</th>
            <th scope="col">Còn hàng</th>
            <th scope="col">
                <a href=""><button class="edit">Edit</button></a>
                <a href=""><button class="remove">Remove</button></a>
            </th>
        </tr>
    </tbody>
  </table>
@endsection