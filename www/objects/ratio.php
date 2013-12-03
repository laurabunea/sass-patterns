<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>

<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-ratio' alt='Fred the fed' src='/assets/images/fred-side.png'  />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l tp-block ml-l' >  
        
        <h2 class='heading heading--keyline'>
           Ratio
        </h2>
   
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p&gt;
    This box will be 16:9
&lt;/p&gt;

&lt;div class='ratio-16-9'&gt;
    &lt;div class='ratio__content'&gt;&lt;/div&gt;
 &lt;/div&gt;


&lt;/p&gt;
    This box will be a square
&lt;/p&gt;

&lt;div class='ratio-square'&gt;
    &lt;div class='ratio__content'&gt;&lt;/div&gt;
&lt;/div&lt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p>
                This box will be 16:9
            </p>

             <div class='ratio-16-9'>
                <div class='ratio__content'></div>
             </div>


            </p>
                This box will be a square
            </p>

             <div class='ratio-square'>
                <div class='ratio__content'></div>
             </div>
        </div><!--  hello world block ends -->
    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>