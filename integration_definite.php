<?php require('header.php')?>

<div class="content">
    <h1>Indefinite Integration</h1>
    <iframe src="https://www.desmos.com/calculator/ta9fhewbip?embed" width="410px" height="410px" style="border: 1px solid #ccc" frameborder=0></iframe><p class="copyright">Copyright © 2024 Desmos Studio, PBC</p>
    <b>Use this interactive graph to explore definite integrals and the area beneath them</b><br><br>
    <div style="display: flex; align-items: center;">
        <audio controls>
            <source src="src/integration_definite.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <p style="margin-left: 10px; color: #777777; font-size: 18px;"> <span class="material-symbols-outlined">headphones</span>Listen to this content</p>
    </div>
    <p>Definite integration is the process of finding the accumulated area under a curve over a specific interval. Unlike indefinite integration, which returns a function, definite integration results in a single numerical value. The definite integral of a function \( f(x) \) from \( a \) to \( b \) is denoted as:</p>

    \[
    \int_{a}^{b} f(x) \, dx
    \]

    <p>This represents the signed area between the graph of \( f(x) \) and the x-axis from \( x = a \) to \( x = b \).</p>
    <p>If \( F(x) \) is an antiderivative of \( f(x) \) on an interval \([a, b]\), then:</p>

    \[
    \int_{a}^{b} f(x) \, dx = F(b) - F(a)
    \]

    <b>Example 1:</b>
    <p>Evaluate \( \int_{0}^{1} x^2 \, dx \).</p>

    <b>Solution:</b>

    <p>Using the power rule for integration:</p>

    \[
    \int_{0}^{1} x^2 \, dx = \left[ \frac{x^3}{3} \right]_{0}^{1} = \frac{1}{3} - \frac{0}{3} = \frac{1}{3}
    \]
</div>