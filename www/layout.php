<?php 
    include 'header.php'; 
?>

<div class='block-l block-small--s mb-l pt-block relative'>
    
    <div class='page-header pt-page-header'>
        <h1>
            Layout
            <span class='tiny'>
                - Setting up
            </span>
        </h1>
    </div><!--page header ends -->

    <img src='assets/images/fred-top.png' alt='' class='absolute fred-layout' />

    <p class='mt-m mw--70'>
        Be consistent with vertical spacing. Avoid setting arbitrary margins on items. 
        Defer these to a variable, and use multiples of that variable to control your vertical spacing. 
        Our designs will often change right up til the end, so it's worth making stuff really easy to change.
    </p>

    <div class='page-header pt-page-header mt-l'>
        <h1>
            Layout
            <span class='tiny'>
                - Helper classes
            </span>
        </h1>
    </div><!--page header ends -->
    <div class='grid'>
        <div class='col-2-4'>
            <ul class='list-styled--decimal mt-m'>

                <li>
                    <a href='#layoutAnchor1'>
                        Inline Blocks
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
            </ul>
        </div>

        <div class='col-2-4'>
            <ul class='list-styled--decimal mt-m'>
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
        </div>
    </div>

    <!-- /****************************************  Inline Blocks  *******************************/ -->

    <div class='mt-xl' id='layoutAnchor1'>
        <h2 class='h3'>
            01. Inline block 
        </h2>
        <p>
            Displays an element as an inline-level block container. The inside of this block is formatted as block-level box, and the element itself is formatted as an inline-level box
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
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

    <hr class='mt-l' />

    <!-- /****************************************  Media blocks  *******************************/ -->

    <div class='mt-l' id='layoutAnchor5'>
        <h2 class='h3'>
            05. Media blocks
        </h2>
        <p>
            Float an image to the left, with a clearfixed block of content to the right.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'>
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
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='media'>
                <img src='assets/images/green-bird.jpg' class='media__image'>
                <div class='media__body'>
                    <p class='mt-0'>
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
    
    <hr class='mt-l'>
    <!-- /****************************************  Icon blocks  *******************************/ -->
    
    <div class='mt-l' id='layoutAnchor6'>
        <h2  class='h3'>
           06. Icons with text
        </h2>
        <p>
            Notes
        </p>

        <!--  code block starts -->
        <div class=' block-s tt-block'>
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
        <div class='block-stacked block-s st-block'>
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
    <hr class='mt-l'>

    <!-- /****************************************  Arrows  *******************************/ -->

    <div class='mt-l' id='layoutAnchor7'>
        <h2  class='h3'>
            07. Arrows
        </h2>

        <p>
            Notes
        </p>
        <!--  code block starts -->
        <div class='block-s tt-block'>
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
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='arrow--left mt-xm block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-top'></i>
            </div>

            <div class='arrow--right mt-xm block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-top '></i>
            </div>

            <div class='arrow--center mt-xm block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-bottom '></i>
            </div>

            <div class='arrow--side mt-xm block-xs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-left '></i>
            </div>

            <!--<div class='arrow xm arrow--side block-xxs blue-block'>
                <p> ... </p>
                <i class='arrow arrow-right'></i>
            </div>-->

        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    <hr class='mt-l'>
    <!-- /****************************************  Inline gird  *******************************/ -->

    <div class='mt-l' id='layoutAnchor8'>
        <h2>
            08. Inline Grid
        </h2>
        <p>
            Sets the child elements to take up full justified width of the parent.
        </p>
        <!--  code block ends -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>  
            <div class='grid'>
                <div class='grid__item g--1-1  '>
                   <div class='pink-block block-s'>
                        <p>
                            full width
                        </p>
                    </div>
                </div>
            </div>
            <p>Example one:</p>
            <div class='grid'>
                <div class='grid__item g--1-2' >
                    <div class='blue-block block-s'>
                        <p>
                            1/2
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-2 '>
                    <div class='blue-block block-s'>
                        <p>
                            1/2
                        </p>
                    </div>
                </div>
            </div>
            <p>Example two:</p>
            <div class='grid'>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>
            <p>Example three:</p>
            <div class='grid'>
                <div class='grid__item g--60'>
                    <div class='st-block block-s'>
                        <p>
                            60%
                        </p>
                    </div>
                </div>
                <div class='grid__item g--40'>
                    <div class='st-block block-s'>
                        <p>
                            40%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example four:</p>
            <div class='grid'>
                <div class='grid__item g--80 '>
                    <div class='tt-block block-s'>
                        <p>
                            80%
                        </p>
                    </div>
                </div>
                <div class='grid__item g--20'>
                    <div class='tt-block block-s'>
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
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class=' g--1-4 '>
                   <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>   
        </div><!--  hello world block ends -->
    
        <h3 class='h4 mt-l'>
            05. Inline Grid - Responsive
        </h3>
        <p>
          Notes
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item g--1-4 g-s--1-2 g-mt-1-1 g-w--60'>
                   <div class='pink-block block-s'>
                        <p>
                            1<!--<strong>Desktop:</strong> 1/4 <br />
                            <strong>Skinny:</strong> 1/2 <br />
                           <strong>mobile:</strong> full width<br />
                           <strong>wide:</strong> 60/40-->
                       </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-mt-1-1 g-w--40'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-mt-1-1 g-w--60'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item g--1-4 g-s--1-2 g-mt-1-1 g-w--40'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Inline grid section starts-->
    <hr class='mt-l'>
    <!-- /****************************************  Append vs Prepend  *******************************/ -->

    <div class='mt-l' id='layoutAnchor10'>
        <h2 class='h3'>
            09. Prepend vs Append
        </h2>
        <p>
            Place something before or after an element.
        </p>
        <!--  code block starts -->
        <div class='block-s tt-block'>
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
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <p class='prepend' data-prepend='email:'>&nbsp;email@gmail.com</p>
        
            <p class='append' data-append='is my email'>email@gmail.com&nbsp;</p>
        
        </div><!--  hello world block ends -->
    </div><!-- layout-append ends-->
   
    <hr class='mt-l' />

    <!--Responsive image section starts-->
    <div class='mt-l' id='responsiveAnchor4' >
        <h2 class='h3'>
            04. Responsive images
        </h2>
        <p>
            This applies max-width: 100%; and height: auto; to the image so that it scales nicely to 
            the parent element.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
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
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item g--1-2' >
                    <img src='assets/images/fred.png' alt='' class='img--responsive' />
                </div>
                <div class='grid__item g--1-2'>
                    <div class='arrow--side blue-block block-m'>
                        <p>Resize the browser so you can see me shrink </p>
                        <i class='arrow arrow-left'></i>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Responsive image section starts-->
    
    <hr class='mt-l' />

    <!--Hidden section starts-->
    <div class='mt-l' id='responsiveAnchor11' >
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
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block-s qt-block '>
                <p>
                    normal block always how this 
                </p>
            </div>

            <div class='block-s pink-block hidden-mobile'>
                <p>
                    hide this block on mobile 
                </p>
            </div>

            <div class='block-s green-block hidden-skinny'>
                <p>
                    hide this block on skinny
                </p>
            </div>

            <div class='block-s blue-block hidden-wide'>
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
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          <div class='block-s qt-block '>
                <p>
                    normal block always show this 
                </p>
            </div>

            <div class='block-s pink-block visible-mobile'>
                <p>
                    show this block on mobile
                </p>
            </div>

            <div class='block-s blue-block visible-skinny'>
                <p>
                    show this block on skinny
                </p>
            </div>

            <div class='block-s green-block visible-wide'>
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