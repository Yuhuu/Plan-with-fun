<?
/* 
 * Copyright(C) 2016.  All rights reserved to Bjørnholt school. 
 * https://bjornholt.osloskolen.no/
 * @author Created by Bachelor Final Project group 18 at Oslo and Akershus University College 
 * Creating interactive web pages using the Angualr framework carried out by:
 * Martin Hansen Muren Mathisen (s189116), Waqas Liaqat (s180364), 
 * Yuanxin Huang (s184519), Thanh Nguyen Chu (s169954)
 * @version 1.01.01
 */
?>
<div class="breadcrumbs" id="breadcrumbs" style="margin-top:10px;">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Home</a>
        </li>
        <li class="active"><a href="#">Login</a></li>
    </ul>
</div>

<div class="container col-xs-12 col-md-10 col-md-offset-1" style="margin-top:10px;">
    <h1> Login</h1>
    <form class="form-inline" action="" name="registerForm" ng-submit="doSubmit()" 
          ng-init="user.myEmail = '';user.myPassword = ''"
          vmsgs-form>

    <div class="input-group col-xs-12 col-md-5" >
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input type="email"
                   name = "myEmail"
                   vmsg
                   ng-model="user.myEmail"
                   ng-minlength ="10"
                   class="form-control" 
                   placeholder="Please enter your email."
                   /></div>
    <div class="input-group col-xs-12 col-md-6" >
        <span ng-show="registerForm.myEmail.$touched && registerForm.myEmail.$invalid">
            Email address with "@" is required, it should contain minimun 10 character</span>
    </div>
    <div class="input-group col-xs-12 col-md-5" style="margin-top:10px;">
    
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input type="password" 
                   name = "myPassword"
                   vmsg
                   ng-model="user.myPassword"
                   ng-minlength="4"
                   class="form-control" 
                   placeholder="Please enter your password."
                   /></div>
   <div class="input-group col-xs-12 col-md-6" >
       <span ng-show="registerForm.myPassword.$touched && registerForm.myPassword.$invalid">
            Password is required, it should contain minimun 4 character.</span><br>
       <span>{{cancelsucceed}}</span>
   </div>
   

