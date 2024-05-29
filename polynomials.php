<?php require('header.php')?>

<div class="content">
    <h1>Differentiating Polynomials</h1>
    <p>
        A polynomial function is a function that contains only non-negative integer powers of a variable such as a quadratic or a cubic function, e.g.  \( y = x^2 \) and  \( y = 3x^3 \), respectively.<br><br>
        Where \( y = ax^n \)
    </p>
    <p>
        \[ \frac{dy}{dx} = nax^{n-1} \]
    </p>
    <p>
        That is, the new coefficient is the product of the original exponent and original coefficient, and the new exponent is the original exponent subtracted by 1.<br><br>
        For example,
    </p>
    <p>
        \[ f(x)=2+3x^5\]
        \[ f'(x)=15x^4\]
    </p>
    <p>
        Note that in this example, the constant disappears after differentiation, since the derivative of a constant is always 0.
    </p>
    <b>This graph shows the function f(x) and its derivative f'(x)</b>
    <iframe src="https://www.desmos.com/calculator/taev8knbp7?embed" width="500" height="500" style="border: 1px solid #ccc" frameborder=0></iframe>
</div>