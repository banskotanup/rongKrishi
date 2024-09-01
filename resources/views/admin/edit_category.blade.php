<x-adminheader />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
            <div class="div_center">
            
                <h1 class="cat_label">Update Category</h1>    
                    <form action="{{url('update_category',$data->id)}}" method="post">
                        @csrf
                        <label for="">Category Name</label>
                        <input type="text" name="cat_name" value="{{$data->cat_title}}">
                            <input type="submit" class="btn btn-info" value="Update">
                    </form>

            </div>       
           

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<x-adminfooter />