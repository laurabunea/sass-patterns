<?php 
    $page = 'lists';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-lists' alt='Fred the fed' src='/assets/images/fred-side.png'  />


    <div class='block-l tp-block ml-l' >     
       <h2 class='heading heading--keyline'>
           Lists
        </h2>

        <div class='mt-m'>
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
&lt;ul class='list-unstyled'&gt;
    &lt;li&gt; unstyled list item 1 &lt;/li&gt;
    &lt;li&gt; unstyled list item 2 &lt;/li&gt;
&lt;ul&gt;
</code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='list-unstyled mt-s'>
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

&lt;ul class='list-styled--alpha'&gt;
    &lt;li&gt; Styled list item 1 &lt;/li&gt;
    &lt;li&gt; Styled list item 2 &lt;/li&gt;
&lt;/ul&gt;

&lt;ul class='list-styled--dashed'&gt;
    &lt;li&gt; Styled list item 1 &lt;/li&gt;
    &lt;li&gt; Styled list item 2 &lt;/li&gt;
&lt;/ul&gt;

&lt;ul class='list-styled--decimal'&gt;
    &lt;li&gt; Styled list item 1 &lt;/li&gt;
    &lt;li&gt; Styled list item 2 &lt;/li&gt;
&lt;/ul&gt;
</code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s ts-block'>
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
                <hr />
                <ul class='list-styled--alpha'>
                    <li>
                        Styled list item 1
                    </li>
                    <li>
                        Styled list item 2
                    </li>
                </ul>
                <hr />
                <ul class='list-styled--dashed'>
                    <li>
                        Styled list item 1
                    </li>
                    <li>
                        Styled list item 2
                    </li>
                </ul>
                <hr />
                <ul class='list-styled--decimal'>
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
            <div class='block--stacked block-s ts-block'>
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
        <div class='mt-l'>
            <h3 class='h4'>d) Definition list</h3>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
            <pre>
<code class='language-markup'>

</code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <dl>
                  <dt>Description 1</dt>
                    <dd>Info</dd>
                  <dt>Description 2</dt>
                    <dd>Info</dd>
                </dl> 
                <hr class='mt-m'/>
                <dl class='dl-horizontal dl-horizontal--1-4 '>
                  <dt>Description 1</dt>
                    <dd>Info</dd>
                  <dt>Description 2</dt>
                    <dd>Info</dd>
                </dl>
                <hr class='mt-m'/>
                <dl class='dl-horizontal dl-horizontal--1-3 '>
                    <dt>Description 1</dt>
                    <dd>Info</dd>
                  <dt>Description 2</dt>
                    <dd>Info</dd>
                </dl>
                <hr class='mt-m'/>
                <dl class='dl-horizontal dl-horizontal--1-2 '>
                  <dt>Description 1</dt>
                    <dd>Info</dd>
                  <dt>Description 2</dt>
                    <dd>Info</dd>
                </dl>
            </div><!-- hello world block ends -->
        </div> 
       
    </div>

</div>
<?php 
    include '../footer.php'; 
?>