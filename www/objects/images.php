<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:338px;' />


    <div class='block-l pt-block ml-l'>  
        <h2 class='heading heading--keyline'>
           Responsive images
        </h2>
        <p>
            This applies max-width: 100%; and height: auto; to the image so that it scales nicely to 
            the parent element.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-markup">
&lt;img src='...' class='img-responsive' alt='Responsive image'&gt;

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item col-1-3' >
                    <img src='/assets/images/fred.png' alt='' class='img--responsive' />
                </div>
                <div class='grid__item col-2-3'>
                    <div class='arrow--side blue-block block-m'>
                        <p>Resize the browser so you can see me shrink </p>
                        <i class='arrow arrow-left'></i>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
       
    </div>
</div>
<?php 
    include '../footer.php'; 
?>