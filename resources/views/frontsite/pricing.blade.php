@extends('frontsite.layouts.master')
@section('content')

      <div class="page-template-pricing">
         <div class="section-pricing">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <h2>Pricing on Chamb</h2>
                     <p class="lead">Get targeted distribution to Chamb's built-in network of global companies. <br>
                        Choose the right one for you.
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="pricing-container wow fadeIn" data-wow-delay="0.2s">
                     <div class="pricing-switcher">
                        <p class="fieldset">
                           <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
                           <label for="monthly-1">Monthly</label>
                           <input type="radio" name="duration-1" value="yearly" id="yearly-1">
                           <label for="yearly-1">Yearly</label>
                           <span class="switch"></span>
                        </p>
                     </div>
                     <ul class="pricing-list bounce-invert">
                        <li>
                           <ul class="pricing-wrapper">
                              <li data-type="monthly" class="is-visible">
                                 <header class="pricing-header">
                                    <h2>Chamb Free</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>Logo and Branding</li>
                                       <li>Unlimited products</li>
                                       <li>Analytics</li>
                                    </ul>
                                    <div class="plan_price">Free</div>
                                    <a class="select" href="#">Sign Up</a>
                                 </div>
                              </li>
                              <li data-type="yearly" class="is-hidden">
                                 <header class="pricing-header">
                                    <h2>Chamb Free</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>Logo and Branding</li>
                                       <li>Unlimited products</li>
                                       <li>Analytics</li>
                                    </ul>
                                    <div class="plan_price">Free</div>
                                    <a class="select" href="#">Sign Up</a>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <ul class="pricing-wrapper">
                              <li data-type="monthly" class="is-visible">
                                 <header class="pricing-header">
                                    <h2>Chamb Pro</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>Logo and Branding</li>
                                       <li>Unlimited number of products</li>
                                       <li>Better search</li>
                                       <li>Analytics</li>
                                       <li>Google AdWords - 10%</li>
                                       <li>Verified by third party</li>
                                       <li>Support</li>
                                    </ul>
                                    <div class="plan_price">3.488 <span class="small">trl. per. mth.</span></div>
                                    <a class="select" href="#">Sign Up</a>
                                 </div>
                              </li>
                              <li data-type="yearly" class="is-hidden">
                                 <header class="pricing-header">
                                    <h2>Chamb Pro</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>Logo and Branding</li>
                                       <li>Unlimited number of products</li>
                                       <li>Better search</li>
                                       <li>Analytics</li>
                                       <li>Google AdWords - 10%</li>
                                       <li>Verified by third party</li>
                                       <li>Support</li>
                                    </ul>
                                    <div class="plan_price">3.488 <span class="small">trl. per. year.</span></div>
                                    <a class="select" href="#">Sign Up</a>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li class="exclusive">
                           <ul class="pricing-wrapper">
                              <li data-type="monthly" class="is-visible">
                                 <div class="popular">MOST POPULAR</div>
                                 <header class="pricing-header">
                                    <h2>Chamb Growth</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>As Chamb Pro with extra:</li>
                                       <li>Google adwords 30 %</li>
                                       <li>Sponsored links</li>
                                    </ul>
                                    <div class="plan_price">9.888 <span class="small">trl. per. mth.</span></div>
                                    <a class="select" href="#">Sign Up</a>
                                 </div>
                              </li>
                              <li data-type="yearly" class="is-hidden">
                                 <div class="popular">MOST POPULAR</div>
                                 <header class="pricing-header">
                                    <h2>Chamb Growth</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>As Chamb Pro with extra:</li>
                                       <li>Google adwords 30 %</li>
                                       <li>Sponsored links</li>
                                    </ul>
                                    <div class="plan_price">9.888 <span class="small">trl. per. year.</span></div>
                                    <a class="select" href="#">Sign Up</a>
                                 </div>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <ul class="pricing-wrapper">
                              <li data-type="monthly" class="is-visible">
                                 <header class="pricing-header">
                                    <h2>Custom solution</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>Do you have special needs?</li>
                                       <li>Send us a message and </li>
                                       <li>we will contact you within</li>
                                       <li>2-3 business days.</li>
                                    </ul>
                                    <div class="plan_price">Custom <span class="small">per. mth.</span></div>
                                    <a class="select" href="#">Get contact</a>
                                 </div>
                              </li>
                              <li data-type="yearly" class="is-hidden">
                                 <header class="pricing-header">
                                    <h2>Custom solution</h2>
                                    <p>No binding</p>
                                 </header>
                                 <div class="pricing-body">
                                    <ul class="pricing-features">
                                       <li>Do you have special needs?</li>
                                       <li>Send us a message and </li>
                                       <li>we will contact you within</li>
                                       <li>2-3 business days.</li>
                                    </ul>
                                    <div class="plan_price">Custom <span class="small">per. year.</span></div>
                                    <a class="select" href="#">Get contact</a>
                                 </div>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="row pricing-f">
                  <div class="col-md-12">
                     <h2>Our features explained</h2>
                  </div>
               </div>
               <div class="row pricing-f-b">
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_1.png" alt="">
                        </div>
                        <h3>Logo &amp; branding</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.4s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_2.png" alt="">
                        </div>
                        <h3>Products on Chamb</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_3.png" alt="">
                        </div>
                        <h3>Search</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_4.png" alt="">
                        </div>
                        <h3>Analytics</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.4s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_5.png" alt="">
                        </div>
                        <h3>Google Adwords</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_6.png" alt="">
                        </div>
                        <h3>Verified with 3. part</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_7.png" alt="">
                        </div>
                        <h3>Language translation</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.4s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_8.png" alt="">
                        </div>
                        <h3>Sponsored links</h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
                     <div class="feature">
                        <div class="feature_icon">
                           <img src="images/pricing_icon_9.png" alt="">
                        </div>
                        <h3>Support </h3>
                        <p class="feature_text">The wise man therefore always holds in these matters to this principle of selection: 
                           he rejects pleasures to secure other greater pleasures, or else he endures pains 
                           to avoid worse pains.
                        </p>
                     </div>
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
@section('css')  
   <link rel="stylesheet" href="css/pricing.css">
@endsection
@section('script')
   <script src="js/index.js"></script>   
@endsection


