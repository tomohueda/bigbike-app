<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($products_0 as $product)
        <div class="col">
          <div class="card shadow-sm">

              <img class="img-thumbnail" alt="{{ $product->images[0]->name }}" class="" src="{{ asset('storage/images/' . $product->images[0]->name) }}">
            
            <div class="card-body">
              <p class="card-text">{{$product->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                {{$product->copy}}
                <!--<div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>-->
                <!--
                <small class="text-muted">9 mins</small>
                -->
              </div>
            </div>
            
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>