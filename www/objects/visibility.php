<?php 
    $page = 'visibility';
    include '../header.php'; 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred-visability' alt='Fred the fed' src='/assets/images/fred-side.png'  />


    <div class='block-l tp-block ml-l' >  

        <h2 class='heading heading--keyline'>
           Visibility
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
<code class="language-markup">

&lt;div class='block-s pink-block hidden--q-small'&gt;
    hide this block on mobile 
&lt;/div&gt;

&lt;div class='block-s green-block hidden--q-medium'&gt;
    hide this block on skinny
&lt;/div&gt;

&lt;div class='block-s tp-block hidden--q-medium-down'&gt;
    hide this block skinny down
&lt;/div&gt;

&lt;div class='block-s tp-block hidden--q-medium-up'&gt;
    hide this block on a medium screen, large screen and xlarge screen
&lt;/div&gt;

&lt;div class='block-s blue-block hidden--q-large'&gt;
    hide this block on desktop
&lt;/div&gt;

&lt;div class='block-s ts-block hidden--q-large-up'&gt;
    hide this block desktop up
&lt;/div&gt;

&lt;div class='block-s tt-block hidden--q-xlarge'&gt;
    hide this block on wide
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 

            <div class='block-s pink-block hidden--q-small'>
                hide this block on mobile 
            </div>
            <div class='block-s green-block hidden--q-medium'>
                hide this block on skinny
            </div>
            <div class='block-s tp-block hidden--q-medium-down'>
                hide this block skinny down
            </div>
            <div class='block-s blue-block hidden--q-medium-up'>
                hide this block on a medium screen, large screen and xlarge screen
            </div>
            <div class='block-s pink-block hidden--q-large'>
                hide this block on desktop
            </div>
            <div class='block-s ts-block hidden--q-large-up'>
                hide this block desktop up
            </div>
            <div class='block-s tt-block hidden--q-xlarge'>
                hide this block on wide
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
<code class="language-markup">

&lt;div class='block-s pink-block visible--q-small'&gt;
    show this block on small screen
&lt;/div&gt;

&lt;div class='block-s blue-block visible--q-medium'&gt;
    show this block on a medium screen
&lt;/div&gt;

&lt;div class='block-s blue-block visible--q-medium-down'&gt;
    Show this block on a medium screen and small screen
&lt;/div&gt;

&lt;div class='block-s blue-block visible--q-medium-up'&gt;
    Show this block on a medium screen, large screen and xlarge screen
&lt;/div&gt;

&lt;div class='block-s tt-block visible--q-large'&gt;
    Show this block on a large screen
&lt;/div&gt;

&lt;div class='block-s blue-block visible--q-large-up'&gt;
    Show this block on a large screen and a xlarge screen
&lt;/div&gt;

&lt;div class='block-s green-block visible--q-xlarge'&gt;
    show this block on a xlarge screen
&lt;/div&gt;
</code>
            </pre>
        </div><!--  code block ends -->

        <!--  hello world block starts -->
        <div class='block--stacked block-s ts-block'>
            <h4 class='tiny uppercase text-muted'>
                hello world
            </h4> 

            <div class='block-s pink-block visible--q-small'>
                show this block on small screen
            </div>

            <div class='block-s blue-block visible--q-medium'>
                show this block on a medium screen
            </div>
            <div class='block-s blue-block visible--q-medium-down'>
                Show this block on a medium screen and small screen
            </div>
            <div class='block-s pink-block visible--q-medium-up'>
                Show this block on a medium screen, large screen and xlarge screen
            </div>
            <div class='block-s tt-block visible--q-large'>
                Show this block on a large screen
            </div>
            <div class='block-s blue-block visible--q-large-up'>
                Show this block on a large and xlarge screen
            </div>
            <div class='block-s green-block visible--q-xlarge'>
                show this block on a xlarge screen
            </div>

        </div><!--  hello world block ends -->

 
        <hr class='mt-l'/>
         <div class='mt-l' >

            <h2 class='h3'>
                Visually hidden
            </h2>

            <p> 
               Hide an element, but make it visible to screen readers
            </p>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
    &lt;p&gt; Check out the source code to see a hidden h1 tag &lt;/p&gt;
    &lt;h1 class='visually-hidden'&gt; I am hidden &lt;/h1&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s ts-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    Check out the source code to see a hidden h1 tag
                </p>
                <h1 class='visually-hidden'>
                    I am hidden
                </h1>
                
            </div><!-- hello world block ends -->
        </div><!--  typo-text-align ends -->
    </div>
</div>
<?php 
    include '../footer.php'; 
?>