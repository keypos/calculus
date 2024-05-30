<?php require('header.php')?>

<div class="content">
    <h1>The Trapezoidal Rule</h1>
    <iframe src="https://www.desmos.com/calculator/dquf4xhbcr?embed" width="410px" height="410px" style="border: 1px solid #ccc" frameborder=0></iframe><p class="copyright">Copyright © 2024 Desmos Studio, PBC</p>
    <b>This animation shows the trapezoidal rule visualized</b><br><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/v9WR7mKKLtM?si=eOhEvaJgCiwfA_d7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe><p class="copyright">Copyright © 2024 Eddie Woo, YouTube</p>
    <b>This video provides an introduction into the trapezoidal rule</b><br><br>
    <div style="display: flex; align-items: center;">
        <audio controls>
            <source src="src/integration_trapezoidal.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <p style="margin-left: 10px; color: #777777; font-size: 18px;"> <span class="material-symbols-outlined">headphones</span>Listen to this content</p>
    </div>
    <p>The trapezoidal rule is a numerical method for estimating the definite integral of a function. It approximates the region under the graph of the function as a series of trapezoids, which provides a way to calculate the integral when an analytical solution is difficult or impossible to obtain.</p>
    <p>The formula for the trapezoidal rule is given by:</p>

    \[
    \int_{a}^{b} f(x) \, dx \approx \frac{b - a}{2n} \left[ f(x_0) + 2 \sum_{i=1}^{n-1} f(x_i) + f(x_n) \right]
    \]

    <p>Where:</p>
    <ul>
        <li>\( [a, b] \) is the interval over which we are integrating</li>
        <li>\( n \) is the number of subintervals (or trapezoids)</li>
        <li>\( x_0, x_1, \ldots, x_n \) are the endpoints of the subintervals, where \( x_i = a + i \frac{b-a}{n} \)</li>
        <li>\( f(x_i) \) is the function evaluated at \( x_i \)</li>
    </ul>

    <p>In practice, the integral can be estimated by summing up the areas of these trapezoids. Here’s how to apply the trapezoidal rule:</p>
    <ul>
        <li>Divide the interval \( [a, b] \) into \( n \) equal subintervals, each of width \( \Delta x = \frac{b-a}{n} \).</li>
        <li>Evaluate the function at each endpoint of the subintervals: \( f(x_0), f(x_1), \ldots, f(x_n) \).</li>
        <li>Use the trapezoidal rule formula to sum up the areas of the trapezoids.</li>
    </ul>

    <p>For example, to estimate the integral \( \int_{0}^{2} x^2 \, dx \) using 4 subintervals, we would proceed as follows:</p>

    \[
    \Delta x = \frac{2-0}{4} = 0.5
    \]

    \[
    x_0 = 0, \, x_1 = 0.5, \, x_2 = 1, \, x_3 = 1.5, \, x_4 = 2
    \]

    \[
    f(x_0) = 0^2 = 0, \, f(x_1) = (0.5)^2 = 0.25, \, f(x_2) = 1^2 = 1, \, f(x_3) = (1.5)^2 = 2.25, \, f(x_4) = 2^2 = 4
    \]

    \[
    \int_{0}^{2} x^2 \, dx \approx \frac{0.5}{2} \left[ 0 + 2(0.25 + 1 + 2.25) + 4 \right] = 0.25 \left[ 0 + 2(3.5) + 4 \right] = 0.25 \left[ 11 \right] = 2.75
    \]

    <p>This gives us an approximate value of 2.75 for the integral. With the actual value being \( \frac{8}{3} \).</p>

    <p><strong>Note:</strong> The accuracy of the trapezoidal rule improves as the number of subintervals \( n \) increases. It over estimates on concave up functions and under estimates on concave down functions.</p>
    <b>Below is a visualization of why the trapezoidal rule over estimates on concave up functions and under estimates on concave down functions</b>
    <iframe src="https://www.desmos.com/calculator/p9clp5iy44?embed" width="410px" height="410px" style="border: 1px solid #ccc" frameborder=0></iframe><p class="copyright">Copyright © 2024 Desmos Studio, PBC</p>

</div>