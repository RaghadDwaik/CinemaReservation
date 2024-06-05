 <!-- movie-area -->

 <section class="movie-area movie-bg" data-background="{{asset('img/bg/movie_bg.jpg')}}">
     <div class="container">
         <div class="row align-items-end mb-60">
             <div class="col-lg-6">
                 <div class="section-title text-center text-lg-left">
                     <span class="sub-title">ONLINE STREAMING</span>
                     <h2 class="title">New Release Movies</h2>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="movie-page-meta">
                     <div class="tr-movie-menu-active text-center">
                         <button class="active" data-filter="*">Animation</button>
                         <button class="" data-filter=".cat-one">Comedy</button>
                         <button class="" data-filter=".cat-two">Action</button>
                         <button class="" data-filter=".cat-two">Drama</button>
                   
                        </div>
                     <form action="#" class="movie-filter-form">
                         <select class="custom-select">
                             <option selected>English</option>
                             <option value="1">Blueray</option>
                             <option value="2">4k Movie</option>
                             <option value="3">Hd Movie</option>
                         </select>
                     </form>
                 </div>
             </div>
         </div>

         <div class="row tr-movie-active">
             <!-- //لجلب بيانات الافلام من التيبل -->
             @yield('content')
         </div>

         <div class="row">
             <div class="col-12">
                 <div class="pagination-wrap mt-30">
                     <nav>
                         <ul>
                             <li class="active"><a href="#">1</a></li>
                             <li><a href="#">2</a></li>
                             <li><a href="#">3</a></li>
                             <li><a href="#">4</a></li>
                             <li><a href="#">Next</a></li>
                         </ul>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </section>