<?php 
    $page = 'badges';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-badges' alt='Fred the fed' src='/assets/images/fred-side.png'  />
    
    <div class='block-l tp-block ml-l' >     
        
        <h2 class='heading heading--keyline'>
           Badges
        </h2>
        
        <p>
            Easily highlight new or unread items by adding a class of 'badge' to a link.
        </p>
        
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;a href='#'&gt; 
    Inbox 
    &lt;span class='badge'&gt;
        42
    &lt;/span&gt;
&lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class=' block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>

            <p>
                <a class='xm' href='#'>Inbox
                    <span class='tp-badge badge tiny'>42</span>
                </a>
            </p>

        </div><!-- hello world block ends -->
    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>