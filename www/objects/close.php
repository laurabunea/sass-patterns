<?php 
    $page = 'close';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-close' alt='Fred the fed' src='/assets/images/fred-side.png'  />


    <div class='block-l tp-block ml-l' >  
        <h2 class='heading heading--keyline'>
           Close
        </h2>
        <p>
            A handy close icon with a sweet hover.
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;span class='close'&gt;&lt;/span&gt;

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
             <p >
                Close icon: <span class='close'></span>
            </p>
        </div><!--  hello world block ends -->
    </div>
</div>
<?php 
    include '../footer.php'; 
?>