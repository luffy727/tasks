@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
   
   <body>
      
         <!-- banner section start -->
         <div class="banner_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="banner_taital_section">
                        <h1 class="design_taital">We Do Design Blog For Business</h1>
                        
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- barber section start -->
      <div class="barber_section layout_padding">
         <div class="container">
            <div class="braber_taital_main">
               <div class="row">
               @foreach ($blog as $post)
                  <div class="col-lg-6">
                     <div class="barber_bg_main">
                        <h1 class="barber_taital">{{ $post->title }}</h1>
                        <p class="barber_text">{{ $post->description }}</p>
                        <div class="blogr_main">
                           <div class="blogr_left">
                              <p class="post_text">Post at :  {{ date('Y-m-d',strtotime($post->created_at)) }}</p>
                              <p class="post_text">Post by :  {{ $post-> blogpost->name }}</p>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               @endforeach  
               </div>
            </div>
            
      <!-- barber section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container" style="background-color: rgb(20, 24, 29);">
            <div class="row justify-content-center">
               <div class="col-sm-12">
                  <h1 class="about_taital text-center text-white">About Us</h1>
                  <p class="about_text text-white">Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and aIpsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a</p>
                  
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
     
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-sm-12">
                  <p class="copyright_text text-center">© 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
       
   </body>
</html>
@endsection('content')