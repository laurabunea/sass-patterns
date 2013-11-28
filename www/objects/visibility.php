<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:573px;' />


    <div class='block-l pt-block ml-l' >  

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
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block-s qt-block '>
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
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block-s qt-block '>
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

    </div>
</div>
<?php 
    include '../footer.php'; 
?>