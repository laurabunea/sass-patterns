<?php 
    include 'header.php'; 
?>

<!-- Side Navigation Bar - this holds the children categories -->
<div class='navigation--side'>
    <ul class='list--unstyled'>
        <li>
            <a class='block--xs__stacked tb__primary' href='#typo-paragraph'>
                Font size
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#typo-sans'>
                Sans vs San Serif
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#typo-cases'>
                Lower vs Upper case
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#typo-text-align'>
                Text allignment
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#typo-lists'>
                List styles
            </a>
        </li>

    </ul><!--list unstyled ends-->
</div><!--navigation side ends-->

<!-- Main Content container -->
<div class='content tb__primary clearfix'>

    <div class='page-header tb__header'>
        <h1>
            Typography
            <span class='tiny'>
                - Setting up
            </span>
        </h1>
    </div>

    <p class='intro'>
        There are a couple of things you need to set up before you begin a project. These are:
    </p>

    <ul class='list--styled intro'>   
        <li>base font family</li>
        <li>base font sizes</li>
        <li>base line heights and text heirarchy</li>
    </ul>
   
    <p class='intro'>
        The best way to do this is sit down with the designer and go through the
        <a href='/text-heirarchy.php'>
            text heirarchy
        </a>
        template with them.
    </p>
    
    <div class='page-header tb__header mxx '>
        <h1>
            Typography
            <span class='tiny'>
               - Helper classes
            </span>
        </h1>
    </div>
        

    <!-- /****************************************  Text sizes  *******************************/ -->

    <div class='section--xl' id='typo-paragraph'>
        <h2>
            Font sizes
        </h2>

        <p class='intro'>
            Notes for Heading sizes, text sizes and sub headings
        </p>

        <h3 >
            1. Headings
        </h3>

        <p>
            These heading classes are helpful when you have a heading that is semantically correct but the default size is not what you are after.
        </p>

        <!-- code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
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
            <h4 class='tiny caps text_muted'>
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

        
        <h3>
            2. Common Text sizes
        </h3>
        <p>Notes</p>
        <!-- code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
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
            <h4 class='tiny caps text_muted'>
                hello world
            </h4>
            <p class='tiny'>
                I am a tiny paragraph
            </p>
            <p class='small'>
                I am a small paragraph
            </p>
            <p>I am a plain paragraph
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

        <h3 class='m' >
            3. Sub Headings
        </h3>
        <p>
            see
            <a href='/components.html#components-pg-headers'>
                Sub headings
            </a>
            on the components page or have a look at the example below in Text sizes.
        </p>

    </div><!-- typo-paragraph ends -->

<!-- /****************************************  Sans/serif text  *******************************/ -->
    <hr class='mx'>
    <div class='section--xl' id='typo-sans'>
        <h2  >
            Sans vs Sans Serif
        </h2>
        <p> 
            Notes 
        </p>
        <!--  code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
    &lt;p class='sans'&gt; sans &lt;/p&gt;
    &lt;p class='serif'&gt; sans serif &lt;/p&gt;
</code>
            </pre>
        </div><!-- code block starts -->

        <!-- hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
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

        <h2>
            Lower vs Upper case
        </h2>
        <p> 
            Notes 
        </p>
        <!-- code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
    &lt;p class='caps'&gt; Uppercase &lt;/p&gt;
    &lt;p class='caps-lower'&gt; Lowercase &lt;/p&gt;
</code>
            </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
                hello world
            </h4>
            <p class='caps'>Uppercase</p>
            <p class='caps-lower'>Lowercase</p>
        </div><!-- hello world block ends -->
    </div><!-- typo-cases ends  -->


 <!-- /****************************************  Text allignment classes  *******************************/ -->
    <hr class='mx'>
    <div class='section--xl' id='typo-text-align'>

        <h2 >
            Text allignment classes
        </h2>

        <p> 
            Notes
        </p>
        <!-- code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
    &lt;p class='text-align--left'&gt; Left aligned text &lt;/p&gt;
    &lt;p class='text-align--center'&gt; Center aligned text &lt;/p&gt;
    &lt;p class='text-align--right'&gt; Right aligned text &lt;/p&gt;
</code>
        </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
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

<!-- /****************************************  List styles  *******************************/ -->
    <hr class='mx'>
    <div class='section--xl' id='typo-lists'>

        <h2 >
            List styles
        </h2>

        <p>
            Notes
        </p>

        <h3 >
            1. Un styled list
        </h3>

        <!-- code block ends -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
    &lt;ul class='list--unstyled'&gt;
        &lt;li&gt; unstyled list item 1 &lt;/li&gt;
        &lt;li&gt; unstyled list item 2 &lt;/li&gt;
    &lt;ul&gt;
</code>
        </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
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


        <h3>2. Styled list</h3>
        <!-- code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
    &lt;ul class='list--styled'&gt;
        &lt;li&gt; Styled list item 1 &lt;/li&gt;
        &lt;li&gt; Styled list item 2 &lt;/li&gt;
    &lt;ul&gt;
</code>
            </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='h tiny caps text_muted'>
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

        <h3>3. Inline list</h3>
        <!-- code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
        <pre>
<code class="language-markup">
    &lt;ul class='list--inline'&gt;
        &lt;li&gt; inline list item 1 &lt;/li&gt;
        &lt;li&gt; inline list item 2 &lt;/li&gt;
    &lt;ul&gt;
</code>
        </pre>
        </div><!-- code block ends -->

        <!-- hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
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

    </div><!-- typo-lists ends -->
</div><!--content ends-->

<?php 
    include 'footer.php'; 
?>