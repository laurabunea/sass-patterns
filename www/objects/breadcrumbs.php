<?php 
    $page = 'breadcrumbs';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-breadcrumbs' alt='Fred the fed' src='/assets/images/fred-side.png'  />
    
    <div class='block-l tp-block ml-l' >  
        <h2 class='heading heading--keyline list-unstyled'>
           Breadcrumbs
        </h2>
        <p>
            Notes.. extends list-unstyled to wipe unecessary margins etc 
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;ol class='list-unstyled breadcrumbs'&gt;
    &lt;li&gt;
        &lt;a href='#'&gt;
            Parent
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href='#'&gt;
            Child
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
        Page I'm on 
    &lt;/li&gt;
&lt;/ol&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <ol class='list-unstyled breadcrumbs pt-breadrumbs mt-s'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Page</a></li>
                <li class='#'>Sub page</li>
            </ol>
        </div><!--  hello world block ends -->

    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>