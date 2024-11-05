<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

  <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
</style>

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">
        
        
       <div class="container" align="center"
       style="padding-top: 100px;">   
          
       @if(session()->has('message'))
    <div class="alert alert-success d-flex justify-content-center align-items-center position-relative">
        <span class="mx-auto">{{ session()->get('message') }}</span>
        <button type="button" class="close position-absolute" style="right: 10px;" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif



       <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
        
       @csrf 

        <div style="padding:15px;">

        <label> Doctor Name</label>
        <input type="text" name="name"  placeholder="write the name" required="">

        </div>

        <div style="padding:15px;">

        <label> Phone</label>
        <input type="number" name="number"  placeholder="write the phone" required="">

        </div>
        <div style="padding:15px;">

        <label>Speciality</label>
        
        <select name="speciality" style="width: 220px;" >
          
            <option>--Select--</option>
            <option value="Cardiologist">Cardiologist</option>
            <option value="Neurologist">Neurologist</option>
            <option value="Psychiatrist">Psychiatrist</option>
            <option value="Dentist">Dentist</option>
        </select>
        </div>
        
        <div style="padding:15px;">

<label>Room Number</label>
<input type="text" name="room"  placeholder="Room Number" required="">

</div>

<div style="padding:15px;">

<label> Doctor Image</label>
<input type="file" name="file" required="">

</div>

<div style="padding:15px;">

<input type="submit" class="btn btn-success">

</div>






       </div>
</div>

</form>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>