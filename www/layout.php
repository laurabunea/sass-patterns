<?php 
    include 'header.php'; 
?>

<!-- Side Navigation Bar - this holds the children categories -->
<div class='navigation--side '>
    <ul class='list--unstyled'>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-clearfix'>
                Clearfix
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-inline-block'>
                Inline Blocks
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-positioning'>
                Positioning
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-generic-block'>
                Generic blocks
            </a>
        </li>
         <li>
            <a class='block--xs__stacked tb__primary' href='#layout-section-block'>
                Section blocks
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-media-block'>
                Media Blocks
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-icon-block'>
                Icon block
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-arrows'>
                Arrows
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-inline-grid'>
                Inline Grid
            </a>
        </li>

        <li>
            <a class='block--xs__stacked tb__primary' href='#layout-append'>
                Prepend vs Append
            </a>
        </li>
        
    </ul><!--list unstyled ends-->
</div><!--navigation side ends-->

<div class='content clearfix tb__primary'>
    <div class='content--padding'>
        <div class='page-header tb__header'>
            <h1>
                Layout
                <span class='tiny'>
                    - Setting up
                </span>
            </h1>
        </div>

        <p class='intro'>
            Notes here please
        </p>

        <div class='page-header tb__header mxx'>
            <h1>
                Layout
                <span class='tiny'>
                    - Rules
                </span>
            </h1>
        </div>

        <ul class='list--styled'>
            <li>
                Be consistent with vertical spacing. Avoid setting arbitrary margins on items. Defer these to a variable, and use multiples of that variable to control your vertical spacing. Our designs will often change right up til the end, so it's worth making stuff really easy to change.
            </li>
        </ul>

        <div class='page-header tb__header mxx'>
            <h1>
                Layout
                <span class='tiny'>
                    - Helper classes
                </span>
            </h1>
        </div>

        <!-- /****************************************  Clearfix  *******************************/ -->

        <div class='section--xl' id='layout-clearfix'>
            <h2>
                Clearfix
            </h2>
            <p>
                What clearfix does is it forces content after the floats or the container containing the floats to render below it.
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
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
        </div><!-- layout-clearfix ends-->
        <hr class='mx'>
        <!-- /****************************************  Inline Blocks  *******************************/ -->

        <div class='section--xl' id='layout-inline-block'>
            <h2 >
                Inline block 
            </h2>
            <p>
                Displays an element as an inline-level block container. The inside of this block is formatted as block-level box, and the element itself is formatted as an inline-level box
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
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
            <h2>
                Positioning - Floating and Absolute
            </h2>

            <!-- /********  Floating elements *************/ -->
            
            <h3 class=' xm'>1. Floating elements</h3>
            <p>
                With CSS float, an element can be pushed to the left or right, allowing other elements to wrap around it.
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <div class='block--xs__stacked clearfix'> 
                    <img class='left' src='assets/images/yellow-bird.jpg' alt='i am an image'/>
                    <img class='right' src='assets/images/blue-bird.jpg' alt='i am an image'/>    
                </div>
            </div><!--  hello world block ends -->

            <!-- /********  absolute positioing *************/ -->

            <h3>
                2. Absolute Positioning
            </h3>
            <p>
                A page element with relative positioning gives you the control to absolutely position children elements inside of it.
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    code
                </h4> 
                <pre>
<code class="language-markup">
    &lt;div class='relative'&gt;
        &nbsp;&lt;img class=&#39;absolute__top_right' src='assets/images/green-bird.jpg' /&gt; 
    &lt;/div&gt;   
</code>
<code class="language-markup">
    &lt;div class='relative'&gt;
        &nbsp;&lt;img class='absolute__top_left' src='assets/images/green-bird.jpg' /&gt; 
    &lt;/div&gt;   
</code>
<code class="language-markup">
    &lt;div class='relative'&gt;
        &nbsp;&lt;img class='absolute__bottom_right' src='assets/images/green-bird.jpg' /&gt; 
    &lt;/div&gt;   
</code>
<code class="language-markup">
    &lt;div class='relative'&gt;
        &nbsp;&lt;img class='absolute__bottom_left' src='assets/images/green-bird.jpg' /&gt; 
    &lt;/div&gt;   
</code>
                </pre>  
               
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__primary'> 
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <div class='grid '>
                    <div class='tb__primary xxm relative testbox' >
                        <img class='absolute__top_right' src='assets/images/green-bird.jpg' alt='i am an image'/>

                    </div>
                    <div class='tb__primary xxm relative testbox' >
                        <img class='absolute__top_left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                    </div>
                    <div class='tb__primary xxm relative testbox' >
                        <img class='absolute__bottom_right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                    </div>
                    <div class='tb__primary xxm relative testbox' >
                        <img class='absolute__bottom_left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                    </div> 
                </div>
            </div><!--  hello world block ends -->
        </div><!-- layout-positioning ends-->
        <hr class='mx'>
        <!-- /****************************************  Generic blocks  *******************************/ -->
        
        <div class='section--xl' id='layout-generic-block' >
            <h2 >
                Generic blocks
            </h2>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'> 
                <h4 class='tiny caps text_muted'>
                    code
                </h4>
                <pre>
<code class="language-markup">
    &lt;div class='block--xs'&gt;
        xxs block
    &lt;/div&gt;
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__primary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4> 

                <div class='block--xxs tb__green '>
                    <p>
                        xxs block
                    </p>
                </div><!-- block xxs ends-->

                <div class='block--xs tb__green '>
                    <p>
                        xs block
                    </p>
                </div><!-- block xs ends-->

                <div class='block tb__green'>
                    <p>
                        block
                    </p>
                </div><!-- block ends-->

                <div class='block--xl tb__green '>
                    <p>
                        xl block
                    </p>
                </div><!-- block xl ends-->

                <div class='block--xxl tb__green '>
                    <p>
                        xxl block
                    </p>
                </div><!-- block xxl ends-->

                <div class='block--xxxl tb__green '>
                    <p>
                        xxxl block
                    </p>
                </div><!-- block xxxl ends-->

                <div class='block--tight tb__green '>
                    <p>
                        I am a tight block
                    </p>
                </div><!-- block tight ends-->

                <div class='block--bleed tb__green'>
                    <p>
                        I am a block
                    </p>
                </div><!-- block bleed_ ends-->

                <div class='block--bleed_padding tb__green'>
                    <p>
                        I am a block
                    </p>
                </div><!-- block bleed_padding ends-->

            </div><!--  hello world block ends -->
        </div><!--layout-generic-block ends-->
        <hr class='mx'>

        <!-- /****************************************  Section blocks  *******************************/ -->
        
        <div class='section--xl' id='layout-section-block' >
            <h2 >
                Section blocks
            </h2>
            <p>
                A handy little class to control the top margins of grouped elements 
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'> 
                <h4 class='tiny caps text_muted'>
                    code
                </h4>
                <pre>
<code class="language-markup">
    &lt;div class='section--xxs'&gt;
        &lt;div class='block--xxs'&gt;
            ...
        &lt;/div&gt;
        &lt;div class='block--xxs'&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__primary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                
                <div class='section--xxs'>
                    <div class='block--xxs tb__green '>
                        <p>
                            Block with a section--xxs wrapper
                        </p>
                    </div><!-- block xxs ends-->
                </div>
                <div class='section--xs'>
                    <div class='block--xxs tb__pink '>
                        <p>
                            Block with a section--xs wrapper
                        </p>
                    </div><!-- block xxs ends-->
                </div>
                <div class='section'>
                    <div class='block--xxs tb__blue '>
                        <p>
                            Block with a section wrapper
                        </p>
                    </div><!-- block xxs ends-->
                </div>
                <div class='section--xl'>
                    <div class='block--xxs tb__green '>
                        <p>
                            Block with a section--xl wrapper
                        </p>
                    </div><!-- block xxs ends-->
                </div>
                 <div class='section--xxl'>
                    <div class='block--xxxs tb__pink '>
                        <p>
                            Block with a section--xxl wrapper
                        </p>
                    </div><!-- block xxs ends-->
                </div>
                <div class='section--xxxl'>
                    <div class='block--xxxs tb__blue '>
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
            <h2  class='h3'>
                Media blocks
            </h2>
            <p>
                Float an image to the left, with a clearfixed block of content to the right.
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
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
                Icon blocks
            </h2>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
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
                Arrows
            </h2>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <div class='arrow--left xm block--xxs tb__blue'>
                    <p> ... </p>
                    <i class='arrow arrow-top'></i>
                </div>

                <div class='arrow--right xm block--xxs tb__blue'>
                    <p> ... </p>
                    <i class='arrow arrow-top '></i>
                </div>

                <div class='arrow--center xm block--xxs tb__blue'>
                    <p> ... </p>
                    <i class='arrow arrow-bottom '></i>
                </div>

                <div class='arrow--side xm block--xxs tb__blue'>
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
                Inline Grid
            </h2>
            <p>
                Sets the child elements to take up full justified width of the parent.
            </p>
            <!--  code block ends -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    code
                </h4>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__primary'>  
                <div class='grid'>
                    <div class=' testbox-400-100 g--1-1 tb__pink '>
                        &nbsp;
                    </div>
                </div>

                <br />

                <div class='grid'>
                    <div class='testbox-400-100 tb__pink' >
                        &nbsp;
                    </div>
                    <div class='testbox-400-100 tb__pink'>
                        &nbsp;
                    </div>
                </div>

                <br />

                <div class='grid'>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                </div>

                <br />

                <div class='grid'>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                </div>

                <br />

                <p>
                    Vertical align these grid items in the middle!
                </p>

                <div class='grid grid--middle'>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                    <div class=' g--1-4 testbox-100-100 tb__pink'>
                        &nbsp;
                    </div>
                </div>   
            </div><!--  hello world block ends -->
        </div><!-- layout-inline-grid ends -->
        <hr class='mx'>
        <!-- /****************************************  Append vs Prepend  *******************************/ -->

        <div class='section--xl' id='layout-append'>
            <h2  class='h3'>
                Prepend vs Append
            </h2>
            <p>
                Place something before or after an element.
            </p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
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
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                
                <p class='prepend' data-prepend='email:'>&nbsp;email@gmail.com</p>
            
                <p class='append' data-append='is my email'>email@gmail.com&nbsp;</p>
            
            </div><!--  hello world block ends -->
        </div><!-- layout-append ends-->
        <hr class='mx'>
        <!-- /****************************************  Overflow helper ends  *******************************/ -->

        <div class='section--xl' id='layout-append'>
            <h2  class='h3'>
                Overflow 
            </h2>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
        code here
    </code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
            
            </div><!--  hello world block ends -->
        </div><!-- layout-append ends-->
    </div><!--content-padding-->
</div><!-- content ends-->
<?php 
    include 'footer.php'; 
?>