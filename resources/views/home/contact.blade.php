<div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>

         @if(session()->has('message'))

      <div class="alert alert-succes">

      <button type="button" class="close" data-bs-dismiss='alert'>X</button>

      {{session()->get('message')}}

      </div>

         @endif

          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form" action="{{url('contact')}}" method="Post">

             @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Name" type="text" name="name" required>
                  
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email"
                        type="email" name="email" required>
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Phone Number" type="number" name="phone" required>   

                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                   </div>
                   <div class="col-md-12">
                      <button type="submit" class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1077807974666!2d98.65714507477668!3d3.5626521504720525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fdf837c0b1b%3A0xa5ef19b5b1fb64a5!2sProgram%20Studi%20Teknologi%20Informasi%2C%20Fasilkom-TI%2C%20Universitas%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1700814124251!5m2!1sid!2sid" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>