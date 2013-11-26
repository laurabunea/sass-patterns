<?php 
    include 'header.php'; 
?>

<div class='block--l block-small--s pt-block relative mb--l'>
    <img class='absolute fred' alt='Fred the fed' src='assets/images/fred-side.png'  />
    
    <div class='page-header pt-page-header'>
        <h1>
            Objects
        </h1>
    </div>
    <ul class='list-styled--decimal m--m'>   
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
                Core
            </a>
        </li>
        <li>
            <a href='#anchor9'>
                Forms
            </a>
        </li>
        <li>
            <a href='#anchor10'>
                Grid
            </a>
        </li>
        <li>
            <a href='#anchor11'>
                Headings
            </a>
        </li>
        <li>
            <a href='#anchor12'>
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
            <a href='#anchor13'>
                Media blocks
            </a>
        </li>
        <li>
            <a href='#anchor13'>
                Radii
            </a>
        </li>
        <li>
            <a href='#anchor13'>
                Spacing
            </a>
        </li>
        <li>
            <a href='#anchor13'>
                Typography
            </a>
        </li>
    </ul>
    <!-- /*********************** Arrows ********************/ -->
    
    <div class='m--l' id='anchor1'>

        <h2 class='h3'>
            01. Arrows
        </h2>

        <p> 
            Notes
        </p>

        <!-- code block starts -->
        <div class=' block--s tt-block'>
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
        </div><!-- hello world block ends -->

    </div><!-- arrows ends -->

    <hr class='m--m'/>

    <!-- /****************************************  Badges  *******************************/ -->
    <div class='m--l' id='anchor2'>
        <h2 class='h3'>
            02. Badges
        </h2>
        <!--  code block starts -->
        <div class='block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;a href='#'&gt; Inbox &lt;span class='pt-badge badge tiny'&gt;42&lt;/span&gt;&lt;/a&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class=' block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <p><a class='xm' href='#'>Inbox <span class='pt-badge badge tiny'>42</span></a></p>


        </div><!-- hello world block ends -->
    </div><!-- badges ends-->
    
    <hr class='m--m'/>

    <!-- /****************************************  Blocks  *******************************/ -->
    <div class='m--l' id='layoutAnchor3' >
        <h2 class='h3'>
            03. Blocks
        </h2>

        <h3 class='h4'>
            How blocks work
        </h3>
        <p>
            The prefix is 'block' and the suffix is the size of the padding you want to use. This ranges from (-xxxs to -xxxl).
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                Code
            </h4>
            <pre>
<code class="language-markup">
/*  Example 1  */
&lt;div class='block-xxxs'&gt;
    block-xs
&lt;/div&gt;

/*  Example 2  */
&lt;div class='block-xxs'&gt;
    block-xs
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
             b) Responsive blocks
        </h4>

        <p>
            These building blocks work in exactly the same way as the ones above</a>. 
            The only difference is that they have an extra suffix on the end ..
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

// Media queries suffixs 
// -------------------------------------------------- 
$breakpoint-none:"";
$breakpoint-small-classname: "--q-small";
$breakpoint-medium-classname: "--q-medium";
$breakpoint-large-classname: "--q-large";
$breakpoint-xlarge-classname: "--q-xlarge";

// Class examples
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
&lt;div class='block--m block-xs--q-small block-s--q-medium block-l--q-xlarge green-block '&gt;
    &lt;p&gt;
        &lt;strong>desktop:&lt;/strong&gt;    block--m
        &lt;strong>mobile:&lt;/strong&gt;     block-xs--q-small
        &lt;strong>tablet:&lt;/strong&gt;     block-s--q-medium
        &lt;strong>wide:&lt;/strong&gt;       block-l--q-xlarge 
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
            <div class='block--m block-xs--q-small block-s--q-medium block-l--q-xlarge green-block'>
                <p>
                    <strong>desktop:</strong>    block--m<br />
                    <strong>mobile:</strong>     block-xs--q-small<br />
                    <strong>skinny:</strong>     block-s--q-medium<br />
                    <strong>wide:</strong>       block-l--q-xlarge 
                </p>
            </div>
            
        </div><!--  hello world block ends -->
    </div><!--Building blocks section ends-->

    <hr class='m--l' />

    <!-- /****************************************  Breadcrumbs *******************************/ -->
    
    <div class='m--l' id='anchor4'>
        <h2 class='h3'>
           04. Breadcrumbs
        </h2>
        
        <!--  code block starts -->
        <div class='block--s m--m tt-block'>
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
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
            <ol class='breadcrumbs pt-breadrumbs block--xxs xm'>
                <li><a href='#'>Home</a></li>
                <li><a href='#'>Page</a></li>
                <li class='#'>Sub page</li>
            </ol>
        </div><!--  hello world block ends -->
    </div><!-- components-bread-crumbs ends-->
    
    <hr class='m--l' />

    <!-- /****************************************  Buttons *******************************/ -->
    
    <div class='m--l' id='anchor5'>
        <h2 class='h3'>
           05. Buttons
        </h2>
        <p>
            As buttons is pretty big we will show this some where else...
        </p>
        <!--  code block starts -->
        <div class='block--s m--m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->

    <!-- /****************************************  Core *******************************/ -->
    
    <div class='m--l' id='anchor6'>
        <h2 class='h3'>
           06. Carrets
        </h2>
        <p>
           ...
        </p>
        <!--  code block starts -->
        <div class='block--s m--m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->

    <!-- /****************************************  Close *******************************/ -->
    
    <div class='m--l' id='anchor7'>
        <h2 class='h3'>
           07. Close
        </h2>
        <p>
            ...
        </p>
        <!--  code block starts -->
        <div class='block--s m--m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->

    <!-- /****************************************  Core *******************************/ -->
    
    <div class='m--l' id='anchor8'>
        <h2 class='h3'>
           08. Core
        </h2>
        <p>
            ...
        </p>
        <!--  code block starts -->
        <div class='block--s m--m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->

    <!-- /****************************************  Forms *******************************/ -->
    
    <div class='m--l' id='anchor9'>
        <h2 class='h3'>
           09. Forms
        </h2>
        <p>
            ...
        </p>
        <!--  code block starts -->
        <div class='block--s m--m tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4>
        </div><!--  hello world block ends -->
    </div><!-- Buttons ends-->
    
    <!-- /**************************************** Grid  *******************************/ -->

    <div class='m--l' id='layoutAnchor10'>
        <h2>
            10. Grids
        </h2>
        <h3 class='h4'>
            a) Inline Grid
        </h3>
        <p>
            Sets the child elements to take up full justified width of the parent. The prefix class is 'column' and the suffix is the percentage.
        </p>
        <!--  code block ends -->
        <div class='block--s tt-block'>
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class='language-markup'>
&lt;p&gt;Example one:&lt;/p&gt; 
&lt;div class='grid'&gt;
    &lt;div class='grid__item col'&gt;
       &lt;div class='pink-block block--s'&gt;
            &lt;p&gt;
                full width
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;Example two:&lt;/p&gt;
&lt;div class='grid'&gt;
    &lt;div class='grid__item col-2-4'&gt;
        &lt;div class='blue-block block--s'&gt;
            &lt;p&gt;
                50%
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class='grid__item col-2-4 '&gt;
        &lt;div class='blue-block block--s'&gt;
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
        <div class='block--stacked block--s st-block'> 
            <p>Example one:</p> 
            <div class='grid'>
                <div class='grid__item col'>
                   <div class='pink-block block--s'>
                        <p>
                            full width
                        </p>
                    </div>
                </div>
            </div>
            <p>Example two:</p>
            <div class='grid'>
                <div class='grid__item col-2-4' >
                    <div class='blue-block block--s'>
                        <p>
                            50%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-2-4'>
                    <div class='blue-block block--s'>
                        <p>
                            50%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example three:</p>
            <div class='grid'>
                <div class='grid__item col-1-4'>
                    <div class='green-block block--s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4'>
                    <div class='green-block block--s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 '>
                    <div class='green-block block--s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 '>
                    <div class='green-block block--s'>
                        <p>
                            25%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example four:</p>
            <div class='grid'>
                <div class='grid__item col-6-10'>
                    <div class='st-block block--s'>
                        <p>
                            60%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-4-10'>
                    <div class='st-block block--s'>
                        <p>
                            40%
                        </p>
                    </div>
                </div>
            </div>
            <p>Example five:</p>
            <div class='grid'>
                <div class='grid__item col-8-10'>
                    <div class='tt-block block--s'>
                        <p>
                            80%
                        </p>
                    </div>
                </div>
                <div class='grid__item col-2-10'>
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
                <div class='col-1-4'>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                    <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
                <div class='col-1-4'>
                   <div class='green-block block--s'>
                        <p>
                            1/4
                        </p>
                    </div>
                </div>
            </div>   
        </div><!--  hello world block ends -->
    
        <h3 class='h4 m--l'>
            Inline Grid - Responsive
        </h3>
        <p>
         This works exactly the same as what's mentioned above the only thing that changes is a media query suffix gets added.
        </p>
        <!--  code block starts -->
        <div class=' block--s tt-block'> 
            <h4 class='tiny uppercase text-muted'>
                Media query suffix: 
            </h4>
            <pre>
<code class="language-html">
// Media query prefixes
// -------------------------------------------------- 

$breakpoint-none:"";
$breakpoint-xxlarge-name: "xxlarge";
$breakpoint-xlarge-name: "xlarge";
$breakpoint-large-name: "large";
$breakpoint-medium-name: "medium";
$breakpoint-small-name: "small";
$breakpoint-classname-prefix: "--q-";

&lt;div class='grid'&gt;
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block--s'&gt;
            &lt;p&gt;
                1
           &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block--s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block--s'&gt;
            &lt;p&gt;
                1
            &lt;/p&gt;
        &lt;/div>
    &lt;/div>
    &lt;div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'&gt;
       &lt;div class='pink-block block--s'&gt;
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
        <div class='block--stacked block--s st-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
          
            
            <div class='grid'>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block--s'>
                        <p>
                            1<!--<strong>Desktop:</strong> 1/4 <br />
                            <strong>Skinny:</strong> 1/2 <br />
                           <strong>mobile:</strong> full width<br />
                           <strong>wide:</strong> 60/40-->
                       </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block--s'>
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class='grid__item col-1-4 col-2-4--q-medium col--q-small col-6-10--q-xlarge'>
                   <div class='pink-block block--s'>
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

    <hr class='m--l'>



</div>
<?php 
    include 'footer.php'; 
?>