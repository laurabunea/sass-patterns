<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:640px;' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l pt-block ml-l' >  
        <h2 class='heading heading--keyline'>
           Inline block
        </h2>
        <p>
            Displays an element as an inline-level block container. The inside of this block is formatted as block-level box, and the element itself is formatted as an inline-level box
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='inline-block'&gt; 
    ...  
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->
    
    </div>

</div>
<?php 
    include '../footer.php'; 
?>