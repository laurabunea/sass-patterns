<?php 
    include '../header.php'; 
?>

<div class='relative mb-l col-8-10 grid__item mt-xxxl ml-l' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='left:-329px; top:360px;' />


    <div class='block-l pt-block' style='margin-left:50px'>     
       <h2 class='h3'>
            13. List styles
        </h2>

        <p>
            Notes
        </p>

        <div class=''>
            <h3 class='h4'>
                a) Un styled list
            </h3>

            <!-- code block ends -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
&lt;ul class='list--unstyled'&gt;
    &lt;li&gt; unstyled list item 1 &lt;/li&gt;
    &lt;li&gt; unstyled list item 2 &lt;/li&gt;
&lt;ul&gt;
</code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='list--unstyled '>
                    <li>
                        unstyled list item 1
                    </li>
                    <li>
                        unstyled list item 2
                    </li>
                </ul>
            </div><!-- hello world block ends -->
        </div>
        
        <div class='mt-l'>
            <h3 class='h4'>
                b) Styled list
            </h3>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
&lt;ul class='list-styled'&gt;
    &lt;li&gt; Styled list item 1 &lt;/li&gt;
    &lt;li&gt; Styled list item 2 &lt;/li&gt;
&lt;ul&gt;
</code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='h tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='list-styled'>
                    <li>
                        Styled list item 1
                    </li>
                    <li>
                        Styled list item 2
                    </li>
                </ul>
            </div><!-- hello world block ends -->
        </div>

        <!-- 3. Inline list -->
        <div class='mt-l'>
            <h3 class='h4'>c) Inline list</h3>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
            <pre>
<code class='language-markup'>
&lt;ul class='list--inline'&gt;
    &lt;li&gt; inline list item 1 &lt;/li&gt;
    &lt;li&gt; inline list item 2 &lt;/li&gt;
&lt;ul&gt;
</code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='list--inline '>
                    <li>
                        inline list item 1
                    </li>
                    <li>
                        inine list item 2
                    </li>
                </ul>
            </div><!-- hello world block ends -->
        </div> 
       
    </div>

</div>
<?php 
    include '../footer.php'; 
?>