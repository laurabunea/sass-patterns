<?php 
    include '../header.php'; 
?>
<?php 
    include '../helper-list.php'; 
?>
<div class='relative mb-l col-8-10 grid__item mt-xxxl ' >
    <img class='absolute fred' alt='Fred the fed' src='/assets/images/fred-side.png' style='top:106px;' />
    <div class='block-l pt-block ml-l' >  
        <div class='heading '>
            <h2 class='heading heading--keyline'>
                Buttons
            </h2>
        </div>
        <!-- /****************************************  Button variations  *******************************/ -->

        <div class='mt-m'> 
            <h3>
                a) Button variations
            </h3>

            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class="language-markup">
    &lt;a class='btn--label'&gt; Button 1 &lt;/a&gt;
    &lt;a class='btn btn-secondary'&gt; Button 2 &lt;/a&gt;
    &lt;a class='btn btn-tertiary'&gt; Button 3 &lt;/a&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    <a class='btn btn-primary' data-btn-loading-indicator='Thinking...'>
                        <span class='btn--label'>
                            Button 1
                        </span>
                    </a>
                
                    <a class='btn btn-secondary'>
                        Button 2
                    </a>
                
                    <a class='btn btn-tertiary'>
                        Button 3
                    </a>
                </p>
            </div><!-- hello world block ends -->
            
            <h3 class='h4'>
                a) Positive/negative actions
            </h3>
            <p>
                Stack a variation class to add some color
            </p>
            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class="language-markup">
    &lt;a class='btn btn-positive'&gt; Button 1 &lt;/a&gt;
    &lt;a class='btn btn-negative'&gt; Button 2 &lt;/a&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    <a class='btn btn-positive'>
                        A button with .btn and .btn-positive
                    </a>
                    <a class='btn btn-negative'>
                        A button with .btn and .btn-negative
                    </a>
                </p>
            </div><!-- hello world block ends -->
        </div><!-- btn-variations ends -->
        <hr class='mt-l'>
        <!-- /****************************************  Button modifiers  *******************************/ -->

        <div class='mt-l' id='btn-modifier'>
            <h3>
                Button modifiers
            </h3>
            <p>
                Stick buttons on anything you want. They don't have to go on anchor tags!
            </p>

            <!-- code block starts -->
            <div class='block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class="language-markup">
    &lt;h3 class='btn btn-primary btn--large btn--bounce'&gt; Button 1 &lt;/h3&gt;
    &lt;small class='bbtn btn-tertiary btn--small btn--bob'&gt; Button 2 &lt;/small&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <h3 class='btn btn-primary btn--large btn--bounce'>
                    Button 1
                </h3>
                <p>
                    <small class='btn btn-tertiary btn--small btn--bob'>
                        Button 2
                    </small>    
                </p>
            </div><!-- hello world block ends -->

            <p class='m'>
                Modifiers allow you to have hard and soft edges on your buttons:
            </p>

            <!-- code block starts -->
             <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class="language-markup">
    &lt;a class='tn btn-primary btn--soft'&gt; Button 1 &lt;/a&gt;
    &lt;a class='btn btn-secondary btn--hard'&gt; Button 2 &lt;/a&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    <a class='btn btn-primary btn--soft'>
                        Button 1
                    </a>
                    <a class='btn btn-secondary btn--hard'>
                        Button 2
                    </a>
                </p>
            </div><!-- hello world block ends -->
            
            <p class='m'>
                Buttons can be block level elements:
            </p>

            <!-- code block starts -->
            <div class='block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class="language-markup">
    &lt;a class='btn btn-positive btn--block'&gt; Button 1 &lt;/a&gt;
    &lt;a class='btn btn-primary btn--block-mobile'&gt; Responsinate! &lt;/a&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    <a class='btn btn-positive btn--block'>
                        Button 1
                    </a>
                </p>
                <p>
                    A sneaky button that becomes a block on mobile: 
                </p>
                <p>
                    <a class='btn btn-primary btn--block-mobile'>
                        Responsinate!
                    </a>
                </p>
            </div><!-- hello world block ends -->
            
        </div><!-- btn-modifier ends -->
        <hr class='mt-l'>
        <!-- /****************************************  Buttons with icons  *******************************/ -->

        <div class='mt-l' id='btn-icons'>
            
            <h2 class='h3' >
                03. Buttons with icons
            </h2>

            <p>
                These assume there's an inline-block element with a class of 
                <code>.i</code> 
                inside the button
            </p>

            <!-- code block starts -->
            <div class=' block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
    &lt;a class='btn btn-primary btn--icon btn--bounce-icon--left'&gt;&lt;i class='i'&gt;&#9834;&lt;/i&gt; A button with .btn--icon&lt;/a&gt;
    &lt;a class='btn btn-primary btn--icon--rev btn--bounce-icon--bottom'&gt; A button with .btn--icon--rev &lt;i class='i'&gt;&#9835;&lt;/i&gt;&lt;/a&gt;

    &lt;a class='btn btn-secondary btn--icon-large btn--bounce-icon--top'&gt;&lt;i class='i'&gt;&#9829;&lt;/i&gt; A button with .btn--icon-large &lt;/a&gt;
    &lt;a class='btn btn-secondary btn--icon-large--rev btn--bounce-icon--right'&gt; A button with .btn--icon-large--rev &lt;i class='i'&gt;&#9733;&lt;/i&gt;&lt;/a&gt;

    &lt;a class='bbtn btn-tertiary btn--icon-small'&gt;&lt;i class='i'&gt;&#9829;&lt;/i&gt; A button with .btn--icon-small &lt;/a&gt;
    &lt;a class='btn btn-tertiary btn--icon-small'&gt;&lt;i class='i'&gt;&#9733;&lt;/i&gt; A small with .btn--icon-small&lt;/a&gt;
    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    <a class='btn btn-primary btn--icon btn--bounce-icon--left'>
                        <i class='i'>&#9834;</i> 
                        A button with .btn--icon
                    </a>
                </p>
                <p>
                    <a class='btn btn-primary btn--icon--rev btn--bounce-icon--bottom'>
                        A button with .btn--icon--rev 
                        <i class='i'>&#9835;</i>
                    </a>
                </p>
                <p>
                    <a class='btn btn-secondary btn--icon-large btn--bounce-icon--top'>
                        <i class='i'>&#9829;</i> 
                        A button with .btn--icon-large
                    </a>
                </p>
                <p>
                    <a class='btn btn-secondary btn--icon-large--rev btn--bounce-icon--right'>
                        A button with .btn--icon-large--rev 
                        <i class='i'>&#9733;</i>
                    </a>
                </p>

                <p>
                    <a class='btn btn-tertiary btn--icon-small'>
                        <i class='i'>&#163;</i> 
                        A button with .btn--icon-small
                    </a>
                </p>   
                <p>
                    <small class='btn btn-tertiary btn--icon-small'>
                        <i class='i'>&#163;</i> 
                        A small with .btn--icon-small
                    </small>
                </p>
            </div><!-- hello world block ends -->

            <p class='m'>
                Buttons can also be icon only:
            </p>

            <!-- code block starts -->
            <div class='block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class='language-markup'>
    &lt;a class='btn btn-positive btn--icon-only--large'&gt;&lt;i class='i'&gt;&#9829;&lt;/i&gt;&lt;/a&gt;
    &lt;a class='btn btn-negative btn--icon-only'&gt;&lt;i class='i'&gt;&#9829;&lt;/i&gt;&lt;/a&gt;
    &lt;a class='btn btn-tertiary btn--icon-only--small'&gt;&lt;i class='i'&gt;&#9829;&lt;/i&gt;&lt;/a&gt;
    &lt;a class='btn btn-tertiary btn--icon-only--small btn--soft'&gt;&lt;i class='i'&gt;&#9829;&lt;/i&gt;&lt;/a&gt;
    &lt;a class='btn btn-tertiary btn--icon-only--small btn--hard'&gt;&lt;i class='i'&gt;&#9829;&lt;/i&gt;&lt;/a&gt;
    </code>
            </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    <a class='btn btn-positive btn--icon-only--large'>
                        <i class='i'>&#9829;</i>
                    </a>
                    <a class='btn btn-negative btn--icon-only'>
                        <i class='i'>&#9829;</i>
                    </a>
                    <a class='btn btn-tertiary btn--icon-only--small'>
                        <i class='i'>&#9829;</i>
                    </a>
                    <a class='btn btn-tertiary btn--icon-only--small btn--soft'>
                        <i class='i'>&#9733;</i>
                    </a>
                    <a class='btn btn-tertiary btn--icon-only--small btn--hard'>
                        <i class='i'>&#9834;</i>
                    </a>
                </p>
            </div><!-- hello world block ends -->
        </div><!-- btn-icons ends -->
        
        <!-- /****************************************  Buttons with icons  *******************************/ -->
        <hr class='mt-l'>
        <div class='mt-l' id='btn-variations'> 
            <h2 class='h3' >
                04. Submit buttons
            </h2>
            <p>
                FireFox doesn't like line-heights on submit buttons. Stick a class on submit
                 buttons and make sure the padding's the same as your default button :)
            </p>
            <!-- code block starts -->
            <div class='block-s tt-block'>
                <h4 class='tiny uppercase text-muted'>
                    code
                </h4>
                <pre>
    <code class="language-markup">
    &lt;input type='submit' value='Button 3' class='btn btn--submit-small' &lt;/&gt;
    &lt;input type='submit' value='Button' class='btn btn--submit' &lt;/&gt;
    &lt;input type='submit' value='Button 2' class='btn btn--submit-large' &lt;/&gt;

    </code>
                </pre>
            </div><!-- code block ends -->

            <!-- hello world block starts -->
            <div class='block--stacked block-s st-block'>
                <h4 class='tiny uppercase text-muted'>
                    hello world
                </h4>
                <p>
                    <input type='submit' value='Button 2' class='btn btn--submit-small btn-primary' />
                    <input type='submit' value='Button 2' class='btn btn--submit btn-primary' />
                    
                    <input type='submit' value='Button 2' class='btn btn--submit-large btn-primary' />
                      
                </p>
            </div><!-- hello world block ends -->
            
        </div><!-- btn-variations ends -->

</div>
</div><!--content padding ends-->

<?php 
    include '../footer.php'; 
?> 