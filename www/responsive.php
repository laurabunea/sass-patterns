<?php 
    include 'header.php'; 
?>

<div class='block--l block-s--s block-m--s mb--l tb__primary relative'>
    <img alt='fred the helpful fed' src='assets/images/fred-side.png' class='absolute fred' />
    
    <div class='page-header tb__header'>
        <h1>
            Responsive
            <span class='tiny'>
                - Helper classes
            </span>
        </h1>
    </div>
    <ul class='list--styled_decimal'>   
        <li>
            <a href='#FontFamilyAnchor'>
                Grid breakpoints
            </a>
        </li>
        <li>
            <a href='#FontFamilyAnchor'>
                Building blocks 
            </a>
        </li>
    </ul>
    <div class='mt--l' id='layout-generic-block' >
        <h2 class='h3'>
            01. Grid breakpoints
        </h2>
        <p>
            Notes and link to the media mixin breakpoint...
        </p>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-css">
// Media queries breakpoints
// --------------------------------------------------

$mobile:                        30em;//Portrait regular mobiles//480px
$skinny:                        48em;//Skinny 768px
$desktop:                       60em;//Desktop 960px 
$wide:                          75em;//Wide 1200px

/* So media queries don't overlap when required, provide a maximum or min */
$skinny-min:                    ($mobile + 1);
$skinny-max:                    ($desktop - 1);
$desktop-max:                   ($wide - 1);

</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 

            
        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->
    <div class='mt--l' id='layout-generic-block' >
        <h2 class='h3'>
            03. Building blocks
        </h2>
        <!--  code block starts -->
        <div class=' block--s tb__tertiary'> 
            <h4 class='tiny uppercase text-muted'>
                code
            </h4>
            <pre>
<code class="language-css">
//grid breakpoints 

mobile
skinny
desktop 
wide

//margin-right - mobile
.mr-m--0     { margin-right:$bs--0;}

//margin-right - skinny
.mr-s--0     { margin-right:$bs--0;}

//default - desktop
.mr--0     { margin-right:$bs--0; }

//margin-right - wide
.mr-w--0     { margin-right:$bs--0;}


//margin-left 
.ml--(block size here xs,s, etc)

//margin-top 
.mr--(block size here xs,s, etc)

//margin-bottom 
.mr--(block size here xs,s, etc)


</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block--s tb__secondary'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 

            <div class='mt-m--xs mt-s--s mt--m mt-w--l block--xs tb__green '>
                <p>
                    mobile: mt-m--xs
                    skinny: mt-s--s
                    desktop: mt--m 
                    wide: mt-w--l
                </p>
            </div><!-- block xs ends-->
            
        </div><!--  hello world block ends -->
    </div><!--layout-generic-block ends-->
</div>