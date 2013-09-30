<?php 
    include 'header.php'; 
?>
<!-- Side Navigation Bar - this holds the children categories -->
<div class='navigation--side '>
    <ul class='list--unstyled'>
        <li>
            <a class='block--xs__stacked tb__primary' href='#components-bread-crumbs'>
                Breadcrumbs
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#components-badges'>
                Badges
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#components-pg-headers'>
                Badges
            </a>
        </li>
    </ul><!--list unstyled ends-->
</div><!--navigation side ends-->

<div class='content clearfix tb__primary'>

    <div class='page-header tb__header'>
        <h1>
            Components 
        </h1>
    </div>
    
    <!-- /****************************************  Breadcrumbs *******************************/ -->
    <div class='section--xl' id='components-bread-crumbs'>
        <h2  class='h3'>
            Breadcrumbs
        </h2>
        
        <!--  code block starts -->
        <div class='block--xs m tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
    &lt;ol class='breadcrumbs'&gt;
        &lt;li&gt;&lt;a href='#'&gt;Parent&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href='#'&gt;Child&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;Page I'm on &lt;/li&gt;
    &lt;/ol&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
                hello world
            </h4>
            <ol class='breadcrumbs tb__breadrumbs block--xxs xm'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Page</a></li>
                <li class='#'>Sub page</li>
            </ol>
        </div><!--  hello world block ends -->
    </div><!-- components-bread-crumbs ends-->

    <!-- /****************************************  Badges  *******************************/ -->
    <div class='section--xxxl' id='components-badges'>
        <h2  class='h3'>
            Badges
        </h2>
        <!--  code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
    &lt;a href='#'&gt; Inbox &lt;span class='tb__badge badge tiny'&gt;42&lt;/span&gt;&lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
                hello world
            </h4>
            <p><a class='xm' href='#'>Inbox <span class='tb__badge badge tiny'>42</span></a></p>


        </div><!--  hello world block ends -->
    </div><!--  component badges ends-->


    <!-- /****************************************  Page headers  *******************************/ -->
    <div class='section--xxxl' id='components-pg-headers'>
        <h2  class='h3'>
            Page Headers
        </h2>
        <!--  code block starts -->
        <div class='block--xs tb__tertiary'>
            <h4 class='tiny caps text_muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
    &lt;div class='page-header tb__header'&gt;
        &lt;h5&gt;
            H5 Heading
            &lt;span class='tiny'&gt;
                Subtext for H5
            &lt;/span&gt;
        &lt;/h5&gt;
    &lt;div&gt;                  
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--xs__stacked tb__secondary'>
            <h4 class='tiny caps text_muted'>
                hello world
            </h4>
            <div class='page-header tb__header'>
                <h1>
                    H1 Heading 
                    <span class='tiny'>
                        Subtext for H1
                    </span>
                </h1>
            </div>
            <div class='page-header tb__header'>
                <h2>
                    H2 Heading 
                    <span class='tiny'>
                        Subtext for H2
                    </span>
                </h2>
            </div>
            <div class='page-header tb__header'>
                <h3>
                    H3 Heading 
                    <span class='tiny'>
                        Subtext for H3
                    </span>
                </h3>
            </div>
            <div class='page-header tb__header'>
                <h4>
                    H4 Heading 
                    <span class='tiny'>
                        Subtext for H4
                    </span>
                </h4>
            </div>
            <div class='page-header tb__header'>
                <h5>
                    H5 Heading 
                    <span class='tiny'>
                        Subtext for H5
                    </span>
                </h5>
            </div>

        </div><!--  hello world block ends -->
    </div><!-- components-page-headers ends-->
</div><!--content ends-->
<?php 
    include 'footer.php'; 
?>