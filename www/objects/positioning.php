<?php 
    $page = 'positioning';
    include '../header.php';  
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-positioning' alt='Fred the fed' src='/assets/images/fred-side.png'/>


    <div class='block-l tp-block ml-l' >  

        <h2 class='heading heading--keyline'>
           Positioning - Absolute, Floating and Clearfixing
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
        <div class='block--stacked block-s ts-block'> 
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='grid'>
                <div class='ts-block relative testbox-100-100' >
                    <img class='absolute specific-bird' src='/assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='ts-block relative testbox-100-100' >
                    <img class='absolute--top-right' src='/assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='ts-block relative testbox-100-100' >
                    <img class='absolute--top-left' src='/assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='ts-block relative testbox-100-100' >
                    <img class='absolute--bottom-right' src='/assets/images/green-bird.jpg' alt='i am an image'/>
                </div>
                <div class='ts-block relative testbox-100-100' >
                    <img class='absolute--bottom-left' src='/assets/images/green-bird.jpg' alt='i am an image'/>
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
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <div class='mt-s clearfix'> 
                    <img class='left' src='/assets/images/yellow-bird.jpg' alt='i am an image'/>
                    <img class='right' src='/assets/images/blue-bird.jpg' alt='i am an image'/>    
                </div>
            </div><!--  hello world block ends -->
        </div>
    </div>
</div>
<?php 
    include '../footer.php'; 
?>