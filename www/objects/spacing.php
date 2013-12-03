<?php 
    $page = 'spacing';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl' >
    <img class='absolute fred-spacing' alt='Fred the fed' src='/assets/images/fred-side.png' />


    <div class='block-l tp-block ml-l' >  

        <h2 class='heading heading--keyline'>
           Spacing
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
        <div class='block--stacked block-s ts-block'>
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

--q-small       = mobile
--q-medium      = tablet
--q-large       = desktop
--q-xlarge      = wide screen

//Examples
/* This class would have a xxxs right margin that only shows on mobile screens*/
.mr-xxxs--q-small

/* This class would have a large left padding that only shows on wide screens */
.pl-l--q-xlarge

/* Margin right SCSS code: */
@include media('xlarge') {
    .mr-0--q-xlarge     { margin-right:$bs--0; }
    .mr-xxxs--q-xlarge  { margin-right:$bs--xxxs;}
    .mr-xxs--q-xlarge   { margin-right:$bs--xxs; }
    .mr-xs--q-xlarge    { margin-right:$bs--xs;}
    .mr-s--q-xlarge     { margin-right:$bs--s;}
    .mr-m--q-xlarge     { margin-right:$bs--m;}
    .mr-l--q-xlarge     { margin-right:$bs--l;}
    .mr-xl--q-xlarge   { margin-right:$bs--xl;}
    .mr-xxl--q-xlarge   { margin-right:$bs--xxl;}
    .mr-xxxl--q-xlarge  { margin-right:$bs--xxxl;}
}
</code>
            </pre>
        </div>
        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 
            <div class='mr-xxxl--q-large mr-l--q-medium mr-s mr-0--q-small block-xs green-block '>
                <p>
                
                    <strong>mobile:</strong> mr-s--q-small<br />
                    <strong>skinny:</strong> mr-l--q-medium<br />
                    <strong>desktop:</strong>mr-s<br />
                    <strong>wide:</strong> mr-xxxl--q-xlarge
                </p>
            </div><!-- block xs ends-->
        </div>
    </div>
</div>
<?php 
    include '../footer.php'; 
?>