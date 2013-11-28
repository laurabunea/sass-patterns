




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