<?php 
    $page = 'pagination';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-pagination' alt='Fred the fed' src='/assets/images/fred-side.png' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l tp-block ml-l'>  
        
        <h2 class='heading heading--keyline'>
           Pagination
        </h2>
   
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;ul class='pagination'&gt;
    &lt;li class='pagination__first'&gt;
        First
    &lt;/li&gt;
    &lt;li class='pagination__prev'&gt;
        &lt;a href="#"&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class='pagination__current'&gt;
        &lt;a href="#"&gt;
            1
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class='pagination__more'&gt;
        &lt;a href="#"&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href="#"&gt;
            10
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class='pagination__next'&gt;
        &lt;a href="#"&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class='pagination__last'&gt;
        &lt;a href='/page/last'&gt;
            Last
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <ul class='pagination'>
                <li class='pagination__first'>
                    First
                </li>
                <li class='pagination__prev'>
                    <a href='#'></a>
                </li>
                <li class='pagination__current'>
                    <a href='#'>
                        1
                    </a>
                </li>
                <li class='pagination__more'>
                    <a href='#'></a>
                </li>
                <li>
                    <a href="#">
                        10
                    </a>
                </li>
                <li class='pagination__next'>
                    <a href='#'></a>
                </li>
                <li class='pagination__last'>
                    <a href='/page/last'>
                        Last
                    </a>
                </li>
             </ul>
        </div><!--  hello world block ends -->
    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>