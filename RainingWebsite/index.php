<?php
function getBrowser(){
    $agent=$_SERVER["HTTP_USER_AGENT"];
    if(strpos($agent,'MSIE')!==false ) //ie�ж�
    return "false";
	if(strpos($agent,'rv:11.0')) //ie11�ж�
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
<title>��ҳ | �����Ƽ�</title>
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
					style="top: 100px; text-align: left; font-size: 36px;">�־��ȶ�
					ʡʱ��Ч</div>

				<div class="carousel-caption"
					style="top: 180px !important; text-align: left; font-size: 20px; color: lightgrey">
					���š�רҵ�����¡�ϧʱ��Э��������</div>

				<div class="carousel-caption"
					style="top: 250px !important; text-align: left; font-size: 20px; color: lightgrey">
					<a href="#product-introduction"><button class="btn btn-primary" type="button"
						style="font-size: 18px">���˽����ǵĲ�Ʒ��ʼ</button></a>
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
					���Ǹ�ע��ϵͳ�ȶ��͹���ʵ��</div>
				<div class="carousel-caption"
					style="top: 150px !important; font-size: 20px; color: lightgrey">
					ϵͳ�־����У�����ֵ��������</div>
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
				<h3 class="panel-title">��˾���</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<img src="img/about.jpg" class="img-responsive">
					</div>
					<div class="col-md-6"
						style="line-height: 26px; padding-top: 25px; padding-right: 30px">

						<p>����������Ϣ�Ƽ����޹�˾��һ��רҵ���ۺ����������Ϳ���ϵͳ��Ӧ�̣�����Ϊ�ͻ�����������ṩ��������������Ʒ����ҵ����ҵ������Ϣ����������з�����ҵ�Զ�����ϵͳ���������רҵ����</p>
						<p>��˾��ʼ��������������ӵ��רҵ���з��Ŷӣ������������������������ͻ�������������̤ʵ���ţ������ۣ����𲽷�չ��Ϊ������ģ�ϴ������з�������ǿ����չǱ����졢���רҵ��ˮ׼����������͹�ҵ�Զ�������ϵͳ��˾֮һ��</p>
						<p>��˾�����Ŷ���רҵ�������������ŶӺ͹�ҵ�Զ�������ר�ң����зḻ�ķ��������һ����ͻ����������������,�Լ����๤ҵ����ϵͳ���ɺͿ������飬����ӵ�й��������������滮�����ϵͳ����뼼��ʵ�֡���Ϣϵͳʵʩ����ѵ����ҵ�Զ�������ϵͳ���ɺͿ����Ĵ�רҵ������ͨ�����ж�����ҵʵ�����������ϵͳ����Ա������רҵ֪ʶ��ʵ������ḻ����Ŀʵʩ��Ա��Ϊ�ͻ��ṩ�Ƚ������á�ʵ�õ������Ʒ���ȶ������١����ʵļ���֧�֡�</p>

					</div>
				</div>
			</div>
		</div>


		<div class="panel panel-warning" id="product-introduction">
			<div class="panel-heading">
				<h3 class="panel-title">��Ʒ�Ƽ�</h3>
			</div>
			<div class="panel-body">
				<div class="row" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col-md-3" style="padding-left: 30px">

						<img src="img/publishing_eye.png" class="img-responsive">

					</div>
					<div class="col-md-9">
						<p style="font-size: 18px">�������ϵͳ</p>
						<p style="line-height: 26px; color: grey; padding-right: 30px">
							�����ڴ���רԺУ����ѧ�������Ĺ���ϵͳ��ϵͳ���Ǹ�У����ѧ������������л��ڣ��漰��������Ϣ��ѧ��ѧ������ѧ����(����ѡ��/�α����)���������񣨿���������߿��ԣ�����������֤�������Ԣ������ѧ�����μ�������ҵ����ѧ���ɼ�����ѧ��������ҵ������ҵ��ơ���ҵ��������ҵ������ϵͳ����ʮ�������棬����У԰��/������ΪѧУ��ѧ�����ṩ�Ƚ�ʵ�õ���Ϣ�������ֶ�
						</p>
						<p>
							<a href="product-school.php"><button class="btn btn-primary" type="button">�鿴����</button></a>
						</p>
					</div>
				</div>
				<hr>
				<div class="row" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col-md-9" style="padding-left: 40px">
						<p style="font-size: 18px">OAЭͬ�칫ϵͳ</p>
						<p style="line-height: 26px; color: grey">
							��ϵͳ����΢��.NET�ܹ����������ȣ���ȫģ�黯��ƣ�������ǿ�����Ĵ��ġ����ġ����ġ������������ļ�����,֪ʶ��������ݷ�����ͼ�λ���������ƣ�ʹ�칫���������ĵ������߱༭��ӡ�µ�ʹ�ñ��ܣ��༭�ĵ���ͬʱ�������۹�����������ȫ��ס�༭ʱɾ�������֣����༭��ɺ�ͳһ������ϵͳ��ѹ�����ԣ���ȫ֧��1000�����ϵĲ������ӡ�������ǿ���������ʾ���ܡ�
						</p>
						<p>
							<a href="product-oa.php"><button class="btn btn-warning" type="button">�鿴����</button></a>
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
						<p style="font-size: 18px">ERP����ϵͳ</p>
						<p style="line-height: 26px; color: grey; padding-right: 30px">
							��ҵ���²�Ʒ���ҵ硢ӡˢ����е��𡢵���ɢ����ҵERP����ϵͳ��ͨ�������мҵ硢ӡˢ����е��𡢵���ɢ����ҵ����������о�ͬʱ�����ֽ׶���ҵ��Ѹ�ٷ�չ���ִ�����Ϣ�������Ҫ�����������Ϣ�Ƽ��ĸ��¼����Ͷ��������ḻ����Ŀʵʩ��ϵͳ�������飬�������Ŀǰ�ҵ硢ӡˢ����е��𡢵���ɢ���г��ľ�������������̶������ҵ����Ч�ʡ����;�Ӫ�ɱ������ٹ��������ṩ��Ӫ����֧�֡����پ�Ӫ����ΪĿ�Ŀ������ɵġ�ϵͳ��ȡ���ڶ���ҵ��ѧ������ʽ�͹淶�Ĺ�����������ഫͳ���淶�Ĺ���ģʽ��ϵͳ��ʵ������ҵʵ�ֿ�ѧ�淶�Ĺ���Ϊ��ҵ�������ľ���Ч�棬ȫ��������ҵ���г�����ʵ����
						</p>
						<p>
							<a href="product-erp.php"><button class="btn btn-success" type="button">�鿴����</button></a>
						</p>
					</div>
				</div>
				
				
				<hr>
				<div class="row" style="padding-top: 20px; padding-bottom: 20px">
					<div class="col-md-9" style="padding-left: 40px">
						<p style="font-size: 18px">���ֻ�ҽԺϵͳ</p>
						<p style="line-height: 26px; color: grey">
							�������ֻ�ҽԺ����ϵͳ�����Բ���Ϊ���ĵ�����������ҽԺ��Ϣƽ̨��ģ�ͽ�����ƣ�ϵͳ�������븲��ҽԺ��Ҫ�������̺Ͳ�����ҽԺ����ĸ�����Ҫ���ڣ�ͨ����ϵͳ�ĺ������ã��ܼ��󷽱㲡�ˡ����ƾ�ҽ���ܣ��ӹ�ҽ�ƹ��̵İ�ȫ��أ�����ҽ�Ʒ�����������ʡҽ�Ƴɱ������ҽԺ���幤��Ч�ʡ�
						</p>
						<p>
							<a href="product-hospital.php"><button class="btn btn-danger" type="button">�鿴����</button></a>
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