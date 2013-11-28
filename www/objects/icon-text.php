<?php 
    include '../header.php'; 
?>

<div class='relative mb-l col-8-10 grid__item mt-xxxl ml-l' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='left:-329px; top:294px;' />


    <div class='block-l pt-block' style='margin-left:50px'>  
    
        <h2  class='h3'>
           11. Icons with text
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
&lt;a class='media--rev' href='#'&gt;
    &lt;i class='i icon-placeholder'&gt;&lt;/i&gt;
    A link with an icon
&lt;/a&gt;

&lt;p class='media--rev' href='#'&gt;
    A paragraph with an icon on the other side
    &lt;i class='i icon-placeholder'&gt;&lt;/i&gt;
&lt;/p&gt;
</code>
        </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p>
                <a class='icon-text xm' href='#'> 
                    <i class='i icon-placeholder'></i>
                    A link with an icon
                </a>
            </p>
            
            <p class='icon-text xm' href=''> 
                A paragraph with an icon on the other side
                <i class='i icon-placeholder'></i>
            </p>
            
        </div><!--  hello world block ends -->
    </div>
</div>
<?php 
    include '../footer.php'; 
?>