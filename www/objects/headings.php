<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:271px;' />


    <div class='block-l pt-block ml-l' >    
        <h2 class='heading heading--keyline'>
           Headings
        </h2>
        <p>
            Notes
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='heading heading--keyline'&gt;
    &lt;h1&gt;
        Heading
       &lt;span class='heading__subheading tiny text-muted'&gt;
            Sub heading
        &lt;/span&gt;
    &lt;/h1&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='heading heading--keyline mt-m'>
                <h1 >
                    Heading
                    <span class='heading__subheading tiny text-muted'> 
                        Sub heading
                    </span>
                </h1>
            </div>
        </div><!--  hello world block ends -->
    </div>
</div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>