<?php 
    include 'header.php'; 
?>

<div class='block-l block-small--s mb-l clearfix pt-block '>
     <div class='page-header pt-page-header'>
        <h1>
            Themes
            
        </h1>
    </div>

    <p>
        Notes...
    </p>
    <ul class='list-styled--decimal'>
        <li>
            <a href='#themes-blocks'>
                Theme blocks
            </a>
        </li>
        <li>
            <a href='#themes-text'>
                Emphasis text colours
            </a>
        </li>
        <li>
            <a href='#themes-text'>
                Button colours
            </a>
        </li>
        <li>
            <a href='#themes-text'>
                Tables
            </a>
        </li>
    </ul><!--list unstyled ends-->
    <hr class='mt-l'>
	<!-- /****************************************  Block themes  *******************************/ -->

    <div class='mt-l' id='theme-blocks'>
        <h2 class='h3'>
            Theme blocks
        </h2>
        <p>
            Use any of the available theme block classes to quickly create ....
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
    &lt;div class='pt-block'&gt;
        &lt;p&gt;Some text.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class='st-block'&gt;
       &lt;p&gt;Some text.&lt;/p&gt;
    &lt;/div>
    &lt;div class='tt-block'&gt;
        &lt;p&gt;Some text.&lt;/p&gt;
    &lt;/div>
    &lt;div class='qt-block'&gt;
        &lt;p&gt;Some text.&lt;/p&gt;
    &lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        	<div class='grid'>
                <div class='g--1-4 testbox-100-100 mt-xs block-s pt-block'>
                    <p>Some text.</p>
                </div>
                <div class='g--1-4 testbox-100-100 mt-xs block-s st-block'>
                   <p>Some text.</p>
                </div>
                <div class='g--1-4 testbox-100-100 mt-xs block-s tt-block'>
                    <p>Some text.</p>
                </div>
                <div class='g--1-4 testbox-100-100 mt-xs block-s qt-block'>
                    <p>Some text.</p>
                </div>
            </div>
        </div><!--  hello world block ends -->

        <!--  code block starts -->
        <div class='block-s  tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='success-block'&gt;
   &lt;p&gt;Some text.&lt;/p&gt;
&lt;/div>
&lt;div class='warning-block'&gt;
    &lt;p&gt;Some text.&lt;/p&gt;
&lt;/div>
&lt;div class='danger-block'&gt;
    &lt;p&gt;Some text.&lt;/p&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        	<div class='grid'>
                <div class='testbox-100-100 block-s mt-xs  success-block'>
                    <p>Success</p>
                </div>
                <div class='testbox-100-100 block-s mt-xs  warning-block'>
                    <p>Success</p>
                </div>
                <div class='testbox-100-100 block-s mt-xs  danger-block'>
                    <p>Danger</p>
                </div>
                
            </div>
        </div><!--  hello world block ends -->
    </div><!-- theme-blocks ends-->
    <hr class='mt-m'>
    <!-- /****************************************  Helpful Text colours  *******************************/ -->

    <div class='mt-xl' id='theme-blocks'>
        <h2>
            Emphasis classes
        </h2>
        <p>
        	Convey meaning through color with a handful of emphasis utility classes.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p class='text-muted'&gt; Some muted text &lt;/p&gt;
&lt;p class='text-success'&gt; AHHHHHH DANGER a kitten is chasing me &lt;/p&gt;
&lt;p class='text-warning'&gt; Warning! Something may happen to you &lt;/p&gt;
&lt;p class='text-danger'&gt; Success, I am awesome &lt;/p&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p class='text-muted'>Some muted text</p>

        	<p class='text-success'>AHHHHHH DANGER a kitten is chasing me</p>
        	<p class='text-warning'>Warning! Something may happen to you</p>
        	<p class='text-danger'>Success, I am awesome</p>
        </div><!--  hello world block ends -->
    </div><!-- theme-blocks ends-->
    <hr class='mt-l'>
    <!-- /****************************************  Button colours  *******************************/ -->

    <div class='mt-xl' id='theme-blocks'>
        <h2>
            Button themes
        </h2>
        
        <!--  code block starts -->
        <div class=' block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;a class='btn btn-primary' href='#'&gt; I'm a primary button &lt;/a&gt;
&lt;a class='btn btn-secondary' href='#'&gt; I'm a secondary button &lt;/a&gt;
&lt;a class='btn btn-tertiary' href='#'&gt; I'm a tertiary button &lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p class='xm'><a class='btn btn-primary '>I'm a primary button</a>
            <a class='btn btn-secondary'>I'm a secondary button</a>
            <a class='btn btn-tertiary'>I'm a tertiary button</a></p>
        </div><!--  hello world block ends -->
    </div><!-- theme-blocks ends-->

    <!-- /****************************************  Tables  *******************************/ -->
    <hr class='mt-l'>
    <div class='mt-xl' id='theme-blocks'>
        <h2>
            Tables
        </h2>
        
        <!--  code block starts -->
        <div class=' block-s mt-m  tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;a class='btn btn-primary' href='#'&gt; I'm a primary button &lt;/a&gt;
&lt;a class='btn btn-secondary' href='#'&gt; I'm a secondary button &lt;/a&gt;
&lt;a class='btn btn-tertiary' href='#'&gt; I'm a tertiary button &lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <!-- On rows -->
            
            <table>
                <tr class='active'>...</tr>
                <tr class='success'>...</tr>
                <tr class='warning'>...</tr>
                <tr class='danger'>...</tr>
            </table>

        </div><!--  hello world block ends -->
    </div><!-- theme-blocks ends-->
</div><!--content--padding ends-->

<?php 
    include 'footer.php'; 
?>