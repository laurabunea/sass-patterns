<?php 
    include 'header.php'; 
?>

<div class='relative mb-l col-8-10 grid__item mt-xxxl ml-l' >
    
    <div class='block-l block-s--q-small pt-block' style='margin-left:25px'>
       
    
    <div class='heading heading--keyline'>
        <h1>
            Fred's Lego pieces
        </h1>
    </div>
    <p class='mt-m'>
        Handy reusable components ..
    </p>

    


    <!-- /****************************************  List styles  *******************************/ -->
    <hr class='mt-l'>
    <div class='mt-l' id='anchor13'>

        <h2 class='h3'>
            13. List styles
        </h2>

        <p>
            Notes
        </p>

        <div class=''>
            <h3 class='h4'>
                a) Un styled list
            </h3>

            <!-- code block ends -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
&lt;ul class='list--unstyled'&gt;
    &lt;li&gt; unstyled list item 1 &lt;/li&gt;
    &lt;li&gt; unstyled list item 2 &lt;/li&gt;
&lt;ul&gt;
</code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='list--unstyled '>
                    <li>
                        unstyled list item 1
                    </li>
                    <li>
                        unstyled list item 2
                    </li>
                </ul>
            </div><!-- hello world block ends -->
        </div>
        
        <div class='mt-l'>
            <h3 class='h4'>
                b) Styled list
            </h3>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class='language-markup'>
&lt;ul class='list-styled'&gt;
    &lt;li&gt; Styled list item 1 &lt;/li&gt;
    &lt;li&gt; Styled list item 2 &lt;/li&gt;
&lt;ul&gt;
</code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='h tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='list-styled'>
                    <li>
                        Styled list item 1
                    </li>
                    <li>
                        Styled list item 2
                    </li>
                </ul>
            </div><!-- hello world block ends -->
        </div>

        <!-- 3. Inline list -->
        <div class='mt-l'>
            <h3 class='h4'>c) Inline list</h3>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
            <pre>
<code class='language-markup'>
&lt;ul class='list--inline'&gt;
    &lt;li&gt; inline list item 1 &lt;/li&gt;
    &lt;li&gt; inline list item 2 &lt;/li&gt;
&lt;ul&gt;
</code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <ul class='list--inline '>
                    <li>
                        inline list item 1
                    </li>
                    <li>
                        inine list item 2
                    </li>
                </ul>
            </div><!-- hello world block ends -->
        </div>
    </div><!-- typo-lists ends -->

    <!-- /****************************************  Media blocks  *******************************/ -->

    <div class='mt-l' id='anchor14'>
        <h2 class='h3'>
            14. Media blocks
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
        <div class='block--stacked block-s st-block'>
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

    <!-- /****************************************  Radii  *******************************/ -->

    <div class='mt-l' id='anchor15'>
        <h2 class='h3'>
            15. Radii
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
&lt;div class='blue-block block-xs radius--xs'&gt;
    Check out my rounded corners
&lt;/div&gt;
&lt;div class='blue-block block-xs radius--s'&gt;
    Check out my rounded corners
&lt;/div&gt;
&lt;div class='blue-block block-xs radius--m'&gt;
    Check out my rounded corners
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='blue-block block-xs radius--xs'>
                Check out my corners
            </div>
            <div class='blue-block block-xs radius--s'>
                Check out my corners
            </div>
            <div class='blue-block block-xs radius--m'>
                Check out my corners
            </div>
        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    
    <hr class='mt-l'>
    
    <!-- /****************************************  Spacing *******************************/ -->
    
    <div class='mt-l' id='anchor16' >
        <h2 class='h3'>
            16. Spacing Helpers
        </h2>
        <p>
            Notes here
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
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
.mt-        = margin-top
.mb-       = margin-bottom
.mr-       = margin-right
.ml-       = margin-left

//Padding
.p--        = padding-top
.pb-       = padding-bottom
.pl-       = padding-left
.pr-       = padding-right

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
.mr-xxxs

/* This class would have a large left padding */
.pl-l

/* Margin right SCSS code: */
.mr-0     { margin-right:$bs--0; }
.mr-xxxs  { margin-right:$bs--xxxs;}
.mr-xxs   { margin-right:$bs--xxs; }
.mr-xs    { margin-right:$bs--xs;}
.mr-s     { margin-right:$bs--s;}
.mr-m     { margin-right:$bs--m;}
.mr-l     { margin-right:$bs--l;}
.mr-xl    { margin-right:$bs--xl;}
.mr-xxl   { margin-right:$bs--xxl;}
.mr-xxxl  { margin-right:$bs--xxxl;}
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class='mr-0 block-xs green-block '>
                <p>
                    block-xs with 0 margin right (mr-0)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-xxxs block-xs green-block '>
                <p>
                    block-xs with xxxs margin right (mr-xxxs)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-xxs block-xs green-block '>
                <p>
                    block-xs with xxs margin right (mr-xxs)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-xs block-xs green-block '>
                <p>
                    block-xs with xs margin right (mr-xs)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-s block-xs green-block '>
                <p>
                    block-xs with with s margin right (mr-s)
                </p>
            </div><!-- block xs ends-->

            <div class='mr-m block-xs green-block '>
                <p>
                    block-xs with m margin right (mr-m)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-l block-xs green-block '>
                <p>
                    block-xs with l margin right (mr-l)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-xl block-xs green-block '>
                <p>
                    block-xs with xl margin right (mr-xl)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-xxl block-xs green-block '>
                <p>
                    block-xs with xxl margin right (mr-xxl)
                </p>
            </div><!-- block xs ends-->
            <div class='mr-xxxl block-xs green-block '>
                <p>
                    block-xs with xxxl margin right (mr-xxxl)
                </p>
            </div><!-- block xs ends-->
        </div><!--  hello world block ends -->

        <h3 class='h4'>
            b) Responsive spacing elements
        </h3>

        <div class=' block-s tt-block'> 
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
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class='mr-xlarge--xxxl mr-mediumt-l mr-s mr-small--0 block-xs green-block '>
                <p>
                
                    <strong>mobile:</strong> mr-small--s<br />
                    <strong>skinny:</strong> mr-mediumt-l<br />
                    <strong>desktop:</strong> mr-s<br />
                    <strong>wide:</strong> mr-xlarge--xxxl
                </p>
            </div><!-- block xs ends-->
        </div>
    </div><!--layout-generic-block ends-->

    <hr class='mt-l'>

    <!-- /****************************************  Typography  *******************************/ -->

    <div class='mt-l' id='anchor17'>
        <h2 class='h3'>
            17. Typography
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

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    
    <hr class='mt-l'>

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
        <div class='block--stacked block-s st-block'>
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
        <div class='block--stacked block-s st-block'>
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
    <!-- /****************************************  Positioning  *******************************/ -->
    <div class='mt-l' id='layoutAnchor2'>
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
        <div class=' block-s tt-block'>
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
        <div class='block--stacked block-s st-block'> 
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='grid'>
                <div class='st-block relative testbox-100-100' >
                    <img class='absolute specific-bird' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block relative testbox-100-100' >
                    <img class='absolute--top-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block relative testbox-100-100' >
                    <img class='absolute--top-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block relative testbox-100-100' >
                    <img class='absolute--bottom-right' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='st-block relative testbox-100-100' >
                    <img class='absolute--bottom-left' src='assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
            </div><!--grid ends-->
        </div><!--  hello world block ends -->
        
        <!-- /********  Floating elements *************/ -->
        
        <div class='mt-l'>
            <h3 class='h4 '>
                b) Floating elements and clearfix
            </h3>
            <p>
                With CSS float, an element can be pushed to the left or right, allowing other elements to wrap around it.
            </p>
            <p>
                What clearfix does is it forces content after the floats or the container containing the floats to render below it.
            </p>
            <!--  code block starts -->
            <div class='block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
<code class="language-markup">
&lt;div class='clearfix'&gt;
    &lt;img class='left' src='assets/images/yellow-bird.png' /&gt;
    &lt;img class='right' src='assets/images/blue-bird.png' /&gt;
&lt;/div&gt;
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <div class='mt-s clearfix'> 
                    <img class='left' src='assets/images/yellow-bird.jpg' alt='i am an image'/>
                    <img class='right' src='assets/images/blue-bird.jpg' alt='i am an image'/>    
                </div>
            </div><!--  hello world block ends -->
        </div>
        
    </div><!-- layout-positioning ends-->

    <hr class='mt-l'>

     <!-- /****************************************  Append vs Prepend  *******************************/ -->

    <div class='mt-l' id='core3'>
        <h2 class='h3'>
            03. Prepend vs Append
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
        <div class='block--stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            
            <p class='prepend' data-prepend='email:'>&nbsp;email@gmail.com</p>
        
            <p class='append' data-append='is my email'>email@gmail.com&nbsp;</p>
        
        </div><!--  hello world block ends -->
    </div><!-- layout-append ends-->
    <hr class='mt-l'/>
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
   </div>

</div>
<?php 
    include 'footer.php'; 
?>