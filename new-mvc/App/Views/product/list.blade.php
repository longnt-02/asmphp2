
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
            <a href=""><button class="add">Add</button></a>
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
    </tbody>
  </table>
@endsection