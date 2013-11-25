<?php 
    include 'header.php'; 
?>

<div class='block--l block-small--s mb--l pt-block relative'>
    
    <div class='page-header pt-page-header'>
        <h1>
            Layout
            <span class='tiny'>
                - Setting up
            </span>
        </h1>
    </div><!--page header ends -->

    <img src='assets/images/fred-top.png' alt='' class='absolute fred-layout' />

    <p class='m--m mw--70'>
        Be consistent with vertical spacing. Avoid setting arbitrary margins on items. 
        Defer these to a variable, and use multiples of that variable to control your vertical spacing. 
        Our designs will often change right up til the end, so it's worth making stuff really easy to change.
    </p>

    <div class='page-header pt-page-header m--l'>
        <h1>
            Layout
            <span class='tiny'>
                - Helper classes
            </span>
        </h1>
    </div><!--page header ends -->

    <ul class='list-styled--decimal m--m'>

        <li>
            <a href='#layoutAnchor1'>
                Inline Blocks
            </a>
        </li>
        <li>
            <a href='#layoutAnchor2'>
                Positioning
            </a>
        </li>
        <li>
            <a href='#layoutAnchor3'>
                Spacing
            </a>
        </li>
         <li>
            <a href='#layoutAnchor4'>
                Blocks
            </a>
        </li>
        <li>
            <a href='#layoutAnchor5'>
                Media Blocks
            </a>
        </li>
        <li>
            <a href='#layoutAnchor6'>
                Icons with text
            </a>
        </li>
        <li>
            <a href='#layoutAnchor7'>
                Arrows
            </a>
        </li>
        <li>
            <a href='#layoutAnchor8'>
                Inline Grid
            </a>
        </li>

        <li>
            <a href='#layoutAnchor9'>
                Prepend vs Append
            </a>
        </li>

        <li>
            <a href='#layoutAnchor10'>
                Responsive images
            </a>
        </li>

        <li>
            <a href='#layoutAnchor11'>
                Visibility classes
            </a>
        </li>
        
    </ul><!--list unstyled ends-->
    

    <!-- /****************************************  Inline Blocks  *******************************/ -->

    <div class='m--xl' id='layoutAnchor1'>
        <h2 class='h3'>
            01. Inline block 
        </h2>
        <p>
            Displays an element as an inline-level block container. The inside of this block is formatted as block-level box, and the element itself is formatted as an inline-level box
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='inline-block'&gt; 
    ...  
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->
    </div><!-- Inline block ends-->

    <hr class='m--l'>


    <!-- /****************************************  Positioning  *******************************/ -->
    <div class='m--l' id='layoutAnchor2'>
        <h2 class='h3'>
            02. Positioning - Absolute, Floating and Clearfixing
        </h2>

        <!-- /********  absolute positioing *************/ -->

        <h3 class='h4'>
            a) Absolute Positioning
        </h3>
        <p>
            A page element with relative positioning gives you the control to absolutely position 
            children elements inside of it.
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4> 
            <pre>
<code class="language-markup">
/* */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute specific-positioned-class' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt;

/* Top right */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class=&#39;absolute--top-right' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt; 

/* Top Left */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute--top-left' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt;   

/* Bottom right */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute--bottom-right' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt; 

/* Bottom left */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute--bottom-left' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt;
 
</code>
            </pre>  
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'> 
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='grid'>
                <div class='st-block xxm relative testbox-100-100' >
                    <img class='absolute specific-bird' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block xxm relative testbox-100-100' >
                    <img class='absolute--top-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block xxm relative testbox-100-100' >
                    <img class='absolute--top-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block xxm relative testbox-100-100' >
                    <img class='absolute--bottom-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block xxm relative testbox-100-100' >
                    <img class='absolute--bottom-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
            </div><!--grid ends-->
        </div><!--  hello world block ends -->
        
        <!-- /********  Floating elements *************/ -->
        
        <div class='m--l'>
            <h3 class='h4 '>
                b) Floating elements
            </h3>
            <p>
                With CSS float, an element can be pushed to the left or right, allowing other elements to wrap around it.
            </p>
            <!--  code block starts -->
            <div class='block--s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class="language-markup">
&lt;img class='left' src='assets/images/yellow-bird.png' /&gt;
&lt;img class='right' src='assets/images/blue-bird.png' /&gt;
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--stacked block--s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <div class='m--s'> 
                    <img class='left' src='assets/images/yellow-bird.jpg' alt='i am an image'/>
                    <img class='right' src='assets/images/blue-bird.jpg' alt='i am an image'/>    
                </div>
            </div><!--  hello world block ends -->
        </div>

        <!-- /********  Clearfix *************/ -->
        <div class='m--l'>
            <h3 class='h4'>c) Clearfix</h3>
            <p>
                What clearfix does is it forces content after the floats or the container containing the floats to render below it.
            </p>
            <!--  code block starts -->
            <div class='block--s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class="language-markup">
&lt;div class='clearfix'&gt; 
    ...  
&lt;/div&gt;
</code>
                </pre>
            </div><!--  code block ends -->
        </div>
        
    </div><!-- layout-positioning ends-->

    <hr class='m--l'>
    <!-- /****************************************  Spacing *******************************/ -->
    
    <div class='m--l' id='layoutAnchor3' >
        <h2 class='h3'>
            03. Spacing Helpers
        </h2>
        <p>
            Notes here
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                How it works
            </h4>
            <pre>
<code class="language-css">
/*
* Spacing helpers:
* -------------------------------
*/

/* Spacing Prefixes */

//Margins
.m--        = margin-top
.mb--       = margin-bottom
.mr--       = margin-right
.ml--       = margin-left

//Padding
.p--        = padding-top
.pb--       = padding-bottom
.pl--       = padding-left
.pr--       = padding-right

/* Suffix */

//Size of spacing you want from 0 - xxxl
0     
xxxs  
xxs   
xs    
s     
m     
l     
xl    
xxl   
xxxl 

//Examples

/* This class would have a xxxs right margin */
.mr--xxxs

/* This class would have a large left padding */
.pl--l

/* Margin right SCSS code: */
.mr--0     { margin-right:$bs--0; }
.mr--xxxs  { margin-right:$bs--xxxs;}
.mr--xxs   { margin-right:$bs--xxs; }
.mr--xs    { margin-right:$bs--xs;}
.mr--s     { margin-right:$bs--s;}
.mr--m     { margin-right:$bs--m;}
.mr--l     { margin-right:$bs--l;}
.mr--xl    { margin-right:$bs--xl;}
.mr--xxl   { margin-right:$bs--xxl;}
.mr--xxxl  { margin-right:$bs--xxxl;}
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class='mr--0 block--xs green-block '>
                <p>
                    block--xs with 0 margin right (mr--0)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--xxxs block--xs green-block '>
                <p>
                    block--xs with xxxs margin right (mr--xxxs)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--xxs block--xs green-block '>
                <p>
                    block--xs with xxs margin right (mr--xxs)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--xs block--xs green-block '>
                <p>
                    block--xs with xs margin right (mr--xs)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--s block--xs green-block '>
                <p>
                    block--xs with with s margin right (mr--s)
                </p>
            </div><!-- block xs ends-->

            <div class='mr--m block--xs green-block '>
                <p>
                    block--xs with m margin right (mr--m)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--l block--xs green-block '>
                <p>
                    block--xs with l margin right (mr--l)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--xl block--xs green-block '>
                <p>
                    block--xs with xl margin right (mr--xl)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--xxl block--xs green-block '>
                <p>
                    block--xs with xxl margin right (mr--xxl)
                </p>
            </div><!-- block xs ends-->
            <div class='mr--xxxl block--xs green-block '>
                <p>
                    block--xs with xxxl margin right (mr--xxxl)
                </p>
            </div><!-- block xs ends-->
        </div><!--  hello world block ends -->

        <h3 class='h4'>
            b) Responsive spacing elements
        </h3>

        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                How it works
            </h4>
            <pre>
<code class="language-css">
/*
* Spacing helpers:
* -------------------------------
*/

/* Middle Prefix */

-small       = mobile
-medium      = tablet
-large       = desktop
-xlarge      = wide screen

//Examples
/* This class would have a xxxs right margin that only shows on mobile screens*/
.mr-small--xxxs

/* This class would have a large left padding that only shows on wide screens */
.pl-xlarge--l

/* Margin right SCSS code: */
@include media('xlarge') {
    .mr-xlarge--0     { margin-right:$bs--0; }
    .mr-xlarge--xxxs  { margin-right:$bs--xxxs;}
    .mr-xlarge--xxs   { margin-right:$bs--xxs; }
    .mr-xlarge--xs    { margin-right:$bs--xs;}
    .mr-xlarge--s     { margin-right:$bs--s;}
    .mr-xlarge--m     { margin-right:$bs--m;}
    .mr-xlarge--l     { margin-right:$bs--l;}
    .mr-xlarge--xl    { margin-right:$bs--xl;}
    .mr-xlarge--xxl   { margin-right:$bs--xxl;}
    .mr-xlarge--xxxl  { margin-right:$bs--xxxl;}
}
</code>
            </pre>
        </div>
        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class='mr-xlarge--xxxl mr-medium--l mr--s mr-small--0 block--xs green-block '>
                <p>
                
                    <strong>mobile:</strong> mr-small--s<br />
                    <strong>skinny:</strong> mr-medium--l<br />
                    <strong>desktop:</strong> mr--s<br />
                    <strong>wide:</strong> mr-xlarge--xxxl
                </p>
            </div><!-- block xs ends-->
        </div>
    </div><!--layout-generic-block ends-->

    <hr class='m--l'>
   
    <!-- /****************************************  generic blocks  *******************************/ -->
    <div class='m--l' id='layoutAnchor4' >
        <h2 class='h3'>
            04. Blocks
        </h2>

        <p>
            Notes...
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                how it works
            </h4>
            <pre>
<code class="language-markup">
prefix = block 

suffix is the size of the block you want: 

--0     
--xxxs  
--xxs   
--xs    
--s     
--m     
--l     
--xl    
--xxl   
--xxxl

/*  CODE EXAMPLE  */
&lt;div class='block--xs'&gt;
    block--xs
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class=' block--xxxs green-block '>
                <p>
                    block--xxxs
                </p>
            </div><!-- block xs ends-->
            <div class=' block--xxs green-block '>
                <p>
                    block--xxs
                </p>
            </div><!-- block xs ends-->
            <div class=' block--xs green-block '>
                <p>
                    block--xs
                </p>
            </div><!-- block xs ends-->

            <div class=' block--s green-block'>
                <p>
                    block--s
                </p>
            </div><!-- block ends-->

            <div class='block--m green-block'>
                <p>
                    block--m
                </p>
            </div><!-- block ends-->

            <div class='block--l green-block '>
                <p>
                    block--l
                </p>
            </div><!-- block xl ends-->

            <div class='block--xl green-block '>
                <p>
                    block--xl
                </p>
            </div><!-- block xl ends-->

            <div class='block--xxl green-block '>
                <p>
                    block--xxl
                </p>
            </div><!-- block xl ends-->

            <div class='block--xxxl green-block '>
                <p>
                    block--xxxl
                </p>
            </div><!-- block xl ends-->

        </div><!--  hello world block ends -->
    
        <h3 class='h4 m--l'>
             b) Blocks - reponsive 
        </h4>

        <p>
            These building blocks work in exactly the same way as the ones above</a>. 
            The only difference is that they have an extra suffix added to them so they ..
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

// Media queries breakpoints
// -------------------------------------------------- 

$small:                        30em;//Portrait regular mobiles//480px
$medium:                       48em;//Skinny 768px
$large:                        60em;//Desktop 960px 
$xlarge:                       75em;//Wide 1200px

// Extra middle prefixs that relate to the breakpoints
// -----------------------------------------------------

-small
-medium
-xlarge


// Example one
// --------------------------------------------------

//margin-right default ( displays on all breakpoints )
.mr--0

//margin-right on mobile
.mr-small--0

//margin-right on a tablet 
.mr-medium--0  

//margin-right on a wide screen 
.mr-xlarge--0 


------------------------------------------------------- 
    Here is the code for the example below:  
------------------------------------------------------- 

// Example one
// -------------------------------------------------- 

&lt;div class='block--m block-small--xs block-medium--s block-xlarge--l green-block '&gt;
    &lt;p&gt;
        &lt;strong>desktop:&lt;/strong&gt;    block--m
        &lt;strong>mobile:&lt;/strong&gt;     block-small--xs
        &lt;strong>tablet:&lt;/strong&gt;     block-medium--s
        &lt;strong>wide:&lt;/strong&gt;       block-xlarge--l
    &lt;/p&gt;
&lt;/div&gt;<!-- block xs ends-->

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <p>Example one</p>
            <div class='block--m block-m--xs block-s--s block-xlarge--l green-block '>
                <p>
                    <strong>desktop:</strong>    block--m<br />
                    <strong>mobile:</strong>     block-m--xs<br />
                    <strong>skinny:</strong>     block-s--s<br />
                    <strong>wide:</strong>       block-xlarge--l
                </p>
            </div>
            
        </div><!--  hello world block ends -->
    </div><!--Building blocks section ends-->

    <hr class='m--l' />

    <!-- /****************************************  Media blocks  *******************************/ -->

    <div class='m--l' id='layoutAnchor5'>
        <h2 class='h3'>
            05. Media blocks
        </h2>
        <p>
            Float an image to the left, with a clearfixed block of content to the right.
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='media'&gt;
    &lt;img class='media__image' src='ssets/images/green-bird.jpg' alt='' /&gt;
    &lt;div class='media__body'&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
<code class='language-markup'>
&lt;div class='media--rev'&gt;
    &lt;img class='media__image' src='ssets/images/green-bird.jpg' alt='' /&gt;
    &lt;div class='media__body'&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='media'>
                <img src='assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                    <p class='m--0'>
                        Uncle Bully was pashing when the pearler packing a sad event occured. Oh no! I'm beached as, this carked it seabed is as stoked as a flat stick kumara. Mean while, in a waka, Rhys Darby and Cardigan Bay were up to no good with a bunch of random milks.
                    </p>
                </div>
            </div>

            <div class='media--rev'>
                <img src='assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                   <p class=''>
                    I'd slam that clam, good afterble constanoon. The snarky force of his burning my Vogel's was on par with Hercules Morse, as big as a horse's good as mate.
                    </p>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    
    <hr class='m--l'>
    <!-- /****************************************  Icon blocks  *******************************/ -->
    
    <div class='m--l' id='layoutAnchor6'>
        <h2  class='h3'>
           06. Icons with text
        </h2>
        <p>
            Notes
        </p>

        <!--  code block starts -->
        <div class=' block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;a class='media--rev' href='#'&gt;
    &lt;i class='i icon-placeholder'&gt;&lt;/i&gt;
    A link with an icon
&lt;/a&gt;

&lt;p class='media--rev' href='#'&gt;
    A paragraph with an icon on the other side
    &lt;i class='i icon-placeholder'&gt;&lt;/i&gt;
&lt;/p&gt;
</code>
        </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p>
                <a class='icon-text xm' href='#'> 
                    <i class='i icon-placeholder'></i>
                    A link with an icon
                </a>
            </p>
            
            <p class='icon-text xm' href=''> 
                A paragraph with an icon on the other side
                <i class='i icon-placeholder'></i>
            </p>
            
        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    <hr class='m--l'>

    <!-- /****************************************  Arrows  *******************************/ -->

    <div class='m--l' id='layoutAnchor7'>
        <h2  class='h3'>
            07. Arrows
        </h2>

        <p>
            Notes
        </p>
        <!--  code block starts -->
        <div class='block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='arrow--left'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-top'&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;div class='arrow--right'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-top'&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;div class='arrow--center'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-bottom'&gt;&lt;/i&gt;
&lt;/div&gt;

&lt;div class='arrow--side'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow  arrow-left'&gt;&lt;/i&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='arrow--left m--xm block--xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-top'></i>
            </div>

            <div class='arrow--right m--xm block--xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-top '></i>
            </div>

            <div class='arrow--center m--xm block--xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-bottom '></i>
            </div>

            <div class='arrow--side m--xm block--xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-left '></i>
            </div>

            <!--<div class='arrow xm arrow--side block--xxs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-right'></i>
            </div>-->

        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    <hr class='m--l'>
    <!-- /****************************************  Inline gird  *******************************/ -->

    <div class='m--l' id='layoutAnchor8'>
        <h2>
            08. Inline Grid
        </h2>
        <p>
            Sets the child elements to take up full justified width of the parent.
        </p>
        <!--  code block ends -->
        <div class='block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>  
            <div class='grid'>
                <div class='grid__item g--1-1  '>
                   <div class='pink-block block--s'>
                        <p>
                            full width
                        </p>
                    </div>
                </div>
            </div>
            <p>Example one:</p>
            <div class='grid'>
                <div class='grid__item g--1-2' >
                    <div class='blue-block block--s'>
                        <p>
                            1/2
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-2 '>
                    <div class='blue-block block--s'>
                        <p>
                            1/2
                        </p>
                    </div>
                </div>
            </div>
            <p>Example two:</p>
            <div class='grid'>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>
            <p>Example three:</p>
            <div class='grid'>
                <div class='grid__item g--60'>
                    <div class='st-block block--s'>
                        <p>
                            60%
                        </p>
                    </div>
                </div>
                <div class='grid__item g--40'>
                    <div class='st-block block--s'>
                        <p>
                            40%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example four:</p>
            <div class='grid'>
                <div class='grid__item g--80 '>
                    <div class='tt-block block--s'>
                        <p>
                            80%
                        </p>
                    </div>
                </div>
                <div class='grid__item g--20'>
                    <div class='tt-block block--s'>
                        <p>
                            20%
                        </p>
                    </div>
                </div>
            </div>

            <br />

            <p>
                Vertical align these grid items in the middle!
            </p>

            <div class='grid grid--middle'>
                <div class=' g--1-4'>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4'>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4'>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4 '>
                   <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>   
        </div><!--  hello world block ends -->
    
        <h3 class='h4 m--l'>
            05. Inline Grid - Responsive
        </h3>
        <p>
          Notes
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--60'>
                   <div class='pink-block block--s'>
                        <p>
                            1<!--<strong>Desktop:</strong> 1/4 <br />
                            <strong>Skinny:</strong> 1/2 <br />
                           <strong>mobile:</strong> full width<br />
                           <strong>wide:</strong> 60/40-->
                       </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--40'>
                   <div class='pink-block block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--60'>
                   <div class='pink-block block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--40'>
                   <div class='pink-block block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Inline grid section starts-->
    <hr class='m--l'>
    <!-- /****************************************  Append vs Prepend  *******************************/ -->

    <div class='m--l' id='layoutAnchor10'>
        <h2 class='h3'>
            09. Prepend vs Append
        </h2>
        <p>
            Place something before or after an element.
        </p>
        <!--  code block starts -->
        <div class='block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p class='prepend' data-prepend='email:'&gt;&nbsp;email@gmail.com&lt;/p&gt;
&lt;p class='append' data-append='is my email'&gt;email@gmail.com&nbsp;&lt;/p&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <p class='prepend' data-prepend='email:'>&nbsp;email@gmail.com</p>
        
            <p class='append' data-append='is my email'>email@gmail.com&nbsp;</p>
        
        </div><!--  hello world block ends -->
    </div><!-- layout-append ends-->
   
    <hr class='m--l' />

    <!--Responsive image section starts-->
    <div class='m--l' id='responsiveAnchor4' >
        <h2 class='h3'>
            04. Responsive images
        </h2>
        <p>
            This applies max-width: 100%; and height: auto; to the image so that it scales nicely to 
            the parent element.
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
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
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item g--1-2' >
                    <img src='assets/images/fred.png' alt='' class='img--responsive' />
                </div>
                <div class='grid__item g--1-2'>
                    <div class='arrow--side blue-block block--m'>
                        <p>Resize the browser so you can see me shrink </p>
                        <i class='arrow arrow-left'></i>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Responsive image section starts-->
    
    <hr class='m--l' />

    <!--Hidden section starts-->
    <div class='m--l' id='responsiveAnchor11' >
        <h2 class='h3'>
            10. Visability classes - Hidden and Visible
        </h2>

        <h3 class='h4'>
            a) Hidden
        </h3>

        <p>
            Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block--s qt-block '>
                <p>
                    normal block always how this 
                </p>
            </div>

            <div class='block--s pink-block hidden-mobile'>
                <p>
                    hide this block on mobile 
                </p>
            </div>

            <div class='block--s green-block hidden-skinny'>
                <p>
                    hide this block on skinny
                </p>
            </div>

            <div class='block--s blue-block hidden-wide'>
                <p>
                    hide this block on wide
                </p>
            </div>

        </div><!--  hello world block ends -->
        <h3 class='h4'>
            b) Visibile
        </h3>

        <p>
            Try to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block--s qt-block '>
                <p>
                    normal block always show this 
                </p>
            </div>

            <div class='block--s pink-block visible-mobile'>
                <p>
                    show this block on mobile
                </p>
            </div>

            <div class='block--s blue-block visible-skinny'>
                <p>
                    show this block on skinny
                </p>
            </div>

            <div class='block--s green-block visible-wide'>
                <p>
                    show this block on wide
                </p>
            </div>

        </div><!--  hello world block ends -->
    </div><!--Visible section ends-->
</div><!--content-padding-->

<?php 
    include 'footer.php'; 
?>