<?php
/**
 * The main template file
 */

get_header();  ?>

<main class="main">
    <section class="leadPosts">
        <h1 class="pageTitle">Lorem ipsum dolor sit amet</h1>
        <ul>
            <li class="--border --t05">
                <div class="theNumber">
                    1
                </div>
                <div class="thePost">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </li>
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
        </ul>
    </section>

    <section class="authorsList">
        <h2 class="sectionTitle">Curabitur ut facilisis arcu</h2>
        <ul>
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
        </ul>
    </section>
    <section id="subscrybeForm" class="subscrybeForm">
        <div class="formBox">    
            <form class="--t05">    
            
                    <div class="formTitle">Lorem ipsum dolor sit amet</div>            
                    <input name="email_address" type="text"  placeholder="Email" minlength="1" maxlength="255" required="required">
                    <button class="--t05"  type="submit">Lorem ipsum dolor sit amet</button> 
                
            </form>        
        </div>
        <div class="callToform">
            <a href="#subscrybeForm"><button class=" --t05">Lorem ipsum dolor sit amet</button></a>
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

<?php get_footer(); ?>
