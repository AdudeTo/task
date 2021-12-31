<?php
/**
 * The main template file
 */

get_header();  ?>
<main class="main">

<h1 class="pageTitle">Lorem ipsum dolor sit amet</h1>
<section class="leadPosts">
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
<h2 class="sectionTitle">Curabitur ut facilisis arcu</h2>
<section class="authorsList">
    <ul>
        <li class="--border --t05">
            <h3>post title</h3>
            <span>exerp</span>
        </li>
        <li class="--border --t05">
            <h3>post title</h3>
            <span>exerp</span>
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
</swction>
    

</main>


<?php get_footer();?>