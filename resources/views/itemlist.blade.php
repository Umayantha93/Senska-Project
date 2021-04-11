<table class="table">
  <thead class = "thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Item Name</th>
      <th scope="col">Address</th>
      <th scope="col">Discription</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Tax</th>
      <th scope="col">Actual Price</th>
    </tr>
  </thead>
  
  
  <tbody>
    @foreach($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->item_name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->discription}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->discount}}</td>
      <td>{{$item->tax}}</td>
      <td>{{$item->actual_price}}</td>
      <td>
      <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
      <a href="{{url('/edit/'.$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
      <!-- <a href="" class="btn btn-sm btn-danger">Delete</a>     -->
      </td>
    </tr>
    @endforeach
 
  </tbody>
  
</table>
