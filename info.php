<?php include('session.php');?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <?php $title="问卷";include('head.php');?>
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" media="screen">
    <script src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="js/info.js"></script>
</head>

<body>
    <?php include('nav.php');include('header.php');?>
    <div class="container">
        <h2>调查问卷-20160331</h2>
        <form role="form">
                <legend>Q1.你的年级</legend>
                    <div class="form-group">
                        <select id="choose1" class="form-control">
                            <option value="-1">请选择</option>
                            <option value="2012级本科">2012级本科</option>
                            <option value="2013级本科">2013级本科</option>
                            <option value="2014级本科">2014级本科</option>
                            <option value="2015级本科">2015级本科</option>
                            <option value="2013级硕士">2013级硕士</option>
                            <option value="2014级硕士">2014级硕士</option>
                            <option value="2015级硕士">2015级硕士</option>
                            <option value="博士">博士</option>
                        </select>
                    </div>
               <p class="filed"><span id="error1" class="error-info">这一栏没选哦</span></p>
            
             </form>
        
                <legend>Q2.父亲职业</legend>
                <form role="form">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="-1">请选择</option>
                            <option value="医生">医生</option>
                            <option value="国企或事业单位">国企或事业单位</option>
                            <option value="公务员">公务员</option>
                            <option value="私企">私企</option>
                            <option value="中小学教师">中小学教师</option>
                            <option value="大学教师">大学教师</option>
                            <option value="个体工商业">个体工商业</option>
                            <option value="农民">农民</option>
                            <option value="自由职业者">自由职业者</option>
                            <option value="其他">其他</option>
                        </select>
                    </div>
                </form>

        <div class="row question">
            <div class="col-md-6">
                <legend>Q3.母亲职业</legend>
                <form role="form">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="-1">请选择</option>
                            <option value="医生">医生</option>
                            <option value="国企或事业单位">国企或事业单位</option>
                            <option value="公务员">公务员</option>
                            <option value="私企">私企</option>
                            <option value="中小学教师">中小学教师</option>
                            <option value="大学教师">大学教师</option>
                            <option value="个体工商业">个体工商业</option>
                            <option value="农民">农民</option>
                            <option value="自由职业者">自由职业者</option>
                            <option value="其他">其他</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <div class="row question">
            <div class="col-md-6">
                <legend>Q4.是否单亲</legend>
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline1">
                    <label for="inlineRadio1"> 是 </label>
                </div>
                <div class="radio radio-inline">
                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline1">
                    <label for="inlineRadio2"> 否 </label>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <div class="row question">
            <div class="col-md-6">
                <legend>Q5.和家长沟通频率</legend>
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="option2" name="radioInline2">
                    <label for="inlineRadio1"> 每天 </label>
                </div>
                <div class="radio radio-inline">
                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline2">
                    <label for="inlineRadio2"> 每星期 </label>
                </div>
                <div class="radio radio-inline">
                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline2">
                    <label for="inlineRadio2"> 每个月 </label>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        <div class="row question">
            <div class="col-md-6">
                <legend>Q6.是否有兄弟姐妹</legend>
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline3">
                    <label for="inlineRadio1"> 是 </label>
                </div>
                <div class="radio radio-inline">
                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline3">
                    <label for="inlineRadio2"> 否 </label>
                </div>
            </div>
            <div class="col-md-6">
            </div>
        </div>
         <p class="fieldset">
          <input class="submit" type="button" id="submit" value="提交">
         </p>
    </div>
    <?php include('footer.php');?>
</body>

</html>
