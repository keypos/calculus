<?php require('header.php')?>

<div class="content">
    <h1>Indefinite Integration</h1>
    <div style="display: flex; align-items: center;">
        <audio controls>
            <source src="src/integration_indefinite.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <p style="margin-left: 10px; color: #777777; font-size: 18px;"> <span class="material-symbols-outlined">headphones</span>Listen to this content</p>
    </div>
    <p>Indefinite integration, also known as anti-derivation, is the process of finding a function whose derivative is the given function. It is the reverse process of differentiation. The result of an indefinite integration is called an anti-derivative and includes an arbitrary constant \( C \), since the derivative of a constant is zero.</p>
    <p>The general form of an indefinite integral is:</p>

    \[
    \int f(x) \, dx = F(x) + C
    \]

    <p>Where \( F(x) \) is the anti-derivative of \( f(x) \) and \( C \) is the constant of integration.</p>

    <p>To integrate basic functions, we use the following standard rules and formulas:</p>

    <ol>
        <li><strong>Power Rule:</strong> For \( f(x) = x^n \) where \( n \neq -1 \),
        \[
        \int x^n \, dx = \frac{x^{n+1}}{n+1} + C
        \]
        </li>
        <li><strong>Constant Rule:</strong> For \( f(x) = c \) where \( c \) is a constant,
        \[
        \int c \, dx = cx + C
        \]
        </li>
        <li><strong>Sum Rule:</strong> For \( f(x) = g(x) + h(x) \),
        \[
        \int (g(x) + h(x)) \, dx = \int g(x) \, dx + \int h(x) \, dx
        \]
        </li>
        <li><strong>Difference Rule:</strong> For \( f(x) = g(x) - h(x) \),
        \[
        \int (g(x) - h(x)) \, dx = \int g(x) \, dx - \int h(x) \, dx
        \]
        </li>
    </ol>

    <p>For example, to find the indefinite integral of \( f(x) = x^2 \), we apply the power rule:</p>

    \[
    \int x^2 \, dx = \frac{x^{2+1}}{2+1} + C = \frac{x^3}{3} + C
    \]

    <p>Thus, the anti-derivative of \( x^2 \) is \( \frac{x^3}{3} + C \).</p>

    <p>Let's consider another example: integrating a polynomial function such as \( f(x) = 3x^2 + 2x - 5 \). We use the sum rule and the power rule for each term:</p>

    \[
    \int (3x^2 + 2x - 5) \, dx = \int 3x^2 \, dx + \int 2x \, dx - \int 5 \, dx
    \]

    \[
    = 3 \int x^2 \, dx + 2 \int x \, dx - 5 \int 1 \, dx
    \]

    \[
    = 3 \left( \frac{x^3}{3} \right) + 2 \left( \frac{x^2}{2} \right) - 5x + C
    \]

    \[
    = x^3 + x^2 - 5x + C
    \]

    <p>Therefore, the anti-derivative of \( 3x^2 + 2x - 5 \) is \( x^3 + x^2 - 5x + C \).</p>
</div>