<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:604px;' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l tp-block ml-l' >  
        
        <h2 class='heading heading--keyline'>
           Prepend vs Append
        </h2>
        <p>
            Place something before or after an element.
        </p>
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p class='prepend' data-prepend='email:'&gt;&nbsp;email@gmail.com&lt;/p&gt;
&lt;p class='append' data-append='is my email'&gt;email@gmail.com&nbsp;&lt;/p&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <p class='prepend' data-prepend='email:'>&nbsp;email@gmail.com</p>
        
            <p class='append' data-append='is my email'>email@gmail.com&nbsp;</p>
        
        </div><!--  hello world block ends -->
    </div>

</div>
<?php 
    include '../footer.php'; 
?>