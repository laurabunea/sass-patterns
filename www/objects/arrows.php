<?php 
    $page = 'arrows';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    
    <img class='absolute fred-arrows' alt='Fred the fed' src='/assets/images/fred-side.png' />
    
    <div class='block-l tp-block ml-l' >     

        <h2 class='heading heading--keyline'>
           Arrows
        </h2>

        <p> 
            Sometimes you just need an arrow :) and luckily it's really easy to do. Just apply a modifier class to the parent. 
        </p>    
        <p>
            For instance the first example below will put an arrow in the top left corner of the containing div
        </p>

        <!-- code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='arrow--left'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-top'&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;div class='arrow--right'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-top'&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;div class='arrow--center'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-bottom'&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;div class='arrow--side'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow  arrow-left'&gt;&lt;/i&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='arrow--left block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-top'></i>
            </div>

            <div class='arrow--right block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-top '></i>
            </div>

            <div class='arrow--center block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-bottom '></i>
            </div>

            <div class='arrow--side block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-left '></i>
            </div>
        </div><!-- hello world block ends -->
    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>