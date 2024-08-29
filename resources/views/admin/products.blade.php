<x-adminheader />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <p class="card-title mb-0">Top Products</p>
                  <!-- Button to Open the Modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewModel">
                   Add New
                  </button>
                  <!-- The Modal -->
              <div class="modal" id="addNewModel">
                <div class="modal-dialog">
                  <div class="modal-content">

                <!-- Modal Header -->
                 <div class="modal-header">
                   <h4 class="modal-title">Add New Product</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                   <form action="{{URL::to('AddNewProduct')}}" method="POST"enctype="multipart/form-data">
                    @csrf
                      <label for="">Title</label>
                      <input type="text" name="title" placeholder="Enter Titile" class="form-control mb-2">
                      <label for="">Price</label>
                      <input type="text" name="price" placeholder="Enter Price ($)" class="form-control mb-2">
                      <label for="">Quantity</label>
                      <input type="number" name="quantity" placeholder="Enter Quantity" class="form-control mb-2">
                      <label for="">Picture</label>
                      <input type="file" name="file" class="form-control mb-2">
                      <label for="">Description</label>
                      <input type="text" name="description" placeholder="Enter Description" class="form-control mb-2">
                      <label for="">Category</label>
                        <select name="category" class="form-control mb-2" id="">
                          <option value="">Select Category</option>
                          <option value="Ghee">Ghee</option>
                          <option value="Tea">Tea</option>
                          <option value="Honey">Honey</option>
                        </select>
                        <label for="">Type</label>
                        <select name="type" class="form-control mb-2" id="">
                          <option value="">Select Type</option>
                          <option value="Black Tea">Black Tea</option>
                          <option value="Yak Ghee">Yak Ghee</option>
                          <option value="Black Honey">Black Honey</option>
                        </select>
                      <input type="submit" name="save" class="btn btn-success" value="Save Now">

                   </form>
                  </div>

    </div>
  </div>
</div>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Picture</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Category</th>
                          <th>Type</th>
                        </tr>  
                      </thead>
                      <tbody>
                        @foreach($products as $item)
                        <tr>
                          <td>{{$item->title}}</td>
                          <td><img src="{{URL::asset('uploads/products/'.$item->picture)}}" width="100px"></td>
                          <td class="font-weight-bold">{{$item->price}}</td>
                          <td>{{$item->quantity}}</td>
                          <td class="font-weight-medium">
                          <div class="badge badge-success">{{$item->category}}</div>
                          </td>
                          <td class="font-weight-medium">
                            <div class="badge badge-info">{{$item->type}}</div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
         
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<x-adminfooter />