<?php require('header.php')?>

<div class="content">
    <h1>Volumes of Rotation</h1>
    <iframe src="https://www.desmos.com/calculator/feix60iliv?embed" width="500" height="500" style="border: 1px solid #ccc" frameborder=0></iframe><p class="copyright">Copyright © 2024 Desmos Studio, PBC</p>
    <p>The ring method is a technique for finding the volume of a solid of revolution. It involves rotating a region around an axis and approximating the volume of the solid formed. This method is particularly useful when the region is bounded by a single function and the axis of rotation is one of the coordinate axes.</p>
    <h2>The Ring Method Formula</h2>
<p>The formula for the volume of a solid of revolution using the ring method is given by:</p>

\[V = \pi \int_{a}^{b} [f(x)]^2 \, dx
\]

<p>Where:</p>
<ul>
    <li>\( [a, b] \) is the interval over which we are rotating the region</li>
    <li>\( f(x) \) is the function that defines the boundary of the region being rotated</li>
    <li>\( V \) is the volume of the solid formed by the rotation</li>
</ul>

<p>In practice, the volume can be estimated by summing up the volumes of infinitesimally thin rings. Here’s how to apply the ring method:</p>
<ul>
    <li>Determine the interval \( [a, b] \) over which the function is defined.</li>
    <li>Evaluate the function \( f(x) \) at various points in this interval.</li>
    <li>Use the ring method formula to sum up the volumes of the rings.</li>
</ul>

<h2>Example: Volume of a Solid Formed by Rotating \( y = x^2 \) Around the x-Axis</h2>
<p>To estimate the volume of the solid formed by rotating the region under the curve \( y = x^2 \) from \( x = 0 \) to \( x = 1 \) around the x-axis, we proceed as follows:</p>

<p>The formula for the volume is:</p>

\[V = \pi \int_{0}^{1} [x^2]^2 \, dx = \pi \int_{0}^{1} x^4 \, dx
\]

<p>We can solve this integral step-by-step:</p>
<ul>
    <li>Find the antiderivative of \( x^4 \): \( \int x^4 \, dx = \frac{x^5}{5} \)</li>
    <li>Evaluate this antiderivative at the boundaries \( x = 0 \) and \( x = 1 \):</li>
    \[    \left. \frac{x^5}{5} \right|_{0}^{1} = \frac{1^5}{5} - \frac{0^5}{5} = \frac{1}{5}    \]
    <li>Multiply by \( \pi \) to find the volume:</li>
    \[    V = \pi \cdot \frac{1}{5} = \frac{\pi}{5}    \]
</ul>

<p>Thus, the volume of the solid formed by rotating the region under \( y = x^2 \) from \( x = 0 \) to \( x = 1 \) around the x-axis is \( \frac{\pi}{5} \).</p>


</div>
