<!doctype html>
<html lang="zh-CN">
<head>
    <!-- 必须的 meta 标签 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 的 CSS 文件 -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>
<body>


<div class="container">

    <br>


    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/nc7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/nc7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/nc7.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

            <div class="alert alert-danger" style="text-align: center" role="alert">
                对外制裁名单
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>


    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-7">
                    <input type="text"  placeholder="" aria-label="Username" aria-describedby="basic-addon1">
                    <button type="button" >检索</button>
                </div>
                <div class="col-sm-5"></div>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#编号</th>
                    <th scope="col">姓名</th>
                    <th scope="col">性别</th>
                    <th scope="col">阶级成分</th>
                    <th scope="col">学历</th>
                    <th scope="col">简述</th>
                    <th scope="col">危险程度</th>
                    <th scope="col">更多</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <th scope="row">1021001</th>
                    <td>王伟</td>
                    <td>男</td>
                    <td>教师</td>
                    <td>博士</td>
                    <td>自我抬高和攻击他人</td>
                    <td><span class="badge badge-danger btn-sm">高</span></td>
                    <td><button type="button" class="btn btn-info btn-sm">事件档案</button></td>
                </tr>
                <tr>
                    <th scope="row">1021002</th>
                    <td>李金明</td>
                    <td>男</td>
                    <td>学生</td>
                    <td>大专</td>
                    <td>异化技术劳动</td>
                    <td><span class="badge badge-danger btn-sm">高</span></td>
                    <td><button type="button" class="btn btn-info btn-sm">事件档案</button></td>
                </tr>
                <tr>
                    <th scope="row">1021003</th>
                    <td>刘祖明</td>
                    <td>男</td>
                    <td>学生</td>
                    <td>大专</td>
                    <td>虚伪，功利</td>
                    <td><span class="badge badge-warning btn-sm">中</span></td>
                    <td><button type="button" class="btn btn-info btn-sm">事件档案</button></td>
                </tr>


                <tr>
                    <th scope="row">1021004</th>
                    <td>陈睿杰</td>
                    <td>男</td>
                    <td>学生</td>
                    <td>本科</td>
                    <td>虚伪待人</td>
                    <td><span class="badge badge-secondary btn-sm">低</span></td>
                    <td><button type="button" class="btn btn-info btn-sm">事件档案</button></td>
                </tr>

                <tr>
                    <th scope="row">1021005</th>
                    <td>方璋文</td>
                    <td>男</td>
                    <td>学生</td>
                    <td>大专</td>
                    <td>虚伪待人，功利</td>
                    <td><span class="badge badge-warning btn-sm">中</span></td>
                    <td><button type="button" class="btn btn-info btn-sm">事件档案</button></td>
                </tr>


                </tbody>
            </table>


        </div>
        <div class="col-sm-1"></div>
    </div>

</div>



<!-- JavaScript 文件是可选的。从以下两种建议中选择一个即可！ -->

<!-- 选项 1：jQuery 和 Bootstrap 集成包（集成了 Popper） -->
<script src="/js/jquery.slim.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>


</body>
</html>
