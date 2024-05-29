<?php require('header.php')?>

<div class="content">
    <h1>Differentiation from First Principles</h1>
    <iframe src="https://www.desmos.com/calculator/8trxdol8fx?embed" width="500" height="500" style="border: 1px solid #ccc" frameborder=0></iframe><br><br>
    <b>Play with this interactive graph to visualise differentition from first principles</b><br><br>
    <p>The derivative of a function f(x) is defined as</p>
    <p>$$ f'(x) = \lim_{{h \to 0}} \frac{{f(x + h) - f(x)}}{h}, \, h \neq 0 $$</p>
    <p>There are rules for differentiation that are far more convenient than using the definition above. In general, you should only use the first principles approach above if you are asked to. Below are some examples on differentiation from first principles.</p>
    <b>Example 1:</b>
    <p>
        If \( f(x) = x^2 \), find the derivative of \( f(x) \) from first principles.<br><br>
        <b>Solution:</b>
        \[
        f'(x) = \lim_{h \to 0} \frac{f(x + h) - f(x)}{h}, \quad h \neq 0
        \]
        
        \[
        = \lim_{h \to 0} \frac{(x + h)^2 - x^2}{h}
        \]
        
        \[
        = \lim_{h \to 0} \frac{x^2 + 2xh + h^2 - x^2}{h}
        \]
        
        \[
        = \lim_{h \to 0} \frac{2xh + h^2}{h}
        \]
        
        \[
        = \lim_{h \to 0} \frac{h(2x + h)}{h}
        \]
        
        \[
        = \lim_{h \to 0} (2x + h)
        \]
        
        \[
        = 2x.
        \]
        
        The derivative of \( x^2 \) is \( 2x \).
    </p>
</div>