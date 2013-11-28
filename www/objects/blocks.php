<?php 
    include '../header.php'; 
?>

<div class='relative mb-l col-8-10 grid__item mt-xxxl ml-l' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:29px;' />
    <!--  ************  arrows block starts   ************   -->

    <div class='block-l pt-block' style='margin-left:50px'>     

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
        <div class='block--stacked block-s st-block'>
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
        <div class='block--stacked block-s st-block'>
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

    </div>
    <!--  ************  arrows block ends   ************   -->
</div>
<?php 
    include '../footer.php'; 
?>