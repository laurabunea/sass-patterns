<?php 
    include '../header.php'; 
?>

<div class='relative mb-l col-8-10 grid__item mt-xxxl ml-l' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:128px;' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l pt-block' style='margin-left:50px'>  
        
        <h2 class='h3'>
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
        <div class='block--stacked block-s st-block'>
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