<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="{{route('admin.dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#banner-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-card-image"></i><span>Banner</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="banner-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Banner List</span>
          </a>
        </li>
      </ul>
    </li><!-- End Banner Nav --> --}}

  <!-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#jobs-nav" data-bs-toggle="collapse" href="">
        <i class="bi bi-card-image"></i><span>Course</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
    
    </li> -->
    

    <li class="nav-item">
          <a class="nav-link  collapsed  "  href="{{route('courselist')}}">
            <i class="bi bi-person"></i><span>Course</span>
          </a>
        
        </li><!-- End role Nav -->
    
 
    
        
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#test-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i><span>Test</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="test-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{ route('testseries.list') }}">
                <i class="bi bi-circle"></i><span> Test Series</span>
              </a>
            </li>
            <li>
              <a href="{{ route('questions.list') }}">
                <i class="bi bi-circle"></i><span>Question</span>
              </a>
            </li>
          </ul>
        </li>


          
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#exam-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person"></i><span>Exam</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="exam-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{ route('examseries.list') }}">
                <i class="bi bi-circle"></i><span> Exam Series</span>
              </a>
            </li>
            <li>
              <a href="{{ route('examquestion.list') }}">
                <i class="bi bi-circle"></i><span>Question</span>
              </a>
            </li>
          </ul>
        </li>
        

        {{-- <li class="nav-item">
          <a class="nav-link  collapsed"  href="#">
            <i class="bi bi-person"></i><span>Assignment</span>
          </a>
        
        </li> --}}
    
        
      
 
    </ul>
  </li><!-- End Job Nav -->
  








        
      </ul>
    </li><!-- End Page Nav -->

  </ul>

</aside><!-- End Sidebar-->
