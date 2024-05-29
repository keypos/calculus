<?php require('header.php')?>

<div class="content">
    <h1>Differentiating Polynomials</h1>
    <div style="display: flex; align-items: center;">
        <audio controls>
            <source src="src/differentiation_polynomials.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <p style="margin-left: 10px; color: #777777; font-size: 18px;"> <span class="material-symbols-outlined">headphones</span>Listen to this content</p>
    </div>
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