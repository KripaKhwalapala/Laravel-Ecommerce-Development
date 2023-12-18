<footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="images/Samyak Logo.png" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ADDRESS:</strong> Byasi-2, Mandev Marg, Bhaktapur, Nepal</p>
                        <p><strong>TELEPHONE:</strong> +977 9851212507</p>
                        <p><strong>EMAIL:</strong> info.samyakgroup@gmail.com</p>
                      </div>

                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                           <li><a href="#">Home</a></li>
                           <!-- <li><a href="#">About</a></li> -->
                           <li><a href="{{url('products')}}">Products</a></li>
                           <!-- <li><a href="#">Testimonial</a></li> -->
                           <li><a href="{{url('ourstory')}}">About Us</a></li>
                           <li><a href="{{url('contactinfo')}}">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <!-- <li><a href="#">Account</a></li> -->
                           <li><a href="{{url('show_cart')}}">Cart to order</a></li>
                           <li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>
                           <!-- <li><a href="#">Shopping</a></li> -->
                           <!-- <li><a href="#">Widget</a></li> -->
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Newsletter</h3>
                        <div class="information_f">
                          <p>Subscribe to our newsletter and be engaged with us.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>