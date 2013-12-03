<?php 
    $page = 'visibility';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-visability' alt='Fred the fed' src='/assets/images/fred-side.png'  />


    <div class='block-l tp-block ml-l' >  

        <h2 class='heading heading--keyline'>
           Visibility
        </h2>

        <h3 class='h4'>
            a) Hidden
        </h3>

        <p>
            Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block-s tq-block '>
                <p>
                    normal block always how this 
                </p>
            </div>

            <div class='block-s pink-block hidden-mobile'>
                <p>
                    hide this block on mobile 
                </p>
            </div>

            <div class='block-s green-block hidden-skinny'>
                <p>
                    hide this block on skinny
                </p>
            </div>

            <div class='block-s blue-block hidden-wide'>
                <p>
                    hide this block on wide
                </p>
            </div>

        </div><!--  hello world block ends -->
        <h3 class='h4'>
            b) Visibile
        </h3>

        <p>
            Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block-s tq-block '>
                <p>
                    normal block always show this 
                </p>
            </div>

            <div class='block-s pink-block visible-mobile'>
                <p>
                    show this block on mobile
                </p>
            </div>

            <div class='block-s blue-block visible-skinny'>
                <p>
                    show this block on skinny
                </p>
            </div>

            <div class='block-s green-block visible-wide'>
                <p>
                    show this block on wide
                </p>
            </div>

        </div><!--  hello world block ends -->

 
        <hr class='mt-l'/>
         <div class='mt-l' >

            <h2 class='h3'>
                Visually hidden
            </h2>

            <p> 
               Hide an element, but make it visible to screen readers
            </p>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
    &lt;p&gt; Check out the source code to see a hidden h1 tag &lt;/p&gt;
    &lt;h1 class='visually-hidden'&gt; I am hidden &lt;/h1&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    Check out the source code to see a hidden h1 tag
                </p>
                <h1 class='visually-hidden'>
                    I am hidden
                </h1>
                
            </div><!-- hello world block ends -->
        </div><!--  typo-text-align ends -->
    </div>
</div>
<?php 
    include '../footer.php'; 
?>