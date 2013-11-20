<?php 
    include 'header.php'; 
?>
<!--Responsive page starts-->
<div class='block--l block-s--m block-m--s mb--l tb__primary relative'>
    <img alt='fred the helpful fed' src='assets/images/fred-side.png' class='absolute fred' />
    
    <div class='page-header tb__header'>
        <h1>
            Responsive
            <span class='tiny'>
                - Helper classes
            </span>
        </h1>
    </div>

    <!--Responsive Helper navigation -->
    <ul class='list--styled_decimal'>   
        <li>
            <a href='#responsiveAnchor1'>
                Building blocks 
            </a>
        </li>
        <li>
            <a href='#responsiveAnchor2'>
                Visible classes 
            </a>
        </li>
        <li>
            <a href='#responsiveAnchor3'>
                Hidden classes 
            </a>
        </li>
        <li>
            <a href='#responsiveAnchor4'>
                Responsive images
            </a>
        </li>
    </ul><!--Responsive Helper navigation ends-->

    <!--Building blocks section starts-->
    <div class='mt--l' id='responsiveAnchor1' >
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
            </div>
            <p>Example two</p>
            <div class='mt-m--xs mt-s--s mt--m mt-w--l block--s tb__green '>
                <p>
                    <strong>mobile:</strong> mt-m--xs<br />
                    <strong>skinny:</strong> mt-s--s<br />
                    <strong>desktop:</strong> mt--m<br />
                    <strong>wide:</strong> mt-w--l
                </p>
            </div>
            
        </div><!--  hello world block ends -->
    </div><!--Building blocks section ends-->
    
    <hr class='mt--l' />
    
    <!--Visible section starts-->
    <div class='mt--l' id='responsiveAnchor2' >
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
            </div>

            <div class='block--s tb__pink visible-mobile'>
                <p>
                    show this block on mobile
                </p>
            </div>

            <div class='block--s tb__blue visible-skinny'>
                <p>
                    show this block on skinny
                </p>
            </div>

            <div class='block--s tb__green visible-wide'>
                <p>
                    show this block on wide
                </p>
            </div>

        </div><!--  hello world block ends -->
    </div><!--Visible section ends-->
    
    <hr class='mt--l' />
    
    <!--Hidden section starts-->
    <div class='mt--l' id='responsiveAnchor3' >
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
            </div>

            <div class='block--s tb__pink hidden-mobile'>
                <p>
                    hide this block on mobile 
                </p>
            </div>

            <div class='block--s tb__green hidden-skinny'>
                <p>
                    hide this block on skinny
                </p>
            </div>

            <div class='block--s tb__blue hidden-wide'>
                <p>
                    hide this block on wide
                </p>
            </div>

        </div><!--  hello world block ends -->
    </div><!--Hidden section ends-->
    
    <hr class='mt--l' />

    <!--Responsive image section starts-->
    <div class='mt--l' id='responsiveAnchor4' >
        <h2 class='h3'>
            04. Responsive images
        </h2>
        <p>
            This applies max-width: 100%; and height: auto; to the image so that it scales nicely to 
            the parent element.
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">
&lt;img src='...' class='img-responsive' alt='Responsive image'&gt;

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item g--40-100' >
                    <img src='assets/images/fred.png' alt='' class='img--responsive' />
                </div>
                <div class='grid__item g--60-100'>
                    <div class='arrow--side tb__blue block--m'>
                        <p>Resize the browser so you can see me shrink </p>
                        <i class='arrow arrow-left'></i>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Responsive image section starts-->
</div><!--Responsive page ends-->