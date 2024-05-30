<?php require('header.php')?>

<div class="content">
    <h1>Differentiating Logarithmic Functions</h1>
    <div style="display: flex; align-items: center;">
        <audio controls>
            <source src="src/differentiation_logarithms.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <p style="margin-left: 10px; color: #777777; font-size: 18px;"> <span class="material-symbols-outlined">headphones</span>Listen to this content</p>
    </div>
    <p>A logarithmic function is a function that possesses the general form \( y = \log_a(x) \). When the base of the log is “e”, we are dealing with \(\ln(f(x))\), there are special rules for differentiating logarithmic functions.</p>

    <p>Where \( f(x) = \log_e(x) \),</p>
    <p>
    \[
    \frac{dy}{dx} = \frac{f'(x)}{f(x)}
    \]
    </p>

    <p>That is, the derivative of the log consists of:</p>
    <p> - The derivative of the function within the log to form the <em>numerator</em></p>
    <p> - The original log function to form the <em>denominator</em></p>

    <p>For example,</p>

    <p>
    \[
    y = \ln(2x^2 + 5)
    \]

    \[
    \frac{dy}{dx} = \frac{4x}{2x^2 + 5}
    \]
    </p>
    <p>A harder example involving both an exponential function and logarithm,</p>
    <p>
    \[
    y = \ln(e^{2x} + 2)
    \]

    \[
    \frac{dy}{dx} = \frac{2e^{2x}}{e^{2x} + 2}
    \]
    </p>
    <b>This graph shows the function f(x) and its derivative f'(x)</b>
    <iframe src="https://www.desmos.com/calculator/ddwrjlumz2?embed" width="500" height="500" style="border: 1px solid #ccc" frameborder=0></iframe><p class="copyright">Copyright © 2024 Desmos Studio, PBC</p>
</div>