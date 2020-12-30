@extends('frontsite.layouts.master')
@section('content')
   <!-- Modal -->
   <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Chamb for Business</a></li>
         </ul>
      </div>
      <div class="section-how-it-works">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="left-works-box wow fadeIn" data-wow-delay="0.2s">
                     <h2>How it works if <br><span>you’re a buyer.</span></h2>
                     <p>We explained the buying proces of Chamb in
                        three simple steps. See how it works,
                        benefits and FAQ.
                     </p>
                     <div class="form-email-box">
                        <h3>Sign up for free</h3>
                        <form class="box-email">
                           <input type="email" placeholder="Enter your e-mail" />
                           <button>Continue</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="right-works-box">
                     <div class="small-box wow fadeIn" data-wow-delay="0.2s">
                        <div class="how-text-left">01</div>
                        <div class="how-dit-right">
                           <div class="dit-img">
                              <img class="img-responsive" src="images/works-icon-01.png" alt="" />
                           </div>
                           <h3>Sign up</h3>
                           <h2><span>Small or big,</span><br> we have the solution.</h2>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit 
                              voluptatem accusantium doloremque laudantium rem aperiam, 
                              eaque ipsa quae ab illo inventore veritatis et quasi 
                              architecto beatae vitae dicta sunt explicabo.
                           </p>
                           <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                              inventore veritatis
                           </p>
                           <div class="line"></div>
                        </div>
                     </div>
                     <div class="searching-box wow fadeIn" data-wow-delay="0.4s">
                        <div class="how-text-left">02</div>
                        <div class="how-dit-right">
                           <div class="dit-img">
                              <img class="img-responsive" src="images/works-icon-02.png" alt="" />
                           </div>
                           <h3>Search</h3>
                           <h2>We revolutionized <br> <span>searching.</span></h2>
                           <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                              inventore veritatis
                           </p>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit 
                              voluptatem accusantium doloremque laudantium rem aperiam, 
                              eaque ipsa quae ab illo inventore veritatis et quasi 
                              architecto beatae vitae dicta sunt explicabo.
                           </p>
                           <div class="line"></div>
                        </div>
                     </div>
                     <div class="sellers-box wow fadeIn" data-wow-delay="0.6s">
                        <div class="how-text-left">03</div>
                        <div class="how-dit-right">
                           <div class="dit-img">
                              <img class="img-responsive" src="images/works-icon-03.png" alt="" />
                           </div>
                           <h3>Contact & buy</h3>
                           <h2>Contact sellers <br>and <span>start buying</span></h2>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit 
                              voluptatem accusantium doloremque laudantium rem aperiam, 
                              eaque ipsa quae ab illo inventore veritatis et quasi 
                              architecto beatae vitae dicta sunt explicabo.
                           </p>
                           <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                              inventore veritatis
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="works-systems">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="sys-box-left-a wow fadeIn" data-wow-delay="0.2s">
                     <h2>Streamlined<br>
                        Communication Systems.
                     </h2>
                     <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                        inventore veritatis
                     </p>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit 
                        voluptatem accusantium doloremque laudantium rem aperiam, 
                        eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo.
                     </p>
                  </div>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="sys-box-right-a wow fadeIn" data-wow-delay="0.4s">
                     <img class="img-responsive" src="images/creat_pro.png" alt="" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="sys-box-left-b wow fadeIn" data-wow-delay="0.2s">
                     <img src="images/how-is-works-img-02.jpg" alt="" />
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="sys-box-right-b wow fadeIn" data-wow-delay="0.4s">
                     <h2>Powerful search tools <br>
                        for finding products.
                     </h2>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit 
                        voluptatem accusantium doloremque laudantium rem aperiam, 
                        eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo.
                     </p>
                     <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                        inventore veritatis
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="sys-box-left-c wow fadeIn" data-wow-delay="0.2s">
                     <h2>Find Exciting and Exotic
                        Products.
                     </h2>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit 
                        voluptatem accusantium doloremque laudantium rem aperiam, 
                        eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo.
                     </p>
                     <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                        inventore veritatis
                     </p>
                  </div>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="sys-box-right-c wow fadeIn" data-wow-delay="0.4s">
                     <img src="images/how-is-works-img-03.png" alt="" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-safety">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Bwnefis with trust and safety</h2>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b1.png" alt="" />
                     </div>
                     <h3>Branden Minisite</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b2.png" alt="" />
                     </div>
                     <h3>Vetted Sellers</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b3.png" alt="" />
                     </div>
                     <h3>Verified with 3. part</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b4.png" alt="" />
                     </div>
                     <h3>Data Protection</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b5.png" alt="" />
                     </div>
                     <h3>Support</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b1.png" alt="" />
                     </div>
                     <h3>Branden Minisite</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="faq-box wow fadeIn" data-wow-delay="0.0s">
         <div class="container">
            <div class="row">
               <div class="faq-main-box">
                  <h2>Questions and answers</h2>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-1">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-a" aria-expanded="true" aria-controls="faq-a">
                                 What acn I do with Chamb Free?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-a" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-1">
                              <div class="panel-body">Vivamus in arcu urna. Vivamus nibh leo, viverra vitae facilisis id, auctor in nulla. Aliquam eu nunc vitae turpis maximus posuere sed auctor mi. Cras sit amet quam malesuada dui vestibulum lobortis a at orci.</div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-2">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-b" aria-expanded="false" aria-controls="faq-b">
                                 How do I upgrade?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-2">
                              <div class="panel-body">Vivamus in arcu urna. Vivamus nibh leo, viverra vitae facilisis id, auctor in nulla. Aliquam eu nunc vitae turpis maximus posuere sed auctor mi. Cras sit amet quam malesuada dui vestibulum lobortis a at orci.</div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-3">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-c" aria-expanded="false" aria-controls="faq-c">
                                 When will I be charged?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-3">
                              <div class="panel-body">Vivamus in arcu urna. Vivamus nibh leo, viverra vitae facilisis id, auctor in nulla. Aliquam eu nunc vitae turpis maximus posuere sed auctor mi. Cras sit amet quam malesuada dui vestibulum lobortis a at orci.</div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-4">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-d" aria-expanded="false" aria-controls="faq-d">
                                 How can i cancel my plan?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-d" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-4">
                              <div class="panel-body">Vivamus in arcu urna. Vivamus nibh leo, viverra vitae facilisis id, auctor in nulla. Aliquam eu nunc vitae turpis maximus posuere sed auctor mi. Cras sit amet quam malesuada dui vestibulum lobortis a at orci. </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="panel-group" id="accordion-a" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-right-1">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-a" aria-expanded="true" aria-controls="faq-right-a">
                                 Can I get help to create my account?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-right-a" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-1">
                              <div class="panel-body">You can look at all the products being sold on Chamb and be able to contact all sellers. </div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-right-2">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-b" aria-expanded="false" aria-controls="faq-right-b">
                                 What if i only want to try Chamb?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-right-b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-2">
                              <div class="panel-body">Just go into your account options, click on the my subscriptions tab, click on the upgrade my subscription button, then follow the instruction on screen to level up your Chamb experience. </div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-right-3">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-c" aria-expanded="false" aria-controls="faq-right-c">
                                 What if i need a custom solution?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-right-c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-3">
                              <div class="panel-body">When creating an account, our ‘guided tour’ tutorial system will walk you through every aspect of the account generation process. From filling in your name to posting your first product or searching for your first item; nothing is left to chance </div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-right-4">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-d" aria-expanded="false" aria-controls="faq-right-d">
                                 I have more questions..
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-right-d" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-4">
                              <div class="panel-body">All accounts, whether you are a buyer or a seller, can register for a free account. Here you should be able to judge if Chamb is the right place to help grow your business. </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
@endsection
      