 <body id="page-top">
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
         <div class="container">
             <a class="navbar-brand" href="#page-top">UNNews</a>
             <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                 data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                 aria-expanded="false" aria-label="Toggle navigation">
                 Menu
                 <i class="fas fa-bars"></i>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ms-auto">
                     <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                             href="/blog">blog</a></li>
                     <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                             href="/category">category</a></li>
                     <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                             href="/admin">dashboard</a></li>
                     @guest
                         <li class="nav-item">
                             <a class="nav-link btn btn-success" href="/login">Login</a>
                         </li>
                     @else
                         <li class="nav-item">
                             <a class="nav-link " href="/admin" target="blank-page">Dashboard</a>
                         </li>
                         <form action="/logout" method="post">
                             @csrf
                             <li class="nav-item">
                                 <button class="nav-link btn btn-warning" type="submit">Logout</button>
                             </li>

                         </form>
                     @endguest
                 </ul>
             </div>
         </div>
     </nav>
