<?php
		echo $this->Html->script('jquery.min');
                echo $this->Html->script('doubletaptogo.js');
                
	?>
<nav id="nav" role="navigation">
    <a href="#nav" title="Show navigation">Show navigation</a>
    <a href="#" title="Hide navigation">Hide navigation</a>
    <ul>
        <li><a href="/">Home</a></li>
        <li>
            <a href="/" aria-haspopup="true">Blog</a>
            <ul>
                <li><a href="/">Design</a></li>
                <li><a href="/">HTML</a></li>
                <li><a href="/">CSS</a></li>
                <li><a href="/">JavaScript</a></li>
            </ul>
        </li>
        <li>
            <a href="/" aria-haspopup="true">Work</a>
            <ul>
                <li><a href="/">Web Design</a></li>
                <li><a href="/">Typography</a></li>
                <li><a href="/">Front-End</a></li>
            </ul>
        </li>
        <li><a href="/">About</a></li>
    </ul>
</nav>
<script type="text/javascript">
    
$( '#nav li:has(ul)' ).doubleTapToGo();
</script>
<style>
/*    #nav
{
     container 
}
    #nav > a
    {
        display: none;
    }
    #nav li
    {
        position: relative;
    }
 
     first level 
 
    #nav > ul
    {
        height: 3.75em;
        background-color: #0782C1;
    }
        #nav > ul > li
        {
            width: 25%;
            height: 100%;
            float: left;
        }
 
     second level 
 
    #nav li ul
    {
        display: none;
        position: absolute;
        top: 100%;
    }
        #nav li:hover ul
        {
            display: block;
        }
        
        @media only screen and ( max-width: 40em )  640 
{
    #nav
    {
        position: relative;
    }
        #nav > a
        {
        }
        #nav:not( :target) > a:first-of-type,
        #nav:target > a:last-of-type
        {
            display: block;
        }
 
     first level 
 
    #nav > ul
    {
        height: auto;
        display: none;
        position: absolute;
        left: 0;
        right: 0;
    }
        #nav:target > ul
        {
            display: block;
        }
        #nav > ul > li
        {
            width: 100%;
            float: none;
        }
 
     second level 
 
    #nav li ul
    {
        position: static;
    }
}*/
a {
    color: currentcolor;
    text-decoration: none;
}
ul, ol {
    list-style: outside none none;
}
/*body {
    background-color: #f7efeb;
    padding: 1.25em;
}*/
#nav {
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
/*    left: 50%;
    margin-left: -30em;
    position: absolute;
    top: 25%;*/
    width: 60em;
}
#nav > a {
    display: none;
}
#nav li {
    position: relative;
}
#nav li a {
    color: #fff;
    display: block;
}
#nav li a:active {
    background-color: #c00 !important;
}
#nav span::after {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #efa585 transparent -moz-use-text-color;
    border-image: none;
    border-style: solid solid none;
    border-width: 0.313em 0.313em medium;
    content: "";
    display: inline-block;
    height: 0;
    position: relative;
    right: -0.313em;
    vertical-align: middle;
    width: 0;
}
#nav > ul {
    background-color: #e15a1f;
    height: 3.75em;
}
#nav > ul > li {
    float: left;
    height: 100%;
    width: 25%;
}
#nav > ul > li > a {
    font-size: 1.5em;
    height: 100%;
    line-height: 2.5em;
    text-align: center;
}
#nav > ul > li:not(:last-child) > a {
    border-right: 1px solid #cc470d;
}
#nav > ul > li:hover > a, #nav > ul:not(:hover) > li.active > a {
    background-color: #cc470d;
}
#nav li ul {
    background-color: #cc470d;
    display: none;
    position: absolute;
    top: 100%;
}
#nav li:hover ul {
    display: block;
    left: 0;
    right: 0;
}
#nav li:hover:not(:first-child) ul {
    left: -1px;
}
#nav li ul a {
    border-top: 1px solid #e15a1f;
    font-size: 1.25em;
    padding: 0.75em;
}
#nav li ul li a:hover, #nav li ul:not(:hover) li.active a {
    background-color: #e15a1f;
}
@media only screen and (max-width: 62.5em) {
#nav {
    margin: 0;
    position: static;
    width: 100%;
}
}
@media only screen and (max-width: 40em) {
html {
    font-size: 75%;
}
#nav {
    left: auto;
    position: relative;
    top: auto;
}
#nav > a {
    background-color: #e15a1f;
    height: 3.125em;
    position: relative;
    text-align: left;
    text-indent: -9999px;
    width: 3.125em;
}
#nav > a::before, #nav > a::after {
    border: 2px solid #fff;
    content: "";
    left: 25%;
    position: absolute;
    right: 25%;
    top: 35%;
}
#nav > a::after {
    top: 60%;
}
#nav:not(:target) > a:first-of-type, #nav:target > a:last-of-type {
    display: block;
}
#nav > ul {
    display: none;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
}
#nav:target > ul {
    display: block;
}
#nav > ul > li {
    float: none;
    width: 100%;
}
#nav > ul > li > a {
    height: auto;
    padding: 0 0.833em;
    text-align: left;
}
#nav > ul > li:not(:last-child) > a {
    border-bottom: 1px solid #cc470d;
    border-right: medium none;
}
#nav li ul {
    padding: 0 1.25em 1.25em;
    position: static;
}
}

</style>