<?php 
    include 'header.php'; 
?>


<div class='block-l block-small--s mb-l pt-block '>
    
    <div class='page-header pt-page-header'>
        <h1>
            Components   
        </h1>
    </div>

    <p class='intro'>
        text here
    </p>
    <ul class='list-styled--decimal'>
        <li>
            <a href='#components-bread-crumbs'>
                Breadcrumbs
            </a>
        </li>
        <li>
            <a href='#components-badges'>
                Badges
            </a>
        </li>
        <li>
            <a href='#components-pg-headers'>
                Badges
            </a>
        </li>
    </ul><!--list unstyled ends-->

    <hr>
    <!-- /****************************************  Breadcrumbs *******************************/ -->
    <div class='mt-xl' id='components-bread-crumbs'>
        <h2  class='h3'>
            Breadcrumbs
        </h2>
        
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
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
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <ol class='breadcrumbs pt-breadrumbs block-xxs xm'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Page</a></li>
                <li class='#'>Sub page</li>
            </ol>
        </div><!--  hello world block ends -->
    </div><!-- components-bread-crumbs ends-->

    <!-- /****************************************  Badges  *******************************/ -->
    <div class='mt-xl' id='components-badges'>
        <h2  class='h3'>
            Badges
        </h2>
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;a href='#'&gt; Inbox &lt;span class='pt-badge badge tiny'&gt;42&lt;/span&gt;&lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class=' block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p><a class='xm' href='#'>Inbox <span class='pt-badge badge tiny'>42</span></a></p>


        </div><!--  hello world block ends -->
    </div><!--  component badges ends-->


    <!-- /****************************************  Page headers  *******************************/ -->
    <div class='mt-xl' id='components-pg-headers'>
        <h2  class='h3'>
            Page Headers
        </h2>
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='page-header pt-page-header'&gt;
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
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='page-header pt-page-header mt-l'>
                <h1>
                    H1 Heading 
                    <span class='tiny'>
                        Subtext for H1
                    </span>
                </h1>
            </div>
            <div class='page-header pt-page-header mt-m'>
                <h2>
                    H2 Heading 
                    <span class='tiny'>
                        Subtext for H2
                    </span>
                </h2>
            </div>
            <div class='page-header pt-page-header mt-m'>
                <h3>
                    H3 Heading 
                    <span class='tiny'>
                        Subtext for H3
                    </span>
                </h3>
            </div>
            <div class='page-header pt-page-header mt-m'>
                <h4>
                    H4 Heading 
                    <span class='tiny'>
                        Subtext for H4
                    </span>
                </h4>
            </div>
            <div class='page-header pt-page-header mt-m'>
                <h5>
                    H5 Heading 
                    <span class='tiny'>
                        Subtext for H5
                    </span>
                </h5>
            </div>

        </div><!--  hello world block ends -->
    </div><!-- components-page-headers ends-->
</div><!--content padding ends-->


<?php 
    include 'footer.php'; 
?>