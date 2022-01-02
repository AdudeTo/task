<?php
/**
 * The main template file
 */

get_header();  ?>

<main class="main">
    <section class="leadPosts">
        <h1 class="pageTitle">Lorem ipsum dolor sit amet</h1>
        <ul>
            <!-- LOOP START leadPosts -->
            <!-- LOOP ITEM START -->
            <li class="--border --t05">
                <div class="theNumber">
                    1
                </div>
                <div class="thePost">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </li>
            <!-- LOOP ITEM END -->
            <li class="--border --t05">
                <div class="theNumber">
                    2
                </div>
                <div class="thePost">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </li>
            <li class="--border --t05">
                <div class="theNumber">
                    3
                </div>
                <div class="thePost">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </li>
            <!-- LOOP END leadPosts -->
        </ul>
    </section>

    <section class="authorsList">
        <h2 class="sectionTitle">Curabitur ut facilisis arcu</h2>
        <ul>
            <!-- LOOP START authorsList -->
            <!-- LOOP ITEM START -->
            <li class="--border --t05">
                <div class="theAuthor">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author_1.jpg">
                    </figure>
                </div>
                <div class="thePost">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id facilisis odio tempus eu.</p>
                </div>
            </li>
            <!-- LOOP ITEM END -->
            <li class="--border --t05">
                <div class="theAuthor">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author_2.jpg">
                    </figure>
                </div>
                <div class="thePost">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id facilisis odio tempus eu.</p>
                </div>
            </li>
            <!-- LOOP END authorsList -->
        </ul>
    </section>
    <section  class="subscrybeForm">
        <div id="formBox" class="formBox">    
            <form class="--t05">            
                    <div class="formTitle">Lorem ipsum dolor sit amet</div>            
                    <input name="email_address" data-status="0" type="text"  placeholder="Email" minlength="1" maxlength="255" required="required">
                    <button onClick="return false" id="subscrybeForm" class="subscrybeFormButton --t05"  type="submit">Lorem ipsum dolor sit amet</button>                
            </form>        
        </div>
        <div id="callToform" class="callToform">
            <!-- Simply click to move the screen to the form //no JS anchor -->
            <!--a href="#formBox"--><button class=" --t05">Lorem ipsum dolor sit amet</button><!--/a-->
        </div>
    </section>
    <section class="tagList">
        <ul>
            <li class="icon--www"></li>
            <li class="icon--html"></li>
            <li class="icon--js"></li>
            <li class="icon--css"></li>
            <li class="icon--wp"></li>
        </ul>
    </section>
</main>
<div id="modal" class="modal --hide --t05">
    <div class="modal-holder">
        <div id="modalHolderBackground" class="modal-holder-background">

        </div>
        <div class="modal-holder-message">
            <div id="modalHolderMessageTitle" class="modal-holder-message-title">
            _ _ _
            </div>
            <p class="modal-holder-message-content">
            Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet
            </p>
            <div id="modalHolderMessageCloseBtn" class="modal-holder-message-closeBtn --t05">
                X
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
