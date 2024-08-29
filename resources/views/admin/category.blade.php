<x-adminheader />
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
            <div class="div_center">
            <div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                </div>
                @endif
            </div>
                <h1  class="cat_label">Add Category</h1>
             <form action="{{url('add_category')}}" method="Post">
                @csrf
            <span style="padding-right: 15px;">
                <label>Category Name</label>
                <input type="text" name="category" required>
            </span>
                <input class = "btn btn-primary" type="submit" value="Add Category">
             </form>
            </div>       
           
    
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<x-adminfooter />