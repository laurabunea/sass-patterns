<?php 
    include 'header.php'; 
?>

<div class='block--l block-s--m block-m--s mb--l clearfix tb__primary relative'>
    <div class='page-header tb__header'>
        <h1>
            Layout
            <span class='tiny'>
                - Setting up
            </span>
        </h1>
    </div>
    <img src='assets/images/fred-top.png' alt='' class='absolute fred-layout' />

    <p>
        Be consistent with vertical spacing. Avoid setting arbitrary margins on items. 
        Defer these to a variable, and use multiples of that variable to control your vertical spacing. 
        Our designs will often change right up til the end, so it's worth making stuff really easy to change.
    </p>

    <div class='page-header tb__header mt--xl'>
        <h1>
            Layout
            <span class='tiny'>
                - Helper classes
            </span>
        </h1>
    </div>

    <ul class='list--styled-decimal'>

        <li>
            <a href='#layout-inline-block'>
                Inline Blocks
            </a>
        </li>
        <li>
            <a href='#layout-positioning'>
                Positioning
            </a>
        </li>
        <li>
            <a href='#layout-generic-block'>
                Building blocks
            </a>
        </li>
         <li>
            <a href='#layout-section-block'>
                Section blocks
            </a>
        </li>
        <li>
            <a href='#layout-media-block'>
                Media Blocks
            </a>
        </li>
        <li>
            <a href='#layout-icon-block'>
                Icon block
            </a>
        </li>
        <li>
            <a href='#layout-arrows'>
                Arrows
            </a>
        </li>
        <li>
            <a href='#layout-inline-grid'>
                Inline Grid
            </a>
        </li>

        <li>
            <a href='#layout-append'>
                Prepend vs Append
            </a>
        </li>
        
    </ul><!--list unstyled ends-->
    

    <!-- /****************************************  Inline Blocks  *******************************/ -->

    <div class='mt--xl' id='layout-inline-block'>
        <h2 class='h3'>
            01. Inline block 
        </h2>
        <p>
            Displays an element as an inline-level block container. The inside of this block is formatted as block-level box, and the element itself is formatted as an inline-level box
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'>
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

    </div><!-- layout-clearfix ends-->
    <hr class='mt--l'>
    <!-- /****************************************  Positioning  *******************************/ -->

    <div class='mt--l' id='layout-positioning'>
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
        <div class=' block--s tb__tertiary'>
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
        <div class='block--stacked block--s tb__secondary'> 
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='grid '>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute specific-bird' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute--top-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute--top-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute--bottom-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute--bottom-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                 
            </div>
        </div><!--  hello world block ends -->
        
        <!-- /********  Floating elements *************/ -->
        
        <div class='mt--l'>
            <h3 class='h4 '>b) Floating elements</h3>
            <p>
                With CSS float, an element can be pushed to the left or right, allowing other elements to wrap around it.
            </p>
            <!--  code block starts -->
            <div class='block--s tb__tertiary'>
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
            <div class='block--stacked block--s tb__secondary'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <div class='block--stacked block--s clearfix'> 
                    <img class='left' src='assets/images/yellow-bird.jpg' alt='i am an image'/>
                    <img class='right' src='assets/images/blue-bird.jpg' alt='i am an image'/>    
                </div>
            </div><!--  hello world block ends -->
        </div>
        <!-- /********  Clearfix *************/ -->
        <div class='mt--l'>
            <h3 class='h4'>c) Clearfix</h3>
            <p>
                What clearfix does is it forces content after the floats or the container containing the floats to render below it.
            </p>
            <!--  code block starts -->
            <div class='block--s tb__tertiary'>
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

            <!--  hello world block starts -->
            <div class='block--stacked block--s tb__secondary'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <div class='block--stacked block--s clearfix'> 
                    <img class='left' src='assets/images/yellow-bird.jpg' alt='i am an image'/>
                    <img class='right' src='assets/images/blue-bird.jpg' alt='i am an image'/>    
                </div>
            </div><!--  hello world block ends -->
        </div>
        
    </div><!-- layout-positioning ends-->
    <hr class='mt--l'>
    <!-- /****************************************  Building blocks  *******************************/ -->
    
    <div class='mt--l' id='layout-generic-block' >
        <h2 class='h3'>
            03. Building blocks
        </h2>
        <p>
            like lego :) uses base spacing
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-css">
//margin-right 
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

//margin-left 
.ml--(block size here xs, s, m etc)

//margin-top 
.mt--(block size here xs, s, m etc)

//margin-bottom 
.mb--(block size here xs, s, m etc)

//padding-left 
.pl--(block size here xs, s, m etc)

//padding-top 
.pt--(block size here xs, s, m etc)

//padding-bottom 
.pb--(block size here xs, s, m etc)
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class='mt--xxxs block--xs tb__green '>
                <p>
                    block--xs with xxxs top margin (mt--xxxs)
                </p>
            </div><!-- block xs ends-->
            <div class='mt--xxs block--xs tb__green '>
                <p>
                    block--xs with xxs top margin (mt--xxs)
                </p>
            </div><!-- block xs ends-->
            <div class='mt--xs block--xs tb__green '>
                <p>
                    block--xs with xs top margin (mt--xs)
                </p>
            </div><!-- block xs ends-->
            <div class='mt--s block--xs tb__green '>
                <p>
                    block--xs with with s top margin (mt--s)
                </p>
            </div><!-- block xs ends-->

            <div class='mt--m block--xs tb__green '>
                <p>
                    block--xs with m top margin (mt--m)
                </p>
            </div><!-- block xs ends-->
            <div class='mt--l block--xs tb__green '>
                <p>
                    block--xs with l top margin (mt--l)
                </p>
            </div><!-- block xs ends-->
            <div class='mt--xl block--xs tb__green '>
                <p>
                    block--xs with xl top margin (mt--xl)
                </p>
            </div><!-- block xs ends-->
            <div class='mt--xxl block--xs tb__green '>
                <p>
                    block--xs with xxl top margin (mt--xxl)
                </p>
            </div><!-- block xs ends-->
            <div class='mt--xxxl block--xs tb__green '>
                <p>
                    block--xs with xxxl top margin (mt--xxxl)
                </p>
            </div><!-- block xs ends-->
        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->
    <hr class='mt--l'>
    <!--Building blocks section starts-->
    <div class='mt--l' id='responsiveAnchor1' >
        <h2 class='h3'>
            01. Building blocks - reponsive 
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
    <!-- /****************************************  generic blocks  *******************************/ -->
    <div class='mt--l' id='layout-generic-block' >
        <h2 class='h3'>
            04. Section blocks
        </h2>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='block--xs'&gt;
    block--xs
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 

            <div class=' block--xs tb__green '>
                <p>
                    block--xs
                </p>
            </div><!-- block xs ends-->

            <div class=' block--s tb__green'>
                <p>
                    block--s
                </p>
            </div><!-- block ends-->

            <div class='block--m tb__green'>
                <p>
                    block--m
                </p>
            </div><!-- block ends-->

            <div class='block--l tb__green '>
                <p>
                    block--l
                </p>
            </div><!-- block xl ends-->

            <div class='block--xl tb__green '>
                <p>
                    block--xl
                </p>
            </div><!-- block xl ends-->




            <!--<div class='block--tight tb__green '>
                <p>
                    I am a tight block
                </p>
            </div>

            <div class='block--bleed tb__green'>
                <p>
                    I am a block
                </p>
            </div>

            <div class='block--bleed_padding tb__green'>
                <p>
                    I am a block
                </p>
            </div>-->

        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->

    <!-- /****************************************  Media blocks  *******************************/ -->

    <div class='mt--l' id='layout-media-block'>
        <h2 class='h3'>
            05. Media blocks
        </h2>
        <p>
            Float an image to the left, with a clearfixed block of content to the right.
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'>
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
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='media'>
                <img src='assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                    <p class='mt--0'>
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
    <hr class='mt--l'>
    <!-- /****************************************  Icon blocks  *******************************/ -->
    <!-- hmm TODO check the code somethings not right-->
    <div class='mt--l' id='layout-icon-blocks'>
        <h2  class='h3'>
           06. Icon blocks
        </h2>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'>
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
        <div class='block--stacked block--s tb__secondary'>
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
    <hr class='mt--l'>

    <!-- /****************************************  Arrows  *******************************/ -->

    <div class='mt--l' id='layout-arrows'>
        <h2  class='h3'>
            07. Arrows
        </h2>
        <!--  code block starts -->
        <div class='block--s tb__tertiary'>
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
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='arrow--left mt--xm block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-top'></i>
            </div>

            <div class='arrow--right mt--xm block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-top '></i>
            </div>

            <div class='arrow--center mt--xm block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-bottom '></i>
            </div>

            <div class='arrow--side mt--xm block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-left '></i>
            </div>

            <!--<div class='arrow xm arrow--side block--xxs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-right'></i>
            </div>-->

        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    <hr class='mt--l'>
    <!-- /****************************************  Inline gird  *******************************/ -->

    <div class='mt--l' id='layout-inline-grid'>
        <h2>
            08. Inline Grid
        </h2>
        <p>
            Sets the child elements to take up full justified width of the parent.
        </p>
        <!--  code block ends -->
        <div class='block--s tb__tertiary'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>  
            <div class='grid'>
                <div class='grid__item g--1-1  '>
                   <div class='tb__pink block--s'>
                        <p>
                            full width
                        </p>
                    </div>
                </div>
            </div>
            <p>Example one:</p>
            <div class='grid'>
                <div class='grid__item g--1-2' >
                    <div class='tb__blue block--s'>
                        <p>
                            1/2
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-2 '>
                    <div class='tb__blue block--s'>
                        <p>
                            1/2
                        </p>
                    </div>
                </div>
            </div>
            <p>Example two:</p>
            <div class='grid'>
                <div class='grid__item g--1-4 '>
                    <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>
            <p>Example three:</p>
            <div class='grid'>
                <div class='grid__item g--60'>
                    <div class='tb__secondary block--s'>
                        <p>
                            60%
                        </p>
                    </div>
                </div>
                <div class='grid__item g--40'>
                    <div class='tb__secondary block--s'>
                        <p>
                            40%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example four:</p>
            <div class='grid'>
                <div class='grid__item g--80 '>
                    <div class='tb__tertiary block--s'>
                        <p>
                            80%
                        </p>
                    </div>
                </div>
                <div class='grid__item g--20'>
                    <div class='tb__tertiary block--s'>
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
                    <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4'>
                    <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4'>
                    <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4 '>
                   <div class='tb__green block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>   
        </div><!--  hello world block ends -->
    </div><!-- layout-inline-grid ends -->
    <hr class='mt--l'>

    <!--Inline grid  section starts-->
    <div class='mt--l' id='responsiveAnchor4' >
        <h2 class='h3'>
            05. Inline Grid
        </h2>
        <p>
          
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
          
            
            <div class='grid'>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--60'>
                   <div class='tb__pink block--s'>
                        <p>
                            1<!--<strong>Desktop:</strong> 1/4 <br />
                            <strong>Skinny:</strong> 1/2 <br />
                           <strong>mobile:</strong> full width<br />
                           <strong>wide:</strong> 60/40-->
                       </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--40'>
                   <div class='tb__pink block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--60'>
                   <div class='tb__pink block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-m--1-1 g-w--40'>
                   <div class='tb__pink block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Inline grid section starts-->
    <hr class='mt--l'>
    <!-- /****************************************  Append vs Prepend  *******************************/ -->

    <div class='mt--l' id='layout-append'>
        <h2 class='h3'>
            09. Prepend vs Append
        </h2>
        <p>
            Place something before or after an element.
        </p>
        <!--  code block starts -->
        <div class='block--s tb__tertiary'>
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
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <p class='prepend' data-prepend='email:'>&nbsp;email@gmail.com</p>
        
            <p class='append' data-append='is my email'>email@gmail.com&nbsp;</p>
        
        </div><!--  hello world block ends -->
    </div><!-- layout-append ends-->
   
    
    </div><!-- layout-append ends-->

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
                <div class='grid__item g--40' >
                    <img src='assets/images/fred.png' alt='' class='img--responsive' />
                </div>
                <div class='grid__item g--60'>
                    <div class='arrow--side tb__blue block--m'>
                        <p>Resize the browser so you can see me shrink </p>
                        <i class='arrow arrow-left'></i>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Responsive image section starts-->

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
</div><!--content-padding-->

<?php 
    include 'footer.php'; 
?>