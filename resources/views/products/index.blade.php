@foreach($products as $product)

<div class="">
  <h4>{{$product->name}}</h4>
  <p>{{$product->getPrice()}}</p>
</div>


@endforeach
