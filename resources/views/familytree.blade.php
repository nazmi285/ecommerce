@extends('layouts.master')

@section('content')
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        font-family:sans-serif,Arial;
        font-size:10pt;
    }

    .tree {
        white-space: nowrap;
        min-width: 800px;
        min-height:500px;
    }
    .tree ul {
        padding-top: 20px;
        position: relative;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }
    .tree li {
        float: left;
        text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }
    /*We will use ::before and ::after to draw the connectors*/
    .tree li::before, .tree li::after {
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 1px solid #ccc;
        width: 50%;
        height: 20px;
    }
    .tree li::after {
        right: auto;
        left: 50%;
        border-left: 1px solid #ccc;
    }
    /*We need to remove left-right connectors from elements without any siblings*/
    .tree li:only-child::after, .tree li:only-child::before {
        display: none;
    }
    /*Remove space from the top of single children*/
    .tree li:only-child {
        padding-top: 0;
    }
    /*Remove left connector from first child and right connector from last child*/
    .tree li:first-child::before, .tree li:last-child::after {
        border: 0 none;
    }
    /*Adding back the vertical connector to the last nodes*/
    .tree li:last-child::before {
        border-right: 1px solid #ccc;
        border-radius: 0 5px 0 0;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
    }
    .tree li:first-child::after {
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }
    /*Time to add downward connectors from parents*/
    .tree ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 1px solid #ccc;
        width: 0;
        height: 20px;
    }
    .tree li div {
        border: 1px solid #ccc;
        padding: 5px 10px;
        text-decoration: none;
        color: #666;
        font-family: arial, verdana, tahoma;
        font-size: 11px;
        display: inline-block;
        min-width: 80px;
        min-height: 30px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }
    .tree li div .male {
        background-color:lightblue;
        display: inline-block;
        width:90px;
        padding:10px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
    }
    .tree li div .female {
        background-color:lightpink;
        display: inline-block;
        width:90px;
        padding:10px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
    }
    .tree li div .spacer {
        background-color:lightblue;
        display: inline-block;
        width:10px;
    }
    /*Time for some hover effects*/
    /*We will apply the hover effect the the lineage of the element also*/
    .tree li div:hover, .tree li div:hover + ul li div {
        background: #c8e4f8;
        color: #000;
        border: 1px solid #94a0b4;
    }
    /*Connector styles on hover*/
    .tree li div:hover + ul li::after,
    .tree li div:hover + ul li::before,
    .tree li div:hover + ul::before,
    .tree li div:hover + ul ul::before {
        border-color: #94a0b4;
    }
</style>
<style type="text/css">
    /*Now the CSS*/
    * {margin: 0; padding: 0;}

    .tree ul {
      padding-top: 20px; position: relative;
      
      transition: all 0.5s;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
    }

    .tree li {
      float: left; text-align: center;
      list-style-type: none;
      position: relative;
      padding: 20px 5px 0 5px;
      
      transition: all 0.5s;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
    }

    /*We will use ::before and ::after to draw the connectors*/

    .tree li::before, .tree li::after{
      content: '';
      position: absolute; top: 0; right: 50%;
      border-top: 1px solid #ccc;
      width: 50%; height: 20px;
    }
    .tree li::after{
      right: auto; left: 50%;
      border-left: 1px solid #ccc;
    }

    /*We need to remove left-right connectors from elements without 
    any siblings*/
    .tree li:only-child::after, .tree li:only-child::before {
      display: none;
    }

    /*Remove space from the top of single children*/
    .tree li:only-child{ padding-top: 0;}

    /*Remove left connector from first child and 
    right connector from last child*/
    .tree li:first-child::before, .tree li:last-child::after{
      border: 0 none;
    }
    /*Adding back the vertical connector to the last nodes*/
    .tree li:last-child::before{
      border-right: 1px solid #ccc;
      border-radius: 0 5px 0 0;
      -webkit-border-radius: 0 5px 0 0;
      -moz-border-radius: 0 5px 0 0;
    }
    .tree li:first-child::after{
      border-radius: 5px 0 0 0;
      -webkit-border-radius: 5px 0 0 0;
      -moz-border-radius: 5px 0 0 0;
    }

    /*Time to add downward connectors from parents*/
    .tree ul ul::before{
      content: '';
      position: absolute; top: 0; left: 50%;
      border-left: 1px solid #ccc;
      width: 0; height: 20px;
    }

    .tree li a{
      border: 1px solid #ccc;
      padding: 5px 10px;
      text-decoration: none;
      color: #666;
      font-family: arial, verdana, tahoma;
      font-size: 11px;
      display: inline-block;
      
      border-radius: 5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      
      transition: all 0.5s;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
    }

    .tree li div.married{
      border: 1px solid #ccc;
      /*padding: 5px 10px;*/
      text-decoration: none;
      color: #666;
      font-family: arial, verdana, tahoma;
      font-size: 11px;
      display: inline-block;
      
      border-radius: 5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      
      transition: all 0.5s;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
    }

    /*Time for some hover effects*/
    /*We will apply the hover effect the the lineage of the element also*/
    .tree li a:hover, .tree li a:hover+ul li a {
      background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
    }
    /*Connector styles on hover*/
    .tree li a:hover+ul li::after, 
    .tree li a:hover+ul li::before, 
    .tree li a:hover+ul::before, 
    .tree li a:hover+ul ul::before{
      border-color:  #94a0b4;
    }

    /*Thats all. I hope you enjoyed it.
    Thanks :)*/
</style>
<div class="container">
    <form id="form1">
        <div class="tree" id="FamilyTreeDiv">

            <ul>

                <li>
                    <div>
                        <span class="male">Jim Snow</span>
                        <span class="female">Sue Mighty</span>
                    </div>
                    <ul>
                        <li>
                            <div>
                                <span class="male">Sam Snow</span>
                                <span class="female">Lily Sight</span>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <span class="male">Ralf Snow
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="female">Brie Snow</span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div>
                                <span class="male">Jim Snow</span>
                                <span class="female">Zoe Blue</span>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <span class="male">Ralf Snow</span> 
                                        <span class="female">Sally Bern</span>
                                    </div>
                                    <ul>
                                        <li>
                                            <div>
                                                <span class="female">Magna Snow</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div>
                                        <span class="female">Brie Snow</span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div>
                                <span class="male">John Snow</span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </form>
</div>
<div class="container">
    <div class="tree">
        <ul>   
            <li>
                <div class="married">
                    <a href="#">ONE</a>
                    <a href="#">ONE</a>
                </div>
                <ul>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">ONE</a>
                <ul>
                    <li>
                        <a href="#">ONE</a>
                        <ul>
                            <li>
                                <a href="#">ONE</a>
                            </li>
                            <li>
                                <a href="#">ONE</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                </ul>
            </li>   <li>
                <a href="#">ONE</a>
                <ul>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">ONE</a>
                <ul>
                    <li>
                        <a href="#">ONE</a>
                        <ul>
                            <li>
                                <a href="#">ONE</a>
                            </li>
                            <li>
                                <a href="#">ONE</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">ONE</a>
                <ul>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">ONE</a>
                <ul>
                    <li>
                        <a href="#">ONE</a>
                        <ul>
                            <li>
                                <a href="#">ONE</a>
                            </li>
                            <li>
                                <a href="#">ONE</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">ONE</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="tree">
        <ul>
            <li>
                <a href="#">Parent</a>
                <a href="#">Parent</a>
                <ul>
                    <li>
                        <a href="#">Child</a>
                        <a href="#">Child</a>
                        <ul>
                            <li>
                                <a href="#">Grand Child</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Child</a>
                        <ul>
                            <li><a href="#">Grand Child</a></li>
                            <li>
                                <a href="#">Grand Child</a>
                                <ul>
                                    <li>
                                        <a href="#">Great Grand Child</a>
                                        <a href="#">Great Grand Child</a>
                                    </li>
                                    <li>
                                        <a href="#">Great Grand Child</a>
                                    </li>
                                    <li>
                                        <a href="#">Great Grand Child</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Grand Child</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
@endsection
