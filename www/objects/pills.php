<?php 
    $page = 'pills';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-pills' alt='Fred the fed' src='/assets/images/fred-side.png' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l tp-block ml-l' >  
        
        <h2 class='heading heading--keyline'>
           Pills
        </h2>
        <p>
            Create pill- and lozenge-like runs of text
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p&gt;
    This 
    &lt;span class='pill'&gt;here&lt;/span&gt;
    is a pill!
&lt;/p&gt;
            
&lt;p&gt;
    This 
    &lt;span class='lozenge'&gt;here&lt;/span&gt; 
    is also a lozenge!
&lt;/p&gt;

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <p>This <span class='pill tp-pill'>here</span> is a pill!</p>
            
            <p>This <span class='lozenge tp-lozenge'>here</span> is also a lozenge!</p>

        </div><!--  hello world block ends -->
    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>