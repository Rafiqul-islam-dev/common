<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
       <ul class="iq-menu">
        @if(Auth::user()->userType=='Admin')
          <li class="active">
             <a href="javascript:void(0);" class="iq-waves-effect"><i class="las la-home"></i><span>Manage User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
             <li class=""><a href="{{ route('users.view')}}">View User</a></li>

             </ul>
          </li>
          @endif

          <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-university"></i><span>Institution</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('institution.view')}}">Add Institution Details</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-university"></i><span>Institution Social</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('social.view')}}">Add Institution Details</a></li>
            </ul>
         </li>

          <li>
             <a href="javascript:void(0);" class="iq-waves-effect"><i class="far fa-images"></i><span>Slider</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
                <li><a href="{{ route('slider.view')}}">Add Slider</a></li>
                {{-- <li><a href="e-commerce-product-detail.html">Product Details</a></li> --}}

             </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-bullhorn"></i><span>Notice</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('notice.view')}}">Add Notice</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-images"></i><span>Photo Album</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('album.view')}}">Add Album</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-file-image"></i><span>Photo Gallery</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('gallary.view')}}">Add Gallery</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-file-image"></i><span>Video Gallery</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('videoGallary.view')}}">Add Video</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-chalkboard-teacher"></i><span>Teacher</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('teacher.view')}}">Add Teacher</a></li>
            </ul>
         </li>
          <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-users"></i><span>Governing Body</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('governingBody.view')}}">Add New</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-link"></i><span>Important Link</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('impLink.view')}}">Add Link</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-user-graduate"></i><span>Student Corner</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('studentCorner.view')}}">Add New</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-user-graduate"></i><span>All Page</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('page.view')}}">Add New</a></li>
            </ul>
         </li>
         {{-- <li>
            <a href="javascript:void(0);" class="iq-waves-effect"></i><span>News & Eveny</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               <li><a href="{{ route('newsEvent.view')}}">Add News & Eveny</a></li>
            </ul>
         </li> --}}
         <li>
             <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-shopping-cart-line"></i><span>Class Setup</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
                <li><a href="{{ route('onlineExam.view')}}">Class</a></li>
             </ul>
          </li>

          <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-clipboard"></i><span>Syllabus</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               @foreach ($menus as  $menu)
               <li><a href="{{ route('onlineclass.view', $menu->id)}}">{{$menu->classNameEnglish}}</a></li>
               @endforeach

            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><i class="fas fa-clipboard-list"></i><span>Class Routine</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               @foreach ($menus as  $menu)
               <li><a href="{{ route('classRoutine.view', $menu->id)}}">{{$menu->classNameEnglish}}</a></li>
               @endforeach

            </ul>
         </li>

       </ul>
    </nav>
    <div class="p-3"></div>
 </div>
