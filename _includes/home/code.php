<div class="col col--12 col__md--3">
    <code>
    h1 {<br>
        &nbsp;&nbsp;margin: 0 auto;<br>
        &nbsp;&nbsp;font-size: 65px;<br>
        &nbsp;&nbsp;color: chartreuse;<br>
        &nbsp;&nbsp;font-weight: bold;<br>
        &nbsp;&nbsp;text-decoration:<br>
        &nbsp;&nbsp;underline;<br>
    }<br><br>
    #call-to-button {<br>
        &nbsp;&nbsp;display: inline-block;<br>
        &nbsp;&nbsp;padding: 8px 20px;<br>
        &nbsp;&nbsp;color: #ffffff;<br>
        &nbsp;&nbsp;background: #af34e9;<br>
        &nbsp;&nbsp;font-size: 20px;<br>
        &nbsp;&nbsp;display-size: border-box;<br>
    }</code>

</div>
<div class="col col--12 col__md--6">
    <code>
        &lt;body&gt;<br>
            &nbsp;&nbsp;&lt;header class="container"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;nav class="menu"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="menu-item"&gt;Home&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="menu-item"&gt;Blog&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="menu-item"&gt;About&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="menu-item"&gt;Store&lt;/div&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;/nav&gt;<br>
            &nbsp;&nbsp;&lt;/header&gt;<br>
            &nbsp;&nbsp;&lt;section class="container"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;main class="content"&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;article&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;&lt;php echo article_title(14); ?&gt;&lt;/h1&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;?php echo article_content(14); ?&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/article&gt;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&lt;/main&gt;<br>
            &nbsp;&nbsp;&lt;/section&gt;<br>
        </code>

</div>
<div class="col col--12 col__md--3">
    <code>
        &lt;script&gt;<br>
            &nbsp;&nbsp;var x = myFunction(4, 3);<br>
            &nbsp;&nbsp;document.getElementById("demo").innerHTML = x;<br>
            &nbsp;&nbsp;function myFunction(a, b) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return a * b;<br>
            &nbsp;&nbsp;}<br>
            &nbsp;&nbsp;function toCelsius(f) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return (5/9) * (f-32);<br>
            &nbsp;&nbsp;}<br>
            &nbsp;&nbsp;document.getElementById("demo").innerHTML = toCelsius;<br>
        &lt;/script&gt;            </code>

</div>
