<?php 
    include '../header.php'; 
?>

<div class='relative mb-l col-8-10 grid__item mt-xxxl ml-l' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='left:-329px; top:-3px;' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l pt-block' style='margin-left:50px'>     
        
        <h2 class='h3'>
            02. Badges
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
&lt;a href='#'&gt; Inbox &lt;span class='badge'&gt;42&lt;/span&gt;&lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class=' block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>

            <p>
                <a class='xm' href='#'>Inbox
                    <span class='pt-badge badge tiny'>42</span>
                </a>
            </p>

        </div><!-- hello world block ends -->
    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>