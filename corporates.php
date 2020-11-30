<?php
/*
Template Name: Корпоративы
Template Post Type: page
*/
get_header('corporate');
?>

	
	<?php
		//Screen 1 ACF fields
	

		//Screen 2 ACF fields
		
  ?>
  
  <div class="mkdf-content">
        <div class="mkdf-content-inner">
          <div class="mkdf-full-width">
            <div class="mkdf-full-width-inner">
              <div class="mkdf-grid-row">
                <div class="mkdf-page-content-holder mkdf-grid-col-12">

                  <!-- top-bar -->
                  <div class="mkdf-top-bar top-bar" style="">
                    <div class="mkdf-vertical-align-containers">
                      <div class="mkdf-position-left">
                        <div class="mkdf-position-left-inner">
                        <?php 
                                                                                            $phone = get_option('karjala_event_phone_field');
                                                                                            if( $phone ):
                        ?>
                          <a class="mkdf-icon-widget-holder top-bar__phone" href="tel:<?php echo trim($phone); ?>" target="_blank">
                            <span class="mkdf-icon-element ion-android-call top-bar__phone-icon" style=""></span> 
                            <span class="mkdf-icon-text top-bar__phone-text" style="">
                            <?php echo $phone; ?>
                            </span> 
                          </a>
                          <?php 
                            endif;

                          ?>
                          <?php 
                            $email = get_option('karjala_event_mail_field');

                            if( $email ):
                          
                          ?>
                          <a class="mkdf-icon-widget-holder top-bar__email" href="mailto:<?php echo trim($email); ?>" target="_blank" style="">
                            <span class="mkdf-icon-element ion-ios-email-outline top-bar__email-icon" style=""></span>
                            <span class="mkdf-icon-text top-bar__email-text" style="">
                            <?php echo $email; ?>
                            </span> 
                          </a>
                          <?php 
                            endif;
                            
                          ?>
                        </div>
                      </div>
                      <div class="mkdf-position-right">
                        <div class="mkdf-position-right-inner">
                        <?php 
                          $vk = get_option('karjala_event_vk_field');

                          $instagram = get_option('karjala_event_instagram_field');

                        ?>
                          <div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">
                          <?php 
                            if( $vk ):
                          ?>
                            <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social" style="" href="<?php echo $vk;?>" target="_blank">
                              <span class="mkdf-social-icon-widget ion-social-instagram top-bar__social-icon"></span> 
                            </a>
                            <?php 
                              endif;
                              if( $instagram ):
                            ?>
                            <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social" style="" href="<?php echo $instagram;?>" target="_blank">
                              <span class="mkdf-social-icon-widget ion-social-twitter top-bar__social-icon"></span> 
                            </a>
                            <?php 
                              endif;
                              
                            ?>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- top-block -->
                  <div class="vc_row wpb_row vc_row-fluid"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-page__top" style="">
                        
                        <img src="img/bg-top-white-sharp.png" alt="" class="top-block__top-bg">
                        <img src="img/bg-top-white-sharp.png" alt="" class="top-block__bottom-bg">



                        <div class="mkdf-section-title-holder  " style="text-align: left">
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" style="">

                              <!-- content -->
                              <div class="">
                                <div class="mkdf-section-title-holder  " style="text-align: left">
                                  <div class="mkdf-st-inner">
                                    <h2 class="mkdf-st-title corporate-page__top-title">
                                      Корпоративы </h2>
                                      <div class="corporate-page__top-icons-set">

                                        <div class="corporate-page__top-icon">
                                          
                                          <span>иконка</span>
                                          <p>текст преимущества</p>
                                          
                                        </div>
                                        <div class="corporate-page__top-icon">
                                          
                                          <span>иконка</span>
                                          <p>текст преимущества</p>
                                          
                                        </div>
                                        <div class="corporate-page__top-icon">
                                          
                                          <span>иконка</span>
                                          <p>текст преимущества</p>
                                          
                                        </div>
                                        <div class="corporate-page__top-icon">
                                          
                                          <span>иконка</span>
                                          <p>текст преимущества</p>
                                          
                                        </div>
                                        


                                      </div>
                                    <div class="corporate-page__top-btns">
                                      <a href="https://wanderland.qodeinteractive.com/the-laugavegur-trail/" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-consult__btn corporate-page__top-btn">
                                        <span class="mkdf-btn-text">Заказать консультацию</span>
                                        
                                      </a>

                                      <a href="#" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-form corporate-page__top-btn">
                                        <span class="mkdf-btn-text">Скачать прайс</span>
                                        
                                      </a>

                                    </div>
                                   
                                  </div>
                                </div>
                              </div>
                             

                              

                            </div>
                          </div>
                        </div>



                      </div>
                    </div>
                  </div>
                  <!-- ./top-block -->

                 
                  <!-- we know -->
                  <div class="vc_row wpb_row vc_row-fluid we-know__block"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper" style="">

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->
                            
                              <div class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 ">

                                <div class="mkdf-eh-item    " >
                                  <div class="mkdf-eh-item-inner">
                                    <div class="mkdf-eh-item-content mkdf-eh-custom-6011" style="">
                                      <div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: left">
                                        <div class="mkdf-st-inner">
                                        
                                          <p class="mkdf-st-text we-know__block-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu nt ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc itation. </p>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="mkdf-eh-item    ">

                                  <div class="we-know-slider__wrapper">
                                    <div class="we-know-slider">
                                      <div class="we-know-slider__item">
                                        <img src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h2-img-01.png"
                                           alt="s">
                                      </div>
                                      <div class="we-know-slider__item">
                                        <img src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h2-img-01.png"
                                           alt="s">
                                      </div>
                                      <div class="we-know-slider__item">
                                        <img 
                                            src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h2-img-01.png"
                                           alt="s">
                                      </div>
                                      

                                    </div>
                                    <div class="common-slider-arrows we-know-slider__arrows">
                                      <div class="common-slider-arrow-left we-know-slider__arrows_arrow-left">
                                        <img class="arrow-white" src="img/slider/arrow-white.svg" alt="назад">
																								<img class="arrow-green" src="img/slider/arrow-green.svg" alt="back">
                                      </div>
                                      <div class="common-slider-arrow-right we-know-slider__arrows_arrow-right">
                                        <img class="arrow-white" src="img/slider/arrow-white.svg" alt="вперед">
                                        <img class="arrow-green" src="img/slider/arrow-green.svg" alt="forward">

                                      </div>
                                    </div>
                                  </div>

                                </div>

                              </div>
                                

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                   <!-- ./we know -->


                   <!-- corporate services -->
                  <div class="vc_row wpb_row vc_row-fluid corporate-services__block">
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper" style="">
                  
                        <div class="mkdf-section-title-holder  " style="text-align: left">
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" style="">
                  
                              <!-- content -->
                              <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align" style="text-align: center">
                                <div class="mkdf-st-inner">
                                  <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                  <h2 class="mkdf-st-title corporate-services__block-title">
                                    Виды <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
                                      <span class="mkdf-st-highlight-title" style="color: #59815b">корпоративов</span>
                                      <span class="mkdf-st-highlight">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                          x="0px" y="0px" viewBox="0 0 15.7 30" style="enable-background:new 0 0 15.7 30;"
                                          xml:space="preserve" class="mkdf-active-hover-left">
                                          <polygon class="st0"
                                            points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                          </polygon>
                                        </svg>
                                        <span class="mkdf-active-hover-middle"></span>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                          x="0px" y="0px" viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;"
                                          xml:space="preserve" class="mkdf-active-hover-right">
                                          <polygon class="st0"
                                            points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                          </polygon>
                                        </svg>
                                      </span>
                                    </span> </h2>
                                </div>
                              </div>
                  
                              
                  
                              <div
                                class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns  mkdf-normal-space mkdf-bl-pag-load-more ">

                                <div class="mkdf-bl-wrapper">

                                  <div class="corporate-services__block-items">
                                    <div class="corporate-services__block-item block-item_1">
                                      
                                      <!-- <div class="corporate-services__block-item-img">
                                        <img src="img/trips/slider/blog-post-img-10-1.jpg" class="image__animation-tranform" alt="">
                                      </div>
                                       -->
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
                                    <div class="corporate-services__block-item block-item_2">
                                      
                                      <!-- <div class="corporate-services__block-item-img">
                                        <img src="img/trips/slider/blog-post-img-11-1.jpg" class="image__animation-tranform" alt="">
                                      </div> -->
                                      
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
  
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
                                     
                                      
                                    </div>
  
                                    <div class="corporate-services__block-item block-item_3">
                                      
                                      <!-- <div class="corporate-services__block-item-img">
                                        <img src="img/trips/slider/blog-post-img-12-1.jpg" class="image__animation-tranform" alt="">
                                      </div> -->
                                      
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
  
                                    <div class="corporate-services__block-item block-item_4">
                                      
                                      <!-- <div class="corporate-services__block-img">
                                        <img src="img/trips/slider/blog-post-img-13.jpg" class="image__animation-tranform" alt="">
                                      </div> -->
  
                                      
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
  
                                    <div class="corporate-services__block-item block-item_5">
                                      
                                      <!-- <div class="corporate-services__block-item-img">
                                        <img src="img/trips/slider/blog-post-img-14.jpg" class="image__animation-tranform" alt="">
                                      </div> -->
                                      
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
  
                                    <div class="corporate-services__block-item block-item_6">
                                      
                                      <!-- <div class="corporate-services__block-item-img">
                                        <img src="img/trips/slider/blog-post-img-13.jpg" class="image__animation-tranform" alt="">
                                      </div> -->
                                      
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
  
  
                                     
                                      
                                    </div>
  
  
                                    <div class="corporate-services__block-item block-item_7">
                                      
                                      <!-- <div class="corporate-services__block-item-img">
                                        <img src="img/trips/slider/blog-post-img-14.jpg" class="image__animation-tranform" alt="">
                                      </div> -->
                                      
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
                                    <div class="corporate-services__block-item block-item_8">
                                      
                                      <!-- <div class="corporate-services__block-item-img">
                                        <img src="img/trips/slider/blog-post-img-14.jpg" class="image__animation-tranform" alt="">
                                      </div> -->
                                      
  
                                      <div class="corporate-services__block-item-descr-wrapper">
                                        <div class="corporate-services__block-item-descr">
                                          <div class="corporate-services__block-item-title">
                                            Заголовок
                                          </div>
                                          
                                          <div class="mkdf-btn cta-modal-consult__btn corporate-services__block-item-btn"  >
                                            Выбрать
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
  
                                  </div>


                               

                                </div>
                                
                              </div>
                  
                  
                            </div>
                          </div>
                        </div>
                  
                      </div>
                    </div>
                  </div>
                   <!-- ./corporate services -->

  

                  <!-- icons -->
                  <div class="vc_row wpb_row vc_row-fluid corporate-icons__block"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->
                              <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align" style="text-align: center">
                                <div class="mkdf-st-inner">
                                  <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                  <h2 class="mkdf-st-title corporate-icons__block-title">
                                    Наши <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
                                      <span class="mkdf-st-highlight-title" style="color: #59815b">преимущества</span>
                                      <span class="mkdf-st-highlight">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                          x="0px" y="0px" viewBox="0 0 15.7 30" style="enable-background:new 0 0 15.7 30;"
                                          xml:space="preserve" class="mkdf-active-hover-left">
                                          <polygon class="st0"
                                            points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                          </polygon>
                                        </svg>
                                        <span class="mkdf-active-hover-middle"></span>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                          x="0px" y="0px" viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;"
                                          xml:space="preserve" class="mkdf-active-hover-right">
                                          <polygon class="st0"
                                            points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                          </polygon>
                                        </svg>
                                      </span>
                                    </span> </h2>
                                </div>
                              </div>

                              <div class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
                                <div class="mkdf-dcl-inner mkdf-outer-space clearfix">
                                  <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                                    <div class="mkdf-dcl-item-inner">
                                      <div class="mkdf-dcli-image">
                                        <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-07.png"
                                          class="attachment-full size-full" alt="a" loading="lazy"> <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-13.png"
                                          class="attachment-full size-full" alt="d" loading="lazy"> <span class="mkdf-dcl-highlight">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 14.1 28" style="enable-background:new 0 0 14.1 28;" xml:space="preserve"
                                            class="mkdf-active-hover-left">
                                            <polygon class="st0"
                                              points="1.9,0 0,2.3 1.3,4.8 1.6,6.6 2.2,7.7 3.7,9.5 3.2,9.8 3.7,10.9 3.7,11.8 3.4,12.8 2.6,13.7 3.2,14.8
                        3.7,15.8 3.3,16.5 2.8,17.1 1.5,19.2 2.7,20.5 3.5,23.1 2.7,24.4 1.8,26.4 1.8,26.8 2.5,27.3 3.4,27.5 4.2,28 14.1,28 14.1,0 "></polygon>
                                          </svg> <span class="mkdf-active-hover-middle"></span>
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 11.5 28" style="enable-background:new 0 0 11.5 28;" xml:space="preserve"
                                            class="mkdf-active-hover-right">
                                            <polygon class="st0" points="9.1,0 9.3,1.1 9.7,1.9 9.7,2.3 9.9,2.7 9.9,3.3 10.1,4 10.1,4.7 10.1,5.3 9.6,5.7 9.9,6.3 10.1,6.8
                        10.7,7.3 10.7,7.6 10.6,7.9 10.7,8.9 10.7,9.5 11.5,10.6 11.2,11 11.5,11.2 10.9,11.8 10.5,12.5 10.7,12.7 11,12.7 11.1,12.9
                        10.6,14.1 9.9,15 8.2,16.7 8.8,17.2 8.4,18 8.8,18.8 8.7,19.6 8.8,20.5 8.7,20.9 8.7,21.3 9.2,21.8 8.7,22.6 8.8,23 8.8,23.2
                        9,23.4 8.6,23.7 8.4,24.4 8.4,24.9 7.9,25.2 7.6,26.1 7.9,26.8 8.5,27.6 6.9,28 0,28 0,0 "></polygon>
                                          </svg> </span>
                                      </div>
                                      <div class="mkdf-dcli-text-holder">
                                        <div class="mkdf-dcli-text-wrapper">
                                          <div class="mkdf-dcli-text">
                                            
                                            <h6 itemprop="name" class="mkdf-dcli-title entry-title">Adventure
                                            </h6>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </article>
                                  <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                                    <div class="mkdf-dcl-item-inner">
                                      <div class="mkdf-dcli-image">
                                        <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-08.png"
                                          class="attachment-full size-full" alt="a" loading="lazy"> <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-14.png"
                                          class="attachment-full size-full" alt="d" loading="lazy"> <span class="mkdf-dcl-highlight">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 14.1 28" style="enable-background:new 0 0 14.1 28;" xml:space="preserve"
                                            class="mkdf-active-hover-left">
                                            <polygon class="st0"
                                              points="1.9,0 0,2.3 1.3,4.8 1.6,6.6 2.2,7.7 3.7,9.5 3.2,9.8 3.7,10.9 3.7,11.8 3.4,12.8 2.6,13.7 3.2,14.8
                        3.7,15.8 3.3,16.5 2.8,17.1 1.5,19.2 2.7,20.5 3.5,23.1 2.7,24.4 1.8,26.4 1.8,26.8 2.5,27.3 3.4,27.5 4.2,28 14.1,28 14.1,0 "></polygon>
                                          </svg> <span class="mkdf-active-hover-middle"></span>
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 11.5 28" style="enable-background:new 0 0 11.5 28;" xml:space="preserve"
                                            class="mkdf-active-hover-right">
                                            <polygon class="st0" points="9.1,0 9.3,1.1 9.7,1.9 9.7,2.3 9.9,2.7 9.9,3.3 10.1,4 10.1,4.7 10.1,5.3 9.6,5.7 9.9,6.3 10.1,6.8
                        10.7,7.3 10.7,7.6 10.6,7.9 10.7,8.9 10.7,9.5 11.5,10.6 11.2,11 11.5,11.2 10.9,11.8 10.5,12.5 10.7,12.7 11,12.7 11.1,12.9
                        10.6,14.1 9.9,15 8.2,16.7 8.8,17.2 8.4,18 8.8,18.8 8.7,19.6 8.8,20.5 8.7,20.9 8.7,21.3 9.2,21.8 8.7,22.6 8.8,23 8.8,23.2
                        9,23.4 8.6,23.7 8.4,24.4 8.4,24.9 7.9,25.2 7.6,26.1 7.9,26.8 8.5,27.6 6.9,28 0,28 0,0 "></polygon>
                                          </svg> </span>
                                      </div>
                                      <div class="mkdf-dcli-text-holder">
                                        <div class="mkdf-dcli-text-wrapper">
                                          <div class="mkdf-dcli-text">
                                            
                                            <h6 itemprop="name" class="mkdf-dcli-title entry-title">Beaches</h6>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </article>
                                  <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                                    <div class="mkdf-dcl-item-inner">
                                      <div class="mkdf-dcli-image">
                                        <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-09.png"
                                          class="attachment-full size-full" alt="a" loading="lazy"> <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-15.png"
                                          class="attachment-full size-full" alt="d" loading="lazy"> <span class="mkdf-dcl-highlight">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 14.1 28" style="enable-background:new 0 0 14.1 28;" xml:space="preserve"
                                            class="mkdf-active-hover-left">
                                            <polygon class="st0"
                                              points="1.9,0 0,2.3 1.3,4.8 1.6,6.6 2.2,7.7 3.7,9.5 3.2,9.8 3.7,10.9 3.7,11.8 3.4,12.8 2.6,13.7 3.2,14.8
                        3.7,15.8 3.3,16.5 2.8,17.1 1.5,19.2 2.7,20.5 3.5,23.1 2.7,24.4 1.8,26.4 1.8,26.8 2.5,27.3 3.4,27.5 4.2,28 14.1,28 14.1,0 "></polygon>
                                          </svg> <span class="mkdf-active-hover-middle"></span>
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 11.5 28" style="enable-background:new 0 0 11.5 28;" xml:space="preserve"
                                            class="mkdf-active-hover-right">
                                            <polygon class="st0" points="9.1,0 9.3,1.1 9.7,1.9 9.7,2.3 9.9,2.7 9.9,3.3 10.1,4 10.1,4.7 10.1,5.3 9.6,5.7 9.9,6.3 10.1,6.8
                        10.7,7.3 10.7,7.6 10.6,7.9 10.7,8.9 10.7,9.5 11.5,10.6 11.2,11 11.5,11.2 10.9,11.8 10.5,12.5 10.7,12.7 11,12.7 11.1,12.9
                        10.6,14.1 9.9,15 8.2,16.7 8.8,17.2 8.4,18 8.8,18.8 8.7,19.6 8.8,20.5 8.7,20.9 8.7,21.3 9.2,21.8 8.7,22.6 8.8,23 8.8,23.2
                        9,23.4 8.6,23.7 8.4,24.4 8.4,24.9 7.9,25.2 7.6,26.1 7.9,26.8 8.5,27.6 6.9,28 0,28 0,0 "></polygon>
                                          </svg> </span>
                                      </div>
                                      <div class="mkdf-dcli-text-holder">
                                        <div class="mkdf-dcli-text-wrapper">
                                          <div class="mkdf-dcli-text">
                                            
                                            <h6 itemprop="name" class="mkdf-dcli-title entry-title">Camping</h6>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </article>
                                  <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                                    <div class="mkdf-dcl-item-inner">
                                      <div class="mkdf-dcli-image">
                                        <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-10.png"
                                          class="attachment-full size-full" alt="a" loading="lazy"> <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-16.png"
                                          class="attachment-full size-full" alt="d" loading="lazy"> <span class="mkdf-dcl-highlight">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 14.1 28" style="enable-background:new 0 0 14.1 28;" xml:space="preserve"
                                            class="mkdf-active-hover-left">
                                            <polygon class="st0"
                                              points="1.9,0 0,2.3 1.3,4.8 1.6,6.6 2.2,7.7 3.7,9.5 3.2,9.8 3.7,10.9 3.7,11.8 3.4,12.8 2.6,13.7 3.2,14.8
                        3.7,15.8 3.3,16.5 2.8,17.1 1.5,19.2 2.7,20.5 3.5,23.1 2.7,24.4 1.8,26.4 1.8,26.8 2.5,27.3 3.4,27.5 4.2,28 14.1,28 14.1,0 "></polygon>
                                          </svg> <span class="mkdf-active-hover-middle"></span>
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 11.5 28" style="enable-background:new 0 0 11.5 28;" xml:space="preserve"
                                            class="mkdf-active-hover-right">
                                            <polygon class="st0" points="9.1,0 9.3,1.1 9.7,1.9 9.7,2.3 9.9,2.7 9.9,3.3 10.1,4 10.1,4.7 10.1,5.3 9.6,5.7 9.9,6.3 10.1,6.8
                        10.7,7.3 10.7,7.6 10.6,7.9 10.7,8.9 10.7,9.5 11.5,10.6 11.2,11 11.5,11.2 10.9,11.8 10.5,12.5 10.7,12.7 11,12.7 11.1,12.9
                        10.6,14.1 9.9,15 8.2,16.7 8.8,17.2 8.4,18 8.8,18.8 8.7,19.6 8.8,20.5 8.7,20.9 8.7,21.3 9.2,21.8 8.7,22.6 8.8,23 8.8,23.2
                        9,23.4 8.6,23.7 8.4,24.4 8.4,24.9 7.9,25.2 7.6,26.1 7.9,26.8 8.5,27.6 6.9,28 0,28 0,0 "></polygon>
                                          </svg> </span>
                                      </div>
                                      <div class="mkdf-dcli-text-holder">
                                        <div class="mkdf-dcli-text-wrapper">
                                          <div class="mkdf-dcli-text">
                                           
                                            <h6 itemprop="name" class="mkdf-dcli-title entry-title">Friendly
                                            </h6>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </article>
                                  <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                                    <div class="mkdf-dcl-item-inner">
                                      <div class="mkdf-dcli-image">
                                        <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-11.png"
                                          class="attachment-full size-full" alt="a" loading="lazy"> <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-17.png"
                                          class="attachment-full size-full" alt="d" loading="lazy"> <span class="mkdf-dcl-highlight">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 14.1 28" style="enable-background:new 0 0 14.1 28;" xml:space="preserve"
                                            class="mkdf-active-hover-left">
                                            <polygon class="st0"
                                              points="1.9,0 0,2.3 1.3,4.8 1.6,6.6 2.2,7.7 3.7,9.5 3.2,9.8 3.7,10.9 3.7,11.8 3.4,12.8 2.6,13.7 3.2,14.8
                        3.7,15.8 3.3,16.5 2.8,17.1 1.5,19.2 2.7,20.5 3.5,23.1 2.7,24.4 1.8,26.4 1.8,26.8 2.5,27.3 3.4,27.5 4.2,28 14.1,28 14.1,0 "></polygon>
                                          </svg> <span class="mkdf-active-hover-middle"></span>
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 11.5 28" style="enable-background:new 0 0 11.5 28;" xml:space="preserve"
                                            class="mkdf-active-hover-right">
                                            <polygon class="st0" points="9.1,0 9.3,1.1 9.7,1.9 9.7,2.3 9.9,2.7 9.9,3.3 10.1,4 10.1,4.7 10.1,5.3 9.6,5.7 9.9,6.3 10.1,6.8
                        10.7,7.3 10.7,7.6 10.6,7.9 10.7,8.9 10.7,9.5 11.5,10.6 11.2,11 11.5,11.2 10.9,11.8 10.5,12.5 10.7,12.7 11,12.7 11.1,12.9
                        10.6,14.1 9.9,15 8.2,16.7 8.8,17.2 8.4,18 8.8,18.8 8.7,19.6 8.8,20.5 8.7,20.9 8.7,21.3 9.2,21.8 8.7,22.6 8.8,23 8.8,23.2
                        9,23.4 8.6,23.7 8.4,24.4 8.4,24.9 7.9,25.2 7.6,26.1 7.9,26.8 8.5,27.6 6.9,28 0,28 0,0 "></polygon>
                                          </svg> </span>
                                      </div>
                                      <div class="mkdf-dcli-text-holder">
                                        <div class="mkdf-dcli-text-wrapper">
                                          <div class="mkdf-dcli-text">
                                            
                                            <h6 itemprop="name" class="mkdf-dcli-title entry-title">Low budget
                                            </h6>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </article>
                                  <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                                    <div class="mkdf-dcl-item-inner">
                                      <div class="mkdf-dcli-image">
                                        <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-12.png"
                                          class="attachment-full size-full" alt="a" loading="lazy"> <img width="92" height="74"
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-18.png"
                                          class="attachment-full size-full" alt="d" loading="lazy"> <span class="mkdf-dcl-highlight">
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 14.1 28" style="enable-background:new 0 0 14.1 28;" xml:space="preserve"
                                            class="mkdf-active-hover-left">
                                            <polygon class="st0"
                                              points="1.9,0 0,2.3 1.3,4.8 1.6,6.6 2.2,7.7 3.7,9.5 3.2,9.8 3.7,10.9 3.7,11.8 3.4,12.8 2.6,13.7 3.2,14.8
                        3.7,15.8 3.3,16.5 2.8,17.1 1.5,19.2 2.7,20.5 3.5,23.1 2.7,24.4 1.8,26.4 1.8,26.8 2.5,27.3 3.4,27.5 4.2,28 14.1,28 14.1,0 "></polygon>
                                          </svg> <span class="mkdf-active-hover-middle"></span>
                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 11.5 28" style="enable-background:new 0 0 11.5 28;" xml:space="preserve"
                                            class="mkdf-active-hover-right">
                                            <polygon class="st0" points="9.1,0 9.3,1.1 9.7,1.9 9.7,2.3 9.9,2.7 9.9,3.3 10.1,4 10.1,4.7 10.1,5.3 9.6,5.7 9.9,6.3 10.1,6.8
                        10.7,7.3 10.7,7.6 10.6,7.9 10.7,8.9 10.7,9.5 11.5,10.6 11.2,11 11.5,11.2 10.9,11.8 10.5,12.5 10.7,12.7 11,12.7 11.1,12.9
                        10.6,14.1 9.9,15 8.2,16.7 8.8,17.2 8.4,18 8.8,18.8 8.7,19.6 8.8,20.5 8.7,20.9 8.7,21.3 9.2,21.8 8.7,22.6 8.8,23 8.8,23.2
                        9,23.4 8.6,23.7 8.4,24.4 8.4,24.9 7.9,25.2 7.6,26.1 7.9,26.8 8.5,27.6 6.9,28 0,28 0,0 "></polygon>
                                          </svg> </span>
                                      </div>
                                      <div class="mkdf-dcli-text-holder">
                                        <div class="mkdf-dcli-text-wrapper">
                                          <div class="mkdf-dcli-text">
                                            
                                            <h6 itemprop="name" class="mkdf-dcli-title entry-title">Popular</h6>
                                          </div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </article>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>


                  <!-- video -->
                  <div class="vc_row wpb_row vc_row-fluid corporate-video__block"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->
                              <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align" style="text-align: center">
                                <div class="mkdf-st-inner">
                                  <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                  <h2 class="mkdf-st-title corporate-video__block-title">
                                    Мы умеем делать круто! <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
                                    <!-- <span class="mkdf-st-highlight-title" style="color: #59815b">праздниках</span> -->
                                    
                                    </span> 
                                  </h2>
                                  <div class="">
                                    <iframe src="//vk.com/video_ext.php?oid=-33155510&id=456239038&hash=9386f6bb2501c1ce&hd=2" width="853" height="480" frameborder="0" allowfullscreen></iframe>
                                  </div>
                                </div>
                              </div>
                              
                                

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>


                  <!-- reviews -->
                  <div class="vc_row wpb_row vc_row-fluid corporate-reviews__block"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->
                              <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align" style="text-align: center">
                                <div class="mkdf-st-inner">
                                  <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                  <h2 class="mkdf-st-title corporate-reviews__block-title">
                                    Отзывы <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
                                    <!-- <span class="mkdf-st-highlight-title" style="color: #59815b">праздниках</span> -->
                                    
                                    </span> 
                                  </h2>
                                  
                                </div>
                              </div>

                              <div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 ">
                                <div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-6938" data-769-1024="0 70px 20px 0"
                                  data-680="20px 0 0 0">
                                  <div class="mkdf-eh-item-inner">
                                    <div class="mkdf-eh-item-content mkdf-eh-custom-6938">
                                      <div
                                        class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-normal-space mkdf-bl-pag-no-pagination "
                                        >
                                        
                                        <div class="reviews-slider__wrapper">

                                          <div class="reviews-slider">

                                            <div class="reviews-slider__item">
                                              <div class="reviews-slider__img">
                                                <img width="371" height="213" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2020/01/h2-img-03a.png" class="attachment-full size-full" alt="s">
                                              </div>
                                              
                                              <div class="reviews-slider__descr">
                                                
                                                    <div class="reviews-slider__descr-name">
                                                       
                                                        
                                                        ФИО
                                                    </div>

                                                    <div class="reviews-slider__descr-author">
                                                       
                                                        
                                                        Компетенции
                                                    </div>

                                                    <div class="reviews-slider__text">
                                                      
                                                        <p itemprop="description" class="mkdf-post-excerpt">
                                                          Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididu
                                                          nt ut labore et dolore magna aliqua. Ut enim. </p>
                                                      
                                                    </div>

                                           
                                              </div>
                                            </div>

                                            <div class="reviews-slider__item">
                                              <div class="reviews-slider__img">
                                                <img width="371" height="213" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2020/01/h2-img-03a.png" class="attachment-full size-full" alt="s">
                                              </div>
                                              
                                              <div class="reviews-slider__descr">
                                                
                                                    <div class="reviews-slider__descr-name">
                                                       
                                                        
                                                        ФИО
                                                    </div>

                                                    <div class="reviews-slider__descr-author">
                                                       
                                                        
                                                        Компетенции
                                                    </div>

                                                    <div class="reviews-slider__text">
                                                      
                                                        <p itemprop="description" class="mkdf-post-excerpt">
                                                          Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididu
                                                          nt ut labore et dolore magna aliqua. Ut enim. </p>
                                                      
                                                    </div>

                                           
                                              </div>
                                            </div>

                                            <div class="reviews-slider__item">
                                              <div class="reviews-slider__img">
                                                <img width="371" height="213" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2020/01/h2-img-03a.png" class="attachment-full size-full" alt="s">
                                              </div>
                                              
                                              <div class="reviews-slider__descr">
                                                
                                                    <div class="reviews-slider__descr-name">
                                                       
                                                        
                                                        ФИО
                                                    </div>

                                                    <div class="reviews-slider__descr-author">
                                                       
                                                        
                                                        Компетенции
                                                    </div>

                                                    <div class="reviews-slider__text">
                                                      
                                                        <p itemprop="description" class="mkdf-post-excerpt">
                                                          Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididu
                                                          nt ut labore et dolore magna aliqua. Ut enim. </p>
                                                      
                                                    </div>

                                           
                                              </div>
                                            </div>

                                            <div class="reviews-slider__item">
                                              <div class="reviews-slider__img">
                                                <img width="371" height="213" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2020/01/h2-img-03a.png" class="attachment-full size-full" alt="s">
                                              </div>
                                              
                                              <div class="reviews-slider__descr">
                                                
                                                    <div class="reviews-slider__descr-name">
                                                       
                                                        
                                                        ФИО
                                                    </div>

                                                    <div class="reviews-slider__descr-author">
                                                       
                                                        
                                                        Компетенции
                                                    </div>

                                                    <div class="reviews-slider__text">
                                                      
                                                        <p itemprop="description" class="mkdf-post-excerpt">
                                                          Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididu
                                                          nt ut labore et dolore magna aliqua. Ut enim. </p>
                                                      
                                                    </div>

                                           
                                              </div>
                                            </div>

                                            

                                          </div>

                                          <div class="slider-arrows common-slider-arrows  reviews-slider__arrows">
                                            <div class="slider-arrow__left common-slider-arrow-left reviews-slider__arrows_arrow-left">
                                              <img class="arrow-white" src="img/slider/arrow-white.svg" alt="назад">
																					<img class="arrow-green" src="img/slider/arrow-green.svg" alt="back">
                                            </div>
                                            <div class="slider-arrow__right common-slider-arrow-right  reviews-slider__arrows_arrow-right">
                                              <img class="arrow-white" src="img/slider/arrow-white.svg" alt="вперед">
																					<img class="arrow-green" src="img/slider/arrow-green.svg" alt="forward">
                                            </div>
                                          </div>

                                        </div>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                              
                                

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>


                  <!-- maillist -->
                  <div class="vc_row wpb_row vc_row-fluid corporate-maillist__block"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418  corporate-block_wrapper">

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->
                              <div class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 trips-page__block_maillist-wrapper corporate-maillist__block-wrapper">

                                            <div class="mkdf-eh-item corporate-maillist__block-img" >
                                              <div class="mkdf-eh-item-inner">
                                                <div class="mkdf-eh-item-content mkdf-eh-custom-6959">
                                                  <div class="mkdf-single-image-holder   ">
                                                    <div class="mkdf-si-inner">
                                                      <img src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/h1-img-01.png" class="attachment-full size-full" alt="s"> </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="mkdf-eh-item corporate-maillist__block-text" >
                                              <div class="mkdf-eh-item-inner">
                                                <div class="mkdf-eh-item-content mkdf-eh-custom-3422">

                                                  <div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: left">
                                                    <div class="mkdf-st-inner">
                                                      <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                                      <h3 class="mkdf-st-title">
                                                        Подпишитесь на нашу  <span class="mkdf-st-highlight-title-holder" style="color: #ffffff">
                                                          <span class="mkdf-st-highlight-title" style="color: #59815b">рассылку ...</span>
                                                          <span class="mkdf-st-highlight">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30" style="enable-background:new 0 0 15.7 30;" xml:space="preserve" class="mkdf-active-hover-left">
                                                              <polygon class="st0" points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 "></polygon>
                                                              </svg>
                                                            <span class="mkdf-active-hover-middle"></span>
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;" xml:space="preserve" class="mkdf-active-hover-right">
                                                              <polygon class="st0" points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 "></polygon>
                                                              </svg>
                                                          </span>
                                                        </span> </h3>

                                                      <p class="mkdf-st-text corporate-maillist__block-text-par" style="font-size: 18px;line-height: 26px">
                                                        и узнайте 50 способов ... </p>
                                                    </div>
                                                  </div>

                                                

                                                  <div role="form" class="wpcf7 corporate-maillist__block-form" id="wpcf7-f89-p202-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response" role="alert" aria-live="polite"></div>

                                                    <div role="form" class="wpcf7 common__form" id="wpcf7-f1433-p1182-o1" lang="en-US" dir="ltr">
                                                      <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                                      <form action="/get-in-touch/#wpcf7-f1433-p1182-o1" method="post" class="wpcf7-form init cf7_custom_style_1"
                                                        novalidate="novalidate">
                                                    
                                                        <div class="contact-us">
                                                          <!-- <span class="wpcf7-form-control-wrap your-name"> -->
                                                          <input type="text" name="your-name" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"
                                                            placeholder="Имя">
                                                          <!-- </span> -->
                                                          <!-- <span class="wpcf7-form-control-wrap your-email"> -->
                                                          <input type="email" name="your-email" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                            aria-required="true" aria-invalid="false" placeholder="Телефон">
                                                          <!-- </span> -->
                                                          <button type="submit" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid ">
                                                            <span class="mkdf-btn-text">Заказать звонок</span>
                                                          </button>
                                                          <span class="mkdf-btn-text form-caption">
                                                            Нажимая на кнопку "Заказать звонок", вы соглашаетесь с <a href="/privacy-policy">Политикой
                                                              конфиденциальности</a>
                                                          </span>
                                                          <span class="ajax-loader"></span>
                                                        </div>
                                                        <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                                      </form>
                                                    </div>
                                                  </div>

                                                  

                                                  <div class="corporate-maillist__block-bottomtext">
                                                    
                                                      
                                                      <p class="mkdf-st-text corporate-maillist__block-text-par" style="font-size: 18px;line-height: 26px">
                                                        Или не жди и узнай прямо сейчас! </p>

                                                        <a href="#" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
                                                          <span class="mkdf-btn-text">Заказать звонок</span>
                                                        </a>

                                                   
                                                  </div>

                                                </div>
                                              </div>
                                            </div>

                                          </div>
                              
                                

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  

                  <!-- shop -->
                  <div class="vc_row wpb_row vc_row-fluid corporate-shop__block"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->

                              <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align" style="text-align: center">
                                <div class="mkdf-st-inner">
                                  <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                  <h2 class="mkdf-st-title corporate-shop__block-title">
                                    Магазин <span class="mkdf-st-highlight-title-holder" style="color: #ffffff">
                                      <!-- <span class="mkdf-st-highlight-title" style="color: #59815b">items</span> -->
                                      <span class="mkdf-st-highlight">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30"
                                          style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
                                          class="mkdf-active-hover-left">
                                          <polygon class="st0"
                                            points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                          </polygon>
                                        </svg>
                                        <span class="mkdf-active-hover-middle"></span>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.3 30"
                                          style="enable-background:new 0 0 13.3 30;" xml:space="preserve"
                                          class="mkdf-active-hover-right">
                                          <polygon class="st0"
                                            points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                          </polygon>
                                        </svg>
                                      </span>
                                    </span> </h2>
                                </div>
                              </div>

                              <div
                                        class="mkdf-pl-holder mkdf-grid-list mkdf-disable-bottom-space mkdf-standard-layout mkdf-five-columns mkdf-no-space mkdf-info-below-image ">
                                        <div class="mkdf-pl-outer mkdf-outer-space">

                                          <div class="shop-slider__wrapper">
                                            <div class="shop-slider">

                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="a"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-18.png">
                                                    </div>
                                                    <!-- <div class="mkdf-pli-text">
                                                      <div class="mkdf-pli-text-outer">
                                                        <div class="mkdf-pli-text-inner">
                                                          <div class="mkdf-pli-add-to-cart mkdf-default-skin">
                                                            <a rel="nofollow" href="?add-to-cart=994" data-quantity="1" data-product_id="994"
                                                              data-product_sku="456"
                                                              class="button add_to_cart_button ajax_add_to_cart mkdf-button">Add to cart</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> -->
                                                    <a class="mkdf-pli-link"
                                                      href="#" title="Shoes"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a href="#">Shoes</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="s"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-17.png">
                                                    </div>
                                                    
                                                    <a class="mkdf-pli-link"
                                                      href="#"
                                                      title="Camera tripod"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="#">Camera tripod</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="s"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/test-img-02.png">
                                                    </div>
                                                    
                                                    <a class="mkdf-pli-link"
                                                      href="#" title="Raincoat"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="#">Raincoat</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="a"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-15.png">
                                                    </div>
                                                    
                                                    <a class="mkdf-pli-link"
                                                      href="#"
                                                      title="DSLR camera"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="#">DSLR camera</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="f"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="s"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-16.png">
                                                    </div>
                                                   
                                                    <a class="mkdf-pli-link"
                                                      href=""
                                                      title="Watter bottle"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="">Watter bottle</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>

                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-10-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="a"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-18.png">
                                                    </div>
                                                    <!-- <div class="mkdf-pli-text">
                                                      <div class="mkdf-pli-text-outer">
                                                        <div class="mkdf-pli-text-inner">
                                                          <div class="mkdf-pli-add-to-cart mkdf-default-skin">
                                                            <a rel="nofollow" href="?add-to-cart=994" data-quantity="1" data-product_id="994"
                                                              data-product_sku="456"
                                                              class="button add_to_cart_button ajax_add_to_cart mkdf-button">Add to cart</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div> -->
                                                    <a class="mkdf-pli-link"
                                                      href="#" title="Shoes"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a href="#">Shoes</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-12-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="s"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-17.png">
                                                    </div>
                                                    
                                                    <a class="mkdf-pli-link"
                                                      href="#"
                                                      title="Camera tripod"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="#">Camera tripod</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-11w.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="s"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/test-img-02.png">
                                                    </div>
                                                    
                                                    <a class="mkdf-pli-link"
                                                      href="#" title="Raincoat"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="#">Raincoat</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="s"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-13-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="a"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-15.png">
                                                    </div>
                                                    
                                                    <a class="mkdf-pli-link"
                                                      href="#"
                                                      title="DSLR camera"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="#">DSLR camera</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>
    
                                              <div class="shop-slider__item">
                                                <div class="mkdf-pli">
                                                  <div class="mkdf-pli-inner">
                                                    <div class="mkdf-pli-image">
                                                      <div class="mkdf-mark-wrapper">
                                                      </div>
                                                      <img width="600" height="502"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-600x502.jpg"
                                                        class="attachment-woocommerce_single size-woocommerce_single wp-post-image" alt="f"
                                                        loading="lazy"
                                                        srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-600x502.jpg 600w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-300x251.jpg 300w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1-768x642.jpg 768w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-14-1.jpg 800w"
                                                        sizes="(max-width: 600px) 100vw, 600px"> <img class="mkdf-product-hover-image" alt="s"
                                                        src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-16.png">
                                                    </div>
                                                   
                                                    <a class="mkdf-pli-link"
                                                      href=""
                                                      title="Watter bottle"></a>
                                                  </div>
                                                  <div class="mkdf-pli-text-wrapper">
                                                    
                                                    <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                                      <a
                                                        href="">Watter bottle</a>
                                                    </h6>
                                                    
                                                  </div>
                                                </div>
    
                                              </div>

                                            </div>
                                            <div class="common-slider-arrows slider-arrows shop-slider__arrows">
                                              <div class="common-slider-arrow-left slider-arrow__left shop-slider__arrows_arrow-left">
                                                <img class="arrow-white" src="img/slider/arrow-white.svg" alt="назад">
																								<img class="arrow-green" src="img/slider/arrow-green.svg" alt="back">


                                              </div>
                                              <div class="common-slider-arrow-right slider-arrow__right shop-slider__arrows_arrow-right">
                                                <img class="arrow-white" src="img/slider/arrow-white.svg" alt="вперед">
                                        <img class="arrow-green" src="img/slider/arrow-green.svg" alt="forward">


                                              </div>
                                            </div>
                                          </div>

                      

                                        </div>
                                      </div>
                              
                                

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                


                  <!-- blog -->
                  <div class="vc_row wpb_row vc_row-fluid corporate-blog__block"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->
                              <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align"
                                    style="text-align: center">
                                    <div class="mkdf-st-inner">
                                      <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                      <h2 class="mkdf-st-title corporate-blog__block-title">
                                        Блог <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
                                          <span class="mkdf-st-highlight-title" style="color: #59815b">KarjalaEvent</span>
                                          <span class="mkdf-st-highlight">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30"
                                              style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
                                              class="mkdf-active-hover-left">
                                              <polygon class="st0"
                                                points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                              </polygon>
                                            </svg>
                                            <span class="mkdf-active-hover-middle"></span>
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                              xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.3 30"
                                              style="enable-background:new 0 0 13.3 30;" xml:space="preserve"
                                              class="mkdf-active-hover-right">
                                              <polygon class="st0"
                                                points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                              </polygon>
                                            </svg>
                                          </span>
                                        </span> </h2>
                                    </div>
                                  </div>

                                  <div
                                class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns  mkdf-normal-space mkdf-bl-pag-load-more ">
                                <div class="mkdf-bl-wrapper mkdf-outer-space">
                                  <ul class="mkdf-blog-list">
                                    <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                                      <div class="mkdf-bli-inner">
                                        <div class="mkdf-bli-wrapper">
                                          <div class="mkdf-post-image mkdf-tilt-trigger">
                                            <a
                                              href="#"
                                              title="Pre-Trip Reading &amp; Travel Plans for Amazon, Brazil" class="mkdf-tilt-target">
                                              <img 
                                                src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/blog-post-img-03.jpg"
                                                class="attachment-full size-full wp-post-image image__animation-tranform" alt="s"> </a>
                                          </div>
                                          <div class="mkdf-post-info-category mkdf-st-highlight">
                                            <a href="#"
                                              rel="category tag">Метка</a> <span class="mkdf-st-highlight">
                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30"
                                                style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
                                                class="mkdf-active-hover-left">
                                                <polygon class="st0"
                                                  points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                                </polygon>
                                              </svg> <span class="mkdf-active-hover-middle"></span>
                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.3 30"
                                                style="enable-background:new 0 0 13.3 30;" xml:space="preserve"
                                                class="mkdf-active-hover-right">
                                                <polygon class="st0"
                                                  points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                                </polygon>
                                              </svg> </span>
                                          </div>
                                        </div>
                                        <div class="mkdf-bli-content">
                                          <div class="mkdf-bli-info">
                                            <div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
                                              <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a
                                               href="#">
                                                October 8, 2019 </a>
                                              <meta itemprop="interactionCount" content="UserComments: 0">
                                            </div>
                                          </div>
                                          <h5 itemprop="name" class="entry-title mkdf-post-title">
                                            <a
                                              href="#"
                                              title="Pre-Trip Reading &amp; Travel Plans for Amazon, Brazil">
                                              Pre-Trip Reading &amp; Travel Plans for Amazon, Brazil </a>
                                          </h5>
                                          <div class="mkdf-bli-excerpt">
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                                      <div class="mkdf-bli-inner">
                                        <div class="mkdf-bli-wrapper">
                                          <div class="mkdf-post-image mkdf-tilt-trigger">
                                            <a
                                              href="#"
                                              title="The Ultimate Grand Canyon Travel Guide for alpinists" class="mkdf-tilt-target"
                                              style="transform-origin: 60.3995% 41.1663% 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                              <img 
                                                src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/blog-post-img-04.jpg"
                                                class="attachment-full size-full wp-post-image image__animation-tranform" alt="s"> </a>
                                          </div>
                                          <div class="mkdf-post-info-category mkdf-st-highlight">
                                            <a href="#"
                                              rel="category tag">Метка</a> <span class="mkdf-st-highlight">
                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30"
                                                style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
                                                class="mkdf-active-hover-left">
                                                <polygon class="st0"
                                                  points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                                </polygon>
                                              </svg> <span class="mkdf-active-hover-middle"></span>
                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.3 30"
                                                style="enable-background:new 0 0 13.3 30;" xml:space="preserve"
                                                class="mkdf-active-hover-right">
                                                <polygon class="st0"
                                                  points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                                </polygon>
                                              </svg> </span>
                                          </div>
                                        </div>
                                        <div class="mkdf-bli-content">
                                          <div class="mkdf-bli-info">
                                            <div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
                                              <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a
                                               href="#">
                                                October 8, 2019 </a>
                                              <meta itemprop="interactionCount" content="UserComments: 0">
                                            </div>
                                          </div>
                                          <h5 itemprop="name" class="entry-title mkdf-post-title">
                                            <a
                                              href="#"
                                              title="The Ultimate Grand Canyon Travel Guide for alpinists">
                                              The Ultimate Grand Canyon Travel Guide for alpinists </a>
                                          </h5>
                                          <div class="mkdf-bli-excerpt">
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                                      <div class="mkdf-bli-inner">
                                        <div class="mkdf-bli-wrapper">
                                          <div class="mkdf-post-image mkdf-tilt-trigger">
                                            <a
                                              href="https://wanderland.qodeinteractive.com/guided-hikes-in-iceland-rhyolite-mountain-trail/"
                                              title="Guided Hikes in Iceland – Rhyolite mountain Trail" class="mkdf-tilt-target">
                                              <img 
                                                src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/blog-post-img-05.jpg"
                                                class="attachment-full size-full wp-post-image image__animation-tranform" alt="s"> </a>
                                          </div>
                                          <div class="mkdf-post-info-category mkdf-st-highlight">
                                            <a href="#"
                                              rel="category tag">Метка</a> <span class="mkdf-st-highlight">
                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15.7 30"
                                                style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
                                                class="mkdf-active-hover-left">
                                                <polygon class="st0"
                                                  points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                                </polygon>
                                              </svg> <span class="mkdf-active-hover-middle"></span>
                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13.3 30"
                                                style="enable-background:new 0 0 13.3 30;" xml:space="preserve"
                                                class="mkdf-active-hover-right">
                                                <polygon class="st0"
                                                  points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                                </polygon>
                                              </svg> </span>
                                          </div>
                                        </div>
                                        <div class="mkdf-bli-content">
                                          <div class="mkdf-bli-info">
                                            <div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
                                              <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a
                                               href="#">
                                                October 8, 2019 </a>
                                              <meta itemprop="interactionCount" content="UserComments: 0">
                                            </div>
                                          </div>
                                          <h5 itemprop="name" class="entry-title mkdf-post-title">
                                            <a
                                              href="https://wanderland.qodeinteractive.com/guided-hikes-in-iceland-rhyolite-mountain-trail/"
                                              title="Guided Hikes in Iceland – Rhyolite mountain Trail">
                                              Guided Hikes in Iceland – Rhyolite mountain Trail </a>
                                          </h5>
                                          <div class="mkdf-bli-excerpt">
                                          </div>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="mkdf-blog-pag-loading">
                                  <div class="mkdf-blog-pag-bounce1"></div>
                                  <div class="mkdf-blog-pag-bounce2"></div>
                                  <div class="mkdf-blog-pag-bounce3"></div>
                                </div>
                                <div class="mkdf-blog-pag-load-more">
                                  <a href="#" target="_self"
                                    class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon"> <span class="mkdf-btn-text">Открыть блог</span> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17 17"
                                      style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                      <g>
                                        <path d="M15,1.9"></path>
                                        <line x1="1.7" y1="15.3" x2="15" y2="1.9"></line>
                                        <line x1="16" y1="1.9" x2="15" y2="1.9"></line>
                                        <line x1="15" y1="1.9" x2="1" y2="1.9"></line>
                                        <path d="M15,1.9"></path>
                                        <line x1="15" y1="16" x2="15" y2="1.9"></line>
                                      </g>
                                    </svg> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17 17"
                                      style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                      <g>
                                        <path d="M15,1.9"></path>
                                        <line x1="1.7" y1="15.3" x2="15" y2="1.9"></line>
                                        <line x1="16" y1="1.9" x2="15" y2="1.9"></line>
                                        <line x1="15" y1="1.9" x2="1" y2="1.9"></line>
                                        <path d="M15,1.9"></path>
                                        <line x1="15" y1="16" x2="15" y2="1.9"></line>
                                      </g>
                                    </svg> </a> </div>
                                <input type="hidden" id="mkdf_blog_load_more_nonce_8281" name="mkdf_blog_load_more_nonce_8281"
                                  value="cd871a9a80"><input type="hidden" name="_wp_http_referer" value="/travel-blog/">
                              </div>
                            
                              
                                

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                 

                  <!-- form -->
                  <div class="vc_row wpb_row vc_row-fluid"> 
                    <div class="mkdf-eh-item-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper" >

                        <div class="mkdf-section-title-holder  " >
                          <div class="mkdf-st-inner">
                            <div class="mkdf-eh-item-content mkdf-eh-custom-6229" >

                              <!-- content -->

                              <div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: center">
                                <div class="mkdf-st-inner">
                              
                                  <h3 class="mkdf-st-title">
                                Оставьте 
                                    <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
                                      <span class="mkdf-st-highlight-title" style="color: #59815b">заявку</span> !
                                      <span class="mkdf-st-highlight">

                              
                                        <span class="mkdf-active-hover-middle"></span>

                                    
                                      </span>
                                    </span> 
                                  </h3>
                              
                                </div>

                              </div>

                              <div role="form" class="wpcf7 common__form common__form_big" id="wpcf7-f1433-p1182-o1 " lang="en-US" dir="ltr">
                                <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                <form action="/get-in-touch/#wpcf7-f1433-p1182-o1" method="post" class="wpcf7-form init cf7_custom_style_1 "
                                  novalidate="novalidate">
                              
                                  <div class="contact-us">
                                    <!-- <span class="wpcf7-form-control-wrap your-name"> -->
                                    <input type="text" name="your-name" value="" size="40"
                                      class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"
                                      placeholder="Имя">
                                    <!-- </span> -->
                                    <!-- <span class="wpcf7-form-control-wrap your-email"> -->
                                    <input type="email" name="your-email" value="" size="40"
                                      class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                      aria-required="true" aria-invalid="false" placeholder="Телефон">
                                    <!-- </span> -->
                                    <button type="submit" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                                      <span class="mkdf-btn-text">Заказать звонок</span>
                                    </button>
                                    <span class="mkdf-btn-text form-caption">
                                      Нажимая на кнопку "Заказать звонок", вы соглашаетесь с <a href="/privacy-policy">Политикой
                                        конфиденциальности</a>
                                    </span>
                                    <span class="ajax-loader"></span>
                                  </div>
                                  <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                                </form>
                              </div>
                            
                              
                                

                            </div>
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                  





<?php 
get_footer('corporate'); 