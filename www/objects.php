<?php 
    include 'header.php'; 
?>

<div class='block-l block-s--q-small pt-block relative mb-l'>
    <img class='absolute fred' alt='Fred the fed' src='assets/images/fred-side.png'  />
    
    <div class='heading heading--keyline'>
        <h1>
            Objects
            <!--<span class='heading__subheading tiny text-muted'> 
                aka Fred's Lego
            </span>-->
        </h1>
    </div>
    <p class='mt-m'>
        Notes to follow 
    </p>

    <ul class=' list-styled--decimal mt-m'>   
        <li>
            <a href='#anchor1'>
                Arrows
            </a>
        </li>
        <li>
            <a href='#anchor2'>
                Badge
            </a>
        </li>
        <li>
            <a href='#anchor3'>
                Blocks
            </a>
        </li>
        <li>
            <a href='#anchor4'>
                Breadcrumbs
            </a>
        </li>
        <li>
            <a href='#anchor5'>
                Buttons
            </a>
        </li>
        <li>
            <a href='#anchor6'>
                Caret
            </a>
        </li>
        <li>
            <a href='#anchor7'>
                Close
            </a>
        </li>
      
        <li>
            <a href='#anchor8'>
                Forms
            </a>
        </li>
        <li>
            <a href='#anchor9'>
                Grid
            </a>
        </li>
        <li>
            <a href='#anchor10'>
                Headings
            </a>
        </li>
        <li>
            <a href='#anchor11'>
                Icon-text
            </a>
        </li>
        <li>
            <a href='#anchor12'>
                Images
            </a>
        </li>
        <li>
            <a href='#anchor13'>
                Lists
            </a>
        </li>
        <li>
            <a href='#anchor14'>
                Media blocks
            </a>
        </li>
        <li>
            <a href='#anchor15'>
                Radii
            </a>
        </li>
        <li>
            <a href='#anchor16'>
                Spacing
            </a>
        </li>
        <li>
            <a href='#anchor17'>
                Typography
            </a>
        </li>
    </ul>


    <hr class='mt-l'/>

    <!-- /******************************* Arrows **************************** / -->
    
    <div class='mt-l' id='anchor1'>

        <h2 class='h3'>
            01. Arrows
        </h2>

        <p> 
            Sometimes you just need an arrow :) and luckily it's really easy to do. Just apply a modifier classes to the parent. 
        </p>    
        <p>
            For instance the first example below will put an arrow in the top left corner of the containing div
        </p>

        <!-- code block starts -->
        <div class=' block-s tt-block'>
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
        </div><!-- code block ends -->

        <!-- hello world block starts -->
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
        </div><!-- hello world block ends -->

    </div><!-- arrows ends -->

    <hr class='mt-l'/>

    <!-- /****************************************  Badges  *******************************/ -->
    <div class='mt-l' id='anchor2'>
        <h2 class='h3'>
            02. Badges
        </h2>
        <p>
            Easily highlight new or unread items by adding a class of 'badge' to a link.
        </p>
        <!--  code block starts -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;a href='#'&gt; Inbox &lt;span class='badge'&gt;42&lt;/span&gt;&lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class=' block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p><a class='xm' href='#'>Inbox <span class='pt-badge badge tiny'>42</span></a></p>


        </div><!-- hello world block ends -->
    </div><!-- badges ends-->
    
    <hr class='mt-l'/>

    <!-- /****************************************  Blocks  *******************************/ -->
    <div class='mt-l' id='anchor3' >
        <h2 class='h3'>
            03. Blocks
        </h2>

        <p>
            Use the block object to give a block element (e.g a div) an inset effect. 
            It's pretty easy to use, the prefix is 'block' and the suffix is the size of the padding you want to use. 
            This ranges from (-xxxs to -xxxl).
        </p>
        
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                Code
            </h4>
            <pre>
<code class="language-markup">
/*  Example 1  */
&lt;div class='block-xxxs'&gt;
    block-xxxs
&lt;/div&gt;

/*  Example 2  */
&lt;div class='block-xxs'&gt;
    block-xxs
&lt;/div&gt;

/*  Example 3  */
&lt;div class='block-xs'&gt;
    block-xs
&lt;/div&gt;

and so on.....
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class=' block-xxxs green-block '>
                <p>
                    block-xxxs
                </p>
            </div><!-- block xs ends-->
            <div class=' block-xxs green-block '>
                <p>
                    block-xxs
                </p>
            </div><!-- block xs ends-->
            <div class=' block-xs green-block '>
                <p>
                    block-xs
                </p>
            </div><!-- block xs ends-->

            <div class=' block-s green-block'>
                <p>
                    block-s
                </p>
            </div><!-- block ends-->

            <div class='block-m green-block'>
                <p>
                    block-m
                </p>
            </div><!-- block ends-->

            <div class='block-l green-block '>
                <p>
                    block-l
                </p>
            </div><!-- block xl ends-->

            <div class='block-xl green-block '>
                <p>
                    block-xl
                </p>
            </div><!-- block xl ends-->

            <div class='block-xxl green-block '>
                <p>
                    block-xxl
                </p>
            </div><!-- block xl ends-->

            <div class='block-xxxl green-block '>
                <p>
                    block-xxxl
                </p>
            </div><!-- block xl ends-->

        </div><!--  hello world block ends -->
    
        <h3 class='h4 mt-l'>
             b) Responsive blocks
        </h4>

        <p>
            To adjust the block inset on different breakpoints just add an extra suffix onto the block classes mentioned above.
        </p>
        <p>
            The extra suffix relates to the breakpoints you want to target.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                scss 
            </h4>
            <pre>
<code class="language-css">
// Extra suffix
// -------------------------------------------------- 
+ --q-small     // Portrait regular mobiles//480px
+ --q-medium    // Tablet 768px
+ --q-large     // Desktop 960px
+ --q-xlarge    // Wide 1200px


// Block examples
// --------------------------------------------------

//xs block default ( displays on all breakpoints )
.block-m

//extra small block on mobile
.block-xs--q-small

//small block on a tablet 
.block-s--q-medium  

//large block on a wide screen 
.block-l--q-xlarge 


// Code example
// -------------------------------------------------- 
&lt;div class='block-m block-xs--q-small block-s--q-medium block-l--q-xlarge green-block '&gt;
    &lt;p&gt;
        &lt;strong>desktop:&lt;/strong&gt;    block-m
        &lt;strong>mobile:&lt;/strong&gt;     block-xs--q-small
        &lt;strong>tablet:&lt;/strong&gt;     block-s--q-medium
        &lt;strong>wide:&lt;/strong&gt;       block-l--q-xlarge 
    &lt;/p&gt;
&lt;/div&gt;<!-- block xs ends-->

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <p>Example one</p>
            <div class='block-m block-xs--q-small block-s--q-medium block-l--q-xlarge green-block'>
                <p>
                    <strong>desktop:</strong>    block-m<br />
                    <strong>mobile:</strong>     block-xs--q-small<br />
                    <strong>skinny:</strong>     block-s--q-medium<br />
                    <strong>wide:</strong>       block-l--q-xlarge 
                </p>
            </div>
            
        </div><!--  hello world block ends -->
    </div><!--Building blocks section ends-->

    <hr class='mt-l' />

    <!-- /****************************************  Breadcrumbs *******************************/ -->
    
    <div class='mt-l' id='anchor4'>
        <h2 class='h3'>
           04. Breadcrumbs
        </h2>
        
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;ol class='breadcrumbs'&gt;
    &lt;li&gt;&lt;a href='#'&gt;Parent&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href='#'&gt;Child&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;Page I'm on &lt;/li&gt;
&lt;/ol&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <ol class='breadcrumbs pt-breadrumbs block-xxs xm'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Page</a></li>
                <li class='#'>Sub page</li>
            </ol>
        </div><!--  hello world block ends -->
    </div><!-- components-bread-crumbs ends-->
    
    <hr class='mt-l' />

    <!-- /****************************************  Buttons *******************************/ -->
    
    <div class='mt-l' id='anchor5'>
        <h2 class='h3'>
           05. Buttons
        </h2>
        <p>
            As buttons is pretty big we will show this some where else...
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->
    
    <hr class='mt-l'>
    <!-- /****************************************  Core *******************************/ -->
    
    <div class='mt-l' id='anchor6'>
        <h2 class='h3'>
           06. Carrets
        </h2>
        <p>
            Handy litle drop down arrows
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
    &lt;span class='caret'&gt;&lt;/span&gt;

    &lt;span class='caret caret--rev'&gt;&lt;/span&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p>
                Caret: <span class='caret'></span>
            </p>
            
            <p>
                Reversed Caret: <span class='caret caret--rev'></span>
            </p>
            
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->
    
    <hr class='mt-l'>
    <!-- /****************************************  Close *******************************/ -->
    
    <div class='mt-l' id='anchor7'>
        <h2 class='h3'>
           07. Close
        </h2>
        <p>
            A handy close icon with a sweet hover.
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;span class='close'&gt;&lt;/span&gt;

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
             <p>
                Close icon: <span class='close'></span>
            </p>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->


    <!-- /****************************************  Forms *******************************/ -->
    
    <div class='mt-l' id='anchor8'>
        <h2 class='h3'>
           08. Forms
        </h2>
        <p>
            ...
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->
    
    <!-- /**************************************** Grid  *******************************/ -->

    <div class='mt-l' id='anchor9'>
        <h2>
            9. Grids
        </h2>
        <h3 class='h4'>
            a) Inline Grid
        </h3>
        <p>
            Sets the child elements to take up full justified width of the parent. The prefix class is 'col' (although you can change this in the variables file) and the suffix is the fraction.
        </p>
        <!--  code block ends -->
        <div class='block-s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
Grid columns
------------------------------------------
.col { width: 100%; }
.col-1-3 { width: 33.33333%; }
.col-2-3 { width: 66.66667%; }
.col-1-4 { width: 25%; }
.col-2-4 { width: 50%; }
.col-3-4 { width: 75%; }
.col-1-5 { width: 20%; }
.col-2-5 { width: 40%; }
.col-3-5 { width: 60%; }
.col-4-5 { width: 80%; }
.col-1-10 { width: 10%; }
.col-2-10 { width: 20%; }
.col-3-10 { width: 30%; }
.col-4-10 { width: 40%; }
.col-5-10 { width: 50%; }
.col-6-10 { width: 60%; }
.col-7-10 { width: 70%; }
.col-8-10 { width: 80%; }
.col-9-10 {width: 90%; }

&lt;p&gt;Example one:&lt;/p&gt; 
&lt;div class='grid'&gt;
    &lt;div class='grid__item col'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                full width
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;Example two:&lt;/p&gt;
&lt;div class='grid'&gt;
    &lt;div class='grid__item col-2-4'&gt;
        &lt;div class='blue-block block-s'&gt;
            &lt;p&gt;
                50%
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class='grid__item col-2-4 '&gt;
        &lt;div class='blue-block block-s'&gt;
            &lt;p&gt;
                50%
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
            </pre>
        </div>
        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'> 
            <p>Example one:</p> 
            <div class='grid'>
                <div class='grid__item col'>
                   <div class='pink-block block-s'>
                        <p>
                            full width
                        </p>
                    </div>
                </div>
            </div>
            <p>Example two:</p>
            <div class='grid'>
                <div class='grid__item col-2-4' >
                    <div class='blue-block block-s'>
                        <p>
                            50%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-2-4'>
                    <div class='blue-block block-s'>
                        <p>
                            50%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example three:</p>
            <div class='grid'>
                <div class='grid__item col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 '>
                    <div class='green-block block-s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example four:</p>
            <div class='grid'>
                <div class='grid__item col-6-10'>
                    <div class='st-block block-s'>
                        <p>
                            60%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-4-10'>
                    <div class='st-block block-s'>
                        <p>
                            40%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example five:</p>
            <div class='grid'>
                <div class='grid__item col-8-10'>
                    <div class='tt-block block-s'>
                        <p>
                            80%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-2-10'>
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
                <div class='col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                    <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                   <div class='green-block block-s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>   
        </div><!--  hello world block ends -->
    
        <h3 class='h4 mt-l'>
            Inline Grid - Responsive
        </h3>
        <p>
            This works exactly the same as what's mentioned above. 
            You just need to add an extra suffix onto the classes which relates to the breakpoint you want to target.
        </p>
        <!--  code block starts -->
        <div class=' block-s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                Media query suffix: 
            </h4>
            <pre>
<code class='language-css'>
// Media query prefixes
// -------------------------------------------------- 

$breakpoint-none:"";
$breakpoint-xxlarge-name: "xxlarge";
$breakpoint-xlarge-name: "xlarge";
$breakpoint-large-name: "large";
$breakpoint-medium-name: "medium";
$breakpoint-small-name: "small";
$breakpoint-classname-prefix: "--q-";
</code>
<code class='language-markup'>
&lt;div class='grid'&gt;
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
           &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block-s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div&gt;
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
          
            
            <div class='grid'>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1<!--<strong>Desktop:</strong> 1/4 <br />
                            <strong>Skinny:</strong> 1/2 <br />
                           <strong>mobile:</strong> full width<br />
                           <strong>wide:</strong> 60/40-->
                       </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block-s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->

        <h3 class='h4'>
            b) Float Grid
        </h3>
    </div><!--Inline grid section starts-->
    
    <hr class='mt-l' />
    <!-- /****************************************  Headings *******************************/ -->
    
    <div class='mt-l' id='anchor10'>
        <h2 class='h3'>
           10. Headings
        </h2>
        <p>
            Notes
        </p>
        <!--  code block starts -->
        <div class='block-s mt-m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;div class='heading heading--keyline'&gt;
    &lt;h1&gt;
        Heading
       &lt;span class='heading__subheading tiny text-muted'&gt;
            Sub heading
        &lt;/span&gt;
    &lt;/h1&gt;
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <div class='heading heading--keyline mt-m'>
                <h1 >
                    Heading
                    <span class='heading__subheading tiny text-muted'> 
                        Sub heading
                    </span>
                </h1>
            </div>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->

    <hr class='mt-l'>
    <!-- /****************************************  Icon blocks  *******************************/ -->
    
    <div class='mt-l' id='anchor11'>
        <h2  class='h3'>
           11. Icons with text
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

    <!-- /****************************************  Responsive images  *******************************/ -->
    <div class='mt-l' id='anchor12' >
        <h2 class='h3'>
            12. Responsive images
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
                <div class='grid__item col-1-3' >
                    <img src='assets/images/fred.png' alt='' class='img--responsive' />
                </div>
                <div class='grid__item col-2-3'>
                    <div class='arrow--side blue-block block-m'>
                        <p>Resize the browser so you can see me shrink </p>
                        <i class='arrow arrow-left'></i>
                    </div>
                </div>
            </div>
        </div><!--  hello world block ends -->
    </div><!--Responsive image section starts-->

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
            <div class='block-stacked block-s st-block'>
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
            <div class='block-stacked block-s st-block'>
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
            <div class='block-stacked block-s st-block'>
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
        <div class='block-stacked block-s st-block'>
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
        <div class='block-stacked block-s st-block'>
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
        <div class='block-stacked block-s st-block'>
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
        <div class='block-stacked block-s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- layout-media-block ends-->
    
    <hr class='mt-l'>
   

</div>
<?php 
    include 'footer.php'; 
?>