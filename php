// whatsapp links for mobile and desktop

 <?php if (isset($company) && !empty($company) && $company == 'loto') : ?>
                    <?php if (wp_is_mobile()) : ?>
                        <a  href="whatsapp://send?text=היי &#128522 אני קיבלתי טופס קבוצתי חינם מסמארט. רוצים גם? לחצו על הלינק https://bit.ly/3uK8ka8" class="ns_btn" data-action="share/whatsapp/share">
                            <img id="gift-share" src="<?php echo get_site_url(); ?>/wp-content/themes/html5blank-stable/files/thanks_new/assets/image/web_icon.png" alt="icon">
                            <span>הזמינו את החברים לקבל טופס מתנה</span>
                            <img id="whatsapp-share" src="<?php echo get_site_url(); ?>/wp-content/themes/html5blank-stable/files/thanks_new/assets/image/whatsapp.png" alt="icon">
                        </a>
                    <?php else : ?>
                        <a href="https://web.whatsapp.com/send?text=היי &#128522 אני קיבלתי טופס קבוצתי חינם מסמארט. רוצים גם? לחצו על הלינק https://bit.ly/3uK8ka8" class="ns_btn" data-action="share/whatsapp/share">
                            <img id="gift-share" src="<?php echo get_site_url(); ?>/wp-content/themes/html5blank-stable/files/thanks_new/assets/image/web_icon.png" alt="icon">
                            <span>הזמינו את החברים לקבל טופס מתנה</span>
                            <img id="whatsapp-share" src="<?php echo get_site_url(); ?>/wp-content/themes/html5blank-stable/files/thanks_new/assets/image/whatsapp.png" alt="icon">
                        </a>       
                    <?php endif; ?> 
                    
                    
