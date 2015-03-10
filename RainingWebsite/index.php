<?php
function getBrowser(){
    $agent=$_SERVER["HTTP_USER_AGENT"];
    if(strpos($agent,'MSIE')!==false ) //ie判断
    return "false";
	if(strpos($agent,'rv:11.0')) //ie11判断
    return "true";
    else if(strpos($agent,'Firefox')!==false)
    return "true";
    else if(strpos($agent,'Chrome')!==false)
    return "true";
    else if(strpos($agent,'Opera')!==false)
    return 'true';
    else if((strpos($agent,'Chrome')==false)&&strpos($agent,'Safari')!==false)
    return 'true';
    else
    return 'false';
}
if( getBrowser() == 'false')
{
	echo "<script language=javascript>"; 
	echo "document.location.href='index.asp'";
	echo "</script>";
	exit();
}
?>

<html>
<head>
<title>首页 | 宇威科技</title>
<?php include 'common.php';?>
</head>

<body>
	<?php include 'nav.php';?>

	<div id="carousel-example-generic" class="carousel slide"
		data-ride="carousel" style="margin-top: 50px">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0"
				class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active"
				style="background-color: #2f3239; height: 450px">
				<img src="img/slide1.gif" alt="...">
				<div class="carousel-caption"
					style="top: 100px; text-align: left; font-size: 36px;">持久稳定
					省时高效</div>

				<div class="carousel-caption"
					style="top: 180px !important; text-align: left; font-size: 20px; color: lightgrey">
					诚信、专业、创新、惜时、协作、分享</div>

				<div class="carousel-caption"
					style="top: 250px !important; text-align: left; font-size: 20px; color: lightgrey">
					<a href="#product-introduction"><button class="btn btn-primary" type="button"
						style="font-size: 18px">从了解我们的产品开始</button></a>
				</div>

				<div class="carousel-caption"
					style="text-align: right; z-index: 9; font-size: 20px; color: lightgrey; opacity: 0.3; top: 70">
					<img src="img/shuttle.png" />
				</div>
			</div>
			<div class="item" style="background-color: #2f3239; height: 450px">
				<img src="img/slide2.gif" alt="...">
				<div class="carousel-caption"
					style="top: 80px !important; font-size: 30px;">
					我们更注重系统稳定和功能实用</div>
				<div class="carousel-caption"
					style="top: 150px !important; font-size: 20px; color: lightgrey">
					系统持久运行，我们值得您信赖</div>
				<div class="carousel-caption">
					<img src="img/clock.jpg" />
				</div>
			</div>


			<!--  <div class="item" style="background-color: #2f3239; height: 450px">
				<img src="img/slide3.gif" alt="...">
				<div class="carousel-caption">...</div>
			</div>-->
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic"
			role="button" data-slide="prev"> <span
			class="glyphicon glyphicon-chevron-left"></span> <span
			class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#carousel-example-generic"
			role="button" data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right"></span> <span
			class="sr-only">Next</span>
		</a>
	</div>

	<div class="container" style="margin-top: 20px">

		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">公司简介</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<img src="img/about.jpg" class="img-responsive">
					</div>
					<div class="col-md-6"
						style="line-height: 26px; padding-top: 25px; padding-right: 30px">

						<p>西安宇威信息科技有限公司是一家专业的综合性软件服务和控制系统供应商，可以为客户及合作伙伴提供软件开发、软件产品、企业及行业管理信息化解决方案研发、工业自动控制系统解决方案等专业服务。</p>
						<p>公司创始于西安高新区，拥有专业的研发团队，我们立足西北，服务国内外客户。经过五年多的踏实耕耘，艰苦积累，正逐步发展成为西安规模较大、自主研发能力最强、发展潜力最快、最具专业化水准的软件开发和工业自动化控制系统公司之一。</p>
						<p>公司技术团队有专业的软件外包开发团队和工业自动化控制专家，具有丰富的服务国内外一流大客户的软件开发服务经验,以及各类工业控制系统集成和开发经验，我们拥有管理解决方案设计与规划、软件系统设计与技术实现、信息系统实施与培训、工业自动化控制系统集成和开发四大专业能力；通过具有多年企业实际运作经验的系统分析员，具有专业知识和实践经验丰富的项目实施人员，为客户提供先进、易用、实用的软件产品及稳定、快速、优质的技术支持。</p>

					</div>
				</div>
			</div>
		</div>


		<div class="panel panel-warning" id="product-introduction">
			<div class="panel-heading">
				<h3 class="panel-title">产品推荐</h3>
			</div>
			<div class="panel-body">
				<div class="row" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col-md-3" style="padding-left: 30px">

						<img src="img/publishing_eye.png" class="img-responsive">

					</div>
					<div class="col-md-9">
						<p style="font-size: 18px">教务管理系统</p>
						<p style="line-height: 26px; color: grey; padding-right: 30px">
							适用于大中专院校、中学教务管理的管理系统。系统涵盖高校和中学教务管理工作所有环节，涉及到基本信息、学生学籍、教学安排(网上选课/课表编排)、考试事务（考务管理、在线考试）、报名管理、证书管理、公寓管理、教学管理（课件管理、作业管理）学生成绩、教学考评、毕业处理（毕业设计、毕业管理）、就业管理与系统管理十三个方面，基于校园网/互联网为学校教学工作提供先进实用的信息化管理手段
						</p>
						<p>
							<a href="product-school.php"><button class="btn btn-primary" type="button">查看详情</button></a>
						</p>
					</div>
				</div>
				<hr>
				<div class="row" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col-md-9" style="padding-left: 40px">
						<p style="font-size: 18px">OA协同办公系统</p>
						<p style="line-height: 26px; color: grey">
							本系统基于微软.NET架构，技术领先，完全模块化设计，扩容性强，公文传阅、收文、发文、工作流管理、文件管理,知识库管理、数据分析、图形化的流程设计，使办公更清晰、文档的在线编辑、印章的使用保密，编辑文档可同时进入留痕工作，可以完全记住编辑时删除的文字，待编辑完成后统一管理。本系统经压力测试，完全支持1000人以上的并发连接。并涵盖强大的语音提示功能。
						</p>
						<p>
							<a href="product-oa.php"><button class="btn btn-warning" type="button">查看详情</button></a>
						</p>
					</div>

					<div class="col-md-3">

						<img src="img/publishing_folder.png" class="img-responsive">

					</div>

				</div>
				<hr>
				<div class="row" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col-md-3" style="padding-left: 30px">

						<img src="img/publishing_search.png" class="img-responsive">

					</div>
					<div class="col-md-9">
						<p style="font-size: 18px">ERP管理系统</p>
						<p style="line-height: 26px; color: grey; padding-right: 30px">
							企业级新产品－家电、印刷、机械五金、等离散形企业ERP管理系统是通过对现有家电、印刷、机械五金、等离散形企业的深入调查研究同时根据现阶段企业的迅速发展和现代化信息管理的需要，结合宇威信息科技的高新技术和多年以来丰富的项目实施和系统开发经验，并且针对目前家电、印刷、机械五金、等离散形市场的具体情况，以最大程度提高企业运作效率、降低经营成本、减少工作量、提供经营决策支持、减少经营风险为目的开发而成的。系统吸取了众多企业科学的运作式和规范的管理理念，摒除许多传统不规范的管理模式。系统切实帮助企业实现科学规范的管理，为企业创造更大的经济效益，全面提升企业的市场竞争实力。
						</p>
						<p>
							<a href="product-erp.php"><button class="btn btn-success" type="button">查看详情</button></a>
						</p>
					</div>
				</div>
				
				
				<hr>
				<div class="row" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col-md-9" style="padding-left: 40px">
						<p style="font-size: 18px">数字化医院系统</p>
						<p style="line-height: 26px; color: grey">
							宇威数字化医院管理系统秉承以病人为中心的设计理念，基于医院信息平台的模型进行设计，系统功能深入覆盖医院主要管理流程和病人在医院就诊的各个重要环节，通过对系统的合理配置，能极大方便病人、改善就医感受，加固医疗过程的安全监控，提升医疗服务质量，节省医疗成本，提高医院整体工作效率。
						</p>
						<p>
							<a href="product-hospital.php"><button class="btn btn-danger" type="button">查看详情</button></a>
						</p>
					</div>

					<div class="col-md-3">

						<img src="img/publishing_stopwatch.png" class="img-responsive">

					</div>

				</div>
			</div>
		</div>

	</div>

	<?php include 'footer.php';?>
</body>