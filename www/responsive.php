<?php 
    include 'header.php'; 
?>

<div class='block--l block-s--s block-m--s mb--l tb__primary relative'>
    <img alt='fred the helpful fed' src='assets/images/fred-side.png' class='absolute fred' />
    
    <div class='page-header tb__header'>
        <h1>
            Responsive
            <span class='tiny'>
                - Helper classes
            </span>
        </h1>
    </div>
    <ul class='list--styled_decimal'>   
        <li>
            <a href='#FontFamilyAnchor'>
                Building blocks 
            </a>
        </li>
        <li>
            <a href='#FontFamilyAnchor'>
                Visible classes 
            </a>
        </li>
    </ul>
    <div class='mt--l' id='' >
        <h2 class='h3'>
            01. Building blocks
        </h2>

        <p>
            These building blocks work in exactly the same way as the ones mentioned in <a href='#TODO'>layout</a>. 
            The only difference is that they ...
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">
// Media queries breakpoints
// -------------------------------------------------- 

$mobile:                        30em;//Portrait regular mobiles//480px
$skinny:                        48em;//Skinny 768px
$desktop:                       60em;//Desktop 960px 
$wide:                          75em;//Wide 1200px


// Example one
// --------------------------------------------------

//margin-right  - desktop - default
.mr--0          { margin-right:$bs--0; }

//margin-right  - mobile
.mr-m--0        { margin-right:$bs--0;}

//margin-right  - skinny
.mr-s--0        { margin-right:$bs--0;}

//margin-right  - wide
.mr-w--0        { margin-right:$bs--0;}


// Example two
// --------------------------------------------------

//small block   - desktop - default
.block--s       { margin-right:$bs--0; }

//small block   - mobile
.block-m--s     { margin-right:$bs--0;}

//small block   - skinny
.block-s--s     { margin-right:$bs--0;}

//small block   - wide
.block-w--s     { margin-right:$bs--0;}

</code>
            </pre>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-css">
// Example one
// -------------------------------------------------- 

&lt;div class='block--m block-m--xs block-s--s block-w--l tb__green '&gt;
    &lt;p&gt;
        &lt;strong>desktop:&lt;/strong&gt;    block--m
        &lt;strong>mobile:&lt;/strong&gt;     block-m--xs
        &lt;strong>skinny:&lt;/strong&gt;     block-s--s
        &lt;strong>wide:&lt;/strong&gt;       block-w--l
    &lt;/p&gt;
&lt;/div&gt;<!-- block xs ends-->

// Example two
// -------------------------------------------------- 
&lt;div class='mt-m--xs mt-s--s mt--m mt-w--l block--s tb__green '&gt;
    &lt;p&gt;
        &lt;strong>mobile:&lt;/strong&gt; mt-m--xs
        &lt;strong>skinny:&lt;/strong&gt; mt-s--s
        &lt;strong>desktop:&lt;/strong&gt; mt--m
        &lt;strong>wide:&lt;/strong&gt; mt-w--l
    &lt;/p&gt;
&lt;/div&gt;<!-- block xs ends-->

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <p>Example one</p>
            <div class='block--m block-m--xs block-s--s block-w--l tb__green '>
                <p>
                    <strong>desktop:</strong>    block--m<br />
                    <strong>mobile:</strong>     block-m--xs<br />
                    <strong>skinny:</strong>     block-s--s<br />
                    <strong>wide:</strong>       block-w--l
                </p>
            </div><!-- block xs ends-->
            <p>Example two</p>
            <div class='mt-m--xs mt-s--s mt--m mt-w--l block--s tb__green '>
                <p>
                    <strong>mobile:</strong> mt-m--xs<br />
                    <strong>skinny:</strong> mt-s--s<br />
                    <strong>desktop:</strong> mt--m<br />
                    <strong>wide:</strong> mt-w--l
                </p>
            </div><!-- block xs ends-->
            
        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->
    
    <div class='mt--l' id='' >
        <h2 class='h3'>
            02. Visible classes
        </h2>

        <p>
            Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block--s tb__quarternary '>
                <p>
                    normal block always show this 
                </p>
            </div><!-- block xs ends-->
            <div class='block--s tb__pink visible-mobile'>
                <p>
                    show this block on mobile
                </p>
            </div><!-- block xs ends-->

            <div class='block--s tb__blue visible-skinny'>
                <p>
                    show this block on skinny
                </p>
            </div><!-- block xs ends-->

            <div class='block--s tb__green visible-wide'>
                <p>
                    show this block on wide
                </p>
            </div><!-- block xs ends-->

        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->
    <div class='mt--l' id='' >
        <h2 class='h3'>
            03. Hidden classes
        </h2>

        <p>
            Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block--s tb__quarternary '>
                <p>
                    normal block always how this 
                </p>
            </div><!-- block xs ends-->
            <div class='block--s tb__pink hidden-mobile'>
                <p>
                    hide this block on mobile 
                </p>
            </div><!-- block xs ends-->

            <div class='block--s tb__green hidden-skinny'>
                <p>
                    hide this block on skinny
                </p>
            </div><!-- block xs ends-->

            <div class='block--s tb__blue hidden-wide'>
                <p>
                    hide this block on wide
                </p>
            </div><!-- block xs ends-->

        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->
</div>