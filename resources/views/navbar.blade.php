<!-- <div class="row center">
   <div class="col"> -->
   <!-- <div class="flying-menu"> -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: white; border-radius: 5px;">
        <div class="container-fluid" style="width: 100%; ">
        <!--<p><h5 style="color: black;"></h5></p>-->
        <strong>Jayabaya Bimbel</strong>
        @if(Session::get('login')==TRUE)
        <ul class="navbar-nav ml-auto" style="font-size: 14px;">
          <!-- Authentication Links -->
          <li>
          <div class="btn-group dropleft" style="margin-right: 20px;">
        </div>
              </li>
              <li>
        <div class="btn-group dropleft">
          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('userName')}}              
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="change_password" style="color: black; font-size: 14px;">Ubah Password</a>
            <a class="dropdown-item" href="edit_profile" style="color: black;font-size: 14px;">Edit Profile</a>
           <a class="dropdown-item" href="{{url('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: black;">Logout</a>
                    <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
          </div>
        </div>
        </ul>
        @else
        <ul class="navbar-nav ml-auto" style="font-size: 14px;">
          <!-- Authentication Links -->
          <li>
            <a href="{{url('login')}}" class="btn btn-primary btn-sm">Login</a>
         </li>
        </ul>
        @endif
        </div>
        </div>
    </nav>
  <!-- </div> -->
<!--   </div>
</div> -->
