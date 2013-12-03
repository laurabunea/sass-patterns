<?php 
    $page = 'nav';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-navigation' alt='Fred the fed' src='/assets/images/fred-side.png' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l tp-block ml-l' >  
        
        <div>
            <h2 class='heading heading--keyline'>
               Nav
            </h2>
       
            <!--  code block starts -->
            <div class='block-s mt-m tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
      
    </code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='nav'>
                    <li class='active'>
                        <a href='#'>
                            active list item
                        </a>
                    </li>
                    <li class=''>
                        <a href='#'>
                            list item
                        </a>
                    </li>
                    <li class=''>
                        <a href='#'>
                            list item
                        </a>
                    </li>
                    <li class=''>
                        <a href='#'>
                            list item
                        </a>
                    </li>
                </ul>
            </div><!--  hello world block ends -->
        </div>
        <hr class='mt-l'/>
        <div class='mt-m'>
            <h3 class='h4'>
               Sub nav
            </h3>
       
            <!--  code block starts -->
            <div class='block-s mt-m tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
      
    </code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <dl class='sub-nav'>
                    <dt>Filter:</dt>
                    <dd class='active'><a href='#'>All</a></dd>
                    <dd><a href='#'>Active</a></dd>
                    <dd><a href='#'>Pending</a></dd>
                    <dd><a href='#'>Suspended</a></dd>
                </dl>
            </div><!--  hello world block ends -->
        </div>
        
</div>
<?php 
    include '../footer.php'; 
?>