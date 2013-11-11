<?php 
    include 'header.php'; 
?>

<div class='content tb__primary grid__item'>
    <div class='content--padding'>
        <div class='page-header tb__header'>
            <h1>
                Typography
                <span class='tiny'>
                    - Setting up
                </span>
            </h1>
        </div>
        <p class=''>
            There are a couple of things you should set up before you begin a project. These are:
        </p>

        <ul class='list--styled_decimal'>   
            <li>
                Base font family and line height
            </li>
            <li>
                Base font sizes
            </li>
            <li>
                Text heirarchy
            </li>
        </ul>

        <h2 class='h3'>
            01. Base font family and line height
        </h2>
        <p>
            For our base we use the following font settings on the HTML and body 
            element to standardize the typographic scale in a consistent manner. 
            We also make sure not to use united values for our line-heights 
            per the <a href='http://meyerweb.com/eric/thoughts/2006/02/08/unitless-line-heights/'>
            recommendations of Mr. Eric Meyer himself.</a>
        </p>
        <p>
            <strong>Rule:</strong> We leave html, body font-size at 100% - Even for responsive sites, 
            it's nice knowing that 1em is always 16px. Computers calculate things in base2 rather 
            than base10. This is a fundamentally awesome feature of the browser and we shouldn't 
            break it. 
        </p>
        
        
        <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
                    code
                </h4>
<pre>
<code class='language-css'>
 /** 1. Base styles
 * ---------------------------------------------------
 *
 */

html,
body {
    @extend %font-family;
    line-height:    $base-line-height;
    font-size:      100%;
    @extend %fix-webkit-font-rendering;
}
</code>
</pre>
</div>

        <h2 class='h3'>
            02. Base font sizes
        </h2>
        <p>
            Sit down with the designer and establish distinguishable 
            font sizes using the <a href='/text-heirarchy.php'>text heirarchy template
            </a>
        </p>
        <p>
            <strong>Rule:</strong> Always set font-sizes in ems.
        </p>

        <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
                    code
                </h4>
<pre>
<code class='language-sass'>
 /** Project font sizes
 * ---------------------------------------------------
 *
 */

$font-size-xxxxl:       72;     //h0
$font-size-xxxl:        36;     //h1
$font-size-xxl:         32;     //h2
$font-size-xl:          22;     //h3
$font-size-l:           20;     //h4
$font-size-m:           18;     //h5
$font-size-s:           16;     //h6 &amp; .intro
$font-size-xs:          14;     //p
$font-size-xxs:         12;     //.small
$font-size-xxxs:        11;     //.tiny

%font-size-xxxxl    { font-size: px-to-em($font-size-xxxxl);}
%font-size-xxxl     { font-size: px-to-em($font-size-xxxl);}
%font-size-xxl      { font-size: px-to-em($font-size-xxl);}
%font-size-xl       { font-size: px-to-em($font-size-xl);}
%font-size-l        { font-size: px-to-em($font-size-l);}
%font-size-m        { font-size: px-to-em($font-size-m);}
%font-size-s        { font-size: px-to-em($font-size-s);}
%font-size-xs       { font-size: px-to-em($font-size-xs);}
%font-size-xxs      { font-size: px-to-em($font-size-xxs);}
%font-size-xxxs     { font-size: px-to-em($font-size-xxxs);}

</code>
</pre>
</div>
       <h2 class='h3'>
            03. Text Heirarchy
        </h2>
       
        <p class=''>
            Notes... The best way to do this is sit down with the designer and go through the
            <a href='/text-heirarchy.php'>
                text heirarchy
            </a>
            template with them.
        </p>
        

        <div class='page-header tb__header mx'>
            <h1>
                Typography
                <span class='tiny'>
                   - Helper classes
                </span>
            </h1>
        </div>

        <p>
           Helper classes blah blah blah  
        </p>

        <ol class='list--styled_decimal'>
            <li>
                <a href='typo-paragraph'>
                    Font sizes
                </a>
            </li>
            <li>
                <a href='typo-sans'>
                    Sans vs Serif
                </a>
            </li>
            <li>
                <a href='#typo-cases'>
                    Lower vs Upper case
                </a>
            </li>
            <li>
                <a href='#typo-text-align'>
                    Text allignment
                </a>
            </li>
            <li>
                <a href='#typo-overflow'>
                    Overflow vs Ellipsis
                </a>
            </li>
            <li>
                <a href='#typo-lists'>
                    List styles
                </a>
            </li>
            <li>
                <a href='#typo-lists'>
                    Visually hidden elements
                </a>
            </li>
        </ol>

        <!-- /****************************************  Text sizes  *******************************/ -->
        <!--<hr class='mx'>-->
        
        <div class='section--xl' id='typo-paragraph'>
            <h2 class='h3'>
                01. Font sizes
            </h2>

            <p class='intro'>
                Notes for Heading sizes, text sizes and sub headings
            </p>

            <h3 class='h4'>
                a) Headings
            </h3>

            <p>
                These heading classes are helpful when you have a heading that is semantically correct but the default size is not what you are after.
            </p>

            <!-- code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                
                <h4 class='tiny uppercase text_muted'>
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

            <!-- 2. Common Text sizes-->
            <div class='section--xl'>
                <h3 class='h4'>
                    2. Common Text sizes
                </h3>
                <p>
                    Notes
                </p>
                <!-- code block starts -->
                <div class='block--xs tb__tertiary'>
                    <h4 class='tiny uppercase text_muted'>
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
                <div class='block--xs__stacked tb__secondary'>
                    <h4 class='tiny uppercase text_muted'>
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

                    <h3>
                        H5 Heading
                        <span class='tiny'>
                            Subtext for H3
                        </span>
                    </h3>
                </div><!-- hello world block ends -->
            </div>

            <!-- 3. sub headings-->
            <div class='section--xl'>
                <h3 class='m h4' >
                    3. Sub Headings
                </h3>
                <p>
                    see
                    <a href='/components.php#components-pg-headers'>
                        Sub headings
                    </a>
                    on the components page or have a look at the example below in Text sizes.
                </p>
            </div>

        </div><!-- typo-paragraph ends -->

    <!-- /****************************************  Sans/serif text  *******************************/ -->
        <hr class='mx'>
        <div class='section--xl' id='typo-sans'>
            <h2 class='h3'>
                Sans vs Sans Serif
            </h2>
            <p> 
                Notes 
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny uppercase text_muted'>
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
        <hr class='mx'>
        <div class='section--xl' id='typo-cases'>

            <h2 class='h3'>
                Lower vs Upper case
            </h2>
            <p> 
                Notes 
            </p>
            <!-- code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny uppercase text_muted'>
                    hello world
                </h4>
                <p class='uppercase'>Uppercase</p>
                <p class='lowercase'>Lowercase</p>
            </div><!-- hello world block ends -->
        </div><!-- typo-cases ends  -->


     <!-- /****************************************  Text allignment classes  *******************************/ -->
        <hr class='mx'>
        <div class='section--xl' id='typo-text-align'>

            <h2 class='h3'>
                Text allignment classes
            </h2>

            <p> 
                Notes
            </p>
            <!-- code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
    &lt;p class='text-align--left'&gt; Left aligned text &lt;/p&gt;
    &lt;p class='text-align--center'&gt; Center aligned text &lt;/p&gt;
    &lt;p class='text-align--right'&gt; Right aligned text &lt;/p&gt;
</code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny uppercase text_muted'>
                    hello world
                </h4>
                <p class='text-align--left'>
                    Left aligned text
                </p>
                <p class='text-align--center'>
                    Center aligned text
                </p>
                <p class='text-align--right'>
                    Right aligned text
                </p>
            </div><!-- hello world block ends -->
        </div><!--  typo-text-align ends -->
<!-- /****************************************  Txt overflow and ellipsis  *******************************/ -->
        <hr class='mx'>
        <div class='section--xl' id='typo-overflow'>
            <h2 class='h3'>
                Text overflow and Ellipsis
            </h2>
            <p> 
                Notes 
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
    &lt;p class='text--overflow'&gt; Hello I'm a long sentence &lt;/p&gt;
</code>
                </pre>
            </div><!-- code block starts -->

            <!-- hello world block starts -->
            <div class='block--xs__stacked tb__secondary clearfix'>
                <h4 class='tiny uppercase text_muted'>
                    hello world
                </h4>
                <div class='block--xs tb__secondary testbox-100-100 push_left left' >
                    <p class='text--overflow'>
                        Hello I'm a text with an ellipsis
                    </p>

                    
                </div>
                <div class='block--xs tb__secondary testbox-100-100 right' >
                 
                    <p class='text--nowrap'>
                        I'm text that doesn't wrap
                    </p>
                </div>
            </div><!-- hello world block ends -->
        </div><!--typo-overflow ends-->
    <!-- /****************************************  List styles  *******************************/ -->
        <hr class='mx'>
        <div class='section--xl' id='typo-lists'>

            <h2 class='h3'>
                List styles
            </h2>

            <p>
                Notes
            </p>

            <div class=''>
                <h3 class='h4'>
                    1. Un styled list
                </h3>

                <!-- code block ends -->
                <div class='block--xs tb__tertiary'>
                    <h4 class='tiny uppercase text_muted'>
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
                <div class='block--xs__stacked tb__secondary'>
                    <h4 class='tiny uppercase text_muted'>
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
            
            <div class='section--xl'>
                <h3 class='h4'>
                    2. Styled list
                </h3>
                <!-- code block starts -->
                <div class='block--xs tb__tertiary'>
                    <h4 class='tiny uppercase text_muted'>
                        code
                    </h4>
                    <pre>
<code class='language-markup'>
    &lt;ul class='list--styled'&gt;
        &lt;li&gt; Styled list item 1 &lt;/li&gt;
        &lt;li&gt; Styled list item 2 &lt;/li&gt;
    &lt;ul&gt;
</code>
                    </pre>
                </div><!-- code block ends -->

                <!-- hello world block starts -->
                <div class='block--xs__stacked tb__secondary'>
                    <h4 class='h tiny uppercase text_muted'>
                        hello world
                    </h4>
                    <ul class='list--styled'>
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
            <div class='section--xl'>
                <h3 class='h4'>3. Inline list</h3>
                <!-- code block starts -->
                <div class='block--xs tb__tertiary'>
                    <h4 class='tiny uppercase text_muted'>
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
                <div class='block--xs__stacked tb__secondary'>
                    <h4 class='tiny uppercase text_muted'>
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
            </div><!-- section--xl -->
        </div><!-- typo-lists ends -->

             <!-- /****************************************  Hide text *******************************/ -->
        <hr class='mx'>
        <div class='section--xl' id='typo-hide-text'>

            <h2 class='h3'>
                Hide text
            </h2>

            <p> 
                Notes
            </p>
            <!-- code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny uppercase text_muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
    &lt;p&gt; Check out the source code to see a hidden h1 tag &lt;/p&gt;
    &lt;h1 class='visually-hidden'&gt; I am hidden &lt;/h1&gt;
</code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny uppercase text_muted'>
                    hello world
                </h4>
                <p>
                    Check out the source code to see a hidden h1 tag
                </p>
                <h1 class='visually-hidden'>
                    I am hidden
                </h1>
                
            </div><!-- hello world block ends -->
        </div><!--  typo-text-align ends -->

    </div><!--content-padding-->
</div><!--content ends-->

<?php 
    include 'footer.php'; 
?>