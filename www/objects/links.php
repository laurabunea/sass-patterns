<?php 
    $page = 'links';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-links' alt='Fred the fed' src='/assets/images/fred-side.png'  />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l tp-block ml-l'>  
        
        <h2 class='heading heading--keyline'>
           Links
        </h2>
   
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;a href='' class='clean-link'&gt; 
    I'm a clean link look at me
&lt;/a&gt;
&lt;a href='' class='is-disabled'&gt;
    I'm a disabled link
&lt;/a&gt;
&lt;a href='' class='is-draggable'&gt; 
    I'm a draggable link
&lt;/a&gt;

&lt;ul class='clean-link-list'&gt;
    &lt;li&gt;
        &lt;a href=''&gt;
            Clean link in a list
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href=''&gt;
            Clean link in a list
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
            <p>
                <a href='' class='clean-link'> 
                    I'm a clean link look at me
                </a>
            </p>
            <p>
                <a href='' class='is-disabled'> 
                    I'm a disabled link
                </a>
            </p>
            <p>
                <a href='' class='is-draggable'> 
                    I'm a draggable link
                </a>
            </p>

            <ul class='list-styled clean-link-list'>
                <li>
                    <a href=''> 
                        Clean link in a list
                    </a>
                </li>
                <li>
                    <a href=''> 
                        Clean link in a list
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