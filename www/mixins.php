<?php 
    include 'header.php'; 
?>

<!-- Side Navigation Bar - this holds the children categories -->
<div class='navigation--side '>
    <ul class='list--unstyled'>
        <li>
            <a class='block--xs__stacked tb__primary' href='#mixin-vendor'>
                Vendor
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#mixin-media-break-point'>
                Media breakpoint
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#mixin-opacity'>
                Opacity
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#mixin-placeholder'>
                Placeholder
            </a>
        </li>
        <li>
            <a class='block--xs__stacked tb__primary' href='#mixin-placeholder'>
                Theme mixin
            </a>
        </li>
    </ul><!--list unstyled ends-->
</div><!--navigation side ends-->


<div class='content clearfix tb__primary '>
    <div class='content-padding'>
        <div class='page-header tb__header'>
            <h1>
                Mixins
                <span class='tiny'>
                    - Intro
                </span>
            </h1>
        </div>

        <p class='intro'>
            intro text
        </p>

        <div class='page-header tb__header mxx'>
            <h1>
                Mixins
                <span class='tiny'>
                    - Helper mixins
                </span>
            </h1>
        </div>
        <!-- /****************************************  Vendor block  *******************************/ -->

        <div class='section--xl' id='mixin-vendor'>
            <h2 >
                Vendor 
            </h2>

            <p>This mixin takes the hassle out of defining one css-attribute in all vendor-specific prefixes (-moz, -webkit, -o, -ms).</p>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    scss code
                </h4>
                <pre>
<code class='language-css'>
    .img-rounded {
        /* @include vendor($property, $value); */
        @include vendor(border-radius, 50% 50% 50% 50%);
    }
</code>
                </pre>
                <h4 class='tiny caps text_muted m0 '>
                    html code
                </h4>
                <pre>
<code class='language-markup'>
    &lt;div class='img-rounded'&gt; .. &lt;/div&gt;
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <div class='img-rounded xm testbox-100-100 tb__green'>
                </div>
            
            </div><!--  hello world block ends -->
        </div><!-- mixin-vendor ends-->
        <hr class='mx'>
        <!-- /****************************************  Media break point block  *******************************/ -->

        <div class='section--xl' id='mixin-break-point'>
            <h2 >
                Media break point 
            </h2>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    scss code
                </h4>
                <pre>
<code class='language-css'>
    .element{
        background-color:#fff;

        @include media(skinny-only){
            background-color:pink;
        }

        @include media(mobile-only){
            background-color:blue;
        }
    }
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <div class='element block--xs__stacked'>
                    resize the browser
                </div>
            </div><!--  hello world block ends -->
        </div><!-- mixin-break-point ends-->
        <hr class='mx'>
        <!-- /****************************************  Opacity block  *******************************/ -->

        <div class='section--xl' id='mixin-opacity'>
            <h2>
                Opacity 
            </h2>
            <!--  code block starts -->
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    scss code
                </h4>
                <pre>
<code class='language-css'>
    .overlay--50 {
        /* @include opacity($value); */
        @include opacity(0.5); 
    }
    .overlay--25 {
        /* @include opacity($value); */
        @include opacity(0.5); 
    }
</code>
                </pre>
                <h4 class='tiny caps text_muted m0 '>
                    html code
                </h4>
                <pre>
<code class='language-markup'>
    &lt;div class='overlay--50'&gt; .. &lt;/div&gt;

    &lt;div class='overlay--25'&gt; .. &lt;/div&gt;
</code>
                </pre>

            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <div class='grid'>
                    <div class='overlay--25 m testbox-100-100 block--xs tb__green'>
                        <p>25% opacity</p>
                    </div>

                    <div class='overlay--50 m testbox-100-100 block--xs tb__green'>
                        <p>50% opacity</p>
                    </div>

                    <div class='m testbox-100-100 block--xs tb__green'>
                        <p>Block with out an opacity class</p>
                    </div>
                </div>
            </div><!--  hello world block ends -->
        </div><!-- mixin-opacity ends-->
        <hr class='mx'>
        <!-- /****************************************  Placeholder  *******************************/ -->

        <div class='section--xl' id='mixin-placeholder'>
            <h2>
                Placeholder Mixin 
            </h2>
            <!--  code block starts -->

            <p>This mixin takes the hassle out of defining placeholder prefixes (:-moz-placeholder, ::-webkit-input-placeholder, ::-moz-placeholder, :-ms-input-placeholder).</p>
            
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    scss code
                </h4>
                <pre>
<code class='language-css'>
   .pink-input-text {
        /* @include placeholder($color);*/
        @include placeholder(#F92672);
    }
</code>
                </pre>
                <h4 class='tiny caps text_muted'>
                    html code
                </h4>
                <pre>
<code class='language-markup'>
    &lt;form&gt;
        &lt;input class='pink-input-text' type='text' name='fname' placeholder='irst name'/&gt;
    &lt;/form&gt;
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <form class='xm'>
                    <input class='pink-input-text' type="text" name="fname" placeholder="First name">
                </form>
            
            </div><!--  hello world block ends -->
        </div><!-- mixin-vendor ends-->
        <hr class='mx'>
        <!-- /****************************************  Theme mixin  *******************************/ -->

        <div class='section--xl' id='mixin-placeholder'>
            <h2>
                Theme Mixin 
            </h2>
            <!--  code block starts -->

            <p>
                This mixin can be used for simple theme blocks you can pass in a background, text and border colour. <br />
                <span style='color:red;font-weight:bold'>QUESTION:</span> For now it the border elements are just extending the border selecter - should we pass in the border width and style as well or have a seperate border mixin .... Thoughts people 
            </p>
            
            <div class='block--xs tb__tertiary'>
                <h4 class='tiny caps text_muted'>
                    scss code
                </h4>
                <pre>
    <code class='language-css'>
       .tb__blue {
            /* @include theme-block($bg-color, $txt-color, $border-color);*/
            @include theme-block( #4AA1C5, #fff, #4AA1C5 );
        }
    </code>
                </pre>
                <h4 class='tiny caps text_muted'>
                    html code
                </h4>
                <pre>
<code class='language-markup'>
    &lt;div class='tb__blue'&gt;
        &lt;p&gt; Some text &lt;/p&gt;
    &lt;/div&gt;  
</code>
                </pre>
            </div><!--  code block ends -->

            <!--  hello world block starts -->
            <div class='block--xs__stacked tb__secondary'>
                <h4 class='tiny caps text_muted'>
                    hello world
                </h4>
                <div class='xm tb__blue block--xs'>
                    <p>Some text</p>
                </div>
            
            </div><!--  hello world block ends -->
        </div><!-- mixin-vendor ends-->               

    </div><!-- content padding ends-->
</div><!--content  ends-->
<?php 
    include 'footer.php'; 
?>