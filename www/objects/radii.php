<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-radii' alt='Fred the fed' src='/assets/images/fred-side.png'  />


    <div class='block-l tp-block ml-l'>  

        <h2 class='h3'>
            15. Radii
        </h2>
        <p>
           Notes
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='blue-block block-xs radius--xs'&gt;
    Check out my rounded corners
&lt;/div&gt;
&lt;div class='blue-block block-xs radius--s'&gt;
    Check out my rounded corners
&lt;/div&gt;
&lt;div class='blue-block block-xs radius--m'&gt;
    Check out my rounded corners
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='blue-block block-xs radius--xs'>
                Check out my corners
            </div>
            <div class='blue-block block-xs radius--s'>
                Check out my corners
            </div>
            <div class='blue-block block-xs radius--m'>
                Check out my corners
            </div>
        </div><!--  hello world block ends -->
    </div>
</div>
<?php 
    include '../footer.php'; 
?>