<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl' >
    <img class='absolute fred-typography' alt='Fred the fed' src='/assets/images/fred-side.png'  />

    <div class='block-l tp-block ml-l' >  

        <div>
            <h2 class='heading heading--keyline'>
               Typography
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

    </code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
            </div><!--  hello world block ends -->
        </div><!--Typography ends-->
        
        <hr class='mt-l'>
        <div class='mt-l' >
            <h2 class='h3'>
                Text sizes
            </h2>
            <h3 class='h4'>
                a) Headings
            </h3>
            <p>
                These heading classes are helpful when you have a heading that is semantically correct but the default size is not what you are after.
            </p>

            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
&lt;h1&gt; H1 Heading 1 &lt;/h1&gt;
&lt;h1 class='h2'&gt; H1 Heading with a class of H2 &lt;/h1&gt;
&lt;h2&gt; H2 Heading &lt;/h2&gt;
&lt;h2 class='h4'&gt; H2 Heading with a class of H4 &lt;/h2&gt;
&lt;h4 class='h4'&gt; H4 Heading  &lt;/h4&gt;
</code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <h1>
                    H1 Heading 
                </h1>
                <h1 class='h2'>
                    H1 Heading with a class of H2
                </h1>
                <h2>
                    H2 Heading 
                </h2>
                <h2 class='h4'>
                    H2 Heading with a class of H4
                </h2>
                <h4>
                    H4 Heading 
                </h4>

            </div><!-- hello world block ends -->
        </div><!-- typo-paragraph ends -->

<!-- /****************************************  Common paragraphy sizes  *******************************/ -->
        <div class='mt-l'>
            <h3 class='h4'>
                b) Paragraph sizes
            </h3>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
    &lt;p class='tiny'&gt; ... &lt;/p&gt;
    &lt;p class='small'&gt; ... &lt;/p&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;p class='intro'&gt; ... &lt;/p&gt;

    &lt;h3&gt;
        &lt;span class='tiny'&gt;
            Subtext for H3
        &lt;/span&gt;
    &lt;/h3&gt;
    </code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p class='tiny'>
                    I am a tiny paragraph
                </p>
                <p class='small'>
                    I am a small paragraph
                </p>
                <p>
                    I am a plain paragraph
                </p>
                <p class='intro'>
                    I am an intro paragraph
                </p>

            </div><!-- hello world block ends -->
        </div>
        <!-- /****************************************  SANS VS SERIF  *******************************/ -->
    <hr class='mt-l'/>

    <div class='mt-l'>
        <h2 class='h3'>
            Sans vs Sans Serif
        </h2>
        <p> 
            Notes ...
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p class='sans'&gt; sans &lt;/p&gt;
&lt;p class='serif'&gt; sans serif &lt;/p&gt;
</code>
            </pre>
        </div><!-- code block starts -->

        <!-- hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p class='sans'>
                sans
            </p>
            <p class='serif'>
                sans serif
            </p>
        </div><!-- hello world block ends -->
    </div><!--typo-sans ends-->

    <!-- /****************************************  Lower Case vs Upper Case  *******************************/ -->
    <hr class='mt-l'>
    <div class='mt-l' id='TypographyHelper3Anchor'>

        <h2 class='h3'>
            Lower vs Upper case
        </h2>
        <p> 
            Notes 
        </p>
        <!-- code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p class='uppercase'&gt; Uppercase &lt;/p&gt;
&lt;p class='lowercase'&gt; Lowercase &lt;/p&gt;
</code>
            </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p class='uppercase'>Uppercase</p>
            <p class='lowercase'>Lowercase</p>
        </div><!-- hello world block ends -->
    </div><!-- typo-cases ends  -->

    <!-- /****************************************  Text allignment classes  *******************************/ -->
    
    <hr class='mt-l'>
    <div class='mt-l' >

        <h2 class='h3'>
            Text allignment classes
        </h2>

        <p> 
            Notes
        </p>
        <!-- code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p class='text-left'&gt; Left aligned text &lt;/p&gt;
&lt;p class='text-center'&gt; Center aligned text &lt;/p&gt;
&lt;p class='text-right'&gt; Right aligned text &lt;/p&gt;
</code>
        </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p class='text-left'>
                Left aligned text
            </p>
            <p class='text-center'>
                Center aligned text
            </p>
            <p class='text-right'>
                Right aligned text
            </p>
        </div><!-- hello world block ends -->
    </div><!--  typo-text-align ends -->

    <!-- /****************************************  Txt overflow and ellipsis  *******************************/ -->
    
    <hr class='mt-l'>
    <div class='mt-l' id='TypographyHelper5Anchor'>
        <h2 class='h3'>
            Text overflow and Ellipsis
        </h2>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p class='text--overflow'&gt; Hello I'm a long sentence &lt;/p&gt;
</code>
            </pre>
        </div><!-- code block starts -->

        <!-- hello world block starts -->
        <div class='block--stacked block-s ts-block clearfix'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class=' block-s ts-block testbox-100-100 push_left left' >
                <p class='text--overflow'>
                    Hello I'm a text with an ellipsis
                </p>

                
            </div>
            
        </div><!-- hello world block ends -->
    </div><!--typo-overflow ends-->
</div>
<?php 
    include '../footer.php'; 
?>