<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-headings' alt='Fred the fed' src='/assets/images/fred-side.png' />


    <div class='block-l tp-block ml-l' >    
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
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <h1 class='heading heading--keyline mt-m'>
                Heading
                <span class='heading__subheading tiny text-muted'> 
                    Sub heading
                </span>
            </h1>
            
            <h2 class='heading heading--keyline'>
                H2 Heading
                <span class='heading__subheading tiny text-muted'> 
                    Sub heading
                </span>
            </h2>
            <h3 class='heading heading--keyline'>
                H3 Heading
                <span class='heading__subheading tiny text-muted'> 
                    Sub heading
                </span>
            </h3>
            <h4 class='heading heading--keyline'>
                H4 Heading
                <span class='heading__subheading tiny text-muted'> 
                    Sub heading
                </span>
            </h4>
        </div><!--  hello world block ends -->
    </div>
</div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>