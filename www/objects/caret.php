<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:139px;' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l tp-block ml-l' >  
        
        <h2 class='heading heading--keyline'>
           Carets
        </h2>
        <p>
            Handy litle drop down arrows
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
    &lt;span class='caret'&gt;&lt;/span&gt;

    &lt;span class='caret caret--rev'&gt;&lt;/span&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p>
                Caret: <span class='caret'></span>
            </p>
            
            <p>
                Reversed Caret: <span class='caret caret--rev'></span>
            </p>
            
        </div><!--  hello world block ends -->
    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>