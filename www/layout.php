<?php 
    include 'header.php'; 
?>

<div class='content--padding clearfix tb__primary relative'>
    <div class='page-header tb__header'>
        <h1>
            Layout
            <span class='tiny'>
                - Setting up
            </span>
        </h1>
    </div>
    <img src='assets/images/fred-top.png' alt='' class='absolute fred-layout' />

    <p class='m'>
        Be consistent with vertical spacing. Avoid setting arbitrary margins on items. 
        Defer these to a variable, and use multiples of that variable to control your vertical spacing. 
        Our designs will often change right up til the end, so it's worth making stuff really easy to change.
    </p>
    <p>
        
    </p>

    <div class='page-header tb__header mx'>
        <h1>
            Layout
            <span class='tiny'>
                - Helper classes
            </span>
        </h1>
    </div>

    <ul class='list--styled_decimal'>

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
                Generic blocks
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


    <hr class='m'>
    

    <!-- /****************************************  Inline Blocks  *******************************/ -->

    <div class='section--xl' id='layout-inline-block'>
        <h2 class='h3'>
            01. Inline block 
        </h2>
        <p>
            Displays an element as an inline-level block container. The inside of this block is formatted as block-level box, and the element itself is formatted as an inline-level box
        </p>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
    <hr class='mx'>
    <!-- /****************************************  Positioning  *******************************/ -->

    <div class='section--xl' id='layout-positioning'>
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
        <div class='block block--s tb__tertiary'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4> 
            <pre>
<code class="language-markup">
/* */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute specific-absolute-class' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt;

/* Top right */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class=&#39;absolute__top-right' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt; 

/* Top Left */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute__top-left' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt;   

/* Bottom right */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute__bottom-right' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt; 

/* Bottom left */
&lt;div class='relative'&gt;
    &nbsp;&lt;img class='absolute__bottom-left' src='assets/images/green-bird.jpg' /&gt; 
&lt;/div&gt;
 
</code>
            </pre>  
           
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block__stacked block--s tb__primary'> 
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='grid '>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute specific-bird' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute__top-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute__top-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute__bottom-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='tb__secondary xxm relative testbox-100-100' >
                    <img class='absolute__bottom-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                 
            </div>
        </div><!--  hello world block ends -->
        
        <!-- /********  Floating elements *************/ -->
        
        <h3 class='h4 xm'>b) Floating elements</h3>
        <p>
            With CSS float, an element can be pushed to the left or right, allowing other elements to wrap around it.
        </p>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='block__stacked block--s clearfix'> 
                <img class='left' src='assets/images/yellow-bird.jpg' alt='i am an image'/>
                <img class='right' src='assets/images/blue-bird.jpg' alt='i am an image'/>    
            </div>
        </div><!--  hello world block ends -->

        <!-- /********  Clearfix *************/ -->
        
        <h3 class='h4 xm'>c) Clearfix</h3>
        <p>
            What clearfix does is it forces content after the floats or the container containing the floats to render below it.
        </p>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='block__stacked block--s clearfix'> 
                <img class='left' src='assets/images/yellow-bird.jpg' alt='i am an image'/>
                <img class='right' src='assets/images/blue-bird.jpg' alt='i am an image'/>    
            </div>
        </div><!--  hello world block ends -->

        
    </div><!-- layout-positioning ends-->
    <hr class='mx'>
    <!-- /****************************************  Generic blocks  *******************************/ -->
    
    <div class='section--xl' id='layout-generic-block' >
        <h2 class='h3'>
            03. Generic blocks
        </h2>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='block block--xs'&gt;
    xxs block
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block__stacked block--s tb__primary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 


            <div class='block block--xs tb__green '>
                <p>
                    xs block
                </p>
            </div><!-- block xs ends-->

            <div class='block block--s tb__green'>
                <p>
                    s block
                </p>
            </div><!-- block ends-->

            <div class='block block--m tb__green'>
                <p>
                    m block
                </p>
            </div><!-- block ends-->

            <div class='block block--l tb__green '>
                <p>
                    l block
                </p>
            </div><!-- block xl ends-->

            <div class='block block--xl tb__green '>
                <p>
                    xl block
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
    <hr class='mx'>

    <!-- /****************************************  Section blocks  *******************************/ -->
    
    <div class='section--xl' id='layout-section-block' >
        <h2 class='h3'>
            04. Section blocks
        </h2>
        <p>
            A handy little class to control the top margins of grouped elements 
        </p>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-markup">
&lt;div class='section--xs'&gt;
    &lt;div class='block--xs'&gt;
        ...
    &lt;/div&gt;
    &lt;div class='block--xs'&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block__stacked block--s tb__primary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <div class='section--xxs'>
                <div class='block block--xs tb__green '>
                    <p>
                        Block with a section--xs wrapper
                    </p>
                </div><!-- block xxs ends-->
            </div>
            <div class='section--xs'>
                <div class='block block--xs tb__pink '>
                    <p>
                        Block with a section--xs wrapper
                    </p>
                </div><!-- block xxs ends-->
            </div>
            <div class='section'>
                <div class='block block--xs tb__blue '>
                    <p>
                        Block with a section wrapper
                    </p>
                </div><!-- block xxs ends-->
            </div>
            <div class='section--xl'>
                <div class='block block--xs tb__green '>
                    <p>
                        Block with a section--xl wrapper
                    </p>
                </div><!-- block xxs ends-->
            </div>
             <div class='section--xxl'>
                <div class='block block--xs tb__pink '>
                    <p>
                        Block with a section--xxl wrapper
                    </p>
                </div><!-- block xs ends-->
                <div class='block block--xs tb__pink '>
                    <p>
                        Block with a section--xxl wrapper
                    </p>
                </div><!-- block xxs ends-->
            </div>
            <div class='section--xxxl'>
                <p>
                    I am a group of text 
                </p>
                <div class='block block--xs tb__blue '>
                    <p>
                        Block with a section--xxxl wrapper
                    </p>
                </div><!-- block xxs ends-->


            </div>
        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->
    <hr class='mx'>
    <!-- /****************************************  Media blocks  *******************************/ -->

    <div class='section--xl' id='layout-media-block'>
        <h2 class='h3'>
            05. Media blocks
        </h2>
        <p>
            Float an image to the left, with a clearfixed block of content to the right.
        </p>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='media'>
                <img src='assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                   Uncle Bully was pashing when the pearler packing a sad event occured. Oh no! I'm beached as, this carked it seabed is as stoked as a flat stick kumara. Mean while, in a waka, Rhys Darby and Cardigan Bay were up to no good with a bunch of random milks.
                </div>
            </div>

            <div class='media--rev'>
                <img src='assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                   I'd slam that clam, good afterble constanoon. The snarky force of his burning my Vogel's was on par with Hercules Morse, as big as a horse's good as mate.
                </div>
            </div>

        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    <hr class='mx'>
    <!-- /****************************************  Icon blocks  *******************************/ -->
    <!-- hmm TODO check the code somethings not right-->
    <div class='section--xl' id='layout-icon-blocks'>
        <h2  class='h3'>
           06. Icon blocks
        </h2>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
        <div class='block__stacked block--s tb__secondary'>
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
    <hr class='mx'>

    <!-- /****************************************  Arrows  *******************************/ -->

    <div class='section--xl' id='layout-arrows'>
        <h2  class='h3'>
            07. Arrows
        </h2>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='arrow--left'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-top'&gt;&lt;/i&gt;
&lt;/div&gt;
</code>
<code class='language-markup'>
&lt;div class='arrow--right'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-top'&gt;&lt;/i&gt;
&lt;/div&gt;
</code>
<code class='language-markup'>
&lt;div class='arrow--center'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow arrow-bottom'&gt;&lt;/i&gt;
&lt;/div&gt;
</code>
<code class='language-markup'>
&lt;div class='arrow--side'&gt;
    &lt;p&gt; ... &lt;/p&gt;
    &lt;i class='arrow  arrow-left'&gt;&lt;/i&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='arrow--left mt--xm block block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-top'></i>
            </div>

            <div class='arrow--right mt--xm  block block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-top '></i>
            </div>

            <div class='arrow--center mt--xm  block block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-bottom '></i>
            </div>

            <div class='arrow--side mt--xm  block block--xs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-left '></i>
            </div>

            <!--<div class='arrow xm arrow--side block--xxs tb__blue'>
                <p> ... </p>
                <i class='arrow arrow-right'></i>
            </div>-->

        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    <hr class='mx'>
    <!-- /****************************************  Inline gird  *******************************/ -->

    <div class='section--xl' id='layout-inline-grid'>
        <h2>
            08. Inline Grid
        </h2>
        <p>
            Sets the child elements to take up full justified width of the parent.
        </p>
        <!--  code block ends -->
        <div class='block block--s tb__tertiary'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block__stacked block--s tb__secondary'>  
            <div class='grid'>
                <div class='g--1-1 tb__pink '>
                    &nbsp;
                </div>
            </div>

            <br />

            <div class='grid'>
                <div class='g--1-2 tb__pink' >
                    &nbsp;
                </div>
                <div class='g--1-2 tb__pink'>
                    &nbsp;
                </div>
            </div>

            <br />

            <div class='grid'>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
            </div>

            <br />

            <div class='grid'>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4  tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4  tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
            </div>

            <br />

            <p>
                Vertical align these grid items in the middle!
            </p>

            <div class='grid grid--middle'>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
                <div class=' g--1-4 tb__pink'>
                    &nbsp;
                </div>
            </div>   
        </div><!--  hello world block ends -->
    </div><!-- layout-inline-grid ends -->
    <hr class='mx'>
    <!-- /****************************************  Append vs Prepend  *******************************/ -->

    <div class='section--xl' id='layout-append'>
        <h2 class='h3'>
            09. Prepend vs Append
        </h2>
        <p>
            Place something before or after an element.
        </p>
        <!--  code block starts -->
        <div class='block block--s tb__tertiary'>
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
        <div class='block__stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <p class='prepend' data-prepend='email:'>&nbsp;email@gmail.com</p>
        
            <p class='append' data-append='is my email'>email@gmail.com&nbsp;</p>
        
        </div><!--  hello world block ends -->
    </div><!-- layout-append ends-->
   
    
    </div><!-- layout-append ends-->
</div><!--content-padding-->

<?php 
    include 'footer.php'; 
?>